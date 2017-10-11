<div class="row no-margin">
    <div class="col-sm-12">
        <h3>Carruseles de productos</h3>
        <div class="panel-group" id="accordion-products">
            @foreach($carousels as $count => $carousel)
            <div class="panel panel-default" id="{{ $count+1 }}" my_id="{{ $carousel->carousel_id }}">
                <div class="panel-heading" data-toggle="collapse" data-parent="#accordion-products" href="#collapse{{ $count+1 }}">
                    <h4 class="panel-title">Carrusel {{ $count+1 }}
                        <button type="button" class="expand-accordion">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                    </h4>
                </div>
                <div id="collapse{{ $count+1 }}" class="panel-collapse collapse">
                    <div class="panel-body text-right">
                        <input type="text" name="carousel_title_{{ $count+1 }}" id="carousel_title_{{ $count+1 }}" placeholder="Título de carrusel" class="input-cms carousel-title" value="{{ $carousel->carousel_title }}">
                        <div class="panel-group text-left" id="accordion-product-info-{{ $count+1 }}">

                            <!-- GOTTA MAKE THE PRODUCTS FOREACH -->
                            @foreach($carousel->products as $productCount => $product)
                            <div class="panel panel-default" id="panel-{{ $productCount+1 }}-{{ $count+1 }}" my_id="{{ $product->product_id }}">
                                <div class="panel-heading" data-toggle="collapse" data-parent="#accordion-product-info-{{ $count+1 }}" href="#collapse{{ $productCount+1 }}-{{ $count+1 }}">
                                    <h4 class="panel-title">Producto {{ $productCount+1 }}
                                        <button type="button" class="expand-accordion">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                    </h4>
                                </div>
                                <div id="collapse{{ $productCount+1 }}-{{ $count+1 }}" class="panel-collapse collapse">
                                    <div class="row row-no-margin">
                                        <div class="col-lg-4 col-md-5 col-sm-6">
                                            <label for="product_{{ $productCount+1 }}-{{ $count+1 }}_img" class="img_upload_container">
                                                <div class="img-preview img-container preview active">
                                                    <button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                                                    <img src="{{ asset('public/uploads/pages/' . $page->page_id . '/products/' . $product->product_img . '?=' . rand(1,99999999)) }}" id="preview" class="center-block img-responsive">
                                                </div>
                                                Imagen del sitio
                                                <label for="product_{{ $productCount+1 }}-{{ $count+1 }}_img" class="input-file-cms">
                                                    Elegir imagen
                                                    <input type="file" name="product_{{ $productCount+1 }}-{{ $count+1 }}_img" id="product_{{ $productCount+1 }}-{{ $count+1 }}_img" accept="image/*" class="input-file-img">
                                                    <input type="hidden" name="product_{{ $productCount+1 }}-{{ $count+1 }}_img_check" id="product_{{ $productCount+1 }}-{{ $count+1 }}_img_check">
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-6">
                                            <input type="text" name="product_title[]" id="product_title_{{ $productCount+1 }}-{{ $count+1 }}" placeholder="Título del producto" class="input-cms product-title" value="{{ $product->product_title }}">
                                            <textarea name="product_text[]" id="product_text_{{ $productCount+1 }}-{{ $count+1 }}" cols="30" rows="5" placeholder="Texto del producto" class="input-cms product-text">{{ $product->product_text }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <button type="button" class="add-product" onclick="addProductFunc('accordion-product-info-{{ $count+1 }}','{{ $count+1 }}')">Agregar Producto</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-right">
            <button type="button" id="add-carousel">Agregar Carrusel</button>
        </div>
    </div>
</div>
<div id="carouselInputList" class="hidden"></div>
<script>
    $('#add-carousel').click(function () {
        var accordion = $('#accordion-products'),
            panel_number = (accordion.children().length)+1,
            panel_id = 'panel-'+panel_number;

        accordion.append(
            '<div class="panel panel-default" id="' + panel_id + '" my_id="new">' +
            '<div class="panel-heading" data-toggle="collapse" data-parent="#accordion-products" href="#collapse' + panel_number + '">' +
            '<h4 class="panel-title">Carrusel ' + panel_number +
            '<button type="button" class="expand-accordion">' +
            '<i class="fa fa-plus" aria-hidden="true"></i>' +
            '</button>' +
            '</h4>' +
            '</div>' +
            '<div id="collapse' + panel_number + '" class="panel-collapse collapse">' +
            '<div class="panel-body text-right">' +
            '<input type="text" name="carousel_title_' + panel_number + '" id="carousel_title_' + panel_number + '" placeholder="Título de carrusel" class="input-cms carousel-title">' +
            '<div class="panel-group text-left" id="accordion-product-info-' + panel_number + '"></div>' +
            '<button type="button" class="add-product" onclick="addProductFunc(\'accordion-product-info-' + panel_number + '\',\'' + panel_number + '\')">Agregar Producto</button>' +
            '</div>' +
            '</div>'
        );
    });

    function addProductFunc(panel_accordion_id, panel_number_parent) {
        var panel_accordion = $('#' + panel_accordion_id),
            panel_number = (panel_accordion.children().length)+1,
            panel_id = 'panel-' + panel_number + '-' + panel_number_parent;

        panel_accordion.append(
            '<div class="panel panel-default" id="' + panel_id + '" my_id="new">' +
            '<div class="panel-heading" data-toggle="collapse" data-parent="#' + panel_accordion_id + '" href="#collapse' + panel_number + '-' + panel_number_parent + '">' +
            '<h4 class="panel-title">Producto ' + panel_number +
            '<button type="button" class="expand-accordion">' +
            '<i class="fa fa-plus" aria-hidden="true"></i>' +
            '</button>' +
            '</h4>' +
            '</div>' +
            '<div id="collapse' + panel_number + '-' + panel_number_parent + '" class="panel-collapse collapse">' +
            '<div class="row row-no-margin">' +
            '<div class="col-lg-4 col-md-5 col-sm-6">' +
            '<label for="product_' + panel_number + '-' + panel_number_parent + '_img" class="img_upload_container">' +
            '<div class="img-preview img-container preview">' +
            '<button type="button" class="remove-img"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>' +
            '<img src="" id="preview" class="center-block img-responsive">' +
            '</div>' +
            'Imagen del sitio' +
            '<label for="product_' + panel_number + '-' + panel_number_parent + '_img" class="input-file-cms">' +
            'Elegir imagen' +
            '<input type="file" name="product_' + panel_number + '-' + panel_number_parent + '_img" id="product_' + panel_number + '-' + panel_number_parent + '_img" accept="image/*" class="input-file-img">' +
            '<input type="hidden" name="product_' + panel_number + '-' + panel_number_parent + '_img_check" id="product_' + panel_number + '-' + panel_number_parent + '_img_check">' +
            '</label>' +
            '</label>' +
            '</div>' +
            '<div class="col-lg-8 col-md-7 col-sm-6">' +
            '<input type="text" name="product_title[]" id="product_title_"'+ panel_number + '-' + panel_number_parent +' placeholder="Título del producto" class="input-cms product-title">' +
            '<textarea name="product_text[]" id="product_text_'+ panel_number + '-' + panel_number_parent +'" cols="30" rows="5" placeholder="Texto del producto" class="input-cms product-text"></textarea>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>'
        );
    }

    $('form').submit(function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();

        var form = $(this);
        var inputListnew = $('#carouselInputList'),
            inputListedit = $('#carouselInputListEdit'),
            inputListdelete = $('#carouselInputListDelete');
        inputListnew.empty();
        inputListedit.empty();
        inputListdelete.empty();

        $('#accordion-products > .panel').each(function () {
            var panel = $(this),
                title = panel.find('.carousel-title').val(),
                metaList = '',
                carousel_id = panel.attr('my_id'),
                validation = true;
            if(carousel_id === 'new') {
                metaList = title + '_@@_new';
            } else {
                metaList = title + '_@@_' + carousel_id;
            }

            if(title == '') {
                validation = productsValidation();
            } else {
                panel.find('.product-title').each(function () {
                    var input_title = $(this),
                        title = input_title.val(),
                        text = input_title.next().val(),
                        product_id = input_title.closest('.panel').attr('my_id');

                    if(title == '' || text == '') {
                        metaList = '';
                    } else {
                        if(product_id === 'new') {
                            metaList += '_@@_' + title + '_%%_' + text + '_%%_new';
                        } else {
                            metaList += '_@@_' + title + '_%%_' + text + '_%%_' + product_id;
                        }
                    }
                });
                if(metaList == '') {
                    productsValidation();
                } else {
                    inputListnew.append('<input type="hidden" name="products[]" id="products" value="' + metaList + '">');
                }
            }

            if(validation) {
                //form[0].submit();
            }
        });
    });

    function productsValidation() {
        $.alert({
            title: 'Error en los productos',
            content: 'Asegurate de llenar toda la información de los productos antes de continuar.',
            backgroundDismiss: 'cancel'
        });
        return false;
    }
</script>