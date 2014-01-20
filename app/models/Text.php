<?php

class Text extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'texts';

    /**
     * Whitelisted model properties for mass assignment.
     *
     * @var array
     */
    protected $fillable = array('text');

    /**
     * Defines an inverse one-to-one relationship.
     *
     * @see http://laravel.com/docs/eloquent#one-to-one
     */
    public function post()
    {
        return $this->belongsTo('Post');
    }

}