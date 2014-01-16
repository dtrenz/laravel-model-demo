<?php

class Tag extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tags';

    /**
     * Defines a many-to-many relationship.
     *
     * @see http://laravel.com/docs/eloquent#many-to-many
     */
    public function posts()
    {
        return $this->belongsToMany('Post');
    }

}