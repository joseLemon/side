<!-- ================================== -->

<!-- ///////////  PROGRAMAS  \\\\\\\\\\\ -->

<!-- ================================== -->
@if(isset($page->micro->es_programs_title))
    <div class="programas" id="programas">
        <div class="container spacing top">
            <h1 class="heading bold text-center">
                @if(isset($_COOKIE['indexLanguage']))
                    @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_programs_title))
                        {!! $page->micro->en_programs_title !!}
                    @else
                        {!! $page->micro->es_programs_title !!}
                    @endif
                @else
                    {!! $page->micro->es_programs_title !!}
                @endif
            </h1>

            <div class="row no-margin">
                @if(isset($page->micro->es_program_1_title))
                    <div class="col-sm-6">
                        <div>
                            <div class="img-container">
                                <img src="{{ asset('public/uploads/pages').'/'.$page->page_id.'/program_1_img'.strchr($page->micro->program_1_img,'.') }}">
                            </div>
                            <div class="text-container">
                                <h4>
                                    @if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_1_title))
                                            {!! $page->micro->en_program_1_title !!}
                                        @else
                                            {!! $page->micro->es_program_1_title !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_1_title !!}
                                    @endif
                                </h4>
                                <p>@if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_1_text))
                                            {!! $page->micro->en_program_1_text !!}
                                        @else
                                            {!! $page->micro->es_program_1_text !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_1_text !!}
                                    @endif</p>
                                @isset($page->micro->file_program_1)
                                    <a href="{{ asset('public/uploads/pages').'/'.$page->page_id.'/file_program_1/'.$page->micro->file_program_1 }}" target="_blank">Descargar Solicitud</a>
                                @endisset
                            </div>
                        </div>
                    </div>
                @endif
                @if(isset($page->micro->es_program_2_title))
                    <div class="col-sm-6">
                        <div>
                            <div class="img-container">
                                <img src="{{ asset('public/uploads/pages').'/'.$page->page_id.'/program_2_img'.strchr($page->micro->program_2_img,'.') }}">
                            </div>
                            <div class="text-container">
                                <h4>
                                    @if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_2_title))
                                            {!! $page->micro->en_program_2_title !!}
                                        @else
                                            {!! $page->micro->es_program_2_title !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_2_title !!}
                                    @endif
                                </h4>
                                <p>@if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_2_text))
                                            {!! $page->micro->en_program_2_text !!}
                                        @else
                                            {!! $page->micro->es_program_2_text !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_2_text !!}
                                    @endif</p>
                                @isset($page->micro->file_program_2)
                                    <a href="{{ asset('public/uploads/pages').'/'.$page->page_id.'/file_program_2/'.$page->micro->file_program_2 }}" target="_blank">Descargar Solicitud</a>
                                @endisset
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <div class="row no-margin">
                @if(isset($page->micro->es_program_3_title))
                    <div class="col-sm-6">
                        <div>
                            <div class="img-container">
                                <img src="{{ asset('public/uploads/pages').'/'.$page->page_id.'/program_3_img'.strchr($page->micro->program_3_img,'.') }}">
                            </div>
                            <div class="text-container">
                                <h4>
                                    @if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_3_title))
                                            {!! $page->micro->en_program_3_title !!}
                                        @else
                                            {!! $page->micro->es_program_3_title !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_3_title !!}
                                    @endif
                                </h4>
                                <p>@if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_3_text))
                                            {!! $page->micro->en_program_3_text !!}
                                        @else
                                            {!! $page->micro->es_program_3_text !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_3_text !!}
                                    @endif</p>
                                @isset($page->micro->file_program_3)
                                    <a href="{{ asset('public/uploads/pages').'/'.$page->page_id.'/file_program_3/'.$page->micro->file_program_3 }}" target="_blank">Descargar Solicitud</a>
                                @endisset
                            </div>
                        </div>
                    </div>
                @endif
                @if(isset($page->micro->es_program_4_title))
                    <div class="col-sm-6">
                        <div>
                            <div class="img-container">
                                <img src="{{ asset('public/uploads/pages').'/'.$page->page_id.'/program_4_img'.strchr($page->micro->program_4_img,'.') }}">
                            </div>
                            <div class="text-container">
                                <h4>
                                    @if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_4_title))
                                            {!! $page->micro->en_program_4_title !!}
                                        @else
                                            {!! $page->micro->es_program_4_title !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_4_title !!}
                                    @endif
                                </h4>
                                <p>@if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_4_text))
                                            {!! $page->micro->en_program_4_text !!}
                                        @else
                                            {!! $page->micro->es_program_4_text !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_4_text !!}
                                    @endif</p>
                                @isset($page->micro->file_program_4)
                                    <a href="{{ asset('public/uploads/pages').'/'.$page->page_id.'/file_program_4/'.$page->micro->file_program_4 }}" target="_blank">Descargar Solicitud</a>
                                @endisset
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <div class="row no-margin">
                @if(isset($page->micro->es_program_5_title))
                    <div class="col-sm-6">
                        <div>
                            <div class="img-container">
                                <img src="{{ asset('public/uploads/pages').'/'.$page->page_id.'/program_5_img'.strchr($page->micro->program_5_img,'.') }}">
                            </div>
                            <div class="text-container">
                                <h4>
                                    @if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_5_title))
                                            {!! $page->micro->en_program_5_title !!}
                                        @else
                                            {!! $page->micro->es_program_5_title !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_5_title !!}
                                    @endif
                                </h4>
                                <p>@if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_5_text))
                                            {!! $page->micro->en_program_5_text !!}
                                        @else
                                            {!! $page->micro->es_program_5_text !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_5_text !!}
                                    @endif</p>
                                @isset($page->micro->file_program_5)
                                    <a href="{{ asset('public/uploads/pages').'/'.$page->page_id.'/file_program_5/'.$page->micro->file_program_5 }}" target="_blank">Descargar Solicitud</a>
                                @endisset
                            </div>
                        </div>
                    </div>
                @endif
                @if(isset($page->micro->es_program_6_title))
                    <div class="col-sm-6">
                        <div>
                            <div class="img-container">
                                <img src="{{ asset('public/uploads/pages').'/'.$page->page_id.'/program_6_img'.strchr($page->micro->program_6_img,'.') }}">
                            </div>
                            <div class="text-container">
                                <h4>
                                    @if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_6_title))
                                            {!! $page->micro->en_program_6_title !!}
                                        @else
                                            {!! $page->micro->es_program_6_title !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_6_title !!}
                                    @endif
                                </h4>
                                <p>@if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_6_text))
                                            {!! $page->micro->en_program_6_text !!}
                                        @else
                                            {!! $page->micro->es_program_6_text !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_6_text !!}
                                    @endif</p>
                                @isset($page->micro->file_program_6)
                                    <a href="{{ asset('public/uploads/pages').'/'.$page->page_id.'/file_program_6/'.$page->micro->file_program_6 }}" target="_blank">Descargar Solicitud</a>
                                @endisset
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <div class="row no-margin">
                @if(isset($page->micro->es_program_7_title))
                    <div class="col-sm-6">
                        <div>
                            <div class="img-container">
                                <img src="{{ asset('public/uploads/pages').'/'.$page->page_id.'/program_7_img'.strchr($page->micro->program_7_img,'.') }}">
                            </div>
                            <div class="text-container">
                                <h4>
                                    @if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_7_title))
                                            {!! $page->micro->en_program_7_title !!}
                                        @else
                                            {!! $page->micro->es_program_7_title !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_7_title !!}
                                    @endif
                                </h4>
                                <p>@if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_7_text))
                                            {!! $page->micro->en_program_7_text !!}
                                        @else
                                            {!! $page->micro->es_program_7_text !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_7_text !!}
                                    @endif</p>
                                @isset($page->micro->file_program_7)
                                    <a href="{{ asset('public/uploads/pages').'/'.$page->page_id.'/file_program_7/'.$page->micro->file_program_7 }}" target="_blank">Descargar Solicitud</a>
                                @endisset
                            </div>
                        </div>
                    </div>
                @endif
                @if(isset($page->micro->es_program_8_title))
                    <div class="col-sm-6">
                        <div>
                            <div class="img-container">
                                <img src="{{ asset('public/uploads/pages').'/'.$page->page_id.'/program_8_img'.strchr($page->micro->program_8_img,'.') }}">
                            </div>
                            <div class="text-container">
                                <h4>
                                    @if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_8_title))
                                            {!! $page->micro->en_program_8_title !!}
                                        @else
                                            {!! $page->micro->es_program_8_title !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_8_title !!}
                                    @endif
                                </h4>
                                <p>@if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_8_text))
                                            {!! $page->micro->en_program_8_text !!}
                                        @else
                                            {!! $page->micro->es_program_8_text !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_8_text !!}
                                    @endif</p>
                                @isset($page->micro->file_program_8)
                                    <a href="{{ asset('public/uploads/pages').'/'.$page->page_id.'/file_program_8/'.$page->micro->file_program_8 }}" target="_blank">Descargar Solicitud</a>
                                @endisset
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <div class="row no-margin">
                @if(isset($page->micro->es_program_9_title))
                    <div class="col-sm-6">
                        <div>
                            <div class="img-container">
                                <img src="{{ asset('public/uploads/pages').'/'.$page->page_id.'/program_9_img'.strchr($page->micro->program_9_img,'.') }}">
                            </div>
                            <div class="text-container">
                                <h4>
                                    @if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_9_title))
                                            {!! $page->micro->en_program_9_title !!}
                                        @else
                                            {!! $page->micro->es_program_9_title !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_9_title !!}
                                    @endif
                                </h4>
                                <p>@if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_9_text))
                                            {!! $page->micro->en_program_9_text !!}
                                        @else
                                            {!! $page->micro->es_program_9_text !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_9_text !!}
                                    @endif</p>
                                @isset($page->micro->file_program_9)
                                    <a href="{{ asset('public/uploads/pages').'/'.$page->page_id.'/file_program_9/'.$page->micro->file_program_9 }}" target="_blank">Descargar Solicitud</a>
                                @endisset
                            </div>
                        </div>
                    </div>
                @endif
                @if(isset($page->micro->es_program_10_title))
                    <div class="col-sm-6">
                        <div>
                            <div class="img-container">
                                <img src="{{ asset('public/uploads/pages').'/'.$page->page_id.'/program_10_img'.strchr($page->micro->program_10_img,'.') }}">
                            </div>
                            <div class="text-container">
                                <h4>
                                    @if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_10_title))
                                            {!! $page->micro->en_program_10_title !!}
                                        @else
                                            {!! $page->micro->es_program_10_title !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_10_title !!}
                                    @endif
                                </h4>
                                <p>@if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_10_text))
                                            {!! $page->micro->en_program_10_text !!}
                                        @else
                                            {!! $page->micro->es_program_10_text !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_10_text !!}
                                    @endif</p>
                                @isset($page->micro->file_program_10)
                                    <a href="{{ asset('public/uploads/pages').'/'.$page->page_id.'/file_program_10/'.$page->micro->file_program_10 }}" target="_blank">Descargar Solicitud</a>
                                @endisset
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <div class="row no-margin">
                @if(isset($page->micro->es_program_11_title))
                    <div class="col-sm-6">
                        <div>
                            <div class="img-container">
                                <img src="{{ asset('public/uploads/pages').'/'.$page->page_id.'/program_11_img'.strchr($page->micro->program_11_img,'.') }}">
                            </div>
                            <div class="text-container">
                                <h4>
                                    @if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_11_title))
                                            {!! $page->micro->en_program_11_title !!}
                                        @else
                                            {!! $page->micro->es_program_11_title !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_11_title !!}
                                    @endif
                                </h4>
                                <p>@if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_11_text))
                                            {!! $page->micro->en_program_11_text !!}
                                        @else
                                            {!! $page->micro->es_program_11_text !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_11_text !!}
                                    @endif</p>
                                @isset($page->micro->file_program_11)
                                    <a href="{{ asset('public/uploads/pages').'/'.$page->page_id.'/file_program_11/'.$page->micro->file_program_11 }}" target="_blank">Descargar Solicitud</a>
                                @endisset
                            </div>
                        </div>
                    </div>
                @endif
                @if(isset($page->micro->es_program_12_title))
                    <div class="col-sm-6">
                        <div>
                            <div class="img-container">
                                <img src="{{ asset('public/uploads/pages').'/'.$page->page_id.'/program_12_img'.strchr($page->micro->program_12_img,'.') }}">
                            </div>
                            <div class="text-container">
                                <h4>
                                    @if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_12_title))
                                            {!! $page->micro->en_program_12_title !!}
                                        @else
                                            {!! $page->micro->es_program_12_title !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_12_title !!}
                                    @endif
                                </h4>
                                <p>@if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_12_text))
                                            {!! $page->micro->en_program_12_text !!}
                                        @else
                                            {!! $page->micro->es_program_12_text !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_12_text !!}
                                    @endif</p>
                                @isset($page->micro->file_program_12)
                                    <a href="{{ asset('public/uploads/pages').'/'.$page->page_id.'/file_program_12/'.$page->micro->file_program_12 }}" target="_blank">Descargar Solicitud</a>
                                @endisset
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <div class="row no-margin">
                @if(isset($page->micro->es_program_13_title))
                    <div class="col-sm-6">
                        <div>
                            <div class="img-container">
                                <img src="{{ asset('public/uploads/pages').'/'.$page->page_id.'/program_13_img'.strchr($page->micro->program_13_img,'.') }}">
                            </div>
                            <div class="text-container">
                                <h4>
                                    @if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_13_title))
                                            {!! $page->micro->en_program_13_title !!}
                                        @else
                                            {!! $page->micro->es_program_13_title !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_13_title !!}
                                    @endif
                                </h4>
                                <p>@if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_13_text))
                                            {!! $page->micro->en_program_13_text !!}
                                        @else
                                            {!! $page->micro->es_program_13_text !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_13_text !!}
                                    @endif</p>
                                @isset($page->micro->file_program_13)
                                    <a href="{{ asset('public/uploads/pages').'/'.$page->page_id.'/file_program_13/'.$page->micro->file_program_13 }}" target="_blank">Descargar Solicitud</a>
                                @endisset
                            </div>
                        </div>
                    </div>
                @endif
                @if(isset($page->micro->es_program_14_title))
                    <div class="col-sm-6">
                        <div>
                            <div class="img-container">
                                <img src="{{ asset('public/uploads/pages').'/'.$page->page_id.'/program_14_img'.strchr($page->micro->program_14_img,'.') }}">
                            </div>
                            <div class="text-container">
                                <h4>
                                    @if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_14_title))
                                            {!! $page->micro->en_program_14_title !!}
                                        @else
                                            {!! $page->micro->es_program_14_title !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_14_title !!}
                                    @endif
                                </h4>
                                <p>@if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_14_text))
                                            {!! $page->micro->en_program_14_text !!}
                                        @else
                                            {!! $page->micro->es_program_14_text !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_14_text !!}
                                    @endif</p>
                                @isset($page->micro->file_program_14)
                                    <a href="{{ asset('public/uploads/pages').'/'.$page->page_id.'/file_program_14/'.$page->micro->file_program_14 }}" target="_blank">Descargar Solicitud</a>
                                @endisset
                            </div>
                        </div>
                    </div>
                @endif
            </div>

            <div class="row no-margin">
                @if(isset($page->micro->es_program_15_title))
                    <div class="col-sm-6">
                        <div>
                            <div class="img-container">
                                <img src="{{ asset('public/uploads/pages').'/'.$page->page_id.'/program_15_img'.strchr($page->micro->program_15_img,'.') }}">
                            </div>
                            <div class="text-container">
                                <h4>
                                    @if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_15_title))
                                            {!! $page->micro->en_program_15_title !!}
                                        @else
                                            {!! $page->micro->es_program_15_title !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_15_title !!}
                                    @endif
                                </h4>
                                <p>@if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_15_text))
                                            {!! $page->micro->en_program_15_text !!}
                                        @else
                                            {!! $page->micro->es_program_15_text !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_15_text !!}
                                    @endif</p>
                                @isset($page->micro->file_program_15)
                                    <a href="{{ asset('public/uploads/pages').'/'.$page->page_id.'/file_program_15/'.$page->micro->file_program_15 }}" target="_blank">Descargar Solicitud</a>
                                @endisset
                            </div>
                        </div>
                    </div>
                @endif
                @if(isset($page->micro->es_program_16_title))
                    <div class="col-sm-6">
                        <div>
                            <div class="img-container">
                                <img src="{{ asset('public/uploads/pages').'/'.$page->page_id.'/program_16_img'.strchr($page->micro->program_16_img,'.') }}">
                            </div>
                            <div class="text-container">
                                <h4>
                                    @if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_16_title))
                                            {!! $page->micro->en_program_16_title !!}
                                        @else
                                            {!! $page->micro->es_program_16_title !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_16_title !!}
                                    @endif
                                </h4>
                                <p>@if(isset($_COOKIE['indexLanguage']))
                                        @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_16_text))
                                            {!! $page->micro->en_program_16_text !!}
                                        @else
                                            {!! $page->micro->es_program_16_text !!}
                                        @endif
                                    @else
                                        {!! $page->micro->es_program_16_text !!}
                                    @endif</p>
                                @isset($page->micro->file_program_16)
                                    <a href="{{ asset('public/uploads/pages').'/'.$page->page_id.'/file_program_16/'.$page->micro->file_program_16 }}" target="_blank">Descargar Solicitud</a>
                                @endisset
                            </div>
                        </div>
                    </div>
                @endif
            </div>

        </div>
    </div>
@endif