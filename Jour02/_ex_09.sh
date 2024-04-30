#!/bin/bash
counter=0
while IFS= read -r line || [[ -n "$line" ]]; do
    ((counter++))
    if ((counter == 1)) || ((counter % 2 != 0)); then
        echo "$line"
    fi
done <"${1:-/dev/stdin}"