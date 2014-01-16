<?php

class User extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

    /**
     * Defines a one-to-many relationship.
     *
     * @see http://laravel.com/docs/eloquent#one-to-many
     */
    public function posts()
    {
        return $this->hasMany('Post', 'author_id');
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
     * Defines a has-many-through relationship.
     *
     * @see http://laravel.com/docs/eloquent#polymorphic-relations
     */
    public function tags()
    {
        return $this->hasManyThrough('Tag', 'Post', 'author_id');
    }

}