@extends('layouts.master')

@section('content')
    {{ Form::open(array('route' => 'post.store', 'method' => 'post')) }}
        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
            {{ Form::label('title', 'Post Title') }}
            {{ Form::text('title', Input::old('title', 'A New Post About Twitter Bootstrap'), array('placeholder' => 'Post Title', 'class' => 'form-control')) }}
            <div class="error">{{ $errors->first('title'); }}</div>
        </div>

        <div class="form-group {{ $errors->has('text') ? 'has-error' : '' }}">
            {{ Form::label('text', 'Post Text') }}
            {{ Form::textarea('text', Input::old('text', 'Lorem ipsum dolor sit amet, no vim virtute detracto comprehensam, iudico mentitum inimicus ad cum. Ne vocibus civibus corpora sea. Clita nominati ut est, at wisi accumsan cum. Voluptatum persequeris per an, ut aperiri delenit vix. Et agam eros omittantur cum, mutat cetero sed te. Iuvaret voluptaria sententiae ea qui, choro discere reprehendunt at nam.'), array('placeholder' => 'Post Text', 'class' => 'form-control')) }}
            <div class="error">{{ $errors->first('text'); }}</div>
        </div>

        <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
            {{ Form::label('image', 'Image Location') }}
            {{ Form::text('image', Input::old('image', '/images/code.png'), array('placeholder' => 'Image Location', 'class' => 'form-control')) }}
            <div class="error">{{ $errors->first('image'); }}</div>
        </div>

        <div class="form-group {{ $errors->has('tags[]') ? 'has-error' : '' }}">
            {{ Form::label('tags', 'Tags') }}
            <select name="tags[]" id="tags" size="6" class="form-control" multiple>
                @foreach (Tag::all() as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
            <div class="error">{{ $errors->first('tags[]'); }}</div>
        </div>

        <button type="submit" class="btn btn-default">Create Post</button>
    {{ Form::close() }}
@stop