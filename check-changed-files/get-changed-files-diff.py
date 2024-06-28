#!/usr/bin/env python3
import contextlib
import subprocess
import sys
import tempfile
from argparse import ArgumentParser

from git import Repo
from semver import Version


@contextlib.contextmanager
def _repository(remote: str):
    with tempfile.TemporaryDirectory() as tmp_dir:
        exit_code = subprocess.call(["git", "clone", remote, tmp_dir], stderr=subprocess.PIPE)
        if exit_code != 0:
            raise Exception()
        repo = Repo(tmp_dir)
        yield repo


def _resolve_version_tags(repo, version_a, version_b):
    tag_a = None
    tag_b = None
    for tag in repo.tags:
        try:
            parsed_version = Version.parse(tag.name)
        except ValueError:
            continue

        if version_a.compare(parsed_version) == 0:
            tag_a = tag
        elif version_b.compare(parsed_version) == 0:
            tag_b = tag

        if tag_a is not None and tag_b is not None:
            break

    if tag_a is None:
        raise ValueError(f"tag_a=={version_a} could not be resolved")

    if tag_b is None:
        raise ValueError(f"tag_b=={version_a} could not be resolved")

    return tag_a, tag_b


def main():
    parser = ArgumentParser()
    parser.add_argument("--repository-git-url", help="Remote URL to clone", required=True)
    parser.add_argument("--version-a", help="Version to use as starting point", required=True)
    parser.add_argument("--version-b", help="Version to use as finish point", required=True)
    parser.add_argument("files", help="Files to check for changes", nargs='+')
    args = parser.parse_args()

    repository_clone_url = args.repository_git_url
    version_a = Version.parse(args.version_a)
    version_b = Version.parse(args.version_b)
    paths_to_check = list(args.files)

    has_changes = False

    with _repository(repository_clone_url) as repo:
        tag_a, tag_b = _resolve_version_tags(repo, version_a, version_b)

        diffs = tag_b.commit.diff(tag_a.commit, create_patch=True)
        for diff in diffs:
            if diff.a_path not in paths_to_check and diff.b_path not in paths_to_check:
                continue

            has_changes = True
            print(f"diff {diff.a_path} {diff.b_path}")
            print(f"index {tag_a.commit.hexsha}..{tag_b.commit.hexsha}")
            print(diff.diff.decode("utf-8"))

    sys.exit(3 if has_changes else 0)


if __name__ == "__main__":
    main()
