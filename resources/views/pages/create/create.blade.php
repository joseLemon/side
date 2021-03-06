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
                        <option value="{{ $type->page_type_id }}" @if(old('page_type') == $type->page_type_id){{ 'selected' }}@endif >{{ $type->page_type_name }}</option>
                    @endforeach
                </select>
                @include('pages.common.views.form_page')
                <div class="form-container" id="main-micro-form" @if(old('page_type') == 3){!! 'style="display: none;"' !!}@endif>
                    @include('pages.common.views.form_micro')
                </div>
                <div class="form-container" id="micro-form" @if(old('page_type') == 3 || old('page_type') == 4 ){!! 'style="display: none;"' !!}@endif>
                    @include('pages.common.views.form_programs')
                </div>
                <div class="form-container" id="external-form" @if(old('page_type') != 3){!! 'style="display: none;"' !!}@endif>
                    @include('pages.common.views.form_external')
                </div>
                <div class="form-container" id="carousel-form" @if(old('page_type') != 4){!! 'style="display: none;"' !!}@endif>
                    @include('pages.common.views.form_carousel')
                </div>
                <div class="form-container" id="calendar-form" @if(old('page_type') != 5){!! 'style="display: none;"' !!}@endif>
                    @include('pages.common.views.form_calendar')
                </div>
                <div class="text-center">
                    {!! Form::submit('Guardar',['class'=>'submit-cms big-btn']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop