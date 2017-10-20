@extends('layouts.cms.master')
@section('scripts')
    @include('pages.common.js.functionality')
    <script>
        $(document).ready(function () {
            $('#formPage').submit(function (e) {
                e.preventDefault();
                $('input[type=file]').each(function () {
                    if(!(!$(this).data('value'))) {
                        $(this).prop('disabled',true);
                    }
                });

                $(this)[0].submit();
            });
        });
    </script>
@stop
@section('content')
    <div class="big-container">
        {!! Form::open(['route' => ['page.update',$id], 'id' => 'formPage', 'enctype' => 'multipart/form-data']) !!}
        <div class="dash-object">
            <div class="page-section">

                <div class="row no-margin">
                    <div class="col-sm-12">
                        <h3>Banner Principal</h3>
                    </div>
                    <div class="col-sm-6">
                        <label for="banner_1_img" class="img_upload_container">
                            <div class="img-preview img-container preview @isset($page->page_index->banner_1_img){{ 'active' }}@endisset">
                                <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                                <img src="@isset($page->page_index->banner_1_img){{ asset('public/uploads/pages/' . $page->page_index->page_id . '/banner_1_img' . strchr($page->page_index->banner_1_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                            </div>
                            Imagen del Banner
                            <label for="banner_1_img" class="input-file-cms">
                                Elegir imagen
                                <input type="file" name="banner_1_img" id="banner_1_img" accept="image/*" class="input-file-img" data-value="@isset($page->page_index->banner_1_img){{ asset('public/uploads/pages/' . $page->page_index->page_id . '/banner_1_img' . strchr($page->page_index->banner_1_img,'.')) }}@endisset">
                                <input type="hidden" name="state_1_check" id="state_1_check">
                            </label>
                        </label>
                    </div>
                    <div class="col-sm-6">
                        <label for="es_banner_3_text">
                            Texto del Banner
                            <input class="input-cms" type="text" name="es_banner_1_text" id="es_banner_1_text" placeholder="Texto" value="@isset($page->page_index->es_banner_1_text ){{ $page->page_index->es_banner_1_text }}@endisset">
                            <input class="input-cms" type="text" name="en_banner_1_text" id="en_banner_1_text" placeholder="Texto inglés" value="@isset($page->page_index->en_banner_1_text ){{ $page->page_index->en_banner_1_text }}@endisset">
                        </label>
                    </div>
                </div>

                <div class="row no-margin">
                    <div class="col-sm-6">
                        <label for="es_diamond_1_text">
                            Rombo 1
                            <input class="input-cms" type="text" name="es_diamond_1_text" placeholder="Texto" value="@isset($page->page_index->es_diamond_1_text){{ $page->page_index->es_diamond_1_text }}@endisset">
                            <input class="input-cms" type="text" name="en_diamond_1_text" placeholder="Texto inglés" value="@isset($page->page_index->en_diamond_1_text){{ $page->page_index->en_diamond_1_text }}@endisset">
                            <input class="input-cms" type="text" name="diamond_1_url" placeholder="URL" value="@isset($page->page_index->diamond_1_url){{ $page->page_index->diamond_1_url }}@endisset">
                        </label>
                    </div>
                    <div class="col-sm-6">
                        <label for="es_diamond_2_text">
                            Rombo 2
                            <input class="input-cms" type="text" name="es_diamond_2_text" placeholder="Texto" value="@isset($page->page_index->es_diamond_2_text){{ $page->page_index->es_diamond_2_text }}@endisset">
                            <input class="input-cms" type="text" name="en_diamond_2_text" placeholder="Texto inglés" value="@isset($page->page_index->en_diamond_2_text){{ $page->page_index->en_diamond_2_text }}@endisset">
                            <input class="input-cms" type="text" name="diamond_2_url" placeholder="URL" value="@isset($page->page_index->diamond_2_url){{ $page->page_index->diamond_2_url }}@endisset">
                        </label>
                    </div>
                </div>

                <div class="row no-margin">
                    <div class="col-sm-6">
                        <label for="es_diamond_3_text">
                            Rombo 3
                            <input class="input-cms" type="text" name="es_diamond_3_text" placeholder="Texto" value="@isset($page->page_index->es_diamond_3_text){{ $page->page_index->es_diamond_3_text }}@endisset">
                            <input class="input-cms" type="text" name="en_diamond_3_text" placeholder="Texto inglés" value="@isset($page->page_index->en_diamond_3_text){{ $page->page_index->en_diamond_3_text }}@endisset">
                            <input class="input-cms" type="text" name="diamond_3_url" placeholder="URL" value="@isset($page->page_index->diamond_3_url){{ $page->page_index->diamond_3_url }}@endisset">
                        </label>
                    </div>
                    <div class="col-sm-6">
                        <label for="es_diamond_4_text">
                            Rombo 4
                            <input class="input-cms" type="text" name="es_diamond_4_text" placeholder="Texto" value="@isset($page->page_index->es_diamond_4_text){{ $page->page_index->es_diamond_4_text }}@endisset">
                            <input class="input-cms" type="text" name="en_diamond_4_text" placeholder="Texto inglés" value="@isset($page->page_index->en_diamond_4_text){{ $page->page_index->en_diamond_4_text }}@endisset">
                            <input class="input-cms" type="text" name="diamond_4_url" placeholder="URL" value="@isset($page->page_index->diamond_4_url){{ $page->page_index->diamond_4_url }}@endisset">
                        </label>
                    </div>
                </div>

                <div class="row no-margin">
                    <div class="col-sm-12">
                        <h3>Segundo Banner</h3>
                    </div>
                    <div class="col-sm-6">
                        <label for="banner_2_img" class="img_upload_container">
                            <div class="img-preview img-container preview @isset($page->page_index->banner_2_img){{ 'active' }}@endisset">
                                <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                                <img src="@isset($page->page_index->banner_2_img){{ asset('public/uploads/pages/' . $page->page_index->page_id . '/banner_2_img' . strchr($page->page_index->banner_2_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                            </div>
                            Imagen del Banner
                            <label for="banner_2_img" class="input-file-cms">
                                Elegir imagen
                                <input type="file" name="banner_2_img" id="banner_2_img" accept="image/*" class="input-file-img" data-value="@isset($page->page_index->banner_2_img){{ asset('public/uploads/pages/' . $page->page_index->page_id . '/banner_2_img' . strchr($page->page_index->banner_2_img,'.')) }}@endisset">
                                <input type="hidden" name="state_2_check" id="state_2_check">
                            </label>
                        </label>
                    </div>
                    <div class="col-sm-6">
                        <label for="es_banner_2_text">
                            Texto del Banner
                            <input class="input-cms" type="text" name="es_banner_2_text_1" id="es_banner_2_text_1" placeholder="Texto primera línea" value="@isset($page->page_index->es_banner_2_text_1 ){{ $page->page_index->es_banner_2_text_1 }}@endisset">
                            <input class="input-cms" type="text" name="es_banner_2_text_2" id="es_banner_2_text_1" placeholder="Texto segunda línea" value="@isset($page->page_index->es_banner_2_text_2 ){{ $page->page_index->es_banner_2_text_2 }}@endisset">
                            <input class="input-cms" type="text" name="en_banner_2_text_1" id="en_banner_2_text_2" placeholder="Texto primera línea inglés" value="@isset($page->page_index->en_banner_2_text_1 ){{ $page->page_index->en_banner_2_text_1 }}@endisset">
                            <input class="input-cms" type="text" name="en_banner_2_text_2" id="en_banner_2_text_2" placeholder="Texto segunda inglés" value="@isset($page->page_index->en_banner_2_text_2 ){{ $page->page_index->en_banner_2_text_2 }}@endisset">
                        </label>
                    </div>
                </div>

                <div class="row no-margin">
                    <div class="col-sm-12">
                        <h3>Direcciones</h3>
                    </div>
                    <div class="col-sm-6">
                        <label for="es_sites_title">
                            Título de la sección
                            <input class="input-cms" type="text" name="es_sites_title" id="es_sites_title" placeholder="Título" value="@isset($page->page_index->es_sites_title ){{ $page->page_index->es_sites_title }}@endisset">
                            <input class="input-cms" type="text" name="en_sites_title" id="en_sites_title" placeholder="Título inglés" value="@isset($page->page_index->en_sites_title ){{ $page->page_index->en_sites_title }}@endisset">
                        </label>
                    </div>
                    <div class="col-sm-6">
                        <label for="es_sites_subtitle">
                            Subítulo de la sección
                            <input class="input-cms" type="text" name="es_sites_subtitle" id="es_sites_subtitle" placeholder="Subtítulo" value="@isset($page->page_index->es_sites_subtitle ){{ $page->page_index->es_sites_subtitle }}@endisset">
                            <input class="input-cms" type="text" name="en_sites_subtitle" id="en_sites_subtitle" placeholder="Subtítulo inglés" value="@isset($page->page_index->en_sites_subtitle ){{ $page->page_index->en_sites_subtitle }}@endisset">
                        </label>
                    </div>
                </div>

                <div class="row no-margin">
                    <div class="col-sm-12">
                        <h3>Tercer Banner</h3>
                    </div>
                    <div class="col-sm-6">
                        <label for="banner_3_img" class="img_upload_container">
                            <div class="img-preview img-container preview @isset($page->page_index->banner_3_img){{ 'active' }}@endisset">
                                <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                                <img src="@isset($page->page_index->banner_3_img){{ asset('public/uploads/pages/' . $page->page_index->page_id . '/banner_3_img' . strchr($page->page_index->banner_3_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                            </div>
                            Imagen del Banner
                            <label for="banner_3_img" class="input-file-cms">
                                Elegir imagen
                                <input type="file" name="banner_3_img" id="banner_3_img" accept="image/*" class="input-file-img" data-value="@isset($page->page_index->banner_3_img){{ asset('public/uploads/pages/' . $page->page_index->page_id . '/banner_3_img' . strchr($page->page_index->banner_3_img,'.')) }}@endisset">
                                <input type="hidden" name="state_3_check" id="state_3_check">
                            </label>
                        </label>
                    </div>
                    <div class="col-sm-6">
                        <label for="es_banner_3_text">
                            Texto del Banner
                            <input class="input-cms" type="text" name="es_banner_3_text" id="es_banner_3_text" placeholder="Texto" value="@isset($page->page_index->es_banner_3_text ){{ $page->page_index->es_banner_3_text }}@endisset">
                            <input class="input-cms" type="text" name="en_banner_3_text" id="en_banner_3_text" placeholder="Texto inglés" value="@isset($page->page_index->en_banner_3_text ){{ $page->page_index->en_banner_3_text }}@endisset">
                        </label>
                        <label for="banner_3_url">
                            URL del Banner
                            <input class="input-cms" type="text" name="banner_3_url" id="banner_3_url" placeholder="Texto" value="@isset($page->page_index->banner_3_url ){{ $page->page_index->banner_3_url }}@endisset">
                        </label>
                    </div>
                </div>

                <div class="row no-margin">
                    <div class="col-sm-12">
                        <h3>Blog</h3>
                    </div>
                    <div class="col-sm-6">
                        <label for="es_blog_title">
                            Título de la sección
                            <input class="input-cms" type="text" name="es_blog_title" id="es_blog_title" placeholder="Título" value="@isset($page->page_index->es_blog_title ){{ $page->page_index->es_blog_title }}@endisset">
                            <input class="input-cms" type="text" name="en_blog_title" id="en_blog_title" placeholder="Título inglés" value="@isset($page->page_index->en_blog_title ){{ $page->page_index->en_blog_title }}@endisset">
                        </label>
                    </div>
                </div>

                <!--<div class="row no-margin">
                    <div class="col-sm-12">
                        <h3>Video</h3>
                    </div>
                    <div class="col-sm-6">
                        <label for="video_banner">
                            Video del banner
                            <input type="file" name="video_banner" id="video_banner">
                        </label>
                    </div>
                </div>-->

                <div class="row no-margin">
                    <div class="col-sm-12">
                        <h3>Información</h3>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <label for="es_about_1_title" class="img_upload_container">
                            Sección 1
                            <input class="input-cms" type="text" name="es_about_1_title" id="es_about_1_title" placeholder="Título" value="@isset($page->page_index->es_about_1_title ){{ $page->page_index->es_about_1_title }}@endisset">
                            <input class="input-cms" type="text" name="en_about_1_title" id="en_about_1_title" placeholder="Título inglés"  value="@isset($page->page_index->en_about_1_title ){{ $page->page_index->en_about_1_title }}@endisset">
                            <textarea class="input-cms" name="es_about_1_text" id="es_about_1_text" cols="30" rows="5" placeholder="Texto">@isset($page->page_index->es_about_1_text ){{ $page->page_index->es_about_1_text }}@endisset</textarea>
                            <textarea class="input-cms" name="en_about_1_text" id="es_about_1_text" cols="30" rows="5" placeholder="Texto inglés">@isset($page->page_index->en_about_1_text ){{ $page->page_index->en_about_1_text }}@endisset</textarea>

                            <label for="about_1_img">
                                <div class="img-preview img-container preview @isset($page->page_index->about_1_img){{ 'active' }}@endisset">
                                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                                    <img src="@isset($page->page_index->about_1_img){{ asset('public/uploads/pages/' . $page->page_id . '/about_1_img'. strchr($page->page_index->about_1_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                                </div>
                                Imagen de la sección
                                <label for="about_1_img" class="input-file-cms">
                                    Elegir imagen
                                    <input type="file" name="about_1_img" id="about_1_img" accept="image/*" class="input-file-img" data-value="@isset($page->page_index->about_1_img){{ asset('public/uploads/pages/' . $page->page_id . '/about_1_img'. strchr($page->page_index->about_1_img,'.')) }}@endisset">
                                    <input type="hidden" name="state_about_1_check" id="state_about_1_check">
                                </label>
                            </label>
                        </label>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <label for="es_about_2_title" class="img_upload_container">
                            Sección 2
                            <input class="input-cms" type="text" name="es_about_2_title" id="es_about_2_title" placeholder="Título" value="@isset($page->page_index->es_about_2_title ){{ $page->page_index->es_about_2_title }}@endisset">
                            <input class="input-cms" type="text" name="en_about_2_title" id="en_about_2_title" placeholder="Título inglés" value="@isset($page->page_index->en_about_2_title ){{ $page->page_index->en_about_2_title }}@endisset">
                            <textarea class="input-cms" name="es_about_2_text" id="es_about_2_text" cols="30" rows="5" placeholder="Texto">@isset($page->page_index->es_about_2_text ){{ $page->page_index->es_about_2_text }}@endisset</textarea>
                            <textarea class="input-cms" name="en_about_2_text" id="es_about_2_text" cols="30" rows="5" placeholder="Texto inglés">@isset($page->page_index->en_about_2_text ){{ $page->page_index->en_about_2_text }}@endisset</textarea>

                            <label for="about_2_img">
                                <div class="img-preview img-container preview @isset($page->page_index->about_2_img){{ 'active' }}@endisset">
                                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                                    <img src="@isset($page->page_index->about_2_img){{ asset('public/uploads/pages/' . $page->page_id . '/about_2_img'. strchr($page->page_index->about_2_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                                </div>
                                Imagen de la sección
                                <label for="about_2_img" class="input-file-cms">
                                    Elegir imagen
                                    <input type="file" name="about_2_img" id="about_2_img" accept="image/*" class="input-file-img" data-value="@isset($page->page_index->about_2_img){{ asset('public/uploads/pages/' . $page->page_id . '/about_2_img'. strchr($page->page_index->about_2_img,'.')) }}@endisset">
                                    <input type="hidden" name="state_about_2_check" id="state_about_2_check">
                                </label>
                            </label>
                        </label>
                    </div>
                    <div class="clearfix hidden-lg hidden-md"></div>
                    <div class="col-sm-6 col-md-4">
                        <label for="es_about_3_title" class="img_upload_container">
                            Sección 3
                            <input class="input-cms" type="text" name="es_about_3_title" id="es_about_3_title" placeholder="Título" value="@isset($page->page_index->es_about_3_title ){{ $page->page_index->es_about_3_title }}@endisset">
                            <input class="input-cms" type="text" name="en_about_3_title" id="en_about_3_title" placeholder="Título inglés" value="@isset($page->page_index->en_about_3_title ){{ $page->page_index->en_about_3_title }}@endisset">
                            <textarea class="input-cms" name="es_about_3_text" id="es_about_3_text" cols="30" rows="5" placeholder="Texto">@isset($page->page_index->es_about_2_text ){{ $page->page_index->es_about_3_text }}@endisset</textarea>
                            <textarea class="input-cms" name="en_about_2_text" id="es_about_3_text" cols="30" rows="5" placeholder="Texto inglés">@isset($page->page_index->en_about_2_text ){{ $page->page_index->en_about_3_text }}@endisset</textarea>

                            <label for="about_3_img">
                                <div class="img-preview img-container preview @isset($page->page_index->about_3_img){{ 'active' }}@endisset">
                                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                                    <img src="@isset($page->page_index->about_3_img){{ asset('public/uploads/pages/' . $page->page_id . '/about_3_img'. strchr($page->page_index->about_3_img,'.') . '?=' . rand(1,99999999)) }}@endisset" id="preview" class="center-block img-responsive">
                                </div>
                                Imagen de la sección
                                <label for="about_3_img" class="input-file-cms">
                                    Elegir imagen
                                    <input type="file" name="about_3_img" id="about_3_img" accept="image/*" class="input-file-img" data-value="@isset($page->page_index->about_3_img){{ asset('public/uploads/pages/' . $page->page_id . '/about_3_img'. strchr($page->page_index->about_3_img,'.')) }}@endisset">
                                    <input type="hidden" name="state_about_3_check" id="state_about_3_check">
                                </label>
                            </label>
                        </label>
                    </div>
                </div>

                <div class="text-center">
                    {!! Form::submit('Guardar',['class'=>'submit-cms big-btn']) !!}
                </div>

            </div>
        </div>
        {!! Form::close() !!}
    </div>
@stop