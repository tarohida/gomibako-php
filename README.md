# docker-php74-nginx-postgres-composer

Docker Compose configuration to run PHP 7.4 with Nginx, PHP-FPM, PostgreSQL 10.1 and Composer.

*I update PHP version and fix some error at [ineat/docker-php-nginx-postgres-composer](https://github.com/ineat/docker-php-nginx-postgres-composer)  
I remove some php-extensions (gd, mcrypt, etc...), because I don't need it.*

## How to use it

### Starting Docker Compose

```
docker-compose up -d
```

### Using Composer

`docker-compose run composer <cmd>`

Where `cmd` is any of the available composer command.

### Using PostgreSQL

Default connection:

`docker-compose exec db psql -U postgres`

Using .env file default parameters:

`docker-compose exec db psql -U dbuser dbname`

### Using PHP

You can execute any command on the `php` container as you would do on any docker-compose container:

`docker-compose exec php php -v`

for example, when you run test,

`docker-compose exec php php vendor/bin/phpunit`

## Change configuration

### Configuring PHP

To change PHP's configuration edit `.docker/conf/php/php.ini`.

You can add any .ini file in this directory, don't forget to map them by adding a new line in the php's `volume` section of the `docker-compose.yml` file.

### Configuring PostgreSQL

Any .sh or .sql file you add in `./.docker/conf/postgres` will be automatically loaded at boot time.

If you want to change the db name, db user and db password simply edit the `.env` file at the project's root.

If you connect to PostgreSQL from localhost a password is not required however from another container you will have to supply it.

## Adding aliases

To avoid typing over and over again the same commands you can add two useful aliases in your shell's configuration (`.bashrc` or `.zshrc` for instance):

```
alias dcu="docker-compose up"
alias dcr="docker-compose run"
alias dce="docker-compose exec"
```

It then becomes way faster to execute a composer command for instance:

`dcr composer require --dev phpunit/phpunit`
