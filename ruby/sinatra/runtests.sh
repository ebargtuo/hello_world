#!/bin/sh
PWD=`pwd`
cd ../../tests/behat
BEHAT_TEST_URL=http://127.0.0.1:4567 bin/behat
cd "$PWD"

