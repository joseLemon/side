@extends('layouts.cms.master')
@section('content')
    <div class="big-container">
        {!! Form::open(['route' => ['page.update',$id], 'id' => 'formPage', 'enctype' => 'multipart/form-data']) !!}
        {!! Form::close() !!}
    </div>
@stop