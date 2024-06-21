## [2.2.0](https://github.com/timo-reymann/docker-matomo/compare/2.1.0...2.2.0) (2024-06-21)


### Features

* Update maxminddb ([#19](https://github.com/timo-reymann/docker-matomo/issues/19)) ([c8d5f57](https://github.com/timo-reymann/docker-matomo/commit/c8d5f57d1f8949f7628b98b8ff3aa7419d78077e))

## [2.1.0](https://github.com/timo-reymann/docker-matomo/compare/2.0.3...2.1.0) (2024-06-21)


### Features

* Disable browser archiving via config by default ([af11a2b](https://github.com/timo-reymann/docker-matomo/commit/af11a2b9b0ecb99a44b19c35eff0eb8670b891a8))

## [2.0.3](https://github.com/timo-reymann/docker-matomo/compare/2.0.2...2.0.3) (2024-06-21)


### Bug Fixes

* Drop log prefix in favor of memory usage ([a8bc2c6](https://github.com/timo-reymann/docker-matomo/commit/a8bc2c681dae508d6aedcbaf7588427f38f8a1ce))

## [2.0.2](https://github.com/timo-reymann/docker-matomo/compare/2.0.1...2.0.2) (2024-06-21)


### Bug Fixes

* use awk instead of sed for log prefix ([79f1a00](https://github.com/timo-reymann/docker-matomo/commit/79f1a003127cb837e39aca7377c0dd92902eb867))

## [2.0.1](https://github.com/timo-reymann/docker-matomo/compare/2.0.0...2.0.1) (2024-06-21)


### Bug Fixes

* Allow empty table prefix ([2324388](https://github.com/timo-reymann/docker-matomo/commit/23243889761a528ab779fb6813680249ab1091a7))

## [2.0.0](https://github.com/timo-reymann/docker-matomo/compare/1.4.4...2.0.0) (2024-06-21)


### ⚠ BREAKING CHANGES

* This release bundles matomo inside the docker image, making the volume of code unnecessary and unsupported.

### Features

* Bundle matomo into docker image ([4eb0eed](https://github.com/timo-reymann/docker-matomo/commit/4eb0eedd4f46df977dbcfb5ed9bfc292fed4d1c1))

## [1.4.4](https://github.com/timo-reymann/docker-matomo/compare/1.4.3...1.4.4) (2024-06-09)


### Bug Fixes

* **deps:** update timoreymann/php-app docker tag to v1.10.6 ([#15](https://github.com/timo-reymann/docker-matomo/issues/15)) ([7006b9f](https://github.com/timo-reymann/docker-matomo/commit/7006b9f053c338d9c87a2e71aec6063d5f79de54))

## [1.4.3](https://github.com/timo-reymann/docker-matomo/compare/1.4.2...1.4.3) (2024-03-22)


### Bug Fixes

* **deps:** update timoreymann/php-app docker tag to v1.10.4 ([#14](https://github.com/timo-reymann/docker-matomo/issues/14)) ([3eb5ebb](https://github.com/timo-reymann/docker-matomo/commit/3eb5ebbe390367d821a4f1518d252e3274b96d4f))

## [1.4.2](https://github.com/timo-reymann/docker-matomo/compare/1.4.1...1.4.2) (2024-01-23)


### Bug Fixes

* **deps:** update timoreymann/php-app docker tag to v1.10.2 ([#13](https://github.com/timo-reymann/docker-matomo/issues/13)) ([130c618](https://github.com/timo-reymann/docker-matomo/commit/130c618481b6c258ade4baa2e9d2995dd4d27a43))

## [1.4.1](https://github.com/timo-reymann/docker-matomo/compare/1.4.0...1.4.1) (2023-12-28)


### Bug Fixes

* **deps:** update timoreymann/php-app docker tag to v1.10.1 ([#12](https://github.com/timo-reymann/docker-matomo/issues/12)) ([fb004e6](https://github.com/timo-reymann/docker-matomo/commit/fb004e6ab542a96cfabb08b59db88b6759e9812a))

## [1.4.0](https://github.com/timo-reymann/docker-matomo/compare/1.3.0...1.4.0) (2023-11-28)


### Features

* **deps:** update timoreymann/php-app docker tag to v1.10.0 ([#11](https://github.com/timo-reymann/docker-matomo/issues/11)) ([7ffaa4d](https://github.com/timo-reymann/docker-matomo/commit/7ffaa4d68cb0aae62023dcb1840a7c91414b89e4))

## [1.3.0](https://github.com/timo-reymann/docker-matomo/compare/1.2.1...1.3.0) (2023-10-20)


### Features

* Add oci labels ([b977b2f](https://github.com/timo-reymann/docker-matomo/commit/b977b2f3d4fac31f46ba6f29417ef076de0fcfdd))

## [1.2.1](https://github.com/timo-reymann/docker-matomo/compare/1.2.0...1.2.1) (2023-06-16)


### Bug Fixes

* **deps:** update timoreymann/php-app docker tag to v1.8.1 ([#7](https://github.com/timo-reymann/docker-matomo/issues/7)) ([fe541a2](https://github.com/timo-reymann/docker-matomo/commit/fe541a2fedc971eeeea5626a6ca9f3c02ffedbc9))

## [1.2.0](https://github.com/timo-reymann/docker-matomo/compare/1.1.1...1.2.0) (2023-05-28)


### Features

* **deps:** update timoreymann/php-app docker tag to v1.8.0 ([#6](https://github.com/timo-reymann/docker-matomo/issues/6)) ([e6637e9](https://github.com/timo-reymann/docker-matomo/commit/e6637e9e31667bb4da08462f3208d8a8538ffb82))

## [1.1.1](https://github.com/timo-reymann/docker-matomo/compare/1.1.0...1.1.1) (2023-02-15)


### Bug Fixes

* **deps:** update timoreymann/php-app docker tag to v1.7.1 ([#5](https://github.com/timo-reymann/docker-matomo/issues/5)) ([8d7ad60](https://github.com/timo-reymann/docker-matomo/commit/8d7ad603d736de2afb2294c976e4950d41e2b784))

## [1.1.0](https://github.com/timo-reymann/docker-matomo/compare/1.0.0...1.1.0) (2023-02-12)


### Features

* **deps:** Pin base image ([320e0d4](https://github.com/timo-reymann/docker-matomo/commit/320e0d4d52c646e0dd72b1c23f07ec6747721240))

## 1.0.0 (2023-02-12)


### Features

* Migrate to GitHub ([d4931d7](https://github.com/timo-reymann/docker-matomo/commit/d4931d7c0d70ff15401a7b9da1b25f575562890b))
