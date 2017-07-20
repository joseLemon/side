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
    @yield('head')
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">

        <div class="top-header">
            <div class="row no-margin top-header">
                <div class="col-xs">
                    <div class="col">
                        <img class="img-responsive center-block" src="{{ asset('img/index/amanece.png') }}" alt="Amanece">
                    </div>
                    <div class="col">
                        <img class="img-responsive center-block" src="{{ asset('img/index/logo.png') }}" alt="SIDE">
                    </div>
                </div>
                <div class="col col-xs text-center">
                <span class="links">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="#">CONTACTO</a> | <a href="#">INGLÉS</a>
                </span>
                </div>
            </div>

            <div class="text-center divider divider-top">
                <span class="social">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-tumblr" aria-hidden="true"></i></a>
                </span>
                <input type="text">
            </div>
        </div>

    </div>
</nav>
@yield('content')
<footer>
    <div class="parallax">
        <div class="parallax-element" data-parallax="{{ asset('img/index/footer.jpg') }}" data-positiony="top"></div>
    </div>
    <div class="container">
        <div class="footer-top">
            <div class="row no-margin">
                <div class="col-sm-6">
                    <img class="img-responsive center-block" src="{{ asset('img/index/footer/side.png') }}" alt="Chihuahua">
                </div>
                <div class="col-sm-6">
                    <div class="social">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-tumblr" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="center-img">
                <img class="img-responsive center-block" src="{{ asset('img/index/footer/chihuahua.png') }}" alt="Chihuahua">
            </div>
            <ul>
                <li><a href="">INICIO</a></li>
                <li><a href="">VÍNCULOS DE INTERÉS</a></li>
                <li><a href="">TRANSPARENCIA</a></li>
                <li><a href="">PBR</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p class="white">2017 Aviso de Privacidad</p>
        </div>
    </div>
</footer>
<script>
    // GLOBAL FUNCTIONS
    function RemoveHTMLTags($text) {
        var regX = /(<([^>]+)>)/ig;
        return $text.replace(regX, "");
    }
</script>
@yield('scripts')
</body>
</html>