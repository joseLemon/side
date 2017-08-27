<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIDE</title>
    <link rel="icon" href="{{ asset('public/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
    <script src="{{ asset('public/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/js/parallax.js') }}"></script>
    <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/js/app.js') }}"></script>
    @yield('head')
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">

        <div class="top-header">
            <div class="row no-margin top-header">
                <div class="col-xs">
                    <div class="col">
                        <img class="img-responsive center-block" src="{{ asset('public/img/index/amanece.png') }}" alt="Amanece">
                    </div>
                    <div class="col">
                        <img class="img-responsive center-block" src="{{ asset('public/img/index/logo.png') }}" alt="SIDE">
                    </div>
                </div>
                <div class="col col-xs text-center">
                <span class="links">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i> <a class="smoothscroll" href="#contacto">CONTACTO</a> | <a class="langToggle" data-language="@if($_COOKIE['indexLanguage'] == 'en'){{ 'es' }}@else{{ 'en' }}@endif" href="#">@if($_COOKIE['indexLanguage'] == 'en'){{ 'ESPAÑOL' }}@else{{ 'ENGLISH' }}@endif</a>
                </span>
                </div>
            </div>

            <div class="divider divider-top"></div>
            <div class="bottom-header text-center">
                <span class="social">
                    <a href="https://business.facebook.com/SIDEChih/?business_id=435161826691478" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/SIDEChih" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/side_chih/?hl=es" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </span>
                <span class="search-bar">
                    <input type="text">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </span>
            </div>
        </div>

    </div>
</nav>
@yield('content')
<!-- ================================== -->

<!-- ///////////  CONTACTO  \\\\\\\\\\\ -->

<!-- ================================== -->
<div class="contacto spacing" id="contacto">
    <div class="container">
        <h1 class="heading text-center white"><span class="bold">¿Dudas?</span> Contáctanos</h1>
        <div class="row no-margin text-center">
            <div class="hidden-xs" style="float: left; width: 12.5%; min-height: 1px"></div>
            <div class="col-sm-3">
                <p>
                    <img src="{{ asset('public/img/index/contacto/pin.png') }}" alt="Localización">
                    Avenida Abraham Lincoln N.1290,
                    Ciudad Juárez, Mexico 32310
                </p>
            </div>
            <div class="col-sm-3">
                <p>
                    <img src="{{ asset('public/img/index/contacto/phone.png') }}" alt="Teléfono">
                    Tel. (656) 629-3300<br> (614) 442 33 00
                </p>
            </div>
            <div class="col-sm-3">
                <p>
                    <img src="{{ asset('public/img/index/contacto/mail.png') }}" alt="Correo">
                    jorge.venzor@chihuahua.com.mx
                </p>
            </div>
        </div>
        {!! Form::open(['route' => ['mailer.contact'], 'id' => 'formContact']) !!}
        <div class="row no-margin">
            <div class="col-sm-12">
                <div class="alert hidden" id="contact-alert-box"></div>
            </div>
            <div class="col-sm-6">
                <input type="text" placeholder="NOMBRE" name="contact_name">
                <input type="email" placeholder="EMAIL" name="contact_email">
            </div>
            <div class="col-sm-6">
                <textarea cols="30" rows="10" placeholder="MENSAJE" name="contact_message"></textarea>
            </div>
        </div>
        <div class="text-center">
            <input type="submit" value="ENVIAR">
        </div>
        {!! Form::close() !!}
    </div>
</div>
<footer>
    <div class="parallax">
        <div class="parallax-element" data-parallax="{{ asset('public/img/index/footer.jpg') }}" data-positiony="top"></div>
    </div>
    <div class="container small-spacing">
        <div class="footer-top">
            <div class="row no-margin">
                <div class="col-sm-4">
                    <div>
                        <img class="img-responsive center-block" src="{{ asset('public/img/index/footer/side.png') }}" alt="Chihuahua">
                    </div>
                    <div class="social">
                        <a href="https://business.facebook.com/SIDEChih/?business_id=435161826691478" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/SIDEChih" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/side_chih/?hl=es" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div>
                        <img class="img-responsive center-block" src="{{ asset('public/img/index/footer/chihuahua.png') }}" alt="Chihuahua">
                    </div>
                </div>
                <div class="col-sm-4">
                    <ul>
                        <li><a href="{{ url('/') }}">INICIO</a></li>
                        <li><a href="http://www.chihuahua.com.mx/Transparencia/index.html">TRANSPARENCIA</a></li>
                        <li><a href="http://www.chihuahua.com.mx/SitioSecretariaEconomia/PBR.ASPX">PBR</a></li>
                        <li><a href="Programa Sectorial.pdf" target="_blank">Programa Sectorial</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p>2017 Aviso de Privacidad</p>
        </div>
    </div>
</footer>
<script>
    // GLOBAL FUNCTIONS
    function RemoveHTMLTags($text) {
        var regX = /(<([^>]+)>)/ig;
        return $text.replace(regX, "");
    }

    $('#formContact').submit(function (e) {
        e.preventDefault();
        var form = $(this);
        var alertBox = $('#contact-alert-box');
        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: form.serialize(),
            dataType: 'JSON'
        }).always(function (data) {
            alertBox.empty();

            alertBox.removeClass('hidden').removeClass('alert-success').removeClass('alert-danger');

            if(data.alert_class) {
                alertBox.addClass(data.alert_class);
                alertBox.text(data.msg);
            }

            if(data.responseJSON) {
                alertBox.addClass('alert-danger');
                $.each(data.responseJSON, function (index, msg) {
                    alertBox.append(msg + '<br>');
                })
            }
        });
    });
</script>
@yield('scripts')
</body>
</html>