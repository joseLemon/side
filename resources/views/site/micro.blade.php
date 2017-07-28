@extends('layouts.site.master')
@section('content')
    <div class="{{ $overlay_color }}-overlay">
        <!-- ================================== -->

        <!-- ///////////  BANNER  \\\\\\\\\\\ -->

        <!-- ================================== -->
        <div class="banner red-overlay" id="banner" style="background: url('{{ asset('img/index/banners/4.jpg') }}') no-repeat center center">
            <div class="container">
                <div class="diamond-container">
                    <div class="diamond diamond-1">
                        <a href="">
                            <div class="title">
                                <div class="header">
                                    Chihuahua capital:<br> Será sede del Congreso Nacional AMEREF
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="bg-color"></div>
                    <div class="diamond diamond-2">
                        <a href="">
                            <div class="title">
                                <div class="header">
                                    Chihuahua capital:<br> Será sede del Congreso Nacional AMEREF
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="bg-color"></div>
                    <div class="diamond diamond-3 featured">
                        <a href="">
                            <div class="title">
                                <div class="header">
                                    Chihuahua capital:<br> Será sede del Congreso Nacional AMEREF
                                </div>
                                <span class="date">2019</span>
                            </div>
                        </a>
                    </div>
                    <div class="bg-color"></div>
                    <div class="diamond diamond-4">
                        <a href="">
                            <div class="title">
                                <div class="header">
                                    Chihuahua capital:<br> Será sede del Congreso Nacional AMEREF
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="bg-color"></div>
                    <div class="diamond diamond-5">
                        <a href="">
                            <div class="title">
                                <div class="header">
                                    Chihuahua capital:<br> Será sede del Congreso Nacional AMEREF
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="bg-color"></div>
                    <div class="diamond diamond-6 featured">
                        <a href="">
                            <div class="title">
                                <div class="header">
                                    Chihuahua capital:<br> Será sede del Congreso Nacional AMEREF
                                </div>
                                <span class="date">2019</span>
                            </div>
                        </a>
                    </div>
                    <div class="bg-color"></div>
                    <div class="diamond diamond-7">
                        <a href="">
                            <div class="title">
                                <div class="header">
                                    Chihuahua capital:<br> Será sede del Congreso Nacional AMEREF
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="bg-color"></div>
                    <div class="diamond diamond-8 featured">
                        <a href="">
                            <div class="title">
                                <div class="header">
                                    Chihuahua capital:<br> Será sede del Congreso Nacional AMEREF
                                </div>
                                <span class="date">2019</span>
                            </div>
                        </a>
                    </div>
                    <div class="bg-color"></div>
                    <div class="diamond diamond-9">
                        <a href="">
                            <div class="title">
                                <div class="header">
                                    Chihuahua capital:<br> Será sede del Congreso Nacional AMEREF
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="bg-color"></div>
                    <div class="diamond diamond-10 featured">
                        <a href="">
                            <div class="title">
                                <div class="header">
                                    Chihuahua capital:<br> Será sede del Congreso Nacional AMEREF
                                </div>
                                <span class="date">2019</span>
                            </div>
                        </a>
                    </div>
                    <div class="bg-color"></div>
                    <div class="diamond diamond-11">
                        <a href="">
                            <div class="title">
                                <div class="header">
                                    Chihuahua capital:<br> Será sede del Congreso Nacional AMEREF
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="bg-color"></div>
                </div>
            </div>
        </div>
        <!-- ================================== -->

        <!-- ///////////  ACERCA  \\\\\\\\\\\ -->

        <!-- ================================== -->
        <div class="acerca" id="acerca">
            <div class="container spacing">
                <h1 class="heading bold text-center">¿Quiénes somos?</h1>
                <div class="fancy-text">
                    <p>
                        Somos el Fideicomiso Para el Fomento de las Actividades en el Estado de Chihuahua (FIDEAPECH),
                        y ofrecemos diversas opciones de crédito para negocios, mediante planes de financiamiento adecuados
                        a sus necesidades, con las tasas mas bajas del mercado, que ayuda al desarrollo sustentable de
                        nuestro Estado.
                    </p>
                    <p>
                        El fin del fideicomiso es incentivar la economía del Estado de Chihuahua.
                    </p>
                </div>
            </div>
        </div>
        <!-- ================================== -->

        <!-- ///////////  BANNER  \\\\\\\\\\\ -->

        <!-- ================================== -->
        <div class="mision" id="mision">
            <div class="container"></div>
        </div>
        <!-- ================================== -->

        <!-- ///////////  VIDEO  \\\\\\\\\\\ -->

        <!-- ================================== -->
        <div class="video" id="video">
            <div class="parallax-container big-spacing">
                <div class="parallax">
                    <img src="{{ asset('img/index/banners/5.jpg') }}">
                </div>
                <div class="container">
                    <a href="#video-modal" data-toggle="modal" data-target="#video-modal">
                        <i class="fa fa-youtube-play"></i>
                    </a>
                </div>
            </div>
        </div>
        <div id="video-modal" class="modal fade video-modal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/HLVucxPibRs" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="programas" id="programas">
            <div class="container spacing">
                <h1 class="heading bold text-center">Conoce nuestros programas</h1>
            </div>
        </div>
        <!-- ================================== -->

        <!-- ///////////  PROGRAMAS  \\\\\\\\\\\ -->

        <!-- ================================== -->
        <div class="programas" id="programas">
            <div class="parallax-container">
                <div class="parallax">
                    <img src="{{ asset('img/index/banners/6.jpg') }}">
                </div>
                <div class="container">
                    <h1 class="heading bold white text-center">Programas administrados</h1>
                </div>
            </div>
        </div>
    </div>
@stop
@section('scripts')
@stop