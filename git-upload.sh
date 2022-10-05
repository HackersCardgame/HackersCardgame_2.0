#!/bin/bash
#
echo -e "\n\n" && git diff --name-only && echo -e "\n\n" && git add -A && git commit -m "..." && git push
