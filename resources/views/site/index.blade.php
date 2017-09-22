@extends('layouts.site.master')
@section('analytics')
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-96473960-4', 'auto');
        ga('send', 'pageview');

    </script>
@stop
@section('content')
    <!-- ================================== -->

    <!-- ///////////  BANNER  \\\\\\\\\\\ -->

    <!-- ================================== -->
    <div class="banner main" id="banner" style="background: url('{{ asset('public/uploads/pages/' . $page->page_index->page_id . '/banner_1_img' . strchr($page->page_index->banner_1_img,'.')) }}') no-repeat center center">
        <div class="container">
            <div class="diamond-container">
                <div class="diamond diamond-1"></div>
                <div class="bg-color"></div>
                <div class="diamond diamond-2"></div>
                <div class="bg-color"></div>
                <div class="diamond diamond-3 featured">
                    <a href="{!! $page->page_index->diamond_1_url !!}" {!! isset($page->page_index->diamond_1_url) ? '' : 'onclick="event.preventDefault();"' !!} target="_blank">
                        <div class="title">
                            <div class="header">
                                @if(isset($_COOKIE['indexLanguage']))
                                    @if($_COOKIE['indexLanguage'] == 'en' && isset($page->page_index->en_diamond_1_text))
                                        {!! $page->page_index->en_diamond_1_text !!}
                                    @else
                                        {!! $page->page_index->es_diamond_1_text !!}
                                    @endif
                                @else
                                    {!! $page->page_index->es_diamond_1_text !!}
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
                <div class="diamond diamond-6 featured">
                    <a href="{!! $page->page_index->diamond_2_url !!}" {!! isset($page->page_index->diamond_2_url) ? '' : 'onclick="event.preventDefault();"' !!} target="_blank">
                        <div class="title">
                            <div class="header">
                                @if(isset($_COOKIE['indexLanguage']))
                                    @if($_COOKIE['indexLanguage'] == 'en' && isset($page->page_index->en_diamond_2_text))
                                        {!! $page->page_index->en_diamond_2_text !!}
                                    @else
                                        {!! $page->page_index->es_diamond_2_text !!}
                                    @endif
                                @else
                                    {!! $page->page_index->es_diamond_2_text !!}
                                @endif
                            </div>
                        </div>
                    </a>
                </div>
                <div class="bg-color"></div>
                <div class="diamond diamond-7"></div>
                <div class="bg-color"></div>
                <div class="diamond diamond-8 featured">
                    <a href="{!! $page->page_index->diamond_3_url !!}" {!! isset($page->page_index->diamond_3_url) ? '' : 'onclick="event.preventDefault();"' !!} target="_blank">
                        <div class="title">
                            <div class="header">
                                @if(isset($_COOKIE['indexLanguage']))
                                    @if($_COOKIE['indexLanguage'] == 'en' && isset($page->page_index->en_diamond_3_text))
                                        {!! $page->page_index->en_diamond_3_text !!}
                                    @else
                                        {!! $page->page_index->es_diamond_3_text !!}
                                    @endif
                                @else
                                    {!! $page->page_index->es_diamond_3_text !!}
                                @endif
                            </div>
                        </div>
                    </a>
                </div>
                <div class="bg-color"></div>
                <div class="diamond diamond-9"> </div>
                <div class="bg-color"></div>
                <div class="diamond diamond-10 featured">
                    <a href="{!! $page->page_index->diamond_4_url !!}" {!! isset($page->page_index->diamond_4_url) ? '' : 'onclick="event.preventDefault();"' !!} target="_blank">
                        <div class="title">
                            <div class="header">
                                @if(isset($_COOKIE['indexLanguage']))
                                    @if($_COOKIE['indexLanguage'] == 'en' && isset($page->page_index->en_diamond_4_text))
                                        {!! $page->page_index->en_diamond_4_text !!}
                                    @else
                                        {!! $page->page_index->es_diamond_4_text !!}
                                    @endif
                                @else
                                    {!! $page->page_index->es_diamond_4_text !!}
                                @endif
                            </div>
                        </div>
                    </a>
                </div>
                <div class="bg-color"></div>
                <div class="diamond diamond-11"></div>
                <div class="bg-color"></div>
            </div>
            <h1 class="text-center banner-text">
                @if(isset($_COOKIE['indexLanguage']))
                    @if($_COOKIE['indexLanguage'] == 'en' && isset($page->page_index->en_banner_1_text))
                        {!! $page->page_index->en_banner_1_text !!}
                    @else
                        {!! $page->page_index->es_banner_1_text !!}
                    @endif
                @else
                    {!! $page->page_index->es_banner_1_text !!}
                @endif
            </h1>
        </div>
    </div>
    <!-- ================================== -->

    <!-- ///////////  AYUDA  \\\\\\\\\\\ -->

    <!-- ================================== -->
    <div class="ayuda" id="ayuda">
        <div class="parallax-container">
            <div class="parallax">
                <img src="{{ asset('public/uploads/pages/' . $page->page_index->page_id . '/banner_2_img' . strchr($page->page_index->banner_2_img,'.')) }}">
            </div>
            <div class="container">
                <div class="question-box">
                    <h3 class="white">
                        @if(isset($_COOKIE['indexLanguage']))
                            @if($_COOKIE['indexLanguage'] == 'en' && isset($page->page_index->en_banner_2_text_1))
                                {!! $page->page_index->en_banner_2_text_1 !!}
                            @else
                                {!! $page->page_index->es_banner_2_text_1 !!}
                            @endif
                        @else
                            {!! $page->page_index->es_banner_2_text_1 !!}
                        @endif
                    </h3>
                    <h2 class="white">
                        @if(isset($_COOKIE['indexLanguage']))
                            @if($_COOKIE['indexLanguage'] == 'en' && isset($page->page_index->en_banner_2_text_2))
                                {!! $page->page_index->en_banner_2_text_2 !!}
                            @else
                                {!! $page->page_index->es_banner_2_text_2 !!}
                            @endif
                        @else
                            {!! $page->page_index->es_banner_2_text_2 !!}
                        @endif
                    </h2>
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
            <h1 class="big-heading bold">
                @if(isset($_COOKIE['indexLanguage']))
                    @if($_COOKIE['indexLanguage'] == 'en' && isset($page->page_index->en_sites_title))
                        {!! $page->page_index->en_sites_title !!}
                    @else
                        {!! $page->page_index->es_sites_title !!}
                    @endif
                @else
                    {!! $page->page_index->es_sites_title !!}
                @endif
            </h1>
            <p class="text">
                @if(isset($_COOKIE['indexLanguage']))
                    @if($_COOKIE['indexLanguage'] == 'en' && isset($page->page_index->en_sites_subtitle))
                        {!! $page->page_index->en_sites_subtitle !!}
                    @else
                        {!! $page->page_index->es_sites_subtitle !!}
                    @endif
                @else
                    {!! $page->page_index->es_sites_subtitle !!}
                @endif
            </p>
            <div class="row no-margin micro-pages-container"></div>
        </div>
    </div>
    <!-- ================================== -->

    <!-- ///////////  OPPORTUNITIES  \\\\\\\\\\\ -->

    <!-- ================================== -->
    <div class="opportunities bg-cover spacing" id="opportunities" style="background: url('{{ asset('public/uploads/pages/' . $page->page_index->page_id . '/banner_3_img' . strchr($page->page_index->banner_3_img,'.')) }}') no-repeat center bottom">
        <div class="fancy-box text-center">
            <a href="{!! $page->page_index->banner_3_url !!}" target="_blank" class="white">
                @if(isset($_COOKIE['indexLanguage']))
                    @if($_COOKIE['indexLanguage'] == 'en' && isset($page->page_index->en_banner_3_text))
                        {!! $page->page_index->en_banner_3_text !!}
                    @else
                        {!! $page->page_index->es_banner_3_text !!}
                    @endif
                @else
                    {!! $page->page_index->es_banner_3_text !!}
                @endif
            </a>
        </div>
    </div>
    <!-- ================================== -->

    <!-- ///////////  BLOG DE NOTICIAS  \\\\\\\\\\\ -->

    <!-- ================================== -->
    <div class="blog spacing" id="blog">
        <div class="container">
            <h1 class="heading text-center">
                @if(isset($_COOKIE['indexLanguage']))
                    @if($_COOKIE['indexLanguage'] == 'en' && isset($page->page_index->en_blog_title))
                        {!! $page->page_index->en_blog_title !!}
                    @else
                        {!! $page->page_index->es_blog_title !!}
                    @endif
                @else
                    {!! $page->page_index->es_blog_title !!}
                @endif
            </h1>
            <div class="row no-margin blog-feed"></div>
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
    <div class="chihuahua bg-cover" id="chihuahua" style="/*background: url('{{ asset('public/img/index/banners/3.jpg') }}') no-repeat center top;*/">
        <video src="{{ asset('public/video/1.mp4') }}" autoplay></video>
    <!--<div class="fancy-box text-center">
            <img class="center-block" src="{{ asset('public/img/index/decorations/1.png') }}">
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
                        <img src="{{ asset('public/uploads/pages/' . $page->page_index->page_id . '/about_1_img' . strchr($page->page_index->about_1_img,'.')) }}">
                        <h3>
                            @if(isset($_COOKIE['indexLanguage']))
                                @if($_COOKIE['indexLanguage'] == 'en' && isset($page->page_index->en_about_1_title))
                                    {!! $page->page_index->en_about_1_title !!}
                                @else
                                    {!! $page->page_index->es_about_1_title !!}
                                @endif
                            @else
                                {!! $page->page_index->es_about_1_title !!}
                            @endif
                        </h3>
                    </a>
                </div>
                <div class="col-sm-4 img-container">
                    <a href="#tab-2" data-toggle="tab">
                        <img src="{{ asset('public/uploads/pages/' . $page->page_index->page_id . '/about_2_img' . strchr($page->page_index->about_2_img,'.')) }}">
                        <h3>
                            @if(isset($_COOKIE['indexLanguage']))
                                @if($_COOKIE['indexLanguage'] == 'en' && isset($page->page_index->en_about_2_title))
                                    {!! $page->page_index->en_about_2_title !!}
                                @else
                                    {!! $page->page_index->es_about_2_title !!}
                                @endif
                            @else
                                {!! $page->page_index->es_about_2_title !!}
                            @endif
                        </h3>
                    </a>
                </div>
                <div class="col-sm-4 img-container">
                    <a href="#tab-3" data-toggle="tab">
                        <img src="{{ asset('public/uploads/pages/' . $page->page_index->page_id . '/about_3_img' . strchr($page->page_index->about_3_img,'.')) }}">
                        <h3>
                            @if(isset($_COOKIE['indexLanguage']))
                                @if($_COOKIE['indexLanguage'] == 'en' && isset($page->page_index->en_about_3_title))
                                    {!! $page->page_index->en_about_3_title !!}
                                @else
                                    {!! $page->page_index->es_about_3_title !!}
                                @endif
                            @else
                                {!! $page->page_index->es_about_3_title !!}
                            @endif
                        </h3>
                    </a>
                </div>
            </div>
            <div class="tab-content blue">
                <div id="tab-1" class="tab-pane fade in active">
                    <p class="text">
                        @if(isset($_COOKIE['indexLanguage']))
                            @if($_COOKIE['indexLanguage'] == 'en' && isset($page->page_index->en_about_1_text))
                                {!! $page->page_index->en_about_1_text !!}
                            @else
                                {!! $page->page_index->es_about_1_text !!}
                            @endif
                        @else
                            {!! $page->page_index->es_about_1_text !!}
                        @endif
                    </p>
                </div>
                <div id="tab-2" class="tab-pane fade">
                    <p class="text">
                        @if(isset($_COOKIE['indexLanguage']))
                            @if($_COOKIE['indexLanguage'] == 'en' && isset($page->page_index->en_about_2_text))
                                {!! $page->page_index->en_about_2_text !!}
                            @else
                                {!! $page->page_index->es_about_2_text !!}
                            @endif
                        @else
                            {!! $page->page_index->es_about_2_text !!}
                        @endif
                    </p>
                </div>
                <div id="tab-3" class="tab-pane fade">
                    @if(isset($_COOKIE['indexLanguage']))
                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->page_index->en_about_3_text))
                            {!! $page->page_index->en_about_3_text !!}
                        @else
                            {!! $page->page_index->es_about_3_text !!}
                        @endif
                    @else
                        {!! $page->page_index->es_about_3_text !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    <script src="{{ asset('public/js/modules/jquery-ui/easing/jquery-ui-easing.js') }}"></script>
    <script src="{{ asset('public/js/smoothscroll.js') }}"></script>
    <script>
        $(document).ready(function () {
            getPosts();
            getPages();
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
                        var img_url = '{{ asset('public/uploads/blog') }}' + '/' + post.post_id + '/' + post.post_img;
                        $('.blog-feed').append(
                            '<div class="col-sm-4">' +
                            '<div class="img-bg">' +
                            '<div class="post-img" style="background: url(' + img_url + ') no-repeat center center; background-size: cover;"></div>' +
                            '</div>' +
                            '<div class="post-summary">' +
                            '<h5>' + post.post_date + '</h5>' +
                            '<h4 class="bold">' + post.post_title + '</h4>' +
                            '<p class="text">' + RemoveHTMLTags(post.post_excerpt) + '</p>' +
                            '<a href="{{ url('blog/single') }}/'+post.post_id+'">Leer más</a>' +
                            '</div>' +
                            '</div>'
                        );
                    });
                }
            });
        }
        function getPages($get_posts_by) {
            $.ajax({
                url: '{{ route('pages.get') }}',
                type: 'GET',
                data: {
                    'get_posts_by': $get_posts_by,
                    'getAll': 1,
                    'except': 1
                },
                success: function (pages) {
                    $('.micro-pages-container').empty();
                    $(pages).each(function (i, page) {
                        console.log(page);
                        var img_url = '{{ asset('public/uploads/pages') }}/' + page.page_id + '/page_img.' + page.page_img.split('.').pop(),
                            page_url = '{{ url('/') }}/' + page.page_url;
                        if(page.page_type === 3) {
                            page_url = page.page_external_url;
                        }
                        $('.micro-pages-container').append(
                            '<div class="col-sm-4 col-xs-6 ' + page.color_slug + '">' +
                            '<a href="' + page_url + '">' +
                            '<span class="circle-hover">' +
                            '<p>' +
                            page.page_title +
                            '<span class="more">Ver más</span>' +
                            '</p>' +
                            '</span>' +
                            '<div class="img-container">' +
                            '<img src="' + img_url + '">' +
                            '</div>' +
                            '</a>'
                        );
                    });
                }
            });
        }
        $('.langToggle').click(function (e) {
            e.preventDefault();
            var language = $(this).data('language');
            $.ajax({
                url: '{{ route('language.set') }}',
                type: 'GET',
                data: {
                    'language': language
                },
                success: function () {
                    location.reload();
                }
            });
        });
    </script>
@stop