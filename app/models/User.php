<?php

use Illuminate\Auth\UserInterface;

class User extends Eloquent implements UserInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

    /**
     * Whitelisted model properties for mass assignment.
     *
     * @var array
     */
    protected $fillable = array('name');

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

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
     * @see http://laravel.com/docs/eloquent#has-many-through
     */
    public function tags()
    {
        return $this->hasManyThrough('Tag', 'Post', 'author_id');
    }

}