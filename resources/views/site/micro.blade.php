@extends('layouts.site.master')
@section('content')
    <div class="{{ $page->color_slug }}-overlay micro-container">
        <!-- ================================== -->

        <!-- ///////////  BANNER  \\\\\\\\\\\ -->

        <!-- ================================== -->
        <div class="banner red-overlay" id="banner" style="background: url('{{ asset('public/uploads/pages').'/'.$page->page_id.'/banner_1_img'.strchr($page->micro->banner_1_img,'.') }}') no-repeat center center">
            <div class="container">
                <div class="diamond-container">
                    <div class="diamond diamond-1"></div>
                    <div class="bg-color"></div>
                    <div class="diamond diamond-2"></div>
                    <div class="bg-color"></div>
                    <div class="diamond diamond-3 featured">
                        <a href="@isset($page->micro->diamond_1_url){{ $page->micro->diamond_1_url }}@endisset">
                            <div class="title">
                                <div class="header">
                                    @if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_diamond_1_text))
                                            {!! $page->micro->en_diamond_1_text !!}
                                        @else
                                            {!! $page->micro->es_diamond_1_text !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_diamond_1_text !!}
                                    @endif
                                </div>
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
                <h1 class="heading bold text-center">
                    @if(isset($_COOKIE['indexLanguage']))
                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_page_about_title))
                            {!! $page->micro->en_page_about_title !!}
                        @else
                            {!! $page->micro->es_page_about_title !!}
                        @endif
                    @else
                        {!! $page->micro->es_page_about_title !!}
                    @endif
                </h1>
                <div class="fancy-text">
                    <p>@if(isset($_COOKIE['indexLanguage']))
                            @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_page_about_text))
                                {!! $page->micro->en_page_about_text !!}
                            @else
                                {!! $page->micro->es_page_about_text !!}
                            @endif
                        @else
                            {!! $page->micro->es_page_about_text !!}
                        @endif</p>
                </div>
            </div>
            <div class="info">
                <div class="row no-margin nav-tab-menu eq-height-cols-table">
                    <div class="col-sm-4">
                        <div class="vertical-align-abs" tabindex="0">
                            <div class="vertical-align">
                                <img src="{{ asset('public/uploads/pages').'/'.$page->page_id.'/about_1_img'.strchr($page->micro->about_1_img,'.') }}">
                                <h2>
                                    @if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_about_1_title))
                                            {!! $page->micro->en_about_1_title !!}
                                        @else
                                            {!! $page->micro->es_about_1_title !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_about_1_title !!}
                                    @endif
                                </h2>
                            </div>
                        </div>
                        <div class="text-container">
                            <p class="text">
                                @if(isset($_COOKIE['indexLanguage']))
                                    @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_about_1_text))
                                        {!! $page->micro->en_about_1_text !!}
                                    @else
                                        {!! $page->micro->es_about_1_text !!}
                                    @endif
                                @else
                                    {!! $page->micro->es_about_1_text !!}
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="vertical-align-abs" tabindex="0">
                            <div class="vertical-align">
                                <img src="{{ asset('public/uploads/pages').'/'.$page->page_id.'/about_2_img'.strchr($page->micro->about_2_img,'.') }}">
                                <h2>
                                    @if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_about_2_title))
                                            {!! $page->micro->en_about_2_title !!}
                                        @else
                                            {!! $page->micro->es_about_2_title !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_about_2_title !!}
                                    @endif
                                </h2>
                            </div>
                        </div>
                        <div class="text-container">
                            <p class="text">
                                @if(isset($_COOKIE['indexLanguage']))
                                    @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_about_2_text))
                                        {!! $page->micro->en_about_2_text !!}
                                    @else
                                        {!! $page->micro->es_about_2_text !!}
                                    @endif
                                @else
                                    {!! $page->micro->es_about_2_text !!}
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="vertical-align-abs" tabindex="0">
                            <div class="vertical-align">
                                <img src="{{ asset('public/uploads/pages').'/'.$page->page_id.'/about_3_img'.strchr($page->micro->about_3_img,'.') }}">
                                <h2>
                                    @if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_about_3_title))
                                            {!! $page->micro->en_about_3_title !!}
                                        @else
                                            {!! $page->micro->es_about_3_title !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_about_3_title !!}
                                    @endif
                                </h2>
                            </div>
                        </div>
                        <div class="text-container">
                            <p class="text">
                                @if(isset($_COOKIE['indexLanguage']))
                                    @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_about_3_text))
                                        {!! $page->micro->en_about_3_text !!}
                                    @else
                                        {!! $page->micro->es_about_3_text !!}
                                    @endif
                                @else
                                    {!! $page->micro->es_about_3_text !!}
                                @endif
                            </p>
                        </div>
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
        @isset($page->micro->page_video_iframe)
        <!-- ================================== -->

        <!-- ///////////  VIDEO  \\\\\\\\\\\ -->

        <!-- ================================== -->
        <div class="video" id="video">
            <div class="parallax-container big-spacing">
                <div class="parallax">
                    <img src="{{ asset('public/uploads/pages').'/'.$page->page_id.'/banner_2_img'.strchr($page->micro->banner_2_img,'.') }}">
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
                            {!! $page->micro->page_video_iframe !!}
                        </div>
                    </div>
                </div>
            </div>
        @endisset
        @if($page->page_type_id == 2)
            @include('site.common.views.micro.type_2')
        @elseif($page->page_type_id == 4)
            @include('site.common.views.micro.type_4')
        @elseif($page->page_type_id == 5)
            @include('site.common.views.micro.type_2')
            @include('site.common.views.micro.type_5')
        @endif
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
@stop