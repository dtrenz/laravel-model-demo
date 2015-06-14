@extends('layouts.master')

@section('content')
	<div class="page-header">
		<h1>Latest Posts</h1>
	</div>

    <div class="row">
        @foreach ($posts as $post)
            <div class="col-xs-12">
            	<h3>
                	<a href="{{ URL::to('/post/'.$post->id) }}">{{{ $post->title }}}</a>
            	</h3>

            	<blockquote>
            		{{ nl2br(Str::words($post->text->text, 80)) }}
        		</blockquote>
            </div>
        @endforeach
    </div>
@stop