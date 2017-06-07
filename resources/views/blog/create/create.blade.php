@extends('layouts.cms.master')
@section('head')
@stop
@section('scripts')
    <script src="{{ asset('js/modules/tinymce/tinymce.min.js?apiKey=?apiKey=lmzwakfmcpx8xyo0kmi4gzbnvwa6qp6hdvku58vnvcjzdwpj') }}"></script>
    <script>
        tinymce.init({
            selector: '#blogContent',
            language: 'es',
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | preview media fullpage | forecolor backcolor',
            plugins: [
                'advlist autolink link image lists preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks code fullscreen insertdatetime media nonbreaking',
                'save table contextmenu directionality paste textcolor'
            ]
        });
    </script>
@stop
@section('content')
    <div class="big-container blog-container">
        <div class="blog-content">
            <input class="input-cms" type="text" name="post_title" id="post_title" placeholder="Título">
            <textarea id="blogContent" name="post_content" id="post_content"></textarea>
            <div class="text-right">
                <input type="submit" value="GUARDAR">
            </div>
        </div>
        <div class="blog-sidebar">
            <label for="post_date">Fecha</label>
            <input class="full-width" type="date" name="post_date" id="post_date">
            <hr>
            <label for="post_img">Imágen Destacada</label>
            <label for="post_img" class="input-file-cms">
                Elegir imagen
                <input type="file" id="post_img" name="post_img">
            </label>
        </div>
    </div>
@stop
