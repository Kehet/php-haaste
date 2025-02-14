#!/usr/bin/env bash

git add .
git ci

counter=1

while true; do
  file="src/task${counter}.php"

  if [ ! -f "$file" ]; then
    echo "<?php" > "$file"
    git add $file
    break
  fi

  counter=$((counter + 1))
done
