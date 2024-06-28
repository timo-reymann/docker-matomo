check-changed-files
===

This a set of helper script to allow checking if the matomo upgrade changed something to files I patch on top to avoid
broken updates.

> These scripts might be useful for other things so feel free to use them for your own purposes.

## Scripts included

### `get-matomo-version.py`

Fetch the Dockerfile for the given ref, and extract the matomo version arg.

```sh
./get-matomo-version.py --ref main
```

### `get-changed-files-diff.py`

Clones a given repository in a temporary folder and checks the diff between two tags for changes in given files

```sh
./get-changed-files-diff.py \
    --repository-git-url https://github.com/matomo-org/matomo.git \
    --tag-a 1.0.0 \
    --tag-b 2.0.0 \
    core/Config.php
```
