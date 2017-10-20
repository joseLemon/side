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
                {!! Form::text('es_programs_title',isset($page) ? $page->micro->es_programs_title : old('es_programs_title'),['class'=>'input-cms','id'=>'es_programs_title','placeholder'=>'Título']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::text('en_programs_title',isset($page) ? $page->micro->en_programs_title : old('en_programs_title'),['class'=>'input-cms','id'=>'en_programs_title','placeholder'=>'Título inglés']) !!}
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-3">
        <label for="es_program_1_title" class="img_upload_container">
            Sección 1
            <input class="input-cms" type="text" name="es_program_1_title" id="es_program_1_title" placeholder="Título" value="{{ isset($page->micro->es_program_1_title ) ? $page->micro->es_program_1_title : old('es_program_1_title') }}">
            <input class="input-cms" type="text" name="en_program_1_title" id="en_program_1_title" placeholder="Título inglés"  value="{{ isset($page->micro->en_program_1_title ) ? $page->micro->en_program_1_title : old('en_program_1_title') }}">
            {!! Form::textarea('es_program_1_text',isset($page) ? $page->micro->es_program_1_text : old('es_program_1_title'),['class'=>'input-cms','id'=>'es_program_1_text','placeholder'=>'Texto','cols'=>30,'rows'=>5]) !!}
            {!! Form::textarea('en_program_1_text',isset($page) ? $page->micro->en_program_1_text : old('en_program_1_title'),['class'=>'input-cms','id'=>'en_program_1_text','placeholder'=>'Texto inglés','cols'=>30,'rows'=>5]) !!}

            <label for="program_1_img">
                <div class="img-preview img-container preview @isset($page->micro->program_1_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->program_1_img){{ asset('public/uploads/pages/' . $page->page_id . '/program_1_img'. strchr($page->micro->program_1_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="program_1_img" class="input-file-cms">
                    <span class="label_text">Elegir imagen</span>
                    <input type="file" name="program_1_img" id="program_1_img" accept="image/*" class="input-file-img">
                    <input type="hidden" name="state_program_1_check" id="state_program_1_check">
                </label>
            </label>

            <label for="file_program_1" class="input-file-cms document">
                <span class="label_text">{{ isset($page->micro->file_program_1) ? $page->micro->file_program_1 : 'Elegir documento' }}</span>
                <input type="file" name="file_program_1" id="file_program_1" class="input-file-doc" accept="application/pdf">
                <input type="hidden" name="state_file_program_1_check" id="state_file_program_1_check">
                <button type="button" class="remove-file @if(!isset($page->micro->file_program_1)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
            </label>
        </label>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-3">
        <label for="es_program_2_title" class="img_upload_container">
            Sección 2
            <input class="input-cms" type="text" name="es_program_2_title" id="es_program_2_title" placeholder="Título" value="{{ isset($page->micro->es_program_2_title ) ? $page->micro->es_program_2_title : old('es_program_2_title')}}">
            <input class="input-cms" type="text" name="en_program_2_title" id="en_program_2_title" placeholder="Título inglés"  value="{{ isset($page->micro->en_program_2_title ) ? $page->micro->en_program_2_title : old('en_program_2_title')}}">
            {!! Form::textarea('es_program_2_text',isset($page) ? $page->micro->es_program_2_text : old('es_program_2_text'),['class'=>'input-cms','id'=>'es_program_2_text','placeholder'=>'Texto','cols'=>30,'rows'=>5]) !!}
            {!! Form::textarea('en_program_2_text',isset($page) ? $page->micro->en_program_2_text : old('en_program_2_text'),['class'=>'input-cms','id'=>'en_program_2_text','placeholder'=>'Texto inglés','cols'=>30,'rows'=>5]) !!}

            <label for="program_2_img">
                <div class="img-preview img-container preview @isset($page->micro->program_2_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->program_2_img){{ asset('public/uploads/pages/' . $page->page_id . '/program_2_img'. strchr($page->micro->program_2_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="program_2_img" class="input-file-cms">
                    <span class="label_text">Elegir imagen</span>
                    <input type="file" name="program_2_img" id="program_2_img" accept="image/*" class="input-file-img">
                    <input type="hidden" name="state_program_2_check" id="state_program_2_check">
                </label>
            </label>

            <label for="file_program_2" class="input-file-cms document">
                <span class="label_text">{{ isset($page->micro->file_program_2) ? $page->micro->file_program_2 : 'Elegir documento' }}</span>
                <input type="file" name="file_program_2" id="file_program_2" class="input-file-doc" accept="application/pdf">
                <input type="hidden" name="state_file_program_2_check" id="state_file_program_2_check">
                <button type="button" class="remove-file @if(!isset($page->micro->file_program_2)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
            </label>
        </label>
    </div>
    <div class="clearfix hidden-lg"></div>
    <div class="col-sm-6 col-md-6 col-lg-3">
        <label for="es_program_3_title" class="img_upload_container">
            Sección 3
            <input class="input-cms" type="text" name="es_program_3_title" id="es_program_3_title" placeholder="Título" value="{{ isset($page->micro->es_program_3_title ) ? $page->micro->es_program_3_title : old('es_program_3_title') }}">
            <input class="input-cms" type="text" name="en_program_3_title" id="en_program_3_title" placeholder="Título inglés"  value="{{ isset($page->micro->en_program_3_title ) ? $page->micro->en_program_3_title : old('en_program_3_title') }}">
            {!! Form::textarea('es_program_3_text',isset($page) ? $page->micro->es_program_3_text : old('es_program_3_text'),['class'=>'input-cms','id'=>'es_program_3_text','placeholder'=>'Texto','cols'=>30,'rows'=>5]) !!}
            {!! Form::textarea('en_program_3_text',isset($page) ? $page->micro->en_program_3_text : old('en_program_3_text'),['class'=>'input-cms','id'=>'en_program_3_text','placeholder'=>'Texto inglés','cols'=>30,'rows'=>5]) !!}

            <label for="program_3_img">
                <div class="img-preview img-container preview @isset($page->micro->program_3_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->program_3_img){{ asset('public/uploads/pages/' . $page->page_id . '/program_3_img'. strchr($page->micro->program_3_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="program_3_img" class="input-file-cms">
                    <span class="label_text">Elegir imagen</span>
                    <input type="file" name="program_3_img" id="program_3_img" accept="image/*" class="input-file-img">
                    <input type="hidden" name="state_program_3_check" id="state_program_3_check">
                </label>
            </label>

            <label for="file_program_3" class="input-file-cms document">
                <span class="label_text">{{ isset($page->micro->file_program_3) ? $page->micro->file_program_3 : 'Elegir documento' }}</span>
                <input type="file" name="file_program_3" id="file_program_3" class="input-file-doc" accept="application/pdf">
                <input type="hidden" name="state_file_program_3_check" id="state_file_program_3_check">
                <button type="button" class="remove-file @if(!isset($page->micro->file_program_3)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
            </label>
        </label>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-3">
        <label for="es_program_4_title" class="img_upload_container">
            Sección 4
            <input class="input-cms" type="text" name="es_program_4_title" id="es_program_4_title" placeholder="Título" value="{{ isset($page->micro->es_program_4_title ) ? $page->micro->es_program_4_title : old('es_program_4_title') }}">
            <input class="input-cms" type="text" name="en_program_4_title" id="en_program_4_title" placeholder="Título inglés"  value="{{ isset($page->micro->en_program_4_title ) ? $page->micro->en_program_4_title : old('en_program_4_title') }}">
            {!! Form::textarea('es_program_4_text',isset($page) ? $page->micro->es_program_4_text : old('es_program_4_text'),['class'=>'input-cms','id'=>'es_program_4_text','placeholder'=>'Texto','cols'=>30,'rows'=>5]) !!}
            {!! Form::textarea('en_program_4_text',isset($page) ? $page->micro->en_program_4_text : old('en_program_4_text'),['class'=>'input-cms','id'=>'en_program_4_text','placeholder'=>'Texto inglés','cols'=>30,'rows'=>5]) !!}

            <label for="program_4_img">
                <div class="img-preview img-container preview @isset($page->micro->program_4_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->program_4_img){{ asset('public/uploads/pages/' . $page->page_id . '/program_4_img'. strchr($page->micro->program_4_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="program_4_img" class="input-file-cms">
                    <span class="label_text">Elegir imagen</span>
                    <input type="file" name="program_4_img" id="program_4_img" accept="image/*" class="input-file-img">
                    <input type="hidden" name="state_program_4_check" id="state_program_4_check">
                </label>
            </label>

            <label for="file_program_4" class="input-file-cms document">
                <span class="label_text">{{ isset($page->micro->file_program_4) ? $page->micro->file_program_4 : 'Elegir documento' }}</span>
                <input type="file" name="file_program_4" id="file_program_4" class="input-file-doc" accept="application/pdf">
                <input type="hidden" name="state_file_program_4_check" id="state_file_program_4_check">
                <button type="button" class="remove-file @if(!isset($page->micro->file_program_4)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
            </label>
        </label>
    </div>
    <div class="clearfix"></div>
    <div class="col-sm-6 col-md-6 col-lg-3">
        <label for="es_program_5_title" class="img_upload_container">
            Sección 5
            <input class="input-cms" type="text" name="es_program_5_title" id="es_program_5_title" placeholder="Título" value="{{ isset($page->micro->es_program_5_title ) ? $page->micro->es_program_5_title : old('es_program_5_title') }}">
            <input class="input-cms" type="text" name="en_program_5_title" id="en_program_5_title" placeholder="Título inglés"  value="{{ isset($page->micro->en_program_5_title ) ? $page->micro->en_program_5_title : old('en_program_5_title') }}">
            {!! Form::textarea('es_program_5_text',isset($page) ? $page->micro->es_program_5_text : old('es_program_5_text'),['class'=>'input-cms','id'=>'es_program_5_text','placeholder'=>'Texto','cols'=>30,'rows'=>5]) !!}
            {!! Form::textarea('en_program_5_text',isset($page) ? $page->micro->en_program_5_text : old('en_program_5_text'),['class'=>'input-cms','id'=>'en_program_5_text','placeholder'=>'Texto inglés','cols'=>30,'rows'=>5]) !!}

            <label for="program_5_img">
                <div class="img-preview img-container preview @isset($page->micro->program_5_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->program_5_img){{ asset('public/uploads/pages/' . $page->page_id . '/program_5_img'. strchr($page->micro->program_5_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="program_5_img" class="input-file-cms">
                    <span class="label_text">Elegir imagen</span>
                    <input type="file" name="program_5_img" id="program_5_img" accept="image/*" class="input-file-img">
                    <input type="hidden" name="state_program_5_check" id="state_program_5_check">
                </label>
            </label>

            <label for="file_program_5" class="input-file-cms document">
                <span class="label_text">{{ isset($page->micro->file_program_5) ? $page->micro->file_program_5 : 'Elegir documento' }}</span>
                <input type="file" name="file_program_5" id="file_program_5" class="input-file-doc" accept="application/pdf">
                <input type="hidden" name="state_file_program_5_check" id="state_file_program_5_check">
                <button type="button" class="remove-file @if(!isset($page->micro->file_program_5)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
            </label>
        </label>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-3">
        <label for="es_program_6_title" class="img_upload_container">
            Sección 6
            <input class="input-cms" type="text" name="es_program_6_title" id="es_program_6_title" placeholder="Título" value="{{ isset($page->micro->es_program_6_title ) ? $page->micro->es_program_6_title : old('es_program_6_title') }}">
            <input class="input-cms" type="text" name="en_program_6_title" id="en_program_6_title" placeholder="Título inglés"  value="{{ isset($page->micro->en_program_6_title ) ? $page->micro->en_program_6_title : old('en_program_6_title') }}">
            {!! Form::textarea('es_program_6_text',isset($page) ? $page->micro->es_program_6_text : old('es_program_6_text'),['class'=>'input-cms','id'=>'es_program_6_text','placeholder'=>'Texto','cols'=>30,'rows'=>5]) !!}
            {!! Form::textarea('en_program_6_text',isset($page) ? $page->micro->en_program_6_text : old('en_program_6_text'),['class'=>'input-cms','id'=>'en_program_6_text','placeholder'=>'Texto inglés','cols'=>30,'rows'=>5]) !!}

            <label for="program_6_img">
                <div class="img-preview img-container preview @isset($page->micro->program_6_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->program_6_img){{ asset('public/uploads/pages/' . $page->page_id . '/program_6_img'. strchr($page->micro->program_6_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="program_6_img" class="input-file-cms">
                    <span class="label_text">Elegir imagen</span>
                    <input type="file" name="program_6_img" id="program_6_img" accept="image/*" class="input-file-img">
                    <input type="hidden" name="state_program_6_check" id="state_program_6_check">
                </label>
            </label>

            <label for="file_program_6" class="input-file-cms document">
                <span class="label_text">{{ isset($page->micro->file_program_6) ? $page->micro->file_program_6 : 'Elegir documento' }}</span>
                <input type="file" name="file_program_6" id="file_program_6" class="input-file-doc" accept="application/pdf">
                <input type="hidden" name="state_file_program_6_check" id="state_file_program_6_check">
                <button type="button" class="remove-file @if(!isset($page->micro->file_program_6)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
            </label>
        </label>
    </div>
    <div class="clearfix hidden-lg"></div>
    <div class="col-sm-6 col-md-6 col-lg-3">
        <label for="es_program_7_title" class="img_upload_container">
            Sección 7
            <input class="input-cms" type="text" name="es_program_7_title" id="es_program_7_title" placeholder="Título" value="{{ isset($page->micro->es_program_7_title ) ? $page->micro->es_program_7_title : old('es_program_7_title') }}">
            <input class="input-cms" type="text" name="en_program_7_title" id="en_program_7_title" placeholder="Título inglés"  value="{{ isset($page->micro->en_program_7_title ) ? $page->micro->en_program_7_title : old('en_program_7_title') }}">
            {!! Form::textarea('es_program_7_text',isset($page) ? $page->micro->es_program_7_text : old('es_program_7_text'),['class'=>'input-cms','id'=>'es_program_7_text','placeholder'=>'Texto','cols'=>30,'rows'=>5]) !!}
            {!! Form::textarea('en_program_7_text',isset($page) ? $page->micro->en_program_7_text : old('en_program_7_text'),['class'=>'input-cms','id'=>'en_program_7_text','placeholder'=>'Texto inglés','cols'=>30,'rows'=>5]) !!}

            <label for="program_7_img">
                <div class="img-preview img-container preview @isset($page->micro->program_7_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->program_7_img){{ asset('public/uploads/pages/' . $page->page_id . '/program_7_img'. strchr($page->micro->program_7_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="program_7_img" class="input-file-cms">
                    <span class="label_text">Elegir imagen</span>
                    <input type="file" name="program_7_img" id="program_7_img" accept="image/*" class="input-file-img">
                    <input type="hidden" name="state_program_7_check" id="state_program_7_check">
                </label>
            </label>

            <label for="file_program_7" class="input-file-cms document">
                <span class="label_text">{{ isset($page->micro->file_program_7) ? $page->micro->file_program_7 : 'Elegir documento' }}</span>
                <input type="file" name="file_program_7" id="file_program_7" class="input-file-doc" accept="application/pdf">
                <input type="hidden" name="state_file_program_7_check" id="state_file_program_7_check">
                <button type="button" class="remove-file @if(!isset($page->micro->file_program_7)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
            </label>
        </label>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-3">
        <label for="es_program_8_title" class="img_upload_container">
            Sección 8
            <input class="input-cms" type="text" name="es_program_8_title" id="es_program_8_title" placeholder="Título" value="{{ isset($page->micro->es_program_8_title ) ? $page->micro->es_program_8_title : old('es_program_8_title') }}">
            <input class="input-cms" type="text" name="en_program_8_title" id="en_program_8_title" placeholder="Título inglés"  value="{{ isset($page->micro->en_program_8_title ) ? $page->micro->en_program_8_title : old('en_program_8_title') }}">
            {!! Form::textarea('es_program_8_text',isset($page) ? $page->micro->es_program_8_text : old('es_program_8_text'),['class'=>'input-cms','id'=>'es_program_8_text','placeholder'=>'Texto','cols'=>30,'rows'=>5]) !!}
            {!! Form::textarea('en_program_8_text',isset($page) ? $page->micro->en_program_8_text : old('en_program_8_text'),['class'=>'input-cms','id'=>'en_program_8_text','placeholder'=>'Texto inglés','cols'=>30,'rows'=>5]) !!}

            <label for="program_8_img">
                <div class="img-preview img-container preview @isset($page->micro->program_8_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->program_8_img){{ asset('public/uploads/pages/' . $page->page_id . '/program_8_img'. strchr($page->micro->program_8_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="program_8_img" class="input-file-cms">
                    <span class="label_text">Elegir imagen</span>
                    <input type="file" name="program_8_img" id="program_8_img" accept="image/*" class="input-file-img">
                    <input type="hidden" name="state_program_8_check" id="state_program_8_check">
                </label>
            </label>

            <label for="file_program_8" class="input-file-cms document">
                <span class="label_text">{{ isset($page->micro->file_program_8) ? $page->micro->file_program_8 : 'Elegir documento' }}</span>
                <input type="file" name="file_program_8" id="file_program_8" class="input-file-doc" accept="application/pdf">
                <input type="hidden" name="state_file_program_8_check" id="state_file_program_8_check">
                <button type="button" class="remove-file @if(!isset($page->micro->file_program_8)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
            </label>
        </label>
    </div>
    <div class="clearfix"></div>
    <div class="col-sm-6 col-md-6 col-lg-3">
        <label for="es_program_9_title" class="img_upload_container">
            Sección 9
            <input class="input-cms" type="text" name="es_program_9_title" id="es_program_9_title" placeholder="Título" value="{{ isset($page->micro->es_program_9_title ) ? $page->micro->es_program_9_title : old('es_program_9_title') }}">
            <input class="input-cms" type="text" name="en_program_9_title" id="en_program_9_title" placeholder="Título inglés"  value="{{ isset($page->micro->en_program_9_title ) ? $page->micro->en_program_9_title : old('en_program_9_title') }}">
            {!! Form::textarea('es_program_9_text',isset($page) ? $page->micro->es_program_9_text : old('es_program_9_text'),['class'=>'input-cms','id'=>'es_program_9_text','placeholder'=>'Texto','cols'=>30,'rows'=>5]) !!}
            {!! Form::textarea('en_program_9_text',isset($page) ? $page->micro->en_program_9_text : old('en_program_9_text'),['class'=>'input-cms','id'=>'en_program_9_text','placeholder'=>'Texto inglés','cols'=>30,'rows'=>5]) !!}

            <label for="program_9_img">
                <div class="img-preview img-container preview @isset($page->micro->program_9_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->program_9_img){{ asset('public/uploads/pages/' . $page->page_id . '/program_9_img'. strchr($page->micro->program_9_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="program_9_img" class="input-file-cms">
                    <span class="label_text">Elegir imagen</span>
                    <input type="file" name="program_9_img" id="program_9_img" accept="image/*" class="input-file-img">
                    <input type="hidden" name="state_program_9_check" id="state_program_9_check">
                </label>
            </label>

            <label for="file_program_9" class="input-file-cms document">
                <span class="label_text">{{ isset($page->micro->file_program_9) ? $page->micro->file_program_9 : 'Elegir documento' }}</span>
                <input type="file" name="file_program_9" id="file_program_9" class="input-file-doc" accept="application/pdf">
                <input type="hidden" name="state_file_program_9_check" id="state_file_program_9_check">
                <button type="button" class="remove-file @if(!isset($page->micro->file_program_9)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
            </label>
        </label>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-3">
        <label for="es_program_10_title" class="img_upload_container">
            Sección 10
            <input class="input-cms" type="text" name="es_program_10_title" id="es_program_10_title" placeholder="Título" value="{{ isset($page->micro->es_program_10_title ) ? $page->micro->es_program_10_title : old('es_program_10_title') }}">
            <input class="input-cms" type="text" name="en_program_10_title" id="en_program_10_title" placeholder="Título inglés"  value="{{ isset($page->micro->en_program_10_title ) ? $page->micro->en_program_10_title : old('en_program_10_title') }}">
            {!! Form::textarea('es_program_10_text',isset($page) ? $page->micro->es_program_10_text : old('es_program_10_text'),['class'=>'input-cms','id'=>'es_program_10_text','placeholder'=>'Texto','cols'=>30,'rows'=>5]) !!}
            {!! Form::textarea('en_program_10_text',isset($page) ? $page->micro->en_program_10_text : old('en_program_10_text'),['class'=>'input-cms','id'=>'en_program_10_text','placeholder'=>'Texto inglés','cols'=>30,'rows'=>5]) !!}

            <label for="program_10_img">
                <div class="img-preview img-container preview @isset($page->micro->program_10_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->program_10_img){{ asset('public/uploads/pages/' . $page->page_id . '/program_10_img'. strchr($page->micro->program_10_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="program_10_img" class="input-file-cms">
                    <span class="label_text">Elegir imagen</span>
                    <input type="file" name="program_10_img" id="program_10_img" accept="image/*" class="input-file-img">
                    <input type="hidden" name="state_program_10_check" id="state_program_10_check">
                </label>
            </label>

            <label for="file_program_10" class="input-file-cms document">
                <span class="label_text">{{ isset($page->micro->file_program_10) ? $page->micro->file_program_10 : 'Elegir documento' }}</span>
                <input type="file" name="file_program_10" id="file_program_10" class="input-file-doc" accept="application/pdf">
                <input type="hidden" name="state_file_program_10_check" id="state_file_program_10_check">
                <button type="button" class="remove-file @if(!isset($page->micro->file_program_10)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
            </label>
        </label>
    </div>
    <div class="clearfix hidden-lg"></div>
    <div class="col-sm-6 col-md-6 col-lg-3">
        <label for="es_program_11_title" class="img_upload_container">
            Sección 11
            <input class="input-cms" type="text" name="es_program_11_title" id="es_program_11_title" placeholder="Título" value="{{ isset($page->micro->es_program_11_title ) ? $page->micro->es_program_11_title : old('es_program_11_title') }}">
            <input class="input-cms" type="text" name="en_program_11_title" id="en_program_11_title" placeholder="Título inglés"  value="{{ isset($page->micro->en_program_11_title ) ? $page->micro->en_program_11_title : old('en_program_11_title') }}">
            {!! Form::textarea('es_program_11_text',isset($page) ? $page->micro->es_program_11_text : old('es_program_11_text'),['class'=>'input-cms','id'=>'es_program_11_text','placeholder'=>'Texto','cols'=>30,'rows'=>5]) !!}
            {!! Form::textarea('en_program_11_text',isset($page) ? $page->micro->en_program_11_text : old('en_program_11_text'),['class'=>'input-cms','id'=>'en_program_11_text','placeholder'=>'Texto inglés','cols'=>30,'rows'=>5]) !!}

            <label for="program_11_img">
                <div class="img-preview img-container preview @isset($page->micro->program_11_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->program_11_img){{ asset('public/uploads/pages/' . $page->page_id . '/program_11_img'. strchr($page->micro->program_11_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="program_11_img" class="input-file-cms">
                    <span class="label_text">Elegir imagen</span>
                    <input type="file" name="program_11_img" id="program_11_img" accept="image/*" class="input-file-img">
                    <input type="hidden" name="state_program_11_check" id="state_program_11_check">
                </label>
            </label>

            <label for="file_program_11" class="input-file-cms document">
                <span class="label_text">{{ isset($page->micro->file_program_11) ? $page->micro->file_program_11 : 'Elegir documento' }}</span>
                <input type="file" name="file_program_11" id="file_program_11" class="input-file-doc" accept="application/pdf">
                <input type="hidden" name="state_file_program_11_check" id="state_file_program_11_check">
                <button type="button" class="remove-file @if(!isset($page->micro->file_program_11)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
            </label>
        </label>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-3">
        <label for="es_program_12_title" class="img_upload_container">
            Sección 12
            <input class="input-cms" type="text" name="es_program_12_title" id="es_program_12_title" placeholder="Título" value="{{ isset($page->micro->es_program_12_title ) ? $page->micro->es_program_12_title : old('es_program_12_title') }}">
            <input class="input-cms" type="text" name="en_program_12_title" id="en_program_12_title" placeholder="Título inglés"  value="{{ isset($page->micro->en_program_12_title ) ? $page->micro->en_program_12_title : old('en_program_12_title') }}">
            {!! Form::textarea('es_program_12_text',isset($page) ? $page->micro->es_program_12_text : old('es_program_12_text'),['class'=>'input-cms','id'=>'es_program_12_text','placeholder'=>'Texto','cols'=>30,'rows'=>5]) !!}
            {!! Form::textarea('en_program_12_text',isset($page) ? $page->micro->en_program_12_text : old('en_program_12_text'),['class'=>'input-cms','id'=>'en_program_12_text','placeholder'=>'Texto inglés','cols'=>30,'rows'=>5]) !!}

            <label for="program_12_img">
                <div class="img-preview img-container preview @isset($page->micro->program_12_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->program_12_img){{ asset('public/uploads/pages/' . $page->page_id . '/program_12_img'. strchr($page->micro->program_12_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="program_12_img" class="input-file-cms">
                    <span class="label_text">Elegir imagen</span>
                    <input type="file" name="program_12_img" id="program_12_img" accept="image/*" class="input-file-img">
                    <input type="hidden" name="state_program_12_check" id="state_program_12_check">
                </label>
            </label>

            <label for="file_program_12" class="input-file-cms document">
                <span class="label_text">{{ isset($page->micro->file_program_12) ? $page->micro->file_program_12 : 'Elegir documento' }}</span>
                <input type="file" name="file_program_12" id="file_program_12" class="input-file-doc" accept="application/pdf">
                <input type="hidden" name="state_file_program_12_check" id="state_file_program_12_check">
                <button type="button" class="remove-file @if(!isset($page->micro->file_program_12)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
            </label>
        </label>
    </div>
    <div class="clearfix"></div>
    <div class="col-sm-6 col-md-6 col-lg-3">
        <label for="es_program_13_title" class="img_upload_container">
            Sección 13
            <input class="input-cms" type="text" name="es_program_13_title" id="es_program_13_title" placeholder="Título" value="{{ isset($page->micro->es_program_13_title ) ? $page->micro->es_program_13_title : old('es_program_13_title') }}">
            <input class="input-cms" type="text" name="en_program_13_title" id="en_program_13_title" placeholder="Título inglés"  value="{{ isset($page->micro->en_program_13_title ) ? $page->micro->en_program_13_title : old('en_program_13_title') }}">
            {!! Form::textarea('es_program_13_text',isset($page) ? $page->micro->es_program_13_text : old('es_program_13_text'),['class'=>'input-cms','id'=>'es_program_13_text','placeholder'=>'Texto','cols'=>30,'rows'=>5]) !!}
            {!! Form::textarea('en_program_13_text',isset($page) ? $page->micro->en_program_13_text : old('en_program_13_text'),['class'=>'input-cms','id'=>'en_program_13_text','placeholder'=>'Texto inglés','cols'=>30,'rows'=>5]) !!}

            <label for="program_13_img">
                <div class="img-preview img-container preview @isset($page->micro->program_13_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->program_13_img){{ asset('public/uploads/pages/' . $page->page_id . '/program_13_img'. strchr($page->micro->program_13_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="program_13_img" class="input-file-cms">
                    <span class="label_text">Elegir imagen</span>
                    <input type="file" name="program_13_img" id="program_13_img" accept="image/*" class="input-file-img">
                    <input type="hidden" name="state_program_13_check" id="state_program_13_check">
                </label>
            </label>

            <label for="file_program_13" class="input-file-cms document">
                <span class="label_text">{{ isset($page->micro->file_program_13) ? $page->micro->file_program_13 : 'Elegir documento' }}</span>
                <input type="file" name="file_program_13" id="file_program_13" class="input-file-doc" accept="application/pdf">
                <input type="hidden" name="state_file_program_13_check" id="state_file_program_13_check">
                <button type="button" class="remove-file @if(!isset($page->micro->file_program_13)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
            </label>
        </label>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-3">
        <label for="es_program_14_title" class="img_upload_container">
            Sección 14
            <input class="input-cms" type="text" name="es_program_14_title" id="es_program_14_title" placeholder="Título" value="{{ isset($page->micro->es_program_14_title ) ? $page->micro->es_program_14_title : old('es_program_14_title') }}">
            <input class="input-cms" type="text" name="en_program_14_title" id="en_program_14_title" placeholder="Título inglés"  value="{{ isset($page->micro->en_program_14_title ) ? $page->micro->en_program_14_title : old('en_program_14_title') }}">
            {!! Form::textarea('es_program_14_text',isset($page) ? $page->micro->es_program_14_text : old('es_program_14_text'),['class'=>'input-cms','id'=>'es_program_14_text','placeholder'=>'Texto','cols'=>30,'rows'=>5]) !!}
            {!! Form::textarea('en_program_14_text',isset($page) ? $page->micro->en_program_14_text : old('en_program_14_text'),['class'=>'input-cms','id'=>'en_program_14_text','placeholder'=>'Texto inglés','cols'=>30,'rows'=>5]) !!}

            <label for="program_14_img">
                <div class="img-preview img-container preview @isset($page->micro->program_14_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->program_14_img){{ asset('public/uploads/pages/' . $page->page_id . '/program_14_img'. strchr($page->micro->program_14_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="program_14_img" class="input-file-cms">
                    <span class="label_text">Elegir imagen</span>
                    <input type="file" name="program_14_img" id="program_14_img" accept="image/*" class="input-file-img">
                    <input type="hidden" name="state_program_14_check" id="state_program_14_check">
                </label>
            </label>

            <label for="file_program_14" class="input-file-cms document">
                <span class="label_text">{{ isset($page->micro->file_program_14) ? $page->micro->file_program_14 : 'Elegir documento' }}</span>
                <input type="file" name="file_program_14" id="file_program_14" class="input-file-doc" accept="application/pdf">
                <input type="hidden" name="state_file_program_14_check" id="state_file_program_14_check">
                <button type="button" class="remove-file @if(!isset($page->micro->file_program_14)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
            </label>
        </label>
    </div>
    <div class="clearfix hidden-lg"></div>
    <div class="col-sm-6 col-md-6 col-lg-3">
        <label for="es_program_15_title" class="img_upload_container">
            Sección 15
            <input class="input-cms" type="text" name="es_program_15_title" id="es_program_15_title" placeholder="Título" value="{{ isset($page->micro->es_program_15_title ) ? $page->micro->es_program_15_title : old('es_program_15_title') }}">
            <input class="input-cms" type="text" name="en_program_15_title" id="en_program_15_title" placeholder="Título inglés"  value="{{ isset($page->micro->en_program_15_title ) ? $page->micro->en_program_15_title : old('en_program_15_title') }}">
            {!! Form::textarea('es_program_15_text',isset($page) ? $page->micro->es_program_15_text : old('es_program_15_text'),['class'=>'input-cms','id'=>'es_program_15_text','placeholder'=>'Texto','cols'=>30,'rows'=>5]) !!}
            {!! Form::textarea('en_program_15_text',isset($page) ? $page->micro->en_program_15_text : old('en_program_15_text'),['class'=>'input-cms','id'=>'en_program_15_text','placeholder'=>'Texto inglés','cols'=>30,'rows'=>5]) !!}

            <label for="program_15_img">
                <div class="img-preview img-container preview @isset($page->micro->program_15_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->program_15_img){{ asset('public/uploads/pages/' . $page->page_id . '/program_15_img'. strchr($page->micro->program_15_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="program_15_img" class="input-file-cms">
                    <span class="label_text">Elegir imagen</span>
                    <input type="file" name="program_15_img" id="program_15_img" accept="image/*" class="input-file-img">
                    <input type="hidden" name="state_program_15_check" id="state_program_15_check">
                </label>
            </label>

            <label for="file_program_15" class="input-file-cms document">
                <span class="label_text">{{ isset($page->micro->file_program_15) ? $page->micro->file_program_15 : 'Elegir documento' }}</span>
                <input type="file" name="file_program_15" id="file_program_15" class="input-file-doc" accept="application/pdf">
                <input type="hidden" name="state_file_program_15_check" id="state_file_program_15_check">
                <button type="button" class="remove-file @if(!isset($page->micro->file_program_15)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
            </label>
        </label>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-3 col-lg-3">
        <label for="es_program_16_title" class="img_upload_container">
            Sección 16
            <input class="input-cms" type="text" name="es_program_16_title" id="es_program_16_title" placeholder="Título" value="{{ isset($page->micro->es_program_16_title ) ? $page->micro->es_program_16_title : old('es_program_16_title') }}">
            <input class="input-cms" type="text" name="en_program_16_title" id="en_program_16_title" placeholder="Título inglés"  value="{{ isset($page->micro->en_program_16_title ) ? $page->micro->en_program_16_title : old('en_program_16_title') }}">
            {!! Form::textarea('es_program_16_text',isset($page) ? $page->micro->es_program_16_text : old('es_program_16_text'),['class'=>'input-cms','id'=>'es_program_16_text','placeholder'=>'Texto','cols'=>30,'rows'=>5]) !!}
            {!! Form::textarea('en_program_16_text',isset($page) ? $page->micro->en_program_16_text : old('en_program_16_text'),['class'=>'input-cms','id'=>'en_program_16_text','placeholder'=>'Texto inglés','cols'=>30,'rows'=>5]) !!}

            <label for="program_16_img">
                <div class="img-preview img-container preview @isset($page->micro->program_16_img){{ 'active' }}@endisset">
                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                    <img src="@isset($page->micro->program_16_img){{ asset('public/uploads/pages/' . $page->page_id . '/program_16_img'. strchr($page->micro->program_16_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                </div>
                Imagen de la sección
                <label for="program_16_img" class="input-file-cms">
                    <span class="label_text">Elegir imagen</span>
                    <input type="file" name="program_16_img" id="program_16_img" accept="image/*" class="input-file-img">
                    <input type="hidden" name="state_program_16_check" id="state_program_16_check">
                </label>
            </label>

            <label for="file_program_16" class="input-file-cms document">
                <span class="label_text">{{ isset($page->micro->file_program_16) ? $page->micro->file_program_16 : 'Elegir documento' }}</span>
                <input type="file" name="file_program_16" id="file_program_16" class="input-file-doc" accept="application/pdf">
                <input type="hidden" name="state_file_program_16_check" id="state_file_program_16_check">
                <button type="button" class="remove-file @if(!isset($page->micro->file_program_16)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
            </label>
        </label>
    </div>
</div>