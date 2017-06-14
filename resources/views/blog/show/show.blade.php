@extends('layouts.cms.master')
@section('head')
    <style>
        table tbody tr {
            cursor: pointer;
        }
        table .delete {
            display: block;
            width: 100%;
            text-align: center;
        }
    </style>
@stop
@section('scripts')
    <script>
        $(document).ready(function () {
            fillPostsTable('all',1);

            $('.search-bar button').click(function () {
                fillPostsTable('search',1,$('#search-input').val());
            });

            $('#search-input').keypress(function(e) {
                if(e.which == 13) {
                    fillPostsTable('search',1,$(this).val());
                }
            });
        });

        function fillPostsTable($get_posts_by,$page,$search) {
            if(!$search) {
                $search = '';
            }
            var table = $('#postsTable');
            var tbody = table.find('tbody');
            var url = '{{ url('blog') }}';
            $.ajax({
                url: '{{ route('posts.get') }}',
                type: 'GET',
                data: {
                    'get_posts_by' : $get_posts_by,
                    'page' : $page,
                    'search' : $search
                },
                success: function (posts) {
                    tbody.empty();
                    $(posts.data).each(function (i, post) {
                        tbody.append(
                            '<tr data-anchor="' + url + '/' + post.post_id + '/edit' + '" data-postid="' + post.post_id + '">' +
                            '<td>' + post.post_id + '</td>' +
                            '<td>' + post.post_date + '</td>' +
                            '<td>' + post.post_title + '</td>' +
                            '<td>' + RemoveHTMLTags(post.post_excerpt) + '</td>' +
                            '<td>' +
                            '<a href="#" class="delete preventDef"><i class="fa fa-times" aria-hidden="true"></i></a>' +
                            '</td>' +
                            '</tr>'
                        );
                    });

                    var paginator = $('#pagination');
                    paginator.empty();
                    paginator.append(
                        '<li>' +
                        '<a href="#" class="preventDef" onclick="fillPostsTable(\''+$get_posts_by+'\',1)" aria-label="Previous">' +
                        '<span aria-hidden="true">&laquo;</span>' +
                        '</a>' +
                        '</li>'
                    );

                    var start = posts.current_page - 1;
                    if(start < 1) {
                        start = 1;
                    }

                    var end = posts.current_page + 1;
                    if(end > posts.last_page) {
                        end = posts.last_page
                    }

                    for(i = start; i <= end; i++) {
                        paginator.append('<li><a href="#" class="preventDef" onclick="fillPostsTable(\''+$get_posts_by+'\','+i+')">' + i + '</a></li>')
                    }
                    paginator.append(
                        '<li>' +
                        '<a href="#" class="preventDef" onclick="fillPostsTable(\''+$get_posts_by+'\','+posts.last_page+')" aria-label="Previous">' +
                        '<span aria-hidden="true">&raquo;</span>' +
                        '</a>' +
                        '</li>'
                    );

                    tableInitialize();
                }
            });
        }

        function tableInitialize() {
            $('table tbody tr').click(function (e) {
                var anchor = $(this).data('anchor');
                window.location.href = anchor;
            });

            $('.preventDef').click(function (e) {
                e.preventDefault();
                e.stopPropagation();
            });

            $('table .delete').click(function () {
                var tr = $(this).closest('tr');
                var id = tr.data('postid');
                $.confirm({
                    title: '¿Seguro que deseas eliminar esta entrada?',
                    content: 'Este contenido será eliminado en caso de que desees continuar',
                    backgroundDismiss: 'cancel',
                    buttons: {
                        confirm: {
                            text: 'Continuar',
                            btnClass: 'btn-danger',
                            action: function () {
                                deletePost(id,tr);
                            }
                        },
                        cancel: {
                            text: 'Cancelar'
                        }
                    }
                });
            });
        }

        function deletePost($id,$tr) {
            $.ajax({
                url: '{{ route('blog.delete') }}',
                type: 'GET',
                data: {
                    'post_id': $id
                },
                success: function (data) {
                    //$('#ajaxAlert').removeClass('hidden').addClass(data.alert_class).append(data.msg);
                    $tr.remove();
                }
            });
        }
    </script>
@stop
@section('content')
    <div class="big-container">
        <div class="dash-object">

            <div class="dash-head">
                <div class="search-bar">
                    <div class="input-group">
                        {!! Form::text('search',null,['class'=>'form-control','id'=>'search-input']) !!}
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
                    <table class="table table-hover table-cms" id="postsTable">
                        <colgroup>
                            <col style="width: 5%">
                            <col style="width: 15%">
                            <col style="width: 30%">
                            <col style="width: 45%">
                            <col style="width: 5%">
                        </colgroup>
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Fecha</th>
                            <th>Título</th>
                            <th>Contenido</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>

            <div class="dash-footer">
                <nav aria-label="Page navigation" class="text-right">
                    <ul class="pagination" id="pagination">
                    </ul>
                </nav>
            </div>

        </div>

    </div>
@stop