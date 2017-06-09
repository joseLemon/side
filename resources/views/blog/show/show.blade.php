@extends('layouts.cms.master')
@section('head')
    <style>
        table tbody tr {
            cursor: pointer;
        }
    </style>
@stop
@section('scripts')
    <script>
        $(document).ready(function () {
            fillPostsTable('all',1);
        });

        function fillPostsTable($get_posts_by,$page) {
            var table = $('#postsTable');
            var tbody = table.find('tbody');
            var url = '{{ url('blog') }}';
            $.ajax({
                url: '{{ route('posts.get') }}',
                type: 'GET',
                data: {
                    'get_posts_by' : $get_posts_by,
                    'page' : $page
                },
                success: function (posts) {
                    tbody.empty();
                    $(posts.data).each(function (i, post) {
                        tbody.append(
                            '<tr data-anchor="' + url + '/' + post.post_id + '/edit' + '">' +
                            '<td>' + post.post_id + '</td>' +
                            '<td>' + post.post_date + '</td>' +
                            '<td>' + post.post_title + '</td>' +
                            '</tr>'
                        );
                    });

                    var paginator = $('#pagination');
                    paginator.empty();
                    paginator.append(
                        '<li>' +
                        '<a href="#" onclick="fillPostsTable(\''+$get_posts_by+'\',1)" aria-label="Previous">' +
                        '<span aria-hidden="true">&laquo;</span>' +
                        '</a>' +
                        '</li>'
                    );
                    for(i = 1; i <= posts.last_page; i++) {
                        paginator.append('<li><a href="#" onclick="fillPostsTable(\''+$get_posts_by+'\','+i+')">' + i + '</a></li>')
                    }
                    paginator.append(
                        '<li>' +
                        '<a href="#" onclick="fillPostsTable(\''+$get_posts_by+'\','+posts.last_page+')" aria-label="Previous">' +
                        '<span aria-hidden="true">&raquo;</span>' +
                        '</a>' +
                        '</li>'
                    );

                    tableInitialize();
                }
            });
        }

        function tableInitialize() {
            $('table tbody tr').click(function () {
                var anchor = $(this).data('anchor');
                window.location.href = anchor;
            });
        }
    </script>
@stop
@section('content')
    <div class="big-container blog-container">

        <div class="dash-head">
            <div class="search-bar">
                <div class="input-group">
                    {!! Form::text('search',null,['class'=>'form-control']) !!}
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </span>
                </div>
            </div>
        </div>

        <div class="dash-body">
            <div class="table-responsive">
                <table class="table table-stripped" id="postsTable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Fecha</th>
                        <th>Título</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <!--<tr data-anchor="{{ url('blog').'/1/edit' }}">
                        <td>1</td>
                        <td>DD/MM/YYYY</td>
                        <td>EJEMPLO</td>
                    </tr>-->
                    </tbody>
                </table>
            </div>
        </div>

        <div class="dash-footer">
            <nav aria-label="Page navigation" class="text-right">
                <ul class="pagination" id="pagination">
                    <!--<li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>-->
                </ul>
            </nav>
        </div>

    </div>
@stop