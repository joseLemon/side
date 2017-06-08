@extends('layouts.cms.master')
@section('head')
@stop
@section('scripts')
    @include('blog.common.js.functionality')
@stop
@section('content')
    <div class="big-container blog-container">
        {!! Form::open(['route' => ['blog.update',$post->post_id], 'id' => 'formBlog', 'enctype' => 'multipart/form-data']) !!}
        @include('blog.common.views.content')
        @include('blog.common.views.sidebar')
        {!! Form::close() !!}
    </div>
@stop