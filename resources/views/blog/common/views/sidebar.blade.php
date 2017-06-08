<div class="blog-sidebar">
    <label for="post_date">Fecha</label>
    {!! Form::date('post_date',isset($post) ? $post->post_date : null,['class'=>'full-width','id'=>'post_date']) !!}
    <hr>
    <label for="post_img">Imagen Destacada</label>
    <div class="img-container preview @isset($post_img){{ 'active' }}@endisset">
        <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
        <img src="{{ asset('uploads/blog/' . $post->post_id . '/' . $post_img) }}" alt="Imagen del Post" id="preview" class="center-block img-responsive">
    </div>
    <label for="post_img" class="input-file-cms">
        Elegir imagen
        <input type="file" id="post_img" name="post_img">
    </label>
</div>