#!/bin/sh
PWD=`pwd`
cd ../../tests/behat
BEHAT_TEST_URL=http://127.0.0.1:8000 bin/behat
cd "$PWD"

