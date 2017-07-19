@extends('layouts.site.master')
@section('content')
    <!-- ================================== -->

    <!-- ///////////  BANNER  \\\\\\\\\\\ -->

    <!-- ================================== -->
    <div class="banner" id="banner" style="background: url('{{ asset('img/index/banners/1.jpg') }}') no-repeat center center">
        <div class="container">

        </div>
    </div>
    <!-- ================================== -->

    <!-- ///////////  AYUDA  \\\\\\\\\\\ -->

    <!-- ================================== -->
    <div class="ayuda" id="ayuda">
        <div class="parallax-container">
            <div class="parallax">
                <img src="{{ asset('img/index/innovas.jpg') }}">
            </div>
            <div class="container">
                <div class="question-box">
                    <h3 class="white">¿CÓMO TE PODEMOS</h3>
                    <h2 class="white">AYUDAR?</h2>
                    <div class="input-group">
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                        <input class="form-control" type="text">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================== -->

    <!-- ///////////  DIRECCIONES  \\\\\\\\\\\ -->

    <!-- ================================== -->
    <div class="direcciones spacing" id="direcciones">
        <div class="container">
            <h1 class="big-heading bold">DIRECCIONES</h1>
            <p class="text">Visita todas nuestras plataformas y conoce más de nuestro trabajo.</p>
            <div class="row no-margin">
                <div class="col-sm-4 col-xs-6 red">
                    <span class="circle-hover"></span>
                    <div class="img-container">
                        <img src="{{ asset('img/index/direcciones/1.png') }}">
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 light-red">
                    <span class="circle-hover"></span>
                    <div class="img-container">
                        <img src="{{ asset('img/index/direcciones/2.png') }}">
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 pink">
                    <span class="circle-hover"></span>
                    <div class="img-container">
                        <img src="{{ asset('img/index/direcciones/3.png') }}">
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 salmon">
                    <span class="circle-hover"></span>
                    <div class="img-container">
                        <img src="{{ asset('img/index/direcciones/4.png') }}">
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 gray">
                    <span class="circle-hover"></span>
                    <div class="img-container">
                        <img src="{{ asset('img/index/direcciones/5.png') }}">
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 green">
                    <span class="circle-hover"></span>
                    <div class="img-container">
                        <img src="{{ asset('img/index/direcciones/6.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================== -->

    <!-- ///////////  ACERCA DE  \\\\\\\\\\\ -->

    <!-- ================================== -->
    <div class="nosotros spacing" id="nosotros">
        <div class="container">
            <div class="row no-margin nav-tab-menu">
                <div class="col-sm-4 img-container">
                    <a href="#tab-1" data-toggle="tab">
                        <img src="{{ asset('img/index/nosotros/1.png') }}">
                        <h3>Misión</h3>
                    </a>
                </div>
                <div class="col-sm-4 img-container">
                    <a href="#tab-2" data-toggle="tab">
                        <img src="{{ asset('img/index/nosotros/2.png') }}">
                        <h3>Visión</h3>
                    </a>
                </div>
                <div class="col-sm-4 img-container">
                    <a href="#tab-3" data-toggle="tab">
                        <img src="{{ asset('img/index/nosotros/3.png') }}">
                        <h3>Valores</h3>
                    </a>
                </div>
            </div>
            <div class="tab-content blue">
                <div id="tab-1" class="tab-pane fade in active">
                    <p class="text">
                        Generar una economía vigorosa de mayor valor a través de la generación
                        de estrategias, políticas y programas que mejoren el entorno económico
                        y fomenten la innovación en el estado, con el fin de impulsar la movilidad
                        social y asegurar una mejor calida de vida en la población.
                    </p>
                </div>
                <div id="tab-2" class="tab-pane fade">
                    <p class="text">
                        Texto 2
                    </p>
                </div>
                <div id="tab-3" class="tab-pane fade">
                    <p class="text">
                        Texto 3
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================== -->

    <!-- ///////////  VIDEO  \\\\\\\\\\\ -->

    <!-- ================================== -->
    <div class="video spacing" id="video">
        <div class="parallax">
            <div class="parallax-element" data-parallax="{{ asset('img/index/video.jpg') }}"></div>
        </div>
        <div class="container">
            <h2 class="white bold">SIDE 2017</h2>
            <a href="#video-modal" data-toggle="modal" data-target="#video-modal">
                <i class="fa fa-youtube-play" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <div id="video-modal" class="modal fade" role="dialog">
        <div class="vertical-align">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                        <p>Some text in the modal.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ================================== -->

    <!-- ///////////  INDUSTRIAS CLAVE  \\\\\\\\\\\ -->

    <!-- ================================== -->
    <div class="industrias spacing" id="industrias">
        <div class="container">
            <h1 class="heading text-center"><span class="bold">Industrias</span> Clave</h1>
        </div>
        <div class="grid row no-margin">
            <div class="grid-panel red">
                <div><h3>PROMOCIÓN</h3></div>
            </div>
            <div class="grid-panel light-red">
                <div class="logo-text">
                    <img class="img-responsive center-block" src="{{ asset('img/index/industrias/icatech.png') }}" alt="ICATECH">
                </div>
            </div>
            <div class="grid-panel pink-red">
                <div class="logo-text">
                    <h5>
                        <img class="img-responsive center-block" src="{{ asset('img/index/industrias/codech.png') }}" alt="CODECH">
                    </h5>
                </div>
            </div>
            <div class="grid-panel pink">
                <div><h3>FODARCH</h3></div>
            </div>
            <div class="grid-panel brown">
                <div><h3>MINERÍA</h3></div>
            </div>
            <div class="grid-panel orange">
                <div><h3>INDUSTRIA</h3></div>
            </div>
            <div class="grid-panel yellow">
                <div><h3>TURISMO</h3></div>
            </div>
            <div class="grid-panel light-green">
                <div><h3>AGROINDUSTRIA</h3></div>
            </div>
            <div class="grid-panel green">
                <div><h3>ENERGÍA</h3></div>
            </div>
            <div class="grid-panel dark-green">
                <div><h3>BARRANCAS DEL COBRE</h3></div>
            </div>
            <div class="grid-panel gray-blue">
                <div class="logo-text">
                    <h5>
                        <img class="img-responsive center-block" src="{{ asset('img/index/industrias/asach.png') }}" alt="ASACH">
                    </h5>
                </div>
            </div>
            <div class="grid-panel cyan">
                <div><h3>GESTIÓN ESTRATÉGICA Y EFICACIA</h3></div>
            </div>
            <div class="grid-panel blue">
                <div><h3>COMERCIO</h3></div>
            </div>
            <div class="grid-panel dark-blue">
                <div class="logo-text">
                    <h5>
                        <img class="img-responsive center-block" src="{{ asset('img/index/industrias/fideapech.png') }}" alt="FIDEAPECH">
                    </h5>
                </div>
            </div>
            <div class="grid-panel purple">
                <div class="logo-text">
                    <h5>
                        <img class="img-responsive center-block" src="{{ asset('img/index/industrias/inadet.png') }}" alt="INADET">
                    </h5>
                </div>
            </div>
            <div class="grid-panel magenta">
                <div><h3>INNOVACIÓN Y COMPETITIVIDAD</h3></div>
            </div>
            <div class="grid-panel light-magenta">
                <div><h3>¡AY CHIHUAHUA!</h3></div>
            </div>
            <div class="grid-panel gray">
                <div class="logo-text">
                    <h5>
                        <img class="img-responsive center-block" src="{{ asset('img/index/industrias/pich.png') }}" alt="PROMOTORA">
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================== -->

    <!-- ///////////  VIVE LA AVENTURA  \\\\\\\\\\\ -->

    <!-- ================================== -->
    <div class="aventura" id="aventura">
        <div class="parallax">
            <div class="parallax-element" data-parallax="{{ asset('img/index/aventura.jpg') }}" data-positionx="right"></div>
        </div>
        <div class="container text-center">
            <img src="{{ asset('img/index/barrancas.png') }}" alt="Barrancas del Cobre">
            <h1 class="text-center">¡Vive la aventura!</h1>
        </div>
    </div>
    <!-- ================================== -->

    <!-- ///////////  BLOG DE NOTICIAS  \\\\\\\\\\\ -->

    <!-- ================================== -->
    <div class="blog spacing" id="blog">

        <div class="container">
            <h1 class="heading text-center">Blog de <span class="bold">Noticias</span></h1>
            <div class="row no-margin blog-feed"></div>

            <div class="blog-nav text-center">
                <a href="#" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </a>
                <a href="#" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- ================================== -->

    <!-- ///////////  REGISTRO  \\\\\\\\\\\ -->

    <!-- ================================== -->
    <div class="registro" id="registro">
        <div class="parallax">
            <div class="parallax-element" data-parallax="{{ asset('img/index/registro.jpg') }}"></div>
        </div>
        <div class="container text-center">
            <h2 class="yellow-btn">REGISTRA TU EMPRESA</h2>
            <h2 class="white">RECIBE INFORMACIÓN DE NUESTROS PROGRAMAS</h2>
        </div>
    </div>
    <!-- ================================== -->

    <!-- ///////////  CONTACTO  \\\\\\\\\\\ -->

    <!-- ================================== -->
    <div class="contacto spacing" id="contacto">
        <div class="container">
            <h1 class="heading text-center"><span class="bold">¿Dudas?</span> Contáctanos</h1>
            <div class="row no-margin text-center">
                <div class="hidden-xs" style="float: left; width: 12.5%; min-height: 1px"></div>
                <div class="col-sm-3">
                    <img src="{{ asset('img/index/contacto/pin.png') }}" alt="Localización">
                    <p>
                        P.O. Box 123 TownPress VT 12345
                    </p>
                </div>
                <div class="col-sm-3">
                    <img src="{{ asset('img/index/contacto/phone.png') }}" alt="Teléfono">
                    <p>
                        Tel. (123) 456-7890
                    </p>
                </div>
                <div class="col-sm-3">
                    <img src="{{ asset('img/index/contacto/mail.png') }}" alt="Correo">
                    <p>
                        townhall@townpres.gox
                    </p>
                </div>
            </div>
            <form>
                <div class="row no-margin">
                    <div class="col-sm-6">
                        <input type="text" placeholder="NOMBRE">
                        <input type="email" placeholder="EMAIL">
                    </div>
                    <div class="col-sm-6">
                        <textarea cols="30" rows="10" placeholder="MENSAJE"></textarea>
                        <div class="text-right">
                            <input type="submit" value="ENVIAR">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
@section('scripts')
    <script>
        $(document).ready(function () {
            getPosts();
        });
        function getPosts($get_posts_by,$page) {
            $.ajax({
                url: '{{ route('posts.get') }}',
                type: 'GET',
                data: {
                    'get_posts_by': $get_posts_by,
                    'page': $page,
                    'paginate': 3
                },
                success: function (posts) {
                    $('.blog-feed').empty();
                    $(posts.data).each(function (i, post) {
                        var img_url = '{{ asset('uploads/blog') }}' + '/' + post.post_id + '/' + post.post_img;
                        $('.blog-feed').append(
                            '<div class="col-sm-4">' +
                            '<div class="img-bg" style="background: url(' + img_url + ') no-repeat center center; background-size: cover;"></div>' +
                            '<div class="post-summary">' +
                            '<h5>' + post.post_date + '</h5>' +
                            '<h4 class="bold">' + post.post_title + '</h4>' +
                            '<p class="text">' + RemoveHTMLTags(post.post_excerpt) + '</p>' +
                            '<a href="#">Leer más</a>' +
                            '</div>' +
                            '</div>'
                        );
                    });
                }
            });
        }
    </script>
@stop