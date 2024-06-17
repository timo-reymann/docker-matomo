Matomo Docker Image
===
[![LICENSE](https://img.shields.io/github/license/timo-reymann/docker-matomo)](https://github.com/timo-reymann/docker-matomo/blob/main/LICENSE)
[![GitHub Release](https://img.shields.io/github/v/tag/timo-reymann/docker-matomo.svg?label=version)](https://github.com/timo-reymann/php-app/releases)
[![DockerHub](https://img.shields.io/docker/pulls/timoreymann/matomo)](https://hub.docker.com/r/timoreymann/matomo)
[![Renovate](https://img.shields.io/badge/renovate-enabled-green?logo=data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzNjkgMzY5Ij48Y2lyY2xlIGN4PSIxODkuOSIgY3k9IjE5MC4yIiByPSIxODQuNSIgZmlsbD0iI2ZmZTQyZSIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTUgLTYpIi8+PHBhdGggZmlsbD0iIzhiYjViNSIgZD0iTTI1MSAyNTZsLTM4LTM4YTE3IDE3IDAgMDEwLTI0bDU2LTU2YzItMiAyLTYgMC03bC0yMC0yMWE1IDUgMCAwMC03IDBsLTEzIDEyLTktOCAxMy0xM2ExNyAxNyAwIDAxMjQgMGwyMSAyMWM3IDcgNyAxNyAwIDI0bC01NiA1N2E1IDUgMCAwMDAgN2wzOCAzOHoiLz48cGF0aCBmaWxsPSIjZDk1NjEyIiBkPSJNMzAwIDI4OGwtOCA4Yy00IDQtMTEgNC0xNiAwbC00Ni00NmMtNS01LTUtMTIgMC0xNmw4LThjNC00IDExLTQgMTUgMGw0NyA0N2M0IDQgNCAxMSAwIDE1eiIvPjxwYXRoIGZpbGw9IiMyNGJmYmUiIGQ9Ik04MSAxODVsMTgtMTggMTggMTgtMTggMTh6Ii8+PHBhdGggZmlsbD0iIzI1YzRjMyIgZD0iTTIyMCAxMDBsMjMgMjNjNCA0IDQgMTEgMCAxNkwxNDIgMjQwYy00IDQtMTEgNC0xNSAwbC0yNC0yNGMtNC00LTQtMTEgMC0xNWwxMDEtMTAxYzUtNSAxMi01IDE2IDB6Ii8+PHBhdGggZmlsbD0iIzFkZGVkZCIgZD0iTTk5IDE2N2wxOC0xOCAxOCAxOC0xOCAxOHoiLz48cGF0aCBmaWxsPSIjMDBhZmIzIiBkPSJNMjMwIDExMGwxMyAxM2M0IDQgNCAxMSAwIDE2TDE0MiAyNDBjLTQgNC0xMSA0LTE1IDBsLTEzLTEzYzQgNCAxMSA0IDE1IDBsMTAxLTEwMWM1LTUgNS0xMSAwLTE2eiIvPjxwYXRoIGZpbGw9IiMyNGJmYmUiIGQ9Ik0xMTYgMTQ5bDE4LTE4IDE4IDE4LTE4IDE4eiIvPjxwYXRoIGZpbGw9IiMxZGRlZGQiIGQ9Ik0xMzQgMTMxbDE4LTE4IDE4IDE4LTE4IDE4eiIvPjxwYXRoIGZpbGw9IiMxYmNmY2UiIGQ9Ik0xNTIgMTEzbDE4LTE4IDE4IDE4LTE4IDE4eiIvPjxwYXRoIGZpbGw9IiMyNGJmYmUiIGQ9Ik0xNzAgOTVsMTgtMTggMTggMTgtMTggMTh6Ii8+PHBhdGggZmlsbD0iIzFiY2ZjZSIgZD0iTTYzIDE2N2wxOC0xOCAxOCAxOC0xOCAxOHpNOTggMTMxbDE4LTE4IDE4IDE4LTE4IDE4eiIvPjxwYXRoIGZpbGw9IiMzNGVkZWIiIGQ9Ik0xMzQgOTVsMTgtMTggMTggMTgtMTggMTh6Ii8+PHBhdGggZmlsbD0iIzFiY2ZjZSIgZD0iTTE1MyA3OGwxOC0xOCAxOCAxOC0xOCAxOHoiLz48cGF0aCBmaWxsPSIjMzRlZGViIiBkPSJNODAgMTEzbDE4LTE3IDE4IDE3LTE4IDE4ek0xMzUgNjBsMTgtMTggMTggMTgtMTggMTh6Ii8+PHBhdGggZmlsbD0iIzk4ZWRlYiIgZD0iTTI3IDEzMWwxOC0xOCAxOCAxOC0xOCAxOHoiLz48cGF0aCBmaWxsPSIjYjUzZTAyIiBkPSJNMjg1IDI1OGw3IDdjNCA0IDQgMTEgMCAxNWwtOCA4Yy00IDQtMTEgNC0xNiAwbC02LTdjNCA1IDExIDUgMTUgMGw4LTdjNC01IDQtMTIgMC0xNnoiLz48cGF0aCBmaWxsPSIjOThlZGViIiBkPSJNODEgNzhsMTgtMTggMTggMTgtMTggMTh6Ii8+PHBhdGggZmlsbD0iIzAwYTNhMiIgZD0iTTIzNSAxMTVsOCA4YzQgNCA0IDExIDAgMTZMMTQyIDI0MGMtNCA0LTExIDQtMTUgMGwtOS05YzUgNSAxMiA1IDE2IDBsMTAxLTEwMWM0LTQgNC0xMSAwLTE1eiIvPjxwYXRoIGZpbGw9IiMzOWQ5ZDgiIGQ9Ik0yMjggMTA4bC04LThjLTQtNS0xMS01LTE2IDBMMTAzIDIwMWMtNCA0LTQgMTEgMCAxNWw4IDhjLTQtNC00LTExIDAtMTVsMTAxLTEwMWM1LTQgMTItNCAxNiAweiIvPjxwYXRoIGZpbGw9IiNhMzM5MDQiIGQ9Ik0yOTEgMjY0bDggOGM0IDQgNCAxMSAwIDE2bC04IDdjLTQgNS0xMSA1LTE1IDBsLTktOGM1IDUgMTIgNSAxNiAwbDgtOGM0LTQgNC0xMSAwLTE1eiIvPjxwYXRoIGZpbGw9IiNlYjZlMmQiIGQ9Ik0yNjAgMjMzbC00LTRjLTYtNi0xNy02LTIzIDAtNyA3LTcgMTcgMCAyNGw0IDRjLTQtNS00LTExIDAtMTZsOC04YzQtNCAxMS00IDE1IDB6Ii8+PHBhdGggZmlsbD0iIzEzYWNiZCIgZD0iTTEzNCAyNDhjLTQgMC04LTItMTEtNWwtMjMtMjNhMTYgMTYgMCAwMTAtMjNMMjAxIDk2YTE2IDE2IDAgMDEyMiAwbDI0IDI0YzYgNiA2IDE2IDAgMjJMMTQ2IDI0M2MtMyAzLTcgNS0xMiA1em03OC0xNDdsLTQgMi0xMDEgMTAxYTYgNiAwIDAwMCA5bDIzIDIzYTYgNiAwIDAwOSAwbDEwMS0xMDFhNiA2IDAgMDAwLTlsLTI0LTIzLTQtMnoiLz48cGF0aCBmaWxsPSIjYmY0NDA0IiBkPSJNMjg0IDMwNGMtNCAwLTgtMS0xMS00bC00Ny00N2MtNi02LTYtMTYgMC0yMmw4LThjNi02IDE2LTYgMjIgMGw0NyA0NmM2IDcgNiAxNyAwIDIzbC04IDhjLTMgMy03IDQtMTEgNHptLTM5LTc2Yy0xIDAtMyAwLTQgMmwtOCA3Yy0yIDMtMiA3IDAgOWw0NyA0N2E2IDYgMCAwMDkgMGw3LThjMy0yIDMtNiAwLTlsLTQ2LTQ2Yy0yLTItMy0yLTUtMnoiLz48L3N2Zz4=)](https://renovatebot.com)
[![Pipeline status](https://github.com/timo-reymann/docker-matomo/actions/workflows/main.yml/badge.svg)](https://github.com/timo-reymann/docker-matomo/actions/workflows/main.yml)

<p align="center">
	<img width="300" src="https://github.com/timo-reymann/docker-matomo/raw/main/.github/images/logo.png">
    <br />
    Matomo image based on <a href="https://github.com/timo-reymann/php-app">php-app</a>, 
    customized to suit best for matomo, including report archive cron job
</p>

## Features

- Running as non-root
- Includes matomo installation
- Easy installation of plugins on startup or in build process
- Installed maxminddb php extension for geoip functionality
- Run report archive every hour in dedicated crons

## Requirements

- [Docker](https://docs.docker.com/get-docker/)

## Configuration

Configuration is done via environment variables:

| Environment Variable                  | Description                                                                                                                       | Default | Possible values                                               |
|:--------------------------------------|:----------------------------------------------------------------------------------------------------------------------------------|:--------|:--------------------------------------------------------------|
| MATOMO_PLUGINS_TO_DEACTIVATE          | List of plugins to deactivate on startup                                                                                          | None    | plugin names seperated by comma                               |
| MATOMO_PLUGINS_TO_INSTALL             | List of plugins to install, this either means activating an already installed plugin or downloading it from Marketplace           | None    | plugin names seperated by comma                               |
| MATOMO_DATABASE_HOST                  | Host of the MySQL server                                                                                                          | None    | MySQL database server host                                    |
| MATOMO_DATABASE_USERNAME              | Username to authenticate to MySQL server with                                                                                     | None    | MySQL database user username                                  |
| MATOMO_DATABASE_PASSWORD              | Password to authenticate to MySQL server with                                                                                     | None    | MySQL database user password                                  |
| MATOMO_DATABASE_DBNAME                | Name of the database on the MySQL server to use                                                                                   | None    | MySQL database name                                           |
| MATOMO_DATABASE_TABLES_PREFIX         | Table prefix to prepend to MySQL database tables                                                                                  | matomo_ | any string or leave empty to omit                             |
| MATOMO_DATABASE_CHARSET               | Charset to use for MySQL database tables                                                                                          | utf8mb4 | any valid charset supported by your MySQL server              |
| MATOMO_GENERAL_SALT                   | Salt to add to hashed values (this should never be changed once it is used, as it will render data unusable                       | None    | Salt to use for hashing                                       |
| MATOMO_GENERAL_ASSUME_SECURE_PROTOCOL | Assume all requests have been sent over HTTPs and suppress warnings about http urls (set this if your proxy terminates the SSL)   | false   | false, true, 0, 1                                             |                                                  |
| MATOMO_GENERAL_FORCE_SSL              | Enforce https for all generated clients (set this if your proxy terminates the SSL)                                               | false   | false, true, 0, 1                                             |
| MATOMO_GENERAL_PROXY_CLIENT_HEADERS   | Proxy client headers to acknowledge                                                                                               | None    | header names seperated by comma                               |
| MATOMO_GENERAL_PROXY_HOST_HEADERS     | Proxy host headers to acknowledge                                                                                                 | None    | header names seperated by comma                               |
| MATOMO_GENERAL_TRUSTED_HOSTS          | Trusted hosts for matomo user interface and API                                                                                   | None    | host names seperated by comma                                 |
| MATOMO_MAIL_ENABLED                   | Enable mail sending using matomo                                                                                                  | false   | false, true, 0, 1                                             |
| MATOMO_MAIL_HOST                      | Hostname to use for sending mails                                                                                                 | None    | Hostname or IP address                                        |
| MATOMO_MAIL_PORT                      | Port to use for sending mails                                                                                                     | 587     | any valid port number                                         |
| MATOMO_MAIL_ENCRYPTION                | Encryption to use for sending mails                                                                                               | ssl     | auto, ssl, TLS, none                                          |
| MATOMO_MAIL_USERNAME                  | Username to authenticate against mail server                                                                                      | None    | Valid email or username                                       |
| MATOMO_MAIL_PASSWORD                  | Password to authenticate against mail server                                                                                      | None    | password or empty string in case the user has no password set |
| MATOMO_MAIL_TRANSPORT                 | Transport to use for sending mails                                                                                                | smtp    | Any supported transport by matomo                             |
| MATOMO_AUTO_UPDATE_SCHEMA             | Try to upgrade schema on start up                                                                                                 | false   | false, true, 0, 1                                             |
| MATOMO_SETUP_COMPLETE                 | Set this to a truthy value to generate configuration file and skip setup assistant                                                | false   | false, true, 0, 1                                             |
| MATOMO_MARKETPLACE_TOKEN              | (Optional) Token to authenticate plugin install requests with when loading from Marketplace (required for private & paid plugins) | None    | any valid token for the matomo marketplace                    |

## Install plugins

### On start up

If you want to install plugins on startup you can simply set the `MATOMO_PLUGINS_TO_INSTALL` env variable.

The plugins will be activated or if not installed already installed first from Marketplace.

### In docker build

Use this docker image as a base and pre-install plugins, e.g:

```dockerfile
FROM timoreymann/matomo
RUN matomo-download-pugin Swagger \
    && matomo-download-plugin BotTracker
```

When you run your image set `MATOMO_PLUGINS_TO_INSTALL=Swagger,BotTracker`.

This will only activate the plugins but not have to download them first.

## Installation

- Expose port `8080`
- Set environment variables [as documented in Configuration](#configuration)
- Run once with `MATOMO_MATOMO_SETUP_COMPLETE=0`
- Complete the installer
- Set `MATOMO_SETUP_COMPLETE=1` and start up the container again
- Enjoy!

### Example docker run command

```sh
docker run --name matomo -p 8080:8080 -v ${PWD}:/app timoreymann/matomo
```

## Usage

### Web UI

- Open your browser on the exposed port e.g. localhost:8080

### Updating

- The image is updated in case of any upstream changes to the php image
  or maxminddb extension, which results in new image on docker hub
  available for you
- For matomo updates you can rely on the regular update procedure, also automated using renovate with a manual approval
  and review on every update

## Motivation

Why not just using one of the official images?

- first of all they run as root, which i don't like
- on the other hand I would like to use nginx over apache, for
  performance, security reasons and personal preference
- includes no cron for archiving, which dramatically speeds up the web
  ui
- mutable matomo installation, i would like to not mount any files

## Documentation

### Components

- nginx
- php-fpm
- go binary for archiving reports every hour
- shell script for generating php config and 

## Contributing

I love your input! I want to make contributing to this project as easy and transparent as possible, whether it's:

- Reporting a bug
- Discussing the current state of the configuration
- Submitting a fix
- Proposing new features
- Becoming a maintainer

To get started please read the [Contribution Guidelines](./CONTRIBUTING.md).

## Development

### Requirements

- [Docker](https://docs.docker.com/get-docker/)

### Alternatives

- [Official Matomo Images](https://hub.docker.com/_/matomo)

