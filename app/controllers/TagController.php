<?php

class TagController extends \BaseController {

    /**
     * The layout that should be used for responses.
     */
    protected $layout = 'layouts.master';

    /**
     * Display the specified resource.
     *
     * @param  string $tagName
     * @return Response
     */
    public function show($tagName)
    {
        $tag = Tag::where('name', 'like', $tagName)->first();

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