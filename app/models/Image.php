<?php

class Image extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'images';

    /**
     * Whether or not to enable timestamps.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Whitelisted model properties for mass assignment.
     *
     * @var array
     */
    protected $fillable = array('url');

    /**
     * Defines a polymorphic relationship.
     *
     * @see http://laravel.com/docs/eloquent#polymorphic-relations
     */
    public function imageable()
    {
        return $this->morphTo();
    }

}