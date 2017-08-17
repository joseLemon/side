@extends('layouts.site.master')
@section('content')
    <!-- ================================== -->

    <!-- ///////////  PRINCIPAL  \\\\\\\\\\\ -->

    <!-- ================================== -->
    <div class="single spacing">
        <div class="container">
            <h1 class="heading text-center">Blog de <span class="bold">Noticias</span></h1>
            <div class="row no-margin">
                <img src="{{ asset('public/uploads/blog') }}/{{ $id }}/{{ $post->post_img }}" alt="single_img">
                <span class="date">{{ $post->post_date }}</span>
                <h3 class="bold">{{ $post->post_title }}</h3>
                {!! $post->post_content !!}

                <div class="share-post text-right">
                    <a href="{{ route('blog.single',$id) }}" id="share-to-fb">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ route('blog.single',$id) }}" id="share-to-twitter">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- ================================== -->

    <!-- ///////////  MÁS NOTICIAS  \\\\\\\\\\\ -->

    <!-- ================================== -->
    <div class="blog spacing" id="blog">
        <div class="container">
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
@stop
@section('scripts')
    <script>
        window.twttr = (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0],
                t = window.twttr || {};
            if (d.getElementById(id)) return t;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);

            t._e = [];
            t.ready = function(f) {
                t._e.push(f);
            };

            return t;
        }(document, "script", "twitter-wjs"));
    </script>
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
                    'paginate': 3,
                    'except': '{{ $id }}'
                },
                success: function (posts) {
                    $('.blog-feed').empty();
                    $(posts.data).each(function (i, post) {
                        var img_url = '{{ asset('public/uploads/blog') }}' + '/' + post.post_id + '/' + post.post_img;
                        $('.blog-feed').append(
                            '<div class="col-sm-4">' +
                            '<div class="img-bg" style="background: url(' + img_url + ') no-repeat center center; background-size: cover;"></div>' +
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


        window.fbAsyncInit = function(){
            FB.init({
                appId: '768242526711597', status: true, cookie: true, xfbml: true });
        };
        (function(d, debug){var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
            if(d.getElementById(id)) {return;}
            js = d.createElement('script'); js.id = id;
            js.async = true;js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
            ref.parentNode.insertBefore(js, ref);}(document, /*debug*/ false));

        function postToFeed(url){
            var obj = {
                method: 'feed',
                link: url,
                picture: '{{ asset('public/uploads/blog') }}/{{ $id }}/{{ $post->post_img }}',
                name: '{{ $post->post_title }}'
            };
            function callback(response){}
            FB.ui(obj, callback);
        }

        $('#share-to-fb').click(function(){
            elem = $(this);
            postToFeed($(this).attr('href'));
            return false;
        });

        twttr.events.bind('tweet', function (event) {});
    </script>
@stop