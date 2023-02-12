matomo-image
===

Matomo image based on [php-app](https://gitlab.com/timo-reymann/php-app), customized to suit best for matomo, including report archive cron job

## Features

- Running as non-root
- Keep your matomo up to date independently of the image
- Installed maxminddb php extension for geoip functionality

## Set up

- Download matomo from the [official homepage](https://builds.matomo.org/matomo.zip)
- Mount the unzipped contents in `/app` for the image
- Expose port 8080

