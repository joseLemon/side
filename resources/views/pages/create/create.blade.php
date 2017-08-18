@extends('layouts.cms.master')
@section('content')
    <div class="big-container">
        {!! Form::open(['route' => 'page.store', 'id' => 'formPage', 'enctype' => 'multipart/form-data']) !!}
        {!! Form::close() !!}
    </div>
@stop