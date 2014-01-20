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

        $this->layout->content = View::make('tag.show')->with('tag', $tag);
    }

}