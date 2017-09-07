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
                Elegir imagen
                <input type="file" name="banner_1_img" id="banner_1_img" accept="image/*" class="input-file-img">
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
                    <input type="file" name="about_1_img" id="about_1_img" accept="image/*" class="input-file-img">
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
                    <input type="file" name="about_2_img" id="about_2_img" accept="image/*" class="input-file-img">
                    <input type="hidden" name="state_about_2_check" id="state_about_2_check">
                </label>
            </label>
        </label>
    </div>
    <div class="clearfix hidden-lg hidden-md"></div>
    <div class="col-sm-6 col-md-4">
        <label for="es_about_3_title" class="img_upload_container">
            Sección 3
            <input class="input-cms" type="text" name="es_about_3_title" id="es_about_3_title" placeholder="Título" value="@isset($page->micro->es_about_3_title ){{ $page->micro->es_about_3_title }}@endisset">
            <input class="input-cms" type="text" name="en_about_3_title" id="en_about_3_title" placeholder="Título inglés" value="@isset($page->micro->en_about_3_title ){{ $page->micro->en_about_3_title }}@endisset">
            <textarea class="input-cms" name="es_about_3_text" id="es_about_3_text" cols="30" rows="5" placeholder="Texto">@isset($page->micro->es_about_3_text ){{ $page->micro->es_about_3_text }}@endisset</textarea>
            <textarea class="input-cms" name="en_about_3_text" id="es_about_3_text" cols="30" rows="5" placeholder="Texto inglés">@isset($page->micro->en_about_3_text ){{ $page->micro->en_about_3_text }}@endisset</textarea>

            <label for="about_3_img">
                <div class="img-preview img-container preview @isset($page->micro->about_3_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->about_3_img){{ asset('public/uploads/pages/' . $page->page_id . '/about_3_img'. strchr($page->micro->about_3_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="about_3_img" class="input-file-cms">
                    Elegir imagen
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
                Elegir imagen
                <input type="file" name="banner_2_img" id="banner_2_img" accept="image/*" class="input-file-img">
                <input type="hidden" name="banner_2_img_check" id="banner_2_img_check">
            </label>
        </label>
    </div>
    <div class="col-sm-6">
        <label for="page_video_iframe">
            iframe de Youtube
            {!! Form::text('page_video_iframe',isset($page) ? $page->page_video_iframe : null,['class'=>'input-cms','id'=>'page_video_iframe','placeholder'=>'iframe de Youtube']) !!}
        </label>
    </div>
</div>
<div class="row no-margin">
    <div class="col-sm-12">
        <h3>Programas</h3>
    </div>
    <div class="col-sm-12">
        <label for="es_programs_title">
            Título de la sección
        </label>
        <div class="row">
            <div class="col-sm-6">
                {!! Form::text('es_programs_title',isset($page) ? $page->micro->es_programs_title : null,['class'=>'input-cms','id'=>'es_programs_title','placeholder'=>'Título']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::text('en_programs_title',isset($page) ? $page->micro->en_programs_title : null,['class'=>'input-cms','id'=>'en_programs_title','placeholder'=>'Título inglés']) !!}
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-6">
        <label for="es_program_1_title" class="img_upload_container">
            Sección 1
            <input class="input-cms" type="text" name="es_program_1_title" id="es_program_1_title" placeholder="Título" value="@isset($page->micro->es_program_1_title ){{ $page->micro->es_program_1_title }}@endisset">
            <input class="input-cms" type="text" name="en_program_1_title" id="en_program_1_title" placeholder="Título inglés"  value="@isset($page->micro->en_program_1_title ){{ $page->micro->en_program_1_title }}@endisset">

            <label for="program_1_img">
                <div class="img-preview img-container preview @isset($page->micro->program_1_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->program_1_img){{ asset('public/uploads/pages/' . $page->page_id . '/program_1_img'. strchr($page->micro->program_1_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="program_1_img" class="input-file-cms">
                    Elegir imagen
                    <input type="file" name="program_1_img" id="program_1_img" accept="image/*" class="input-file-img">
                    <input type="hidden" name="state_program_1_check" id="state_program_1_check">
                </label>
            </label>

            <label for="file_program_1" class="input-file-cms">
                Elegir documento
                <input type="file" name="file_program_1" id="file_program_1">
                <input type="hidden" name="state_file_program_1_check" id="state_file_program_1_check">
            </label>
        </label>
    </div>
    <div class="col-sm-6 col-md-6">
        <label for="es_program_2_title" class="img_upload_container">
            Sección 2
            <input class="input-cms" type="text" name="es_program_2_title" id="es_program_2_title" placeholder="Título" value="@isset($page->micro->es_program_2_title ){{ $page->micro->es_program_2_title }}@endisset">
            <input class="input-cms" type="text" name="en_program_2_title" id="en_program_2_title" placeholder="Título inglés"  value="@isset($page->micro->en_program_2_title ){{ $page->micro->en_program_2_title }}@endisset">

            <label for="program_2_img">
                <div class="img-preview img-container preview @isset($page->micro->program_2_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->program_2_img){{ asset('public/uploads/pages/' . $page->page_id . '/program_2_img'. strchr($page->micro->program_2_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="program_2_img" class="input-file-cms">
                    Elegir imagen
                    <input type="file" name="program_2_img" id="program_2_img" accept="image/*" class="input-file-img">
                    <input type="hidden" name="state_program_2_check" id="state_program_2_check">
                </label>
            </label>

            <label for="file_program_2" class="input-file-cms">
                Elegir documento
                <input type="file" name="file_program_2" id="file_program_2">
                <input type="hidden" name="state_file_program_2_check" id="state_file_program_2_check">
            </label>
        </label>
    </div>
    <div class="clearfix"></div>
    <div class="col-sm-6 col-md-6">
        <label for="es_program_3_title" class="img_upload_container">
            Sección 3
            <input class="input-cms" type="text" name="es_program_3_title" id="es_program_3_title" placeholder="Título" value="@isset($page->micro->es_program_3_title ){{ $page->micro->es_program_3_title }}@endisset">
            <input class="input-cms" type="text" name="en_program_3_title" id="en_program_3_title" placeholder="Título inglés"  value="@isset($page->micro->en_program_3_title ){{ $page->micro->en_program_3_title }}@endisset">

            <label for="program_3_img">
                <div class="img-preview img-container preview @isset($page->micro->program_3_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->program_3_img){{ asset('public/uploads/pages/' . $page->page_id . '/program_3_img'. strchr($page->micro->program_3_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="program_3_img" class="input-file-cms">
                    Elegir imagen
                    <input type="file" name="program_3_img" id="program_3_img" accept="image/*" class="input-file-img">
                    <input type="hidden" name="state_program_3_check" id="state_program_3_check">
                </label>
            </label>

            <label for="file_program_3" class="input-file-cms">
                Elegir documento
                <input type="file" name="file_program_3" id="file_program_3">
                <input type="hidden" name="state_file_program_3_check" id="state_file_program_3_check">
            </label>
        </label>
    </div>
    <div class="col-sm-6 col-md-6">
        <label for="es_program_4_title" class="img_upload_container">
            Sección 4
            <input class="input-cms" type="text" name="es_program_4_title" id="es_program_4_title" placeholder="Título" value="@isset($page->micro->es_program_4_title ){{ $page->micro->es_program_4_title }}@endisset">
            <input class="input-cms" type="text" name="en_program_4_title" id="en_program_4_title" placeholder="Título inglés"  value="@isset($page->micro->en_program_4_title ){{ $page->micro->en_program_4_title }}@endisset">

            <label for="program_4_img">
                <div class="img-preview img-container preview @isset($page->micro->program_4_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->program_4_img){{ asset('public/uploads/pages/' . $page->page_id . '/program_4_img'. strchr($page->micro->program_4_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="program_4_img" class="input-file-cms">
                    Elegir imagen
                    <input type="file" name="program_4_img" id="program_4_img" accept="image/*" class="input-file-img">
                    <input type="hidden" name="state_program_4_check" id="state_program_4_check">
                </label>
            </label>

            <label for="file_program_4" class="input-file-cms">
                Elegir documento
                <input type="file" name="file_program_4" id="file_program_4">
                <input type="hidden" name="state_file_program_4_check" id="state_file_program_4_check">
            </label>
        </label>
    </div>
</div>
<div class="row no-margin">
    <div class="col-sm-12">
        <h3>Programas administrados</h3>
    </div>
    <div class="col-sm-6">
        <label for="banner_3_img" class="img_upload_container">
            <div class="img-preview img-container preview @isset($page->micro->banner_3_img){{ 'active' }}@endisset">
                <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                <img src="@isset($page->micro->banner_3_img){{ asset('public/uploads/pages/' . $page->page_id . '/banner_3_img'. strchr($page->micro->banner_3_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
            </div>
            Imagen del banner
            <label for="banner_3_img" class="input-file-cms">
                Elegir imagen
                <input type="file" name="banner_3_img" id="banner_3_img" accept="image/*" class="input-file-img">
                <input type="hidden" name="banner_3_img_check" id="banner_3_img_check">
            </label>
        </label>
    </div>
    <div class="col-sm-6">
        <label for="es_programs_title_2">
            Título de la sección
        </label>
        <div class="row">
            <div class="col-sm-12">
                {!! Form::text('es_programs_title_2',isset($page) ? $page->micro->es_programs_title_2 : null,['class'=>'input-cms','id'=>'es_programs_title_2','placeholder'=>'Título']) !!}
                {!! Form::text('en_programs_title_2',isset($page) ? $page->micro->en_programs_title_2 : null,['class'=>'input-cms','id'=>'en_programs_title_2','placeholder'=>'Título inglés']) !!}
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-sm-6 col-md-6">
        <label for="es_program_1_title_2" class="img_upload_container">
            Sección 1
            <input class="input-cms" type="text" name="es_program_1_title_2" id="es_program_1_title_2" placeholder="Título" value="@isset($page->micro->es_program_1_title_2 ){{ $page->micro->es_program_1_title_2 }}@endisset">
            <input class="input-cms" type="text" name="en_program_1_title_2" id="en_program_1_title_2" placeholder="Título inglés"  value="@isset($page->micro->en_program_1_title_2 ){{ $page->micro->en_program_1_title_2 }}@endisset">

            <label for="program_1_img_2">
                <div class="img-preview img-container preview @isset($page->micro->program_1_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->program_1_img_2){{ asset('public/uploads/pages/' . $page->page_id . '/program_1_img_2'. strchr($page->micro->program_1_img_2,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="program_1_img_2" class="input-file-cms">
                    Elegir imagen
                    <input type="file" name="program_1_img_2" id="program_1_img_2" accept="image/*" class="input-file-img">
                    <input type="hidden" name="state_program_1_check_2" id="state_program_1_check_2">
                </label>
            </label>

            <label for="file_program_1_2" class="input-file-cms">
                Elegir documento
                <input type="file" name="file_program_1_2" id="file_program_1_2">
                <input type="hidden" name="state_file_program_1_check_2" id="state_file_program_1_check_2">
            </label>
        </label>
    </div>
    <div class="col-sm-6 col-md-6">
        <label for="es_program_2_title_2" class="img_upload_container">
            Sección 2
            <input class="input-cms" type="text" name="es_program_2_title_2" id="es_program_2_title_2" placeholder="Título" value="@isset($page->micro->es_program_2_title_2 ){{ $page->micro->es_program_2_title_2 }}@endisset">
            <input class="input-cms" type="text" name="en_program_2_title_2" id="en_program_2_title_2" placeholder="Título inglés"  value="@isset($page->micro->en_program_2_title_2 ){{ $page->micro->en_program_2_title_2 }}@endisset">

            <label for="program_2_img_2">
                <div class="img-preview img-container preview @isset($page->micro->program_2_img_2){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->program_2_img_2){{ asset('public/uploads/pages/' . $page->page_id . '/program_2_img_2'. strchr($page->micro->program_2_img_2,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="program_2_img_2" class="input-file-cms">
                    Elegir imagen
                    <input type="file" name="program_2_img_2" id="program_2_img_2" accept="image/*" class="input-file-img">
                    <input type="hidden" name="state_program_2_check_2" id="state_program_2_check_2">
                </label>
            </label>

            <label for="file_program_2_2" class="input-file-cms">
                Elegir documento
                <input type="file" name="file_program_2_2" id="file_program_2_2">
                <input type="hidden" name="state_file_program_2_check_2" id="state_file_program_2_check_2">
            </label>
        </label>
    </div>
</div>