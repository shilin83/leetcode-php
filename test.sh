#!/bin/bash

set -e

vendor/bin/pest --coverage --coverage-html coverage

if [ -d coverage ]; then
    open coverage/index.html
fi
