Eloquent Model Relationship Demo
==============================================

This project is a companion to this article: http://codeplanet.io/laravel-model-relationships-pt-1/

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
2. Install Composer packages (`composer install`)
3. Create a database
4. Update the DB connection config (i.e. host, database, username, password) in /app/config/database.php
5. Run migrations (`php artisan migrate`)
6. Run DB seeders (`php artisan db:seed`)


### Schema
```
users
  - id
  - name
  
posts
  - id
  - title
  - author_id (aliased user.id)
  
tags
  - id
  - name
  
post_tag (pivot table)
  - post_id
  - tag_id
  
texts
  - id
  - post_id
  - text
  
images
  - id
  - url
  - imageable_id
  - imageable_type
```

### One-To-One
A one-to-one relationship is not the most common type of relationship, hence the example in the context of this blog site demo is very contrived.

The Post table/model only has a title, and the body text of each post lives in a separate table/model called Text; each post has one text.

### One-To-Many
Probably the most common relationship. In this example, there is a one-to-many relationship between authors/users and posts; each author can have many posts.

### Many-To-Many
A post can have many tags attached, and each tag can have many posts.

### Polymorphic...To-Many
The Image model can morph to be used as a user/author photo, or a primary post image.

### Has-Many-Through
By defining a Has-Many-Through relationship, one model can leap frog to an indirectly related (a/k/a no foreign key) model through a common model.

In this example, you could fetch all tags attached to posts attributed to a given author. An __author__ *has many* __tags__ *through* __posts__.



