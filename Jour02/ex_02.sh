#!/bin/bash
[ "$#" -eq 0 ] && wc -l || grep -c -i -w "$@"