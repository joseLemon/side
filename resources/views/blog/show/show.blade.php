@extends('layouts.cms.master')
@section('head')
    <style>
        tr {
            cursor: pointer;
        }
    </style>
@stop
@section('scripts')
    <script>
        $(document).ready(function () {
            $('table tbody tr').click(function () {
                var anchor = $(this).data('anchor');
                window.location.href = anchor;
            });
        });
    </script>
@stop
@section('content')
    <div class="big-container blog-container">

        <div class="dash-head">
            <div class="search-box">
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
                <table class="table table-stripped">
                    <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>#</th>
                        <th>Título</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr data-anchor="{{ url('blog').'/1/edit' }}">
                        <td>DD/MM/YYYY</td>
                        <td>1</td>
                        <td>EJEMPLO</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="dash-footer">
            <nav aria-label="Page navigation" class="text-right">
                <ul class="pagination">
                    <li>
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
                    </li>
                </ul>
            </nav>
        </div>

    </div>
@stop