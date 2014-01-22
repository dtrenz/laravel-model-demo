<?php

class CategoryController extends \BaseController {

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
    public function show(Category $category)
    {
        $this->layout->content = View::make('category.show')->with('category', $category);
    }

}