<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ url('js/vendor/bootstrap.min.css') }}" rel="stylsheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Glyphicons Link -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

    <!-- Custom Styles -->
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="creamy__backgrnd">
    <div id="app">
        <div class="navbar navbar-expand-lg navbar-static-top border border-primary darkblue__backgrnd grey__bot__brdr">
            <div class="container">
                <div class="navbar-collapse navbar-collapse-1 collapse" aria-expanded="true">
                    <ul class="nav navbar-nav white__font white__hover">
                        <li class="active">
                            <a href="{{ route('welcome') }}">Home</a>
                        </li>
                        <li>
                            <a href="#fake">About</a>
                        </li>

                    </ul>
                    <!--/End Left Side of Navbar -->

                    <div class="navbar-form navbar-right">
                        <button class="btn white__btn" type="submit" aria-label="Left Align">
                            <span class="glyphicon" aria-hidden="true"> </span>{{ __('Log in') }}
                        </button>
                        <button class="btn white__btn" type="submit" aria-label="Left Align">
                            <span class="glyphicon" aria-hidden="true"> </span>{{ __('Sign up') }}
                        </button>
                    </div>
                    <!--/End Right Side of Navbar -->

                </div>
            </div>
        </div>
        <!--/END Navbar -->
            
            
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>