<div class="blog-content">
    {!! Form::text('post_title',isset($post) ? $post->post_title : null,['class'=>'input-cms','id'=>'post_title','placeholder'=>'Título']) !!}
    {!! Form::textarea('post_content',isset($post) ? $post->post_content : null,['id'=>'post_content']) !!}
    <div class="text-right">
        {!! Form::submit('Guardar') !!}
    </div>
</div>