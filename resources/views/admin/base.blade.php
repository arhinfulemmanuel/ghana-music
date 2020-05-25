<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
@include('layouts.link')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="uk-flex">
            <div class="uk-card uk-card-secondary uk-width-1-4 uk-hidden@s">
                <button class="uk-button uk-background-secondary uk-margin-small-right" type="button" uk-toggle="target: #side-nav"><span style="backround-color:red;" uk-icon="icon: arrow-right"></span></button>
                
                <div id="side-nav" uk-offcanvas="overlay: true">
                    <div class="uk-offcanvas-bar">
                        <div class="uk-width-1-1 uk-margin-bottom">
                            <button class="uk-position-top-right uk-offcanvas-close width-1-1" type="button" uk-close></button>
                        </div>
                        <div class="uk-margin-top uk-padding-top">
                            <ul class="uk-list uk-text-center">
                                <li></li>
                                <li><a href="/admin" class="uk-button uk-button-text uk-width-1-1">Admin home</a></li>
                                <li><a href="/allpost" class="uk-button uk-button-text uk-width-1-1">All post</a></li>
                                <li><a href="/addpost" class="uk-button uk-button-text uk-width-1-1">Add new post</a></li>
                                <li><a href="/ads" class="uk-button uk-button-text uk-width-1-1">All Ads</a></li>
                                <li><a href="/create_advert" class="uk-button uk-button-text uk-width-1-1">Create new Ad</a></li>
                                <li><a href="/create_advert" class="uk-button uk-button-text uk-width-1-1">Create new Chart</a></li>
                                <li><a href="/statistics" class="uk-button uk-button-text uk-width-1-1">Statistics</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="uk-visible@s uk-card uk-card-secondary uk-width-1-3 ">
                <div class="uk-align-center uk-width-1-2">
                    <ul class="uk-list uk-text-center">
                        <li></li>
                        <li><a href="/admin" class="uk-button uk-button-text uk-width-1-1">Admin home</a></li>
                        <li><a href="/allpost" class="uk-button uk-button-text uk-width-1-1">All post</a></li>
                        <li><a href="/addpost" class="uk-button uk-button-text uk-width-1-1">Add new post</a></li>
                        <li><a href="/ads" class="uk-button uk-button-text uk-width-1-1">All Ads</a></li>
                        <li><a href="/create_advert" class="uk-button uk-button-text uk-width-1-1">Create new Ad</a></li>
                        <li><a href="/create_chart" class="uk-button uk-button-text uk-width-1-1">Create new Chart</a></li>
                        <li><a href="/statistics" class="uk-button uk-button-text uk-width-1-1">Statistics</a></li>
                    </ul>
                </div>
            </div>


            <main class="uk-width-1-1 uk-card-primary">
                @include('admin.messages')
                @yield('content')
            </main>
        </div>
        <hr>

        
    </div>

    <script src="src/ui-kit/js/uikit.min.js"></script>
    <script src="src/ui-kit/js/uikit-icons.min.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>
