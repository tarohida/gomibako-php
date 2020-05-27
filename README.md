# testcace_practice

## enviroment
```
$ cat /etc/os-release 
NAME="Ubuntu"
VERSION="18.04.4 LTS (Bionic Beaver)"

$ docker --version
Docker version 19.03.9, build 9d988398e7

$ php --version
PHP 7.4.0 (cli) (built: May 27 2020 22:16:49) ( NTS )

$ docker run --rm --interactive --tty --volume $PWD:/app composer --version
Composer version 1.10.6 2020-05-06 10:28:10

$ vendor/bin/phpunit --version
PHPUnit 9.1.5 by Sebastian Bergmann and contributors.
```

## Requirement
- composer
  - I use [composer docker image](https://hub.docker.com/_/composer)
- phpunit
  - I install by composer docker image

```
docker run --rm --interactive --tty --volume $PWD:/app composer require phpunit/phpunit
```

- php-7.4.0
  - I use [phpbrew](https://github.com/phpbrew/phpbrew)

```
phpbrew switch php-7.4.0
```

## create enviroment

```
git clone <this repository>
docker run --rm --interactive --tty --volume $PWD:/app composer install
```

## run test
```
vendor/bin/phpunit ./tests/
```