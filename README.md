# StatsdClient

[![Build Status](https://travis-ci.com/wmde/StatsdClient.svg?branch=master)](https://travis-ci.com/wmde/StatsdClient)

Client for etsy/statsd. Adapts into statsd-php-client via well designed interfaces. PHP 5.6+

This library uses [liuggio/statsd-php-client](https://github.com/liuggio/statsd-php-client) for the hard work.
It exposes the functionality via well segregated interfaces, hiding the mess that is `StatsdDataFactoryInterface`.

## Installation

To use the StatsdClient library in your project, simply add a dependency on wmde/statsd-client
to your project's `composer.json` file. Here is a minimal example of a `composer.json`
file that just defines a dependency on StatsdClient 1.x:

```json
{
    "require": {
        "wmde/statsd-client": "~1.0"
    }
}
```

## Development

For development you need to have Docker and Docker-compose installed. Local PHP and Composer are not needed.

    sudo apt-get install docker docker-compose

### Running Composer

To pull in the project dependencies via Composer, run:

    make composer install

You can run other Composer commands via `make run`, but at present this does not support argument flags.
If you need to execute such a command, you can do so in this format:

    docker run --rm --interactive --tty --volume $PWD:/app -w /app\
     --volume ~/.composer:/composer --user $(id -u):$(id -g) composer composer install --no-scripts

Where `composer install --no-scripts` is the command being run.

### Running the CI checks

To run all CI checks, which includes PHPUnit tests, PHPCS style checks and coverage tag validation, run:

    make
    
### Running the tests

To run just the PHPUnit tests run

    make test

To run only a subset of PHPUnit tests or otherwise pass flags to PHPUnit, run

    docker-compose run --rm app ./vendor/bin/phpunit --filter SomeClassNameOrFilter
