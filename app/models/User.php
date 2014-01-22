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
     * Get all distinct tags attached to all posts by author.
     * Can't use hasManyThrough on ManyToMany relationships, so we do this instead.
     *
     * @return array
     */
    public function tags()
    {
        $tags = array();

        $rows = Tag::select('tags.id', 'tags.name')
                   ->join('post_tag', 'tags.id', '=', 'post_tag.tag_id')
                   ->join('posts', 'post_tag.post_id', '=', 'posts.id')
                   ->where('posts.author_id', $this->id)
                   ->groupBy('tags.id')
                   ->orderBy('tags.name')
                   ->get();

        foreach ($rows as $row) {
            $tags[] = $row;
        }

        return $tags;
    }

}














