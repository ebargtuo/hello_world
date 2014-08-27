# Ruby Sinatra Hello World API #

A "Hello World" API example for the
[Ruby](https://www.ruby-lang.org/en/)
[Sinatra](http://www.sinatrarb.com/)
framework.

## Pre-requisites ##

To run this example you need a base development environment with
[Ruby](https://www.ruby-lang.org/en/downloads/),
[RubyGems](https://rubygems.org/pages/download)
and
[Bundler](http://bundler.io/)
installed.

## Installing ##

Use Bundler to install the project dependencies. Assuming it is
availble in the `PATH` with the name `bundle`,
in the project directory, run:

	bundle install --path vendor/bundle
	
## Usage ##

Use the `serve.sh` script to run the project with Ruby's webrick webserver.
In the project directory, run:

	./serve.sh

## Testing ##

The API can be tested with acceptance tests assuming the testing environment
is set up (see the main project /tests/behat directory for details).
In the project directory, run:

	./runtests.sh

