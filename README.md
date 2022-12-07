# Project Title

Shoes Shop (Simple Mode)

## Description

E-Commerce website that sell shoes for buyer with simple style code

## Getting Started

### Dependencies

* Composer
* Php >= 8
* Mysql
* Internet

### Installing
Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/master/installation)

Alternative installation is possible without local dependencies relying on [Docker](https://www.docker.com/products/docker-desktop/). 

Clone the repository

    git clone https://github.com/Sleepy4k/laravel-shoes-shop-simple.git

Switch to the repo folder

    cd laravel-shoes-shop-simple

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate:fresh --seed

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**TL;DR command list**

    git clone https://github.com/Sleepy4k/laravel-shoes-shop-simple.git
    cd laravel-shoes-shop-simple
    composer install
    cp .env.example .env
    php artisan key:generate
    
**Make sure you set the correct database connection information before running the migrations**

    php artisan migrate:fresh --seed
    php artisan serve

## Help

Any advise for common problems or issues.
```
Please create issue for detail information
```

## Authors

Contributors names and contact info

[@benjamin4kk](https://github.com/Sleepy4k)

## Version History

* 1.1.13-alpha
    * hot fix shoe crud
    * fix transaction crud
    * change postman
* 1.0.11-alpha
    * add route for admin
    * add route for user
    * change postman
    * change project documentation
* 1.0.7-alpha
    * fix some mode
    * fix some controller
    * change project documentation
* 1.0.0-alpha
    * initial release
    * add main feature
