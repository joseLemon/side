<!-- ================================== -->

<!-- ///////////  PROGRAMAS  \\\\\\\\\\\ -->

<!-- ================================== -->
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
                        <a href="">Descargar Solicitud</a>
                    </div>
                </div>
            </div>
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
                        <a href="">Descargar Solicitud</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row no-margin">
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
                        <a href="">Descargar Solicitud</a>
                    </div>
                </div>
            </div>
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
                        <a href="">Descargar Solicitud</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax">
            <img src="{{ asset('public/uploads/pages').'/'.$page->page_id.'/banner_3_img'.strchr($page->micro->banner_3_img,'.') }}">
        </div>
        <div class="container bottom">
            <h1 class="heading bold white text-center">Programas administrados</h1>
            <div class="row no-margin text-center">
                <div class="col-sm-6">
                    <div>
                        <div class="img-container">
                            <img src="{{ asset('public/uploads/pages').'/'.$page->page_id.'/program_1_img_2'.strchr($page->micro->program_1_img_2,'.') }}">
                        </div>
                        <h4>
                            @if(isset($_COOKIE['indexLanguage']))
                                @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_1_title_2))
                                    {!! $page->micro->en_program_1_title_2 !!}
                                @else
                                    {!! $page->micro->es_program_1_title_2 !!}
                                @endif
                            @else
                                {!! $page->micro->es_program_1_title_2 !!}
                            @endif
                        </h4>
                        <p>@if(isset($_COOKIE['indexLanguage']))
                                @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_1_text_2))
                                    {!! $page->micro->en_program_1_text_2 !!}
                                @else
                                    {!! $page->micro->es_program_1_text_2 !!}
                                @endif
                            @else
                                {!! $page->micro->es_program_1_text_2 !!}
                            @endif</p>
                        <a href="">Descargar Solicitud</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div>
                        <div class="img-container">
                            <img src="{{ asset('public/uploads/pages').'/'.$page->page_id.'/program_2_img_2'.strchr($page->micro->program_2_img_2,'.') }}">
                        </div>
                        <h4>
                            @if(isset($_COOKIE['indexLanguage']))
                                @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_2_title_2))
                                    {!! $page->micro->en_program_2_title_2 !!}
                                @else
                                    {!! $page->micro->es_program_2_title_2 !!}
                                @endif
                            @else
                                {!! $page->micro->es_program_2_title_2 !!}
                            @endif
                        </h4>
                        <p>@if(isset($_COOKIE['indexLanguage']))
                                @if($_COOKIE['indexLanguage'] == 'en' && isset($page->micro->en_program_2_text_2))
                                    {!! $page->micro->en_program_2_text_2 !!}
                                @else
                                    {!! $page->micro->es_program_2_text_2 !!}
                                @endif
                            @else
                                {!! $page->micro->es_program_2_text_2 !!}
                            @endif</p>
                        <a href="">Descargar Solicitud</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>