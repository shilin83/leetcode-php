#!/usr/bin/env bash

set -e

composer dump-autoload -o

vendor/bin/pest --coverage --coverage-html coverage

open coverage/index.html
