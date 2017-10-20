@extends('layouts.cms.master')
@section('head')
    <link rel="stylesheet" href="{{ asset('public/js/modules/jquery-ui/sortable/jquery-ui-sortable.min.css') }}">
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
    <script src="{{ asset('public/js/modules/jquery-ui/sortable/jquery-ui-sortable.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            fillPagesTable('all',1);

            $('.search-bar button').click(function () {
                fillPagesTable('search',1,$('#search-input').val());
            });

            $('#search-input').keypress(function(e) {
                if(e.which == 13) {
                    fillPagesTable('search',1,$(this).val());
                }
            });

            /*var fixHelperModified = function(e, tr) {
                    if(tr.index() !== 0) {
                        var $originals = tr.children();
                        var $helper = tr.clone();
                        $helper.children().each(function(index) {
                            $(this).width($originals.eq(index).width())
                        });
                        return $helper;
                    }
                },
                updateIndex = function(e, ui) {
                console.log(ui.item.context.attributes[1].nodeValue);
                // APPLY AJAX FOR CONSECUTIVE
                };

            $("#pagesTable tbody").sortable({
                helper: fixHelperModified,
                stop: updateIndex
            });*/
        });

        function fillPagesTable($get_pages_by,$page,$search) {
            if(!$search) {
                $search = '';
            }
            var table = $('#pagesTable');
            var tbody = table.find('tbody');
            var url = '{{ url('page') }}';
            $.ajax({
                url: '{{ route('pages.get') }}',
                type: 'GET',
                data: {
                    'get_pages_by' : $get_pages_by,
                    'page' : $page,
                    'search' : $search
                },
                success: function (pages) {
                    tbody.empty();
                    $(pages.data).each(function (i, page) {
                        var deleteBtn = '';
                        if(page.page_type != 1) {
                            deleteBtn = '<a href="#" class="delete preventDef"><i class="fa fa-times" aria-hidden="true"></i></a>';
                        }

                        tbody.append(
                            '<tr data-anchor="' + url + '/' + page.page_id + '/edit' + '" data-pageid="' + page.page_id + '">' +
                            '<td>' + (parseInt(page.sequence)+1) + '</td>' +
                            '<td>' + page.page_date + '</td>' +
                            '<td>' + page.page_title + '</td>' +
                            '<td>' +
                            deleteBtn +
                            '</td>' +
                            '</tr>'
                        );
                    });

                    var paginator = $('#pagination');
                    paginator.empty();
                    paginator.append(
                        '<li>' +
                        '<a href="#" class="preventDef" onclick="fillPagesTable(\''+$get_pages_by+'\',1)" aria-label="Previous">' +
                        '<span aria-hidden="true">&laquo;</span>' +
                        '</a>' +
                        '</li>'
                    );

                    var start = pages.current_page - 1;
                    if(start < 1) {
                        start = 1;
                    }

                    var end = pages.current_page + 1;
                    if(end > pages.last_page) {
                        end = pages.last_page
                    }

                    for(i = start; i <= end; i++) {
                        paginator.append('<li><a href="#" class="preventDef" onclick="fillPagesTable(\''+$get_pages_by+'\','+i+')">' + i + '</a></li>')
                    }
                    paginator.append(
                        '<li>' +
                        '<a href="#" class="preventDef" onclick="fillPagesTable(\''+$get_pages_by+'\','+pages.last_page+')" aria-label="Previous">' +
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
                var id = tr.data('pageid');
                $.confirm({
                    title: '¿Seguro que deseas eliminar esta página?',
                    content: 'Este contenido será eliminado en caso de que desees continuar',
                    backgroundDismiss: 'cancel',
                    buttons: {
                        confirm: {
                            text: 'Continuar',
                            btnClass: 'btn-danger',
                            action: function () {
                                deletePage(id,tr);
                            }
                        },
                        cancel: {
                            text: 'Cancelar'
                        }
                    }
                });
            });
        }

        function deletePage($id,$tr) {
            $.ajax({
                url: '{{ route('page.delete') }}',
                type: 'GET',
                data: {
                    'page_id': $id
                },
                success: function (data) {
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
                    <table class="table table-hover table-cms" id="pagesTable">
                        <colgroup>
                            <col style="width: 5%">
                            <col style="width: 35%">
                            <col style="width: 55%">
                            <col style="width: 5%">
                        </colgroup>
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Fecha</th>
                            <th>Título</th>
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