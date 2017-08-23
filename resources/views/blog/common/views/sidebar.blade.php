<div class="blog-sidebar">
    <label for="post_date">Fecha</label>
    {!! Form::text('post_date',isset($post) ? date('d/m/Y', strtotime($post->post_date)) : null,['class'=>'full-width','id'=>'post_date']) !!}
    <hr>
    <label for="post_img">Imagen Destacada</label>
    <div class="img-preview img-container preview @isset($post->post_img){{ 'active' }}@endisset">
        <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
        <img src="@isset($post->post_img){{ asset('public/uploads/blog/' . $post->post_id . '/' . $post->post_img) }}@endisset" id="preview" class="center-block img-responsive">
    </div>
    <label for="post_img" class="input-file-cms">
        Elegir imagen
        <input type="file" id="post_img" name="post_img">
        <input type="hidden" name="state_check" id="state_check">
    </label>
</div>