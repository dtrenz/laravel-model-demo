@extends('layouts.master')

@section('content')
    <div class="page-header">
        <h1>Category: <em>{{ $category->name }}</em></h1>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <h2>Comments on posts in this category:</h2>

            @foreach ($category->comments as $comment)
                <blockquote>
                    "{{{ $comment->text }}}"
                </blockquote>
            @endforeach
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <h2>Posts in this category:</h2>

            @foreach ($category->posts as $post)
                <h3>
                    <a href="/post/{{ $post->id }}">{{{ $post->title }}}</a>
                </h3>

                <blockquote>
                    {{ nl2br(Str::words($post->text->text, 80)) }}
                </blockquote>
            @endforeach
        </div>
    </div>
@stop