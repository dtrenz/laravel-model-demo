<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>My Code Blog</title>

        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="{{ URL::asset('todc-bootstrap/css/todc-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        <nav class="navbar navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ URL::to('/') }}">My Code Blog</a>
                </div>

                <ul class="nav nav-pills navbar-right">
                    @foreach (Category::all() as $category)
                        <li><a href="{{ URL::to('/category/'.$category->id) }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>

                @if (Auth::check())
                    <ul class="nav nav-pills navbar-right">
                        <li>
                            <a href="#" class="active">{{ Auth::user()->name }}</a>
                        </li>
                    </ul>
                @endif
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="content col-xs-8">
                    @yield('content')
                </div>

                <div class="sidebar col-xs-4">
                    @section('sidebar')
                        <div class="search">
                            <form class="form-inline">
                                <div class="form-group">
                                    <input type="text" name="query" class="form-control" placeholder="search this blog" size="30" required>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </form>
                        </div>

                        <p>This is a blog for discussing web development.</p>
                        <p>I hope you like it. If not, oh well&hellip; I tried.</p>

                        <div class="tags">
                            <h4>Popular Tags</h4>
                            <ul>
                                @foreach (Tag::all() as $tag)
                                    <li>
                                        <a href="{{ URL::to('/tag/'.Str::lower($tag->name)) }}">{{ $tag->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="text-center">
                            <a href="{{ URL::to('/post/create') }}" class="btn btn-success" title="create a new post">Create New Post</a>
                        </div>
                    @show
                </div>
            </div>
        </div>

        <div class="footer">
            &copy; {{ date('Y') }} <a href="http://dantrenz.com">dtrenz</a>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    </body>
</html>