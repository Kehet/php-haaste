#!/usr/bin/env bash

git add .
git ci

counter=1

while true; do
  if [ ! -f "src/task${counter}.php" ]; then
    cp stubs/task.php "src/task${counter}.php"
    sed "s/XXXXX/${counter}/g" < stubs/test.php > "tests/Task${counter}Test.php"
    git add "src/task${counter}.php"
    git add "tests/Task${counter}Test.php"
    break
  fi

  counter=$((counter + 1))
done
