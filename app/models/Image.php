<?php

class Image extends Eloquent {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'images';

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