@extends('layouts.master')

@section('content')
    <div class="page-header">
        <h1>Category: <em>{{ $category->name }}</em></h1>
    </div>

    <div class="row">
        @foreach ($category->posts as $post)
            <div class="col-xs-12">
                <h3>
                    <a href="/post/{{ $post->id }}">{{{ $post->title }}}</a>
                </h3>

                <blockquote>
                    {{ nl2br(Str::words($post->text->text, 80)) }}
                </blockquote>
            </div>
        @endforeach
    </div>
@stop