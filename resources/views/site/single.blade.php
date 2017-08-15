@extends('layouts.site.master')
@section('content')
    <!-- ================================== -->

    <!-- ///////////  PRINCIPAL  \\\\\\\\\\\ -->

    <!-- ================================== -->
    <div class="single spacing">
        <div class="container">
            <h1 class="heading text-center">Blog de <span class="bold">Noticias</span></h1>
            <div class="row no-margin">
                <div class="col-sm-6">
                    <div class="img-container">
                        <img class="img-responsive center-block" src="{{ asset('public/uploads/blog') }}/{{ $id }}/{{ $post->post_img }}" alt="single_img">
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
    </script>
@stop