# Stateless Menu

A simple project using slim framework to emulate a menu. (Api based)
 

## Setup

```shell
#install dependencies
composer install

#Create tables
php bin/doctrine orm:schema-tool:create

#Update entities
php bin/doctrine orm:schema-tool:update --force

#Start web server
php -S localhost:8080
```

# Interesting links
- https://www.doctrine-project.org/projects/doctrine-orm/en/3.0/reference/tools.html
- https://www.doctrine-project.org/projects/doctrine-orm/en/3.0/tutorials/getting-started.html
- https://www.doctrine-project.org/projects/doctrine-orm/en/3.0/reference/configuration.html#class-loading
