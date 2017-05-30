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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/parallax.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">

        <div class="row no-margin top-header">
            <div class="col-xs">
                <div class="col">
                    <img class="img-responsive center-block" src="{{ asset('img/index/logo.png') }}" alt="SIDE">
                </div>
                <div class="col">
                    <img class="img-responsive center-block" src="{{ asset('img/index/amanece.png') }}" alt="Amanece">
                </div>
            </div>
            <div class="col col-xs">
                <span class="social">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-tumblr" aria-hidden="true"></i></a>
                </span>
                <span class="links">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="#">CONTACTO</a> | <a href="#">INGLÉS</a>
                </span>
            </div>
        </div>

        <div class="collapse-container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">¿QUIÉNES SOMOS?</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">MISIÓN</a></li>
                            <li><a href="#">VISIÓN</a></li>
                            <li><a href="#">VALORES</a></li>
                            <li><a href="#">ESTRUCTURA</a></li>
                        </ul>
                    </li>
                    <li><a href="#">CONTACTO</a></li>
                    <li><a href="#">TRANSPARENCIA</a></li>
                </ul>
            </div>
        </div>

    </div>
</nav>