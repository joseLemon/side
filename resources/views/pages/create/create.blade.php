@extends('layouts.cms.master')
@section('scripts')
    @include('pages.common.js.functionality')
@stop
@section('content')
    <div class="big-container">
        <div class="dash-object">
            <div class="page-section">
                {!! Form::open(['route' => 'page.store', 'id' => 'formPage', 'enctype' => 'multipart/form-data']) !!}
                {!! Form::label('page_type','Tipo de página') !!}
                <select class="input-cms" name="page_type" id="page_type">
                    @foreach($page_types as $type)
                        <option value="{{ $type->page_type_id }}">{{ $type->page_type_name }}</option>
                    @endforeach
                </select>
                <div class="form-container" id="micro-form">
                    @include('pages.common.views.form_micro')
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop