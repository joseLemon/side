<div class="row no-margin">
    <div class="col-sm-12">
        <h3>Información del micro sitio</h3>
        {!! Form::text('page_title',isset($page) ? $page->page_title : null,['class'=>'input-cms','id'=>'page_title','placeholder'=>'Nombre del sitio']) !!}
    </div>
    <div class="col-sm-6">
        <label for="page_img" class="img_upload_container">
            <div class="img-preview img-container preview @isset($page->micro->page_img){{ 'active' }}@endisset">
                <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                <img src="@isset($page->micro->page_img){{ asset('public/uploads/pages/' . $page->page_id . '/about_2_img'. strchr($page->micro->page_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
            </div>
            Imagen del sitio
            <label for="page_img" class="input-file-cms">
                Elegir imagen
                <input type="file" name="page_img" id="page_img">
                <input type="hidden" name="page_img_check" id="page_img_check">
            </label>
        </label>
    </div>
    <div class="col-sm-6">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <label for="color">
                    Seleccionar color del sitio
                    <select class="input-cms" name="color" id="color">
                        @foreach($colors as $color)
                            <option value="{{ $color->color_id }}">{{ $color->color_name }}</option>
                        @endforeach
                    </select>
                </label>
            </div>
            <div class="col-sm-12 col-md-6">
                <label for="page_url">
                    URL del sitio
                    {!! Form::text('page_url',isset($page) ? $page->page_url : null,['class'=>'input-cms','id'=>'page_url','placeholder'=>'URL del sitio']) !!}
                </label>
            </div>
        </div>
    </div>
</div>
<div class="row no-margin">
    <div class="col-sm-12">
        <h3>Banner Principal</h3>
    </div>
    <div class="col-sm-6">
        <label for="page_img" class="img_upload_container">
            <div class="img-preview img-container preview @isset($page->micro->banner_1_img){{ 'active' }}@endisset">
                <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                <img src="@isset($page->micro->banner_1_img){{ asset('public/uploads/pages/' . $page->page_id . '/about_2_img'. strchr($page->micro->banner_1_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
            </div>
            Imagen del banner
            <label for="page_img" class="input-file-cms">
                Elegir imagen
                <input type="file" name="banner_1_img" id="banner_1_img">
                <input type="hidden" name="banner_1_img_check" id="banner_1_img_check">
            </label>
        </label>
    </div>
    <div class="col-sm-6">
        <label for="es_diamond_1_text">
            Rombo 1
            <input class="input-cms" type="text" name="es_diamond_1_text" placeholder="Texto" value="@isset($page->micro->es_diamond_1_text){{ $page->micro->es_diamond_1_text }}@endisset">
            <input class="input-cms" type="text" name="en_diamond_1_text" placeholder="Texto inglés" value="@isset($page->micro->en_diamond_1_text){{ $page->micro->en_diamond_1_text }}@endisset">
            <input class="input-cms" type="text" name="diamond_1_url" placeholder="URL" value="@isset($page->micro->diamond_1_url){{ $page->micro->diamond_1_url }}@endisset">
        </label>
    </div>
</div>
<div class="row no-margin">
    <div class="col-sm-12">
        <h3>Acerca de</h3>
    </div>
    <div class="col-sm-12">
        <label for="es_page_about_title">
            Título de la sección
        </label>
        <div class="row">
            <div class="col-sm-6">
                {!! Form::text('es_page_about_title',isset($page) ? $page->micro->es_page_about_title : null,['class'=>'input-cms','id'=>'es_page_about_title','placeholder'=>'Título']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::text('en_page_about_title',isset($page) ? $page->micro->en_page_about_title : null,['class'=>'input-cms','id'=>'en_page_about_title','placeholder'=>'Título inglés']) !!}
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <label for="es_page_about_title">
            Texto de la sección
        </label>
        <div class="row">
            <div class="col-sm-6">
                {!! Form::textarea('es_page_about_text',isset($page) ? $page->micro->es_page_about_text : null,['class'=>'input-cms','id'=>'es_page_about_text','placeholder'=>'Texto','cols'=>30,'rows'=>5]) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::textarea('en_page_about_text',isset($page) ? $page->micro->en_page_about_text : null,['class'=>'input-cms','id'=>'en_page_about_text','placeholder'=>'Texto inglés','cols'=>30,'rows'=>5]) !!}
            </div>
        </div>
    </div>
</div>
<div class="row no-margin">
    <div class="col-sm-12">
        <h3>Información</h3>
    </div>
    <div class="col-sm-6 col-md-4">
        <label for="es_about_1_title" class="img_upload_container">
            Sección 1
            <input class="input-cms" type="text" name="es_about_1_title" id="es_about_1_title" placeholder="Título" value="@isset($page->micro->es_about_1_title ){{ $page->micro->es_about_1_title }}@endisset">
            <input class="input-cms" type="text" name="en_about_1_title" id="en_about_1_title" placeholder="Título inglés"  value="@isset($page->micro->en_about_1_title ){{ $page->micro->en_about_1_title }}@endisset">
            <textarea class="input-cms" name="es_about_1_text" id="es_about_1_text" cols="30" rows="5" placeholder="Texto">@isset($page->micro->es_about_1_text ){{ $page->micro->es_about_1_text }}@endisset</textarea>
            <textarea class="input-cms" name="en_about_1_text" id="es_about_1_text" cols="30" rows="5" placeholder="Texto inglés">@isset($page->micro->en_about_1_text ){{ $page->micro->en_about_1_text }}@endisset</textarea>

            <label for="about_1_img">
                <div class="img-preview img-container preview @isset($page->micro->about_1_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->about_1_img){{ asset('public/uploads/pages/' . $page->page_id . '/about_1_img'. strchr($page->micro->about_1_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="about_1_img" class="input-file-cms">
                    Elegir imagen
                    <input type="file" name="about_1_img" id="about_1_img">
                    <input type="hidden" name="state_about_1_check" id="state_about_1_check">
                </label>
            </label>
        </label>
    </div>
    <div class="col-sm-6 col-md-4">
        <label for="es_about_2_title" class="img_upload_container">
            Sección 2
            <input class="input-cms" type="text" name="es_about_2_title" id="es_about_2_title" placeholder="Título" value="@isset($page->micro->es_about_2_title ){{ $page->micro->es_about_2_title }}@endisset">
            <input class="input-cms" type="text" name="en_about_2_title" id="en_about_2_title" placeholder="Título inglés" value="@isset($page->micro->en_about_2_title ){{ $page->micro->en_about_2_title }}@endisset">
            <textarea class="input-cms" name="es_about_2_text" id="es_about_2_text" cols="30" rows="5" placeholder="Texto">@isset($page->micro->es_about_2_text ){{ $page->micro->es_about_2_text }}@endisset</textarea>
            <textarea class="input-cms" name="en_about_2_text" id="es_about_2_text" cols="30" rows="5" placeholder="Texto inglés">@isset($page->micro->en_about_2_text ){{ $page->micro->en_about_2_text }}@endisset</textarea>

            <label for="about_2_img">
                <div class="img-preview img-container preview @isset($page->micro->about_2_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->about_2_img){{ asset('public/uploads/pages/' . $page->page_id . '/about_2_img'. strchr($page->micro->about_2_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="about_2_img" class="input-file-cms">
                    Elegir imagen
                    <input type="file" name="about_2_img" id="about_2_img">
                    <input type="hidden" name="state_about_2_check" id="state_about_2_check">
                </label>
            </label>
        </label>
    </div>
    <div class="col-sm-6 col-md-4">
        <label for="es_about_3_title" class="img_upload_container">
            Sección 3
            <input class="input-cms" type="text" name="es_about_3_title" id="es_about_3_title" placeholder="Título" value="@isset($page->micro->es_about_3_title ){{ $page->micro->es_about_3_title }}@endisset">
            <input class="input-cms" type="text" name="en_about_3_title" id="en_about_3_title" placeholder="Título inglés" value="@isset($page->micro->en_about_3_title ){{ $page->micro->en_about_3_title }}@endisset">
            <textarea class="input-cms" name="es_about_3_text" id="es_about_3_text" cols="30" rows="5" placeholder="Texto">@isset($page->micro->es_about_2_text ){{ $page->micro->es_about_3_text }}@endisset</textarea>
            <textarea class="input-cms" name="en_about_2_text" id="es_about_3_text" cols="30" rows="5" placeholder="Texto inglés">@isset($page->micro->en_about_2_text ){{ $page->micro->en_about_3_text }}@endisset</textarea>

            <label for="about_3_img">
                <div class="img-preview img-container preview @isset($page->micro->about_3_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->about_3_img){{ asset('public/uploads/pages/' . $page->page_id . '/about_3_img'. strchr($page->micro->about_3_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="about_3_img" class="input-file-cms">
                    Elegir imagen
                    <input type="file" name="about_3_img" id="about_3_img">
                    <input type="hidden" name="state_about_3_check" id="state_about_3_check">
                </label>
            </label>
        </label>
    </div>
</div>
<div class="row no-margin">
    <div class="col-sm-12">
        <h3>Video</h3>
        <label for="page_video_iframe">
            iframe de Youtube
            {!! Form::text('page_video_iframe',isset($page) ? $page->page_video_iframe : null,['class'=>'input-cms','id'=>'page_video_iframe','placeholder'=>'iframe de Youtube']) !!}
        </label>
    </div>
</div>