@section('head')
    <link rel="stylesheet" href="{{ asset('public/js/modules/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('public/js/modules/slick/slick-theme.css') }}">
    <style>
        .product-carousel .carousel-container {
            background-color: #e6a5a9;
            position: relative;
            overflow: hidden;
            padding: 100px 0;
        }

        .product-carousel .carousel-container:before,
        .product-carousel .carousel-container:after {
            content: '';
            position: absolute;
            display: block;
            transform: rotate(45deg);
            left: 0;
            right: 0;
            margin: 0 auto;
            width: 85%;
            padding-top: 85%;
        }

        .product-carousel .carousel-container:before {
            top: -107%;
            background-color: #d56970;
        }

        .product-carousel .carousel-container:after {
            border: 2px solid #fff;
            border-bottom: 0;
            border-right: 0;
            top: 260px;
            pointer-events: none;
        }

        .slick-list {
            width: calc(100% - 120px);
            margin: 0 auto;
            overflow: visible;
        }

        .slick-track {
            top: 50px;
            height: 530px;
        }

        .slick-slide {
            position: relative;
            text-align: center;
            transition: top 250ms cubic-bezier(0.25, 0.1, 0.25, 1), opacity 200ms ease;
            opacity: 1;
            outline: none!important;
            float: left;
            transform: translateZ(0);
        }

        .slick-slide:after {
            content: '';
            clear: both;
        }

        .slick-content {
            width: 100%;
            padding-top: 100%;
            position: relative;
        }

        .slick-content .vertical-align-abs {
            background-color: #fff;
            width: 100%;
            height: 100%;
            max-width: 240px;
            max-height: 240px;
            padding: 10px;
            left: 0;
            right: 0;
            margin: 0 auto;
            transform: translateY(-50%) rotate(45deg);
        }

        .slick-content img {
            max-width: 100%;
            margin: 0 auto;
            transform: rotate(-45deg);
        }

        .slick-slide:not(.slick-current):not(.slick-prev-1):not(.slick-prev-2):not(.slick-next-1):not(.slick-next-2) {
            opacity: 0;
            height: 0;
            padding: 0;
            /*margin-top: 48%;*/
            top: 100%;
        }

        .slick-prev-1,
        .slick-next-1 {
            /*margin-top: 16%;*/
            top: 34%;
        }

        .slick-prev-2,
        .slick-next-2 {
            /*margin-top: 32%;*/
            top: 67%;
        }

        .slick-current {
            top: 0;
        }

        .slick-controls-container {
            position: absolute;
            width: 100%;
            top: 50%;
            transform: translateY(-50%);
        }

        .slick-controls {
            position: relative;
            background-color: transparent;
            border: 0;
            color: #fff;
            outline: none!important;
            font-size: 80px;
        }

        .slick-controls.slick-left:after,
        .slick-controls.slick-right:after {
            content: '';
            position: absolute;
            display: block;
            width: 500px;
            height: 500px;
            background-color: #666;
            top: 50%;
            transform: translateY(-50%) rotate(45deg);
            z-index: -1;
        }

        .slick-controls i {
            position: relative;
        }

        .slick-controls.slick-left  {
            left: 15px;
            float: left;
        }

        .slick-controls.slick-right {
            right: 15px;
            float: right;
        }

        .slick-controls.slick-left:after {
            right: 0;
        }

        .slick-controls.slick-right:after {
            left: 0;
        }

        .slick-slide-info {
            position: absolute;
            left: 0;
            right: 0;
            width: 100%;
            margin: 0 auto;
            text-align: center;
            bottom: 0;
            height: 320px;
            overflow: hidden;
            z-index: 0;
        }

        .slick-slide-info:after {
            content: '';
            top: 240px;
            left: 0;
            position: absolute;
            width: 100%;
            padding-top: 100%;
            transform: rotate(45deg);
            background-color: #fff;
            z-index: -1;
        }

        .slick-slide-info .info-slide {
            /*position: absolute;
            top: 0;
            left: 0;
            right: 0;
            margin: 0 auto;
            height: 100%;
            shape-outside: polygon(409px 161px, 571px 0px, 735px 161px, 901px 330px, 242px 330px);*/
            padding: 180px 330px 0 330px;
            opacity: 0;
            transition: opacity 300ms ease;
            position: absolute;
            height: 0!important;
        }

        .slick-slide-info .info-slide.active {
            opacity: 1;
            height: 100%!important;
        }

        .slick-slide-info .info-slide h2 {
            margin-top: 0;
            margin-bottom: 20px;
            color: #ad5057;
            font-weight: bold;
        }

        .slick-slide-info .info-slide p {
            margin: 0;
            padding: 0 20px;
            font-size: 16px;
        }

        @media(max-width: 1200px) {
            .product-carousel .carousel-container:before {
                top: -86%;
            }
            .slick-slide:not(.slick-current):not(.slick-prev-1):not(.slick-prev-2):not(.slick-next-1):not(.slick-next-2) {
                top: 77%;
            }
            .slick-prev-1,
            .slick-next-1 {
                top: 26%;
            }
            .slick-prev-2,
            .slick-next-2 {
                top: 53%;
            }
            .slick-slide-info {
                height: 410px;
            }
            .slick-slide-info .info-slide {
                padding: 180px 315px 0 315px
            }
            .slick-slide-info .info-slide p {
                padding: 0;
            }
            .slick-controls {
                font-size: 60px;
            }
            .slick-controls.slick-left:after,
            .slick-controls.slick-right:after {
                width: 300px;
                height: 300px;
            }
        }

        @media(max-width: 992px) {
            .product-carousel .carousel-container {
                height: 500px;
            }
            .product-carousel .carousel-container:after {
                display: none;
            }
            .slick-list {
                height: auto;
            }
            .slick-track {
                top: 0;
                height: auto;
            }
            .slick-slide:not(.slick-current) {
                margin-top: 0!important;
                top: 0!important;
                opacity: 0;
            }
            .slick-slide-info {
                position: absolute;
                height: auto;
                bottom: 0;
                overflow: visible;
            }
            .slick-slide-info:after {
                display: none;
            }
            .slick-slide-info .info-slide {
                position: relative;
                padding: 0;
                overflow: visible;
            }
            .slick-slide-info .info-slide.active {
                padding: 10px;
                height: auto!important;
            }
        }

        @media(max-width: 767px) {
            .slick-content {
                width: 45%;
                padding-top: 45%;
                margin: 0 auto;
            }
            .slick-controls {
                font-size: 40px;
            }
            .slick-controls.slick-left:after,
            .slick-controls.slick-right:after {
                width: 200px;
                height: 200px;
            }
        }

        @media(max-width: 480px) {
            .slick-content {
                width: 80%;
                padding-top: 80%;
            }
            .slick-controls {
                font-size: 40px;
            }
            .slick-controls.slick-left:after,
            .slick-controls.slick-right:after {
                width: 150px;
                height: 150px;
            }
        }

        @media(max-width: 320px) {
            .slick-content {
                width: 100%;
                padding-top: 100%;
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

        <!-- ///////////  CAROUSEL  \\\\\\\\\\\ -->

        <!-- ================================== -->
        <div class="product-carousel container small-spacing" id="productCarousel">
            <h1 class="heading bold text-center">Productos</h1>
            <div class="carousel-container">
                <div class="slick-center">
                    <div>
                        <div class="slick-content" data-slide="1">
                            <div class="vertical-align-abs"><img src="{{ asset('public/img/micro/productos/1.png') }}" alt="producto"></div>
                        </div>
                    </div>
                    <div>
                        <div class="slick-content" data-slide="2">
                            <div class="vertical-align-abs"><img src="{{ asset('public/img/micro/productos/1.png') }}" alt="producto"></div>
                        </div>
                    </div>
                    <div>
                        <div class="slick-content" data-slide="3">
                            <div class="vertical-align-abs"><img src="{{ asset('public/img/micro/productos/1.png') }}" alt="producto"></div>
                        </div>
                    </div>
                    <div>
                        <div class="slick-content" data-slide="4">
                            <div class="vertical-align-abs"><img src="{{ asset('public/img/micro/productos/1.png') }}" alt="producto"></div>
                        </div>
                    </div>
                    <div>
                        <div class="slick-content" data-slide="5">
                            <div class="vertical-align-abs"><img src="{{ asset('public/img/micro/productos/1.png') }}" alt="producto"></div>
                        </div>
                    </div>
                    <div>
                        <div class="slick-content" data-slide="6">
                            <div class="vertical-align-abs"><img src="{{ asset('public/img/micro/productos/1.png') }}" alt="producto"></div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-info">
                    <div class="info-slide active" data-slide="1">
                        <h2>Lorem ipsum 1</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.
                        </p>
                    </div>
                    <div class="info-slide" data-slide="2">
                        <h2>Lorem ipsum 2</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.
                        </p>
                    </div>
                    <div class="info-slide" data-slide="3">
                        <h2>Lorem ipsum 3</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.
                        </p>
                    </div>
                    <div class="info-slide" data-slide="4">
                        <h2>Lorem ipsum 4</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.
                        </p>
                    </div>
                    <div class="info-slide" data-slide="5">
                        <h2>Lorem ipsum 5</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.
                        </p>
                    </div>
                    <div class="info-slide" data-slide="6">
                        <h2>Lorem ipsum 6</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="slick-controls-container">
                    <button class="slick-left slick-controls"><i class="fa fa-arrow-left" aria-hidden="true"></i></button>
                    <button class="slick-right slick-controls"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
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
    </script>

    <script src="{{ asset('public/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('public/js/modules/slick/slick.min.js') }}"></script>
    <script>
        var slider = $('.slick-center');

        slider.on('init', function () {
            initSliderFunctions();
        });

        function initSliderFunctions(reInit) {
            var active =  $('.slick-current');
            if(reInit) {
                $('.slick-prev-1').removeClass('slick-prev-1');
                $('.slick-prev-2').removeClass('slick-prev-2');
                $('.slick-next-1').removeClass('slick-next-1');
                $('.slick-next-2').removeClass('slick-next-2');
            }
            active.prev().addClass('slick-prev-1').prev().addClass('slick-prev-2');
            active.next().addClass('slick-next-1').next().addClass('slick-next-2');
        }

        slider.on('beforeChange', function () {
            $('.info-slide').removeClass('active');
            switch (direction) {
                case 'left':
                    $('.slick-prev-1').removeClass('slick-prev-1');
                    $('.slick-prev-2').removeClass('slick-prev-2').addClass('slick-prev-1');
                    $('.slick-prev-1').prev().addClass('slick-prev-2');
                    $('.slick-next-2').removeClass('slick-next-2');
                    $('.slick-next-1').removeClass('slick-next-1').addClass('slick-next-2');
                    $('.slick-current').addClass('slick-next-1');
                    break;
                case 'right':
                    $('.slick-prev-2').removeClass('slick-prev-2');
                    $('.slick-prev-1').removeClass('slick-prev-1').addClass('slick-prev-2');
                    $('.slick-current').addClass('slick-prev-1');
                    $('.slick-next-1').removeClass('slick-next-1');
                    $('.slick-next-2').removeClass('slick-next-2').addClass('slick-next-1');
                    $('.slick-next-1').next().addClass('slick-next-2');
                    break;
            }
        });

        slider.on('afterChange', function () {
            var slide_number = $('.slick-current').find('.slick-content').data('slide');
            $('.info-slide[data-slide='+slide_number+']').addClass('active');
        });

        var direction;
        $('.slick-right').click(function(){
            direction = 'right';
            slider.slick('slickNext');
        });

        $('.slick-left').click(function(){
            direction = 'left';
            slider.slick('slickPrev');
        });

        slider.slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 5,
            arrows: false,
            infinite: false,
            draggable: false,
            speed: 280,
            cssEase: 'cubic-bezier(0.25, 0.1, 0.25, 1)',
            responsive: [
                {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 321,
                    settings: {
                        centerPadding: '0px'
                    }
                }
            ]
        });

        var rtime;
        var timeout = false;
        var delta = 200;
        $(window).resize(function() {
            rtime = new Date();
            if (timeout === false) {
                timeout = true;
                setTimeout(resizeend, delta);
            }
        });

        function resizeend() {
            if (new Date() - rtime < delta) {
                setTimeout(resizeend, delta);
            } else {
                timeout = false;
                slider.slick('reinit');
                initSliderFunctions(true);
            }
        }
    </script>
@stop