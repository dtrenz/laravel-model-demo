<?php

class PostController extends \BaseController {

    /**
     * The layout that should be used for responses.
     */
    protected $layout = 'layouts.master';

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('post.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// get POST data
		$input = Input::all();

		// set validation rules
		$rules = array(
			'title' => 'required',
			'text'  => 'required',
			'image'  => 'required',
		);

		// validate input
		$validation = Validator::make($input, $rules);

		// if validation fails, return the user to the form w/ validation errors
		if ($validation->fails()) {
			return Redirect::back()->withErrors($validation)->withInput();
		} else {
			// create new Post instance
			$post = Post::create(array('title' => $input['title']));

			// create Text instance w/ text body
			$text = Text::create(array('text' => $input['text']));

			// save new Text and associate w/ new post
			$post->text()->save($text);

			// create the new Image
			$image = Image::create(array('url' => $input['image']));

			// save new Text and associate w/ new post
			$post->image()->save($image);

			if (isset($input['tags'])) {
				foreach ($input['tags'] as $tagId) {
					$tag = Tag::find($tagId);
					$post->tags()->save($tag);
				}
			}

			// associate the post with the current user
			$post->author()->associate(Auth::user())->save();

			// redirect to newly created post page
			return Redirect::route('post.show', array($post->id));
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  Post  $post
	 * @return Response
	 */
	public function show(Post $post)
	{
		// lazy eager loading
		$post->load('text', 'author', 'tags', 'image', 'comments');

		$this->layout->content = View::make('post.show')->with('post', $post);
	}

}















