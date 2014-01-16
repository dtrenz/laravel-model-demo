@extends('layouts.master')

@section('content')
    <section class="post">
        <header class="page-header">
            <h1>
                {{{ $post->title }}}<br>
                <small>By {{{ $post->author->name }}}</small>
            </h1>

            <div class="meta">
                <span class="date pull-right">Posted on {{ $post->created_at->format('M t, Y') }}</span>

                <div class="tags">
                    @foreach ($post->tags as $tag)
                        <a href="/tag/{{ Str::lower($tag->name) }}">
                            <span class="label {{ Str::lower($tag->name) }}">{{ Str::upper($tag->name) }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </header>

        <img src="{{ $post->image->url }}" width="100%" alt="{{{ $post->title }}}">

        <p>{{ nl2br($post->text->text) }}</p>

        <footer class="well">
            <img src="{{ $post->author->image->url }}" class="thumbnail pull-left" alt="{{{ $post->author->name }}}">
            <p>
                {{{ $post->author->name }}} is a really smart web developer who
                regulary contributes to this blog.
            </p>
            <div class="clearfix"></div>
        </footer>
    </section>
@stop