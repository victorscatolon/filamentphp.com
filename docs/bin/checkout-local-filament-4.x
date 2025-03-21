#!/bin/bash

DOCS_VERSIONS=(
    1.x
    2.x
    3.x
)

for v in "${DOCS_VERSIONS[@]}"; do
    if [ -d "filament/$v" ]; then
        echo "Pulling latest documentation updates for $v..."
        (cd filament/$v && git pull)
    else
        echo "Cloning $v..."
        git clone --single-branch --branch "$v" git@github.com:filamentphp/filament.git "filament/$v"
    fi;
done

ln -sf ../../../filament filament/4.x
