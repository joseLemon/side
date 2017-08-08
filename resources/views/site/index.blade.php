@extends('layouts.site.master')
@section('content')
    <!-- ================================== -->

    <!-- ///////////  BANNER  \\\\\\\\\\\ -->

    <!-- ================================== -->
    <div class="banner main" id="banner" style="background: url('{{ asset('img/index/banners/1.jpg') }}') no-repeat center center">
        <div class="container">
            <div class="diamond-container">
                <div class="diamond diamond-1"></div>
                <div class="bg-color"></div>
                <div class="diamond diamond-2"></div>
                <div class="bg-color"></div>
                <div class="diamond diamond-3 featured">
                    <a href="http://thebordermarket.com/" target="_blank">
                        <div class="title">
                            <div class="header">
                                The Border Market:<br> La exposición más grande de la frontera  el 17, 18 y 19 de agosto
                            </div>
                        </div>
                    </a>
                </div>
                <div class="bg-color"></div>
                <div class="diamond diamond-4"></div>
                <div class="bg-color"></div>
                <div class="diamond diamond-5"></div>
                <div class="bg-color"></div>
                <div class="diamond diamond-6 featured">
                    <a href="" onclick="event.preventDefault();">
                        <div class="title">
                            <div class="header">
                                Tienes una microempresa metalmecánica, gastronómica o de comercio y servicio el “Fondo Frontera” es para ti.<br>
                                Informes: (656) 629 3300 EXT. 54900
                            </div>
                        </div>
                    </a>
                </div>
                <div class="bg-color"></div>
                <div class="diamond diamond-7"></div>
                <div class="bg-color"></div>
                <div class="diamond diamond-8 featured">
                    <a href="http://www.visitajuarez.com/" target="_blank">
                        <div class="title">
                            <div class="header">
                                “Aventura en Dunas”<br> 23, 7, 24 de septiembre (656) 629 33 00 EXT. 54924, 54931
                            </div>
                        </div>
                    </a>
                </div>
                <div class="bg-color"></div>
                <div class="diamond diamond-9"> </div>
                <div class="bg-color"></div>
                <div class="diamond diamond-10 featured">
                    <a href="http://chihuahuainnova.mx/" target="_blank">
                        <div class="title">
                            <div class="header">
                                Chihuahua Innova ¡Participa en nuestra convocatoria! Entra al siguiente link y participa con tu proyecto en Chihuahua Innova http://chihuahuainnova.mx/
                            </div>
                        </div>
                    </a>
                </div>
                <div class="bg-color"></div>
                <div class="diamond diamond-11"></div>
                <div class="bg-color"></div>
            </div>
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
                    <a href="#">
                    <span class="circle-hover">
                        <p>
                            DIRECCIÓN DE PROMOCIÓN
                            <span class="more">Ver más</span>
                        </p>
                    </span>
                        <div class="img-container">
                            <img src="{{ asset('img/index/direcciones/1.jpg') }}">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-xs-6 light-red">
                    <a href="">
                    <span class="circle-hover">
                        <p>
                            ICATECH
                            <span class="more">Ver más</span>
                        </p>
                    </span>
                        <div class="img-container">
                            <img src="{{ asset('img/index/direcciones/2.jpg') }}">
                        </div>
                    </a>
                </div>
            <!--<div class="col-sm-4 col-xs-6 pink">
                    <a href="#">
                    <span class="circle-hover">
                        <p>
                            CODECH
                            <span class="more">Ver más</span>
                        </p>
                    </span>
                        <div class="img-container">
                            <img src="{{ asset('img/index/direcciones/3.png') }}">
                        </div>
                    </a>
                </div>-->
                <div class="col-sm-4 col-xs-6 salmon">
                    <a href="#">
                    <span class="circle-hover">
                        <p>
                            FODARCH
                            <span class="more">Ver más</span>
                        </p>
                    </span>
                        <div class="img-container">
                            <img src="{{ asset('img/index/direcciones/3.jpg') }}">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-xs-6 magenta">
                    <a href="#">
                    <span class="circle-hover">
                        <p>
                            AH CHIHUAHUA
                            <span class="more">Ver más</span>
                        </p>
                    </span>
                        <div class="img-container">
                            <img src="{{ asset('img/index/direcciones/4.jpg') }}">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-xs-6 purple">
                    <a href="#">
                    <span class="circle-hover">
                        <p>
                            I<sup>2</sup>C
                            <span class="more">Ver más</span>
                        </p>
                    </span>
                        <div class="img-container">
                            <img src="{{ asset('img/index/direcciones/5.jpg') }}">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-xs-6 indigo">
                    <a href="#">
                    <span class="circle-hover">
                        <p>
                            INADET
                            <span class="more">Ver más</span>
                        </p>
                    </span>
                        <div class="img-container">
                            <img src="{{ asset('img/index/direcciones/6.jpg') }}">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-xs-6 dark-blue">
                    <a href="#">
                    <span class="circle-hover">
                        <p>
                            FIDEAPECH
                            <span class="more">Ver más</span>
                        </p>
                    </span>
                        <div class="img-container">
                            <img src="{{ asset('img/index/direcciones/7.jpg') }}">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-xs-6 blue">
                    <a href="#">
                    <span class="circle-hover">
                        <p>
                            DIRECCIÓN DE COMERCIO
                            <span class="more">Ver más</span>
                        </p>
                    </span>
                        <div class="img-container">
                            <img src="{{ asset('img/index/direcciones/8.jpg') }}">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-xs-6 light-blue">
                    <a href="#">
                    <span class="circle-hover">
                        <p>
                            ASACH
                            <span class="more">Ver más</span>
                        </p>
                    </span>
                        <div class="img-container">
                            <img src="{{ asset('img/index/direcciones/9.jpg') }}">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-xs-6 cyan">
                    <a href="#">
                    <span class="circle-hover">
                        <p>
                            DIRECCIÓN DE GESTIÓN ESTRATÉGICA Y EFICACIA
                            <span class="more">Ver más</span>
                        </p>
                    </span>
                        <div class="img-container">
                            <img src="{{ asset('img/index/direcciones/10.jpg') }}">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-xs-6 lime">
                    <a href="#">
                    <span class="circle-hover">
                        <p>
                            DIRECCIÓN DE AGROINDUSTRIA
                            <span class="more">Ver más</span>
                        </p>
                    </span>
                        <div class="img-container">
                            <img src="{{ asset('img/index/direcciones/11.jpg') }}">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-xs-6 light-green">
                    <a href="#">
                    <span class="circle-hover">
                        <p>
                            DIRECCIÓN DE ENERGÍA
                            <span class="more">Ver más</span>
                        </p>
                    </span>
                        <div class="img-container">
                            <img src="{{ asset('img/index/direcciones/12.jpg') }}">
                        </div>
                    </a>
                </div>
            <!--<div class="col-sm-4 col-xs-6 green">
                    <a href="#">
                    <span class="circle-hover">
                        <p>
                            FIDEICOMISO BARRANCAS DE COBRE
                            <span class="more">Ver más</span>
                        </p>
                    </span>
                        <div class="img-container">
                            <img src="{{ asset('img/index/direcciones/6.png') }}">
                        </div>
                    </a>
                </div>-->
                <div class="col-sm-4 col-xs-6 yellow">
                    <a href="#">
                    <span class="circle-hover">
                        <p>
                            DIRECCIÓN DE TURISMO
                            <span class="more">Ver más</span>
                        </p>
                    </span>
                        <div class="img-container">
                            <img src="{{ asset('img/index/direcciones/13.jpg') }}">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-xs-6 orange">
                    <a href="#">
                    <span class="circle-hover">
                        <p>
                            DIRECCIÓN DE INDUSTRIA
                            <span class="more">Ver más</span>
                        </p>
                    </span>
                        <div class="img-container">
                            <img src="{{ asset('img/index/direcciones/14.jpg') }}">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-xs-6 brown">
                    <a href="#">
                    <span class="circle-hover">
                        <p>
                            DIRECCIÓN DE MINERÍA
                            <span class="more">Ver más</span>
                        </p>
                    </span>
                        <div class="img-container">
                            <img src="{{ asset('img/index/direcciones/15.jpg') }}">
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 col-xs-6 gray">
                    <a href="#">
                    <span class="circle-hover">
                        <p>
                            PROMOTORA DE LA INDUSTRIA DE CHIHUAHUA
                            <span class="more">Ver más</span>
                        </p>
                    </span>
                        <div class="img-container">
                            <img src="{{ asset('img/index/direcciones/16.jpg') }}">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- ================================== -->

    <!-- ///////////  OPPORTUNITIES  \\\\\\\\\\\ -->

    <!-- ================================== -->
    <div class="opportunities bg-cover spacing" id="opportunities" style="background: url('{{ asset('img/index/banners/2.jpg') }}') no-repeat center bottom">
        <div class="fancy-box text-center">
            <a href="http://theborderopportunities.com" target="_blank" class="white">theborderopportunities.com</a>
        </div>
    </div>
    <!-- ================================== -->

    <!-- ///////////  BLOG DE NOTICIAS  \\\\\\\\\\\ -->

    <!-- ================================== -->
    <div class="blog spacing" id="blog">
        <div class="container">
            <h1 class="heading text-center">Blog de <span class="bold">Noticias</span></h1>
            <div class="row no-margin blog-feed">
                <div class="col-sm-4">
                    <div class="img-bg" style="background: url('{{ asset('uploads/blog/1/1.jpg') }}') no-repeat center center; background-size: cover;"></div>
                    <div class="post-summary">
                        <h5>14-07-2017</h5>
                        <h4 class="bold">Presenta Innovación y Desarrollo Económico 46 proyectos productivos para Madera</h4>
                        <p class="text">La implementación de 46 proyectos vinculados al desarrollo, productividad y activación económica del municipio de Madera, fue ...</p>
                        <a href="#">Leer más</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="img-bg" style="background: url('{{ asset('uploads/blog/2/2.jpg') }}') no-repeat center center; background-size: cover;"></div>
                    <div class="post-summary">
                        <h5>21-07-2017</h5>
                        <h4 class="bold">Inversión Extranjera repuntará en los próximos meses en el estado</h4>
                        <p class="text">
                            La Inversión Extranjera directa dejó ganancias por 389.3 mdd en el primer trimestre del año
                            Afirmó el ...
                        </p>
                        <a href="#">Leer más</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="img-bg" style="background: url('{{ asset('uploads/blog/3/3.jpg') }}') no-repeat center center; background-size: cover;"></div>
                    <div class="post-summary">
                        <h5>25-07-2017</h5>
                        <h4 class="bold">Ciudad Juárez está lista para "The Border Market"</h4>
                        <p class="text">
                            Un encuentro que recibirá a 96 productores de las áreas industrial, turística, comercial y ...</p>
                        <a href="#">Leer más</a>
                    </div>
                </div>
            </div>
            <!--<div class="blog-nav text-center">
                <a href="#" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                </a>
                <a href="#" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                </a>
            </div>-->
        </div>
    </div>
    <!-- ================================== -->

    <!-- ///////////  CHIHUAHUA  \\\\\\\\\\\ -->

    <!-- ================================== -->
    <div class="chihuahua bg-cover" id="chihuahua" style="/*background: url('{{ asset('img/index/banners/3.jpg') }}') no-repeat center top;*/">
        <video src="{{ asset('video/1.mp4') }}" autoplay></video>
    <!--<div class="fancy-box text-center">
            <img class="center-block" src="{{ asset('img/index/decorations/1.png') }}">
        </div>-->
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
                        Ser una institución reconocida por su capacidad de generar las condiciones
                        para fomentar el desarrollo económico y la innovación en el estado, que se vea
                        traducido en un crecimiento dinámico y sustentable basado en una sinergia de
                        los sectores: industrial, comercial, energía, agroindustrial, turismo y de servicio,
                        basada en una actitud de servicio, con una estructura de trabajo profesional y
                        orientada a resultados.
                    </p>
                </div>
                <div id="tab-3" class="tab-pane fade">
                    <ul class="text">
                        <li>Transparencia</li>
                        <li>Confianza</li>
                        <li>Honestidad</li>
                        <li>Innovación</li>
                        <li>Respeto</li>
                        <li>Solidaridad</li>
                        <li>Integridad</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    <script>
        /*$(document).ready(function () {
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
        }*/
    </script>
@stop