<?php

class HomeController extends BaseController {

    /**
     * The layout that should be used for responses.
     */
    protected $layout = 'layouts.master';

    public function index()
    {
        // hard-coding autologin of User #2,
        // so we don't have to implement Auth for the scope of this demo.
        $user = User::find(2);
        Auth::login($user);

        // get recent posts, and eager load texts
        $posts = Post::with('text')->orderBy('created_at', 'desc')->get();

        $this->layout->content = View::make('home')->with('posts', $posts);
    }

}