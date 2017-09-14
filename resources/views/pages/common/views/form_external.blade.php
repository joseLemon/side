<div class="row no-margin">
    <div class="col-sm-12">
        <h3>URL del Sitio Externo</h3>
        {!! Form::text('page_external_url',isset($page) ? $page->external->page_external_url : old('page_external_url'),['class'=>'input-cms','id'=>'page_external_url','placeholder'=>'URL del Sitio Externo']) !!}
    </div>
</div>