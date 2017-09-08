@extends('layouts.cms.master')
@section('scripts')
    @include('pages.common.js.functionality')
@stop
@section('content')
    <div class="big-container">
        <div class="dash-object">
            <div class="page-section">
                {!! Form::open(['route' => ['page.update',$id], 'id' => 'formPage', 'enctype' => 'multipart/form-data']) !!}
                <select class="input-cms" name="page_type" id="page_type" disabled>
                    @foreach($page_types as $type)
                        <option value="{{ $type->page_type_id }}" @if($page->page_type_id == $type->page_type_id){{ 'selected' }}@endif>{{ $type->page_type_name }}</option>
                    @endforeach
                </select>
                @include('pages.common.views.form_page')
                @if($page->page_type_id == 2)
                <div class="form-container" id="micro-form">
                    @include('pages.common.views.form_micro')
                </div>
                @endif
                @if($page->page_type_id == 3)
                <div class="form-container" id="external-form">
                    @include('pages.common.views.form_external')
                </div>
                @endif
                <div class="text-center">
                    {!! Form::submit('Guardar',['class'=>'submit-cms big-btn']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop