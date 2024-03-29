FROM golang:1.20-buster as builder
WORKDIR /build
COPY report_archiver/ ./
RUN go build -o report-archiver && \
    chmod +x report-archiver

FROM timoreymann/php-app:1.10.4
LABEL org.opencontainers.image.title="docker-matomo"
LABEL org.opencontainers.image.description="Docker image to run matomo, including report archive cron job"
LABEL org.opencontainers.image.ref.name="main"
LABEL org.opencontainers.image.licenses='MIT'
LABEL org.opencontainers.image.vendor="Timo Reymann <mail@timo-reymann.de>"
LABEL org.opencontainers.image.authors="Timo Reymann <mail@timo-reymann.de>"
LABEL org.opencontainers.image.url="https://github.com/timo-reymann/docker-matomo"
LABEL org.opencontainers.image.documentation="https://github.com/timo-reymann/docker-matomo"
LABEL org.opencontainers.image.source="https://github.com/timo-reymann/docker-matomo.git"

USER root

COPY --chown=application:application --from=builder /build/report-archiver /bin/report-archiver

# install lib
# renovate: datasource=github-releases depName=maxmind/libmaxminddb
ARG libmaxminddb_version=1.7.1
RUN curl -Ls https://github.com/maxmind/libmaxminddb/releases/download/${libmaxminddb_version}/libmaxminddb-${libmaxminddb_version}.tar.gz | tar xvz && \
    cd libmaxminddb-${libmaxminddb_version} && \
    ./configure && \
    make && \
    make install &&  \
    ldconfig && \
    cd .. && \
    rm -rf libmaxminddb-${libmaxminddb_version}

# install php extension
# renovate: datasource=github-releases depName=maxmind/MaxMind-DB-Reader-php
ARG maxmind_db_reader_version=1.11.0
RUN git clone --depth=1 --branch=v${maxmind_db_reader_version} https://github.com/maxmind/MaxMind-DB-Reader-php.git extension && \
    cd extension/ext && \
    phpize && \
    ./configure && \
    make && \
    make test && \
    make install && \
    docker-php-ext-enable maxminddb && \
    cd ../.. && \
    rm -rf extension

USER application

COPY nginx_matomo.conf /etc/nginx/conf.d/matomo.conf

ENTRYPOINT ["/bin/multirun", "-v", "nginx", "php-fpm", "report-archiver"]
