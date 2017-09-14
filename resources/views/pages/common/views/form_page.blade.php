<div class="row no-margin">
    <div class="col-sm-12">
        <h3>Información del sitio</h3>
        {!! Form::text('page_title',isset($page) ? $page->page_title : old('page_title'),['class'=>'input-cms','id'=>'page_title','placeholder'=>'Nombre del sitio']) !!}
    </div>
    <div class="col-sm-6">
        <label for="page_img" class="img_upload_container">
            <div class="img-preview img-container preview @isset($page->page_img){{ 'active' }}@endisset">
                <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                <img src="@isset($page->page_img){{ asset('public/uploads/pages/' . $page->page_id . '/page_img'. strchr($page->page_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
            </div>
            Imagen del sitio
            <label for="page_img" class="input-file-cms">
                Elegir imagen
                <input type="file" name="page_img" id="page_img" accept="image/*" class="input-file-img">
                <input type="hidden" name="page_img_check" id="page_img_check">
            </label>
        </label>
    </div>
    <div class="col-sm-6">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <label for="color">
                    Seleccionar color del sitio
                    <select class="input-cms hidden" name="color" id="color">
                        @foreach($colors as $color)
                            <option value="{{ $color->color_id }}" data-class="{{ $color->color_slug }}" {{ isset($page) ? (($page->color_id == $color->color_id) ? 'selected' : null) : (old('color') == $color->color_id) ? 'selected' : null }}>{{ $color->color_name }}</option>
                        @endforeach
                    </select>
                </label>
            </div>
            @if(isset($page) ? $page->page_type_id != 3 : true)
                <div class="col-sm-12 col-md-6" @if((old('page_type') == 3)){!! 'style="display: none;";' !!}@endif>
                    <label for="page_url">
                        URL del sitio
                        {!! Form::text('page_url',isset($page) ? $page->page_url : old('page_url'),((old('page_type') == 3)) ? ['class'=>'input-cms','id'=>'page_url','placeholder'=>'URL del sitio','disabled'] : ['class'=>'input-cms','id'=>'page_url','placeholder'=>'URL del sitio']) !!}
                    </label>
                </div>
            @endif
        </div>
    </div>
</div>