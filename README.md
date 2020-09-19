# WishList

## Requirements ##

php 7.1 or more
composer
a text-file editor

## Configuration ##

Create file ```env.local.sh``` for initiate your database (see exemple on ```env.sh```)
Create file ```db.conf.php``` to connect your application at your database (see exemple on ```db.conf.example.php```)

## Initialization ##

install slim/eloquent with ```composer install```

## Development ##

To development, use ```docker-compose.debug.yml``` file, it got database-managment

## Production ##

to put it on production, use  ```docker-compose.debug.yml``` file. But care at Oracle Licence :) (i will put mariadb later)