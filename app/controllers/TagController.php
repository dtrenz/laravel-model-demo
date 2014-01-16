<?php

class TagController extends \BaseController {

    /**
     * The layout that should be used for responses.
     */
    protected $layout = 'layouts.master';

    /**
     * Display the specified resource.
     *
     * @param  string $name Tag name
     * @return Response
     */
    public function show($name)
    {
        $tag = Tag::where('name', 'like', $name)->first();

        $posts = Post::whereHas('tags', function ($q) use ($tag) {
                $q->where('name', 'like', $tag->name);
            })->get();

        $data = array(
            'tag'   => $tag,
            'posts' => $posts
        );

        $this->layout->content = View::make('tag.show')->with($data);
    }

}