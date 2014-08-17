# Behat Acceptance Tests #

Acceptance tests for the "Hello World" example project using the
[PHP](http://php.net/)
[Behat](http://behat.org/)
BDD testing framework.

## Description ##

These tests can be run against "Hello World" API examples. The tests expect
URL endpoints to exist (`200` status code) with the following behaviour:

* `/hello` - to give a JSON response with the message parameter "Hello"
* `/hello/[name]` - to give a JSON response with the message parameter "Hello [Name]"

The following endpoint is tested to ensure it does not exist (`404` status code):

* `/hellow/[name]`

## Pre-requisites ##

To run these tests you need a base development environment with
[PHP](http://php.net/manual/en/install.php)
and
[Composer](https://getcomposer.org/download/)
installed.

## Installing ##

Use `composer` to install the project dependencies. Assuming `composer` is
availble in the `PATH` with the name `composer`,
in the project directory, run:

	composer install
	
## Usage ##

Use the `behat` CLI tool to run the project. The tests expect the environment
variable `BEHAT_TEST_URL` to be defined with the URL of the project to test.
Change `http://127.0.0.1:8000` to the required project host URL and in the
project directory, run:

	BEHAT_TEST_URL=http://127.0.0.1:8000 bin/behat

