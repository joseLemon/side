@extends('layouts.cms.master')
@section('content')
    <div class="big-container">
        {!! Form::open(['route' => ['page.update.index',$id], 'id' => 'formPage', 'enctype' => 'multipart/form-data']) !!}
        <div class="dash-object">
            <div class="page-section">
                <h3>Banner Principal</h3>
                <label for="banner_1_img">
                    Imagen del Banner
                    <input type="file" name="banner_1_img" id="banner_1_img">
                </label>
                <div class="clearfix"></div>
                <label for="banner_1_img">
                    Rombo 1
                    <input class="input-cms" type="text" name="es_diamond_1_text" placeholder="Texto">
                    <input class="input-cms" type="text" name="diamond_1_url" placeholder="URL">
                </label>
                <label for="banner_1_img">
                    Rombo 2
                    <input class="input-cms" type="text" name="es_diamond_2_text" placeholder="Texto">
                    <input class="input-cms" type="text" name="diamond_2_url" placeholder="URL">
                </label>
                <label for="banner_1_img">
                    Rombo 3
                    <input class="input-cms" type="text" name="es_diamond_3_text" placeholder="Texto">
                    <input class="input-cms" type="text" name="diamond_3_url" placeholder="URL">
                </label>
                <label for="banner_1_img">
                    Rombo 4
                    <input class="input-cms" type="text" name="es_diamond_4_text" placeholder="Texto">
                    <input class="input-cms" type="text" name="diamond_4_url" placeholder="URL">
                </label>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@stop