<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIDE</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cms/style.css') }}">
    <link rel="stylesheet" href="{{ asset('js/modules/jquery-confirm/css/jquery-confirm.css') }}">
    @yield('head')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/modules/jquery-confirm/js/jquery-confirm.js') }}"></script>
    <script>
        $(document).ready(function () {
            // Add slideDown animation to Bootstrap dropdown when expanding.
            $('.dropdown').on('show.bs.dropdown', function() {
                console.log('show');
                $(this).find('.dropdown-menu').first().stop(true, true).slideDown('fast');
            });

            // Add slideUp animation to Bootstrap dropdown when collapsing.
            $('.dropdown').on('hide.bs.dropdown', function() {
                $(this).find('.dropdown-menu').first().stop(true, true).slideUp('fast');
            });
        });
    </script>
    @yield('scripts')
</head>
<body>
<div class="main-menu">
    <nav class="navbar navbar-default">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="nav-collapse">
            <a class="navbar-brand" href="#">Brand</a>
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BLOG <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('blog.create') }}">NUEVO</a></li>
                        <li><a href="{{ route('blog.show') }}">VER</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PÁGINAS <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">NUEVO</a></li>
                        <li><a href="#">VER</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div class="content-wrapper">
    @if(\Session::has('alertMessage'))
        <div id="alertMessage" class="alert {{ Session::get('alert-class', 'alert-info') }}">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ \Session::get('alertMessage') }}
        </div>
    @endif
    @yield('content')
</div>

</body>
</html>