## GraphQL demo

A simple sample project to illustrate how you can use https://github.com/Youshido/GraphQLBundle to organize your backend implementation of Graphql

### Install

```
composer install
# change your settings for database

bin/console doctrine:database:create
bin/console doctrine:schema:update --force
bin/console server:run
```
