<?php

class HomeController extends BaseController {

    /**
     * The layout that should be used for responses.
     */
    protected $layout = 'layouts.master';

    public function index()
    {
        $posts = Post::all();

        $this->layout->content = View::make('home')->with('posts', $posts);
    }

}