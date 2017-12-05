<div class="row no-margin">
    <div class="col-sm-12">
        <h3>Banner Principal</h3>
    </div>
    <div class="col-sm-6">
        <label for="banner_1_img" class="img_upload_container">
            <div class="img-preview img-container preview @isset($page->micro->banner_1_img){{ 'active' }}@endisset">
                <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                <img src="@isset($page->micro->banner_1_img){{ asset('public/uploads/pages/' . $page->page_id . '/banner_1_img'. strchr($page->micro->banner_1_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
            </div>
            Imagen del banner
            <label for="banner_1_img" class="input-file-cms">
                <span class="label_text">Elegir imagen</span>
                <input type="file" name="banner_1_img" id="banner_1_img" accept="image/*" class="input-file-img">
                <input type="hidden" name="banner_1_img_check" id="banner_1_img_check">
            </label>
        </label>
    </div>
    <div class="col-sm-6">
        <label for="es_diamond_1_text">
            Rombo 1
            <input class="input-cms" type="text" name="es_diamond_1_text" placeholder="Texto" value="{{ isset($page->micro->es_diamond_1_text) ? $page->micro->es_diamond_1_text : old('es_diamond_1_text') }}">
            <input class="input-cms" type="text" name="en_diamond_1_text" placeholder="Texto inglés" value="{{ isset($page->micro->en_diamond_1_text) ? $page->micro->en_diamond_1_text : old('en_diamond_1_text') }}">
            <input class="input-cms" type="text" name="diamond_1_url" placeholder="URL" value="{{ isset($page->micro->diamond_1_url) ? $page->micro->diamond_1_url : old('diamond_1_url') }}">
        </label>
    </div>
</div>
<div class="row no-margin">
    <div class="col-sm-6 col-md-4">
        <label for="es_diamond_2_text">
            Rombo 2
            <input class="input-cms" type="text" name="es_diamond_2_text" placeholder="Texto" value="{{ isset($page->micro->es_diamond_2_text) ? $page->micro->es_diamond_2_text : old('es_diamond_2_text') }}">
            <input class="input-cms" type="text" name="en_diamond_2_text" placeholder="Texto inglés" value="{{ isset($page->micro->en_diamond_2_text) ? $page->micro->en_diamond_2_text : old('en_diamond_2_text') }}">
            <input class="input-cms" type="text" name="diamond_2_url" placeholder="URL" value="{{ isset($page->micro->diamond_2_url) ? $page->micro->diamond_2_url : old('diamond_2_url') }}">
        </label>
    </div>
    <div class="col-sm-6 col-md-4">
        <label for="es_diamond_3_text">
            Rombo 3
            <input class="input-cms" type="text" name="es_diamond_3_text" placeholder="Texto" value="{{ isset($page->micro->es_diamond_3_text) ? $page->micro->es_diamond_3_text : old('es_diamond_3_text') }}">
            <input class="input-cms" type="text" name="en_diamond_3_text" placeholder="Texto inglés" value="{{ isset($page->micro->en_diamond_3_text) ? $page->micro->en_diamond_3_text : old('en_diamond_3_text') }}">
            <input class="input-cms" type="text" name="diamond_3_url" placeholder="URL" value="{{ isset($page->micro->diamond_3_url) ? $page->micro->diamond_3_url : old('diamond_3_url') }}">
        </label>
    </div>
    <div class="col-sm-6 col-md-4">
        <label for="es_diamond_4_text">
            Rombo 4
            <input class="input-cms" type="text" name="es_diamond_4_text" placeholder="Texto" value="{{ isset($page->micro->es_diamond_4_text) ? $page->micro->es_diamond_4_text : old('es_diamond_4_text') }}">
            <input class="input-cms" type="text" name="en_diamond_4_text" placeholder="Texto inglés" value="{{ isset($page->micro->en_diamond_4_text) ? $page->micro->en_diamond_4_text : old('en_diamond_4_text') }}">
            <input class="input-cms" type="text" name="diamond_4_url" placeholder="URL" value="{{ isset($page->micro->diamond_4_url) ? $page->micro->diamond_4_url : old('diamond_4_url') }}">
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
                {!! Form::text('es_page_about_title',isset($page) ? $page->micro->es_page_about_title : old('es_page_about_title'),['class'=>'input-cms','id'=>'es_page_about_title','placeholder'=>'Título']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::text('en_page_about_title',isset($page) ? $page->micro->en_page_about_title : old('en_page_about_title'),['class'=>'input-cms','id'=>'en_page_about_title','placeholder'=>'Título inglés']) !!}
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <label for="es_page_about_title">
            Texto de la sección
        </label>
        <div class="row">
            <div class="col-sm-6">
                {!! Form::textarea('es_page_about_text',isset($page) ? $page->micro->es_page_about_text : old('es_page_about_text'),['class'=>'input-cms','id'=>'es_page_about_text','placeholder'=>'Texto','cols'=>30,'rows'=>5]) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::textarea('en_page_about_text',isset($page) ? $page->micro->en_page_about_text : old('en_page_about_text'),['class'=>'input-cms','id'=>'en_page_about_text','placeholder'=>'Texto inglés','cols'=>30,'rows'=>5]) !!}
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
            <input class="input-cms" type="text" name="es_about_1_title" id="es_about_1_title" placeholder="Título" value="{{ isset($page->micro->es_about_1_title ) ? $page->micro->es_about_1_title : old('es_about_1_title') }}">
            <input class="input-cms" type="text" name="en_about_1_title" id="en_about_1_title" placeholder="Título inglés"  value="{{ isset($page->micro->en_about_1_title ) ? $page->micro->en_about_1_title : old('en_about_1_title') }}">
            <textarea class="input-cms" name="es_about_1_text" id="es_about_1_text" cols="30" rows="5" placeholder="Texto">{{ isset($page->micro->es_about_1_text ) ? $page->micro->es_about_1_text : old('es_about_1_text') }}</textarea>
            <textarea class="input-cms" name="en_about_1_text" id="es_about_1_text" cols="30" rows="5" placeholder="Texto inglés">{{ isset($page->micro->en_about_1_text ) ? $page->micro->en_about_1_text : old('en_about_1_text') }}</textarea>

            <label for="about_1_img">
                <div class="img-preview img-container preview @isset($page->micro->about_1_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->about_1_img){{ asset('public/uploads/pages/' . $page->page_id . '/about_1_img'. strchr($page->micro->about_1_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="about_1_img" class="input-file-cms">
                    <span class="label_text">Elegir imagen</span>
                    <input type="file" name="about_1_img" id="about_1_img" accept="image/*" class="input-file-img">
                    <input type="hidden" name="state_about_1_check" id="state_about_1_check">
                </label>
            </label>
        </label>
    </div>
    <div class="col-sm-6 col-md-4">
        <label for="es_about_2_title" class="img_upload_container">
            Sección 2
            <input class="input-cms" type="text" name="es_about_2_title" id="es_about_2_title" placeholder="Título" value="{{ isset($page->micro->es_about_2_title ) ? $page->micro->es_about_2_title : old('es_about_2_title') }}">
            <input class="input-cms" type="text" name="en_about_2_title" id="en_about_2_title" placeholder="Título inglés" value="{{ isset($page->micro->en_about_2_title ) ? $page->micro->en_about_2_title : old('en_about_2_title') }}">
            <textarea class="input-cms" name="es_about_2_text" id="es_about_2_text" cols="30" rows="5" placeholder="Texto">{{ isset($page->micro->es_about_2_text ) ? $page->micro->es_about_2_text : old('es_about_2_text') }}</textarea>
            <textarea class="input-cms" name="en_about_2_text" id="es_about_2_text" cols="30" rows="5" placeholder="Texto inglés">{{ isset($page->micro->en_about_2_text ) ? $page->micro->en_about_2_text : old('en_about_2_text') }}</textarea>

            <label for="about_2_img">
                <div class="img-preview img-container preview @isset($page->micro->about_2_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->about_2_img){{ asset('public/uploads/pages/' . $page->page_id . '/about_2_img'. strchr($page->micro->about_2_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="about_2_img" class="input-file-cms">
                    <span class="label_text">Elegir imagen</span>
                    <input type="file" name="about_2_img" id="about_2_img" accept="image/*" class="input-file-img">
                    <input type="hidden" name="state_about_2_check" id="state_about_2_check">
                </label>
            </label>
        </label>
    </div>
    <div class="clearfix hidden-lg hidden-lg hidden-md"></div>
    <div class="col-sm-6 col-md-4">
        <label for="es_about_3_title" class="img_upload_container">
            Sección 3
            <input class="input-cms" type="text" name="es_about_3_title" id="es_about_3_title" placeholder="Título" value="{{ isset($page->micro->es_about_3_title ) ? $page->micro->es_about_3_title : old('es_about_3_title')}}">
            <input class="input-cms" type="text" name="en_about_3_title" id="en_about_3_title" placeholder="Título inglés" value="{{ isset($page->micro->en_about_3_title ) ? $page->micro->en_about_3_title : old('en_about_3_title')}}">
            <textarea class="input-cms" name="es_about_3_text" id="es_about_3_text" cols="30" rows="5" placeholder="Texto">{{ isset($page->micro->es_about_3_text ) ? $page->micro->es_about_3_text : old('es_about_3_text')}}</textarea>
            <textarea class="input-cms" name="en_about_3_text" id="es_about_3_text" cols="30" rows="5" placeholder="Texto inglés">{{ isset($page->micro->en_about_3_text ) ? $page->micro->en_about_3_text : old('en_about_3_text')}}</textarea>

            <label for="about_3_img">
                <div class="img-preview img-container preview @isset($page->micro->about_3_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->about_3_img){{ asset('public/uploads/pages/' . $page->page_id . '/about_3_img'. strchr($page->micro->about_3_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="about_3_img" class="input-file-cms">
                    <span class="label_text">Elegir imagen</span>
                    <input type="file" name="about_3_img" id="about_3_img" accept="image/*" class="input-file-img">
                    <input type="hidden" name="state_about_3_check" id="state_about_3_check">
                </label>
            </label>
        </label>
    </div>
</div>
<div class="row no-margin">
    <div class="col-sm-12">
        <h3>Video</h3>
    </div>
    <div class="col-sm-6">
        <label for="banner_2_img" class="img_upload_container">
            <div class="img-preview img-container preview @isset($page->micro->banner_2_img){{ 'active' }}@endisset">
                <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                <img src="@isset($page->micro->banner_2_img){{ asset('public/uploads/pages/' . $page->page_id . '/banner_2_img'. strchr($page->micro->banner_2_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
            </div>
            Imagen del banner
            <label for="banner_2_img" class="input-file-cms">
                <span class="label_text">Elegir imagen</span>
                <input type="file" name="banner_2_img" id="banner_2_img" accept="image/*" class="input-file-img">
                <input type="hidden" name="banner_2_img_check" id="banner_2_img_check">
            </label>
        </label>
    </div>
    <div class="col-sm-6">
        <label for="page_video_iframe">
            iframe de Youtube
            {!! Form::text('page_video_iframe',isset($page) ? $page->micro->page_video_iframe : old('page_video_iframe'),['class'=>'input-cms','id'=>'page_video_iframe','placeholder'=>'iframe de Youtube']) !!}
        </label>
    </div>
</div>