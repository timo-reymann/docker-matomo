#!/usr/bin/env python3
import base64
import re
from argparse import ArgumentParser

import requests


def _get_dockerfile(ref: str):
    response = requests.get(f"https://api.github.com/repos/timo-reymann/docker-matomo/contents/Dockerfile?ref={ref}")
    response.raise_for_status()
    json = response.json()
    content = base64.b64decode(json['content'])
    return content.decode("utf-8")


def main():
    parser = ArgumentParser()
    parser.add_argument("--ref", help="Ref to check contents for",required=True)
    args = parser.parse_args()
    main_dockerfile = _get_dockerfile(args.ref)
    version_match = re.search("ARG matomo_version=(.*)", main_dockerfile)
    if not version_match:
        raise LookupError("Could not find version")
    version = version_match.group(1)
    print(version)


if __name__ == "__main__":
    main()
