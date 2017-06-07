@include('layouts.header')
<!-- ================================== -->

<!-- ///////////  BANNER  \\\\\\\\\\\ -->

<!-- ================================== -->
<div class="banner" id="banner">
    <div class="parallax">
        <div class="parallax-element" data-parallax="{{ asset('img/index/banner.jpg') }}"></div>
    </div>
    <div class="container">
        <div id="bannerCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bannerCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#bannerCarousel" data-slide-to="1"></li>
                <li data-target="#bannerCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <div class="vertical-align">
                        <h3>Chihuahua capital:</h3>
                        <h2>
                            Será sede del Congreso Nacional<br>
                            AMEREF 2019
                        </h2>
                    </div>
                </div>
                <div class="item">
                    <div class="vertical-align">
                        <h3>Chihuahua capital:</h3>
                        <h2>
                            Será sede del Congreso Nacional<br>
                            AMEREF 2019
                        </h2>
                    </div>
                </div>
                <div class="item">
                    <div class="vertical-align">
                        <h3>Chihuahua capital:</h3>
                        <h2>
                            Será sede del Congreso Nacional<br>
                            AMEREF 2019
                        </h2>
                    </div>
                </div>

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
        <h1 class="heading heading-right text-right">ACERCA DE <span>LA SECRETARÍA</span></h1>
        <div class="row no-margin nav-tab-menu">
            <div class="col-sm-4 img-container">
                <a href="#tab-1" data-toggle="tab"><div class="img-bg" style="background: url('{{ asset('img/index/nosotros/1.jpg') }}')no-repeat center center"></div></a>
            </div>
            <div class="col-sm-4 img-container">
                <a href="#tab-2" data-toggle="tab"><div class="img-bg" style="background: url('{{ asset('img/index/nosotros/2.jpg') }}')no-repeat center center"></div></a>
            </div>
            <div class="col-sm-4 img-container">
                <a href="#tab-3" data-toggle="tab"><div class="img-bg" style="background: url('{{ asset('img/index/nosotros/3.jpg') }}')no-repeat center center"></div></a>
            </div>
        </div>
        <div class="tab-content blue">
            <div id="tab-1" class="tab-pane fade in active">
                <h3>MISIÓN</h3>
                <p class="text">
                    Generar una economía vigorosa de mayor valor a través de la generación
                    de estrategias, políticas y programas que mejoren el entorno económico
                    y fomenten la innovación en el estado, con el fin de impulsar la movilidad
                    social y asegurar una mejor calida de vida en la población.
                </p>
            </div>
            <div id="tab-2" class="tab-pane fade">
                <h3>Ejemplo 2</h3>
                <p class="text">
                    Texto 2
                </p>
            </div>
            <div id="tab-3" class="tab-pane fade">
                <h3>Ejemplo 3</h3>
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

<!-- ///////////  ¿CÓMO INNOVAS?  \\\\\\\\\\\ -->

<!-- ================================== -->
<div class="innovas" id="innovas">
    <div class="parallax">
        <div class="parallax-element" data-parallax="{{ asset('img/index/innovas.jpg') }}"></div>
    </div>
    <div class="container">
        <div class="question-box">
            <h2 class="white text-center">¿CÓMO INNOVAS <span class="bold">CHIHUAHUA?</span></h2>
            <div class="input-group">
                <i class="fa fa-search" aria-hidden="true"></i>
                <input class="form-control" type="text">
            </div>
        </div>
    </div>
</div>
<!-- ================================== -->

<!-- ///////////  INDUSTRIAS CLAVE  \\\\\\\\\\\ -->

<!-- ================================== -->
<div class="industrias spacing" id="industrias">
    <div class="container">
        <h1 class="heading heading-left"><span>INDUSTRIAS</span> CLAVE</h1>
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
        <h1 class="heading heading-right text-right">BLOG DE <span>NOTCIAS</span></h1>
        <div class="row no-margin text-center blog-feed">
            <div class="col-sm-4">
                <div class="img-bg" style="background: url({{ asset('img/index/blog/1.jpg') }})"></div>
                <h4 class="bold">Arranca Programa de Capacitación</h4>
                <h5>03/04/17</h5>
                <p>
                    Este día dio inicio la Capacitación, Evaluación y Certificación de 26 Operadores
                    del Transporte Público con el objetivo de contribuir a la seguirdad vial ...
                </p>
                <a href="#">LEER MÁS</a>
            </div>
            <div class="col-sm-4">
                <div class="img-bg" style="background: url({{ asset('img/index/blog/2.jpg') }})"></div>
                <h4 class="bold">Se emite convocatoria para becas al extranjero</h4>
                <h5>03/04/17</h5>
                <p>
                    Este día dio inicio la Capacitación, Evaluación y Certificación de 26 Operadores
                    del Transporte Público con el objetivo de contribuir a la seguirdad vial ...
                </p>
                <a href="#">LEER MÁS</a>
            </div>
            <div class="col-sm-4">
                <div class="img-bg" style="background: url({{ asset('img/index/blog/3.jpg') }})"></div>
                <h4 class="bold">Gana el maratón Caballo Blanco</h4>
                <h5>03/04/17</h5>
                <p>
                    Este día dio inicio la Capacitación, Evaluación y Certificación de 26 Operadores
                    del Transporte Público con el objetivo de contribuir a la seguirdad vial ...
                </p>
                <a href="#">LEER MÁS</a>
            </div>
        </div>
        <div class="blog-nav text-center">
            <a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
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
        <h1 class="heading heading-left"><span>¿DUDAS?</span> CONTÁCTANOS</h1>
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
@include('layouts.footer')