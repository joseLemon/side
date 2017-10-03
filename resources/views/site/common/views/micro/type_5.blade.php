@section('head')
    <link rel="stylesheet" href="{{ asset('public/js/modules/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('public/js/modules/slick/slick-theme.css') }}">
    <style>
        .flex-container {
            display: flex;
        }

        .flex-container .year-selector {
            flex: 0;
            width: 0;
            text-align: center;
            padding: 250px 0;
            cursor: pointer;
            position: relative;
            transition: all 300ms ease;
        }

        .flex-container .year-selector:nth-of-type(1) {
            background-color: #959595;
        }
        .flex-container .year-selector:nth-of-type(2) {
            background-color: #b7b7b7;
        }
        .flex-container .year-selector:nth-of-type(3) {
            background-color: #996666;
        }
        .flex-container .year-selector:nth-of-type(4) {
            background-color: #cc6666;
        }
        .flex-container .year-selector:nth-of-type(5) {
            background-color: #ff9999;
        }

        .flex-container .year-selector.active {
            flex: 1;
        }

        .flex-container .year-selector h4,
        .flex-container .month-selection .month-selector h4 {
            font-family: 'GothamBold', sans-serif;
            font-size: 30px;
            color: #fff;
            transition: all 200ms ease;
            left: 0;
            right: 0;
            opacity: 0;
            width: 0;
            margin: 0;
        }

        .flex-container .year-selector.active h4,
        .flex-container .month-selection.shown .month-selector h4 {
            opacity: 1;
            width: auto;
        }

        .flex-container .year-selector:hover h4 {
            font-size: 33px;
        }

        .flex-container .month-selection {
            flex: 0;
            width: 0;
            position: relative;
        }

        .flex-container .month-selection.shown {
            flex: 4;
            width: auto;
            background: url("{{ asset('public/img/micro/prontuarios/1.jpg') }}") no-repeat center center;
            background-size: cover;
            padding: 8px;
        }

        .flex-container .month-selection .flex-container {
            height: 33.3333%;
        }

        .flex-container .month-selection .month-selector {
            flex: 1 0 auto;
            position: relative;
            z-index: 10;
        }

        .flex-container .month-selection .month-selector:after {
            content: '';
            position: absolute;
            top: 8px;
            left: 8px;
            width: calc(100% - 16px);
            height: calc(100% - 16px);
            background-color: #fff;
            opacity: .8;
            z-index: -1;
        }

        .flex-container .month-selection .month-selector:nth-of-type(1) {
            order: 1;
        }
        .flex-container .month-selection .month-selector:nth-of-type(2) {
            order: 2;
        }
        .flex-container .month-selection .month-selector:nth-of-type(3) {
            order: 3;
        }
        .flex-container .month-selection .month-selector:nth-of-type(4) {
            order: 4;
        }

        .flex-container .month-selection .month-selector h4 {
            color: #666;
            font-size: 20px;
            text-align: center;
        }

        .flex-container .month-selection .month-selector:hover h4 {
            font-size: 24px;
        }

        .flex-container .month-selection .close-month-selection {
            position: absolute;
            left: -35px;
            font-size: 27px;
            padding: 0;
            background: transparent;
            border: 0;
            outline: none!important;
            opacity: 0;
            transition: opacity 400ms ease;
            color: #fff;
        }

        .flex-container .month-selection.shown .close-month-selection {
            opacity: .7;
        }

        .flex-container .month-selection.shown .close-month-selection:hover {
            opacity: .9;
        }

        @media(max-width: 992px) {
            .flex-container .month-selection .flex-container {
                flex-flow: column wrap;
            }
            .flex-container .month-selection .month-selector {
                height: 50%;
            }
            .flex-container .month-selection .month-selector:nth-of-type(2) {
                order: 3;
            }
            .flex-container .month-selection .month-selector:nth-of-type(3) {
                flex-grow: 0;
                flex-basis: 50%;
                order: 2;
            }
            .flex-container .month-selection.shown {
                padding: 5px;
            }
            .flex-container .month-selection .month-selector:after {
                top: 5px;
                left: 5px;
                width: calc(100% - 10px);
                height: calc(100% - 10px);
            }
        }
    </style>
@stop
@extends('layouts.site.master')
@section('content')
    <div class="cyan-overlay">
        <!-- ================================== -->

        <!-- ///////////  BANNER  \\\\\\\\\\\ -->

        <!-- ================================== -->
        <div class="banner red-overlay" id="banner" style="background: url('{{ asset('public/img/index/banners/4.jpg') }}') no-repeat center center">
            <div class="container">
                <div class="diamond-container">
                    <div class="diamond diamond-1"></div>
                    <div class="bg-color"></div>
                    <div class="diamond diamond-2"></div>
                    <div class="bg-color"></div>
                    <div class="diamond diamond-3 featured">
                        <a href="">
                            <div class="title">
                                <div class="header">
                                    INSTITUTO DE CAPACITACIÓN PARA EL TRABAJO DEL ESTADO DE CHIHUAHUA
                                </div>
                                <span class="date">ICATECH:</span>
                            </div>
                        </a>
                    </div>
                    <div class="bg-color"></div>
                    <div class="diamond diamond-4"></div>
                    <div class="bg-color"></div>
                    <div class="diamond diamond-5"></div>
                    <div class="bg-color"></div>
                    <div class="diamond diamond-6 featured"></div>
                    <div class="bg-color"></div>
                    <div class="diamond diamond-7"></div>
                    <div class="bg-color"></div>
                    <div class="diamond diamond-8 featured"></div>
                    <div class="bg-color"></div>
                    <div class="diamond diamond-9"></div>
                    <div class="bg-color"></div>
                    <div class="diamond diamond-10 featured"></div>
                    <div class="bg-color"></div>
                    <div class="diamond diamond-11"></div>
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
            <div class="info">
                <div class="row no-margin">
                    <div class="col-sm-4">
                        <img src="{{ asset('public/img/micro/acerca/1.png') }}">
                        <h2>Misión</h2>
                    </div>
                    <div class="col-sm-4">
                        <img src="{{ asset('public/img/micro/acerca/2.png') }}">
                        <h2>Visión</h2>
                    </div>
                    <div class="col-sm-4">
                        <img src="{{ asset('public/img/micro/acerca/3.png') }}">
                        <h2>Valores</h2>
                    </div>
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
                    <img src="{{ asset('public/img/index/banners/5.jpg') }}">
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
        <!-- ================================== -->

        <!-- ///////////  PRONTUARIOS  \\\\\\\\\\\ -->

        <!-- ================================== -->
        <div class="prontuarios" id="prontuarios">
            <div class="flex-container">
                <div class="year-selector active" data-year="2013">
                    <h4 class="vertical-align-abs">2013</h4>
                </div>
                <div class="year-selector active" data-year="2014">
                    <h4 class="vertical-align-abs">2014</h4>
                </div>
                <div class="year-selector active" data-year="2015">
                    <h4 class="vertical-align-abs">2015</h4>
                </div>
                <div class="year-selector active" data-year="2016">
                    <h4 class="vertical-align-abs">2016</h4>
                </div>
                <div class="year-selector active" data-year="2017">
                    <h4 class="vertical-align-abs">2017</h4>
                </div>
                <div class="month-selection">
                    <button class="close-month-selection">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                    <div class="flex-container">
                        <div class="month-selector" data-month="1">
                            <h4 class="vertical-align-abs">Enero</h4>
                        </div>
                        <div class="month-selector" data-month="2">
                            <h4 class="vertical-align-abs">Febrero</h4>
                        </div>
                        <div class="month-selector" data-month="3">
                            <h4 class="vertical-align-abs">Marzo</h4>
                        </div>
                        <div class="month-selector" data-month="4">
                            <h4 class="vertical-align-abs">Abril</h4>
                        </div>
                    </div>
                    <div class="flex-container">
                        <div class="month-selector" data-month="5">
                            <h4 class="vertical-align-abs">Mayo</h4>
                        </div>
                        <div class="month-selector" data-month="6">
                            <h4 class="vertical-align-abs">Junio</h4>
                        </div>
                        <div class="month-selector" data-month="7">
                            <h4 class="vertical-align-abs">Julio</h4>
                        </div>
                        <div class="month-selector" data-month="8">
                            <h4 class="vertical-align-abs">Agosto</h4>
                        </div>
                    </div>
                    <div class="flex-container">
                        <div class="month-selector" data-month="9">
                            <h4 class="vertical-align-abs">Septiembre</h4>
                        </div>
                        <div class="month-selector" data-month="10">
                            <h4 class="vertical-align-abs">Octubre</h4>
                        </div>
                        <div class="month-selector" data-month="11">
                            <h4 class="vertical-align-abs">Noviembre</h4>
                        </div>
                        <div class="month-selector" data-month="12">
                            <h4 class="vertical-align-abs">Diciembre</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    <script>
        /* REFRESH SRC OF VIDEO IFRAME */
        var iframe;
        $(document).ready(function() {
            iframe = $("#video-modal").find('iframe').attr('src');
            $("#video-modal").find('iframe').attr("src", "");
        });
        $("#video-modal").on('show.bs.modal', function () {
            $(this).find('iframe').attr("src", iframe);
        });
        $("#video-modal").on('hidden.bs.modal', function () {
            $(this).find('iframe').attr("src", "");
        });

        $('.year-selector').click(function () {
            var year_selector = $(this),
                year = year_selector.data('year');

            $('.year-selector').not(year_selector).removeClass('active');
            $('.month-selection').addClass('shown');
            year_selector.css({'pointer-events':'none'});
        });

        $('.close-month-selection').click(function () {
            $('.month-selection').removeClass('shown');

            $('.year-selector').each(function () {
                var year_selector = $(this);

                if(!year_selector.hasClass('active')) {
                    year_selector.addClass('active');
                } else {
                    year_selector.css({'pointer-events':'all'});
                }
            });
        });
    </script>
@stop