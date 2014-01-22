<?php

class Post extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * Whitelisted model properties for mass assignment.
     *
     * @var array
     */
    protected $fillable = array('title');

    /**
     * Defines a one-to-one relationship.
     *
     * @see http://laravel.com/docs/eloquent#one-to-one
     */
    public function text()
    {
        return $this->hasOne('Text');
    }

    /**
     * Defines an inverse one-to-many relationship.
     *
     * @see http://laravel.com/docs/eloquent#one-to-many
     */
    public function author()
    {
        return $this->belongsTo('User', 'author_id');
    }

    /**
     * Defines a many-to-many relationship.
     *
     * @see http://laravel.com/docs/eloquent#many-to-many
     */
    public function tags()
    {
        return $this->belongsToMany('Tag');
    }

    /**
     * Defines an inverse one-to-many relationship.
     *
     * @see http://laravel.com/docs/eloquent#one-to-many
     */
    public function category()
    {
        return $this->belongsTo('Category');
    }

    /**
     * Defines a polymorphic one-to-one relationship.
     *
     * @see http://laravel.com/docs/eloquent#polymorphic-relations
     */
    public function image()
    {
        return $this->morphOne('Image', 'imageable');
    }

    /**
     * Defines a one-to-many relationship.
     *
     * @see http://laravel.com/docs/eloquent#one-to-many
     */
    public function comments()
    {
        return $this->hasMany('Comment');
    }

}