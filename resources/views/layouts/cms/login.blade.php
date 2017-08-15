<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('public/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
    <script src="{{ asset('public/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Ubuntu:400,700');

        body {
            font-family: 'Ubuntu', sans-serif;
            background-color: #222d32;
        }

        .container {
            padding: 100px 10px;
        }

        .login-box {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fffefe;
            box-shadow: 0px 5px 10px rgba(0,0,0,.5);
            color: #4a4a4a;
        }

        .box-errors, .box-header, .box-body, .box-footer {
            padding-right: 20px;
            padding-left: 20px;
            margin: 0;
        }

        .box-header {
            border-bottom: 1px dashed #a3a3a3;
            padding-top: 15px;
            padding-bottom: 15px;
            font-size: 25px;
            font-weight: 700;
        }

        .box-body {
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .box-body .remember-me {
            /*text-align: right;*/
        }

        .box-body label {
            padding: 0;
        }

        .box-body .remember-me .checkbox {
            padding: 0;
        }

        .box-body .remember-me .check-box {
            display: inline-block;
            min-height: 0;
            width: 16px;
            height: 16px;
            padding: 0;
            border: 1px solid #444;
            position: relative;
            left: 0;
            top: 2.5px;
        }

        .box-body .remember-me input[type=checkbox] {
            display: none;
        }

        .box-body .remember-me input[type=checkbox] + label::after {
            content: '';
            position: absolute;
            width: 11px;
            height: 6px;
            border-left: 3px solid #333;
            border-bottom: 3px solid #333;
            top: 3px;
            left: 2px;
            transform: rotate(-45deg);
            opacity: 0;
            transition: opacity 100ms ease;
        }

        .box-body .remember-me input[type=checkbox]:checked + label::after {
            opacity: 1;
        }

        .box-body button {
            background-color: #009dde;
            width: 100%;
            /*border-radius: 0;*/
            border: 0;
            padding: 12px 0;
            transition: background 150ms ease;
        }

        .box-body button:hover {
            background-color: #0086bd;
        }

        .box-footer {
            background-color: #e3e3e3;
            text-align: center;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .box-footer a {
            color: #555;
        }

        .box-footer a:hover {
            color: #444;
        }

        .form-group {
            margin: 0!important;
            padding-bottom: 15px;
        }

        .box-errors {
            padding-top: 10px;
            padding-bottom: 10px;
            border: 0;
            border-radius: 0;
        }

        .box-errors.alert-dismissable .close {
            top: -5px;
            right: -12px;
            opacity: .5;
        }
    </style>
</head>
<body>
    <div id="app">
        <!--<nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger --
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image --
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar --
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar --
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links --
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>-->

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}"></script>
</body>
</html>
