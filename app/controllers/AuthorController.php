<?php

class AuthorController extends \BaseController {

    /**
     * The layout that should be used for responses.
     */
    protected $layout = 'layouts.master';

    /**
     * Display the specified resource.
     *
     * @param  User $author
     * @return Response
     */
    public function show(User $author)
    {
        // Lazy Eager Loading
        $author->load('posts');

        $this->layout->content = View::make('author.show')->with('author', $author);
    }

}