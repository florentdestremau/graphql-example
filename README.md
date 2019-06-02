## GraphQL demo

A simple sample project to illustrate how you can use https://github.com/Youshido/GraphQLBundle to organize your backend implementation of Graphql

Project Installation
===================

Build containers
----------------
docker-compose up -d --build

Composer install
--------------------
docker exec -itu www-data:www-data graphql-example_php_1 composer install

Update schema
-------------
docker exec -itu www-data:www-data graphql-example_php_1 bin/console doctrine:schema:update --force

Other
=====

PHP bash
--------
docker exec -itu www-data:www-data graphql-example_php_1 /bin/bash

Purge docker containers
-----------------------
docker-compose down