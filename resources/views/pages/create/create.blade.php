@extends('layouts.cms.master')
@section('scripts')
    @include('pages.common.js.functionality')
@stop
@section('content')
    <div class="big-container"><div class="dash-object">
            <div class="page-section">
                {!! Form::open(['route' => 'page.store', 'id' => 'formPage', 'enctype' => 'multipart/form-data']) !!}
                @include('pages.common.views.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop