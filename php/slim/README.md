# PHP Slim Hello World API #

A "Hello World" API example for the
[PHP](http://php.net/)
[Slim](http://www.slimframework.com/)
framework.

## Pre-requisites ##

To run this example you need a base development environment with
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

Use the `serve.sh` script to run the project with PHP's built-in webserver.
In the project directory, run:

	./serve.sh

## Testing ##

The API can be tested with acceptance tests assuming the testing environment
is set up (see the main project /tests/behat directory for details).
In the project directory, run:

	./runtests.sh

