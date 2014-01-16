
Eloquent Model Relationship Demo (Laravel 4.1)
==============================================

This Laravel project is meant to illustrate the various Eloquent model relationships available in Laravel 4.1, including;

* One-To-One
* One-To-Many
* Many-To-Many
* Polymorphic Relations
* Has-Many-Through

http://laravel.com/docs/eloquent#relationships

Setup
-----

1. Clone the repo
2. Install Composer packages
4. Create a database
5. Update the DB connection config (i.e. host, database, username, password) in /app/config/database.php
6. Run migrations
7. Run DB seeders

```bash
$ git clone https://github.com/dtrenz/laravel-model-demo && cd laravel-model-demo
$ composer install
$ php artisan migrate
$ php artisan db:seed
```
