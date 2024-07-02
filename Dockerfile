# renovate: datasource=github-tags depName=matomo-org/matomo
ARG matomo_version=5.1.0

FROM golang:1.20-buster as builder
WORKDIR /build
COPY report_archiver/ ./
RUN go build -o report-archiver \
    && chmod +x report-archiver

FROM busybox:latest as matomo_archive
ARG matomo_version
WORKDIR /patches

ADD https://github.com/matomo-org/matomo/releases/download/${matomo_version}/matomo-${matomo_version}.zip /raw/matomo.zip
WORKDIR /src
RUN unzip /raw/matomo.zip
COPY config/config.ini.php matomo/config/config.ini.template.php
COPY patches/core_config.patch matomo/patches/core_config.patch
COPY patches/core_updatecheck.patch matomo/patches/core_updatecheck.patch

FROM scratch as bins
COPY --from=builder /build/report-archiver /bin/matomo-report-archiver
COPY bin/* /bin/

FROM timoreymann/php-app:2.0.1
LABEL org.opencontainers.image.title="docker-matomo"
LABEL org.opencontainers.image.description="Docker image to run matomo, including report archive cron job and pre-bundled matomo"
LABEL org.opencontainers.image.ref.name="main"
LABEL org.opencontainers.image.licenses='MIT'
LABEL org.opencontainers.image.vendor="Timo Reymann <mail@timo-reymann.de>"
LABEL org.opencontainers.image.authors="Timo Reymann <mail@timo-reymann.de>"
LABEL org.opencontainers.image.url="https://github.com/timo-reymann/docker-matomo"
LABEL org.opencontainers.image.documentation="https://github.com/timo-reymann/docker-matomo"
LABEL org.opencontainers.image.source="https://github.com/timo-reymann/docker-matomo.git"

USER root

RUN apt-get update -y \
    && apt-get upgrade -y \
    && apt-get install --no-install-recommends -y procps \
    && rm -rf /var/lib/apt/lists/*

# install lib
# renovate: datasource=github-releases depName=maxmind/libmaxminddb
ARG libmaxminddb_version=1.10.0
RUN curl -Ls https://github.com/maxmind/libmaxminddb/releases/download/${libmaxminddb_version}/libmaxminddb-${libmaxminddb_version}.tar.gz | tar xvz \
    && cd libmaxminddb-${libmaxminddb_version} \
    && ./configure \
    && make \
    && make install \
    && ldconfig \
    && cd .. \
    && rm -rf libmaxminddb-${libmaxminddb_version}

# install php extension
# renovate: datasource=github-releases depName=maxmind/MaxMind-DB-Reader-php
ARG maxmind_db_reader_version=1.11.1
RUN git clone --depth=1 --branch=v${maxmind_db_reader_version} https://github.com/maxmind/MaxMind-DB-Reader-php.git extension \
    && cd extension/ext \
    && phpize \
    && ./configure \
    && make \
    && make test \
    && make install \
    && docker-php-ext-enable maxminddb \
    && cd ../.. \
    && rm -rf extension \
    && rm /app/.keep

USER application

ARG matomo_version
ENV MATOMO_VERSION=${matomo_version}

COPY --from=builder /build/report-archiver /bin/matomo-report-archiver
COPY --chown=application:application --from=matomo_archive /src/matomo /app
COPY --chown=application:application --from=bins /bin /bin
COPY  nginx_matomo.conf /etc/nginx/conf.d/

ENTRYPOINT ["/bin/entrypoint"]
