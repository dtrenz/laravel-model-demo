@extends('layouts.master')

@section('content')
    <section class="author">
        <header class="page-header">
            <div class="thumbnail pull-left">
                <img src="{{ $author->image->url }}" alt="{{{ $author->name }}}">
            </div>

            <h1>
                {{{ $author->name }}}<br>
                <small>Joined: {{ $author->created_at->format('F, Y') }}</small>
            </h1>

            <div class="clearfix"></div>
        </header>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Tags</h3>
            </div>

            <div class="panel-body">
                <ul>
                    @foreach ($author->tags() as $tag)
                        <li>
                            <a href="/tag/{{ Str::lower($tag->name) }}">{{ $tag->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Posts</h3>
            </div>

            <div class="panel-body">
                @foreach ($author->posts as $post)
                    <h3>
                        <a href="/post/{{ $post->id }}">{{{ $post->title }}}</a>
                    </h3>

                    <blockquote>
                        {{ nl2br(Str::words($this->text->text, 20)) }}
                    </blockquote>
                @endforeach
            </div>
        </div>
    </section>
@stop