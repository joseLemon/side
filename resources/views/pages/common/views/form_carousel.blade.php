<div class="row no-margin">
    <div class="col-sm-12">
        <h3>Carruseles de productos</h3>
        <div class="panel-group" id="accordion-products"></div>
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
            '<div class="panel panel-default" id="' + panel_id + '">' +
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
            '<div class="panel panel-default" id="' + panel_id + '">' +
            '<div class="panel-heading" data-toggle="collapse" data-parent="#' + panel_accordion_id + '" href="#collapse' + panel_number + '-' + panel_number_parent + '">' +
            '<h4 class="panel-title">Producto ' + panel_number +
            '<button type="button" class="expand-accordion">' +
            '<i class="fa fa-plus" aria-hidden="true"></i>' +
            '</button>' +
            '</h4>' +
            '</div>' +
            '<div id="collapse' + panel_number + '-' + panel_number_parent + '" class="panel-collapse collapse">' +
            '<div class="row row-no-margin">' +
            '<div class="col-sm-6">' +
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
            '<div class="col-sm-6">' +
            '<input type="text" name="prodcut_title[]" id="product_title_"'+ panel_number + '-' + panel_number_parent +' placeholder="Título del producto" class="input-cms product-title">' +
            '<textarea name="product_text[]" id="product_text_'+ panel_number + '-' + panel_number_parent +'" cols="30" rows="5" placeholder="Texto del producto" class="input-cms product-text"></textarea>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>'
        );
    }

    $('form').submit(function (e) {
        e.preventDefault()
        e.stopImmediatePropagation();
        var inputList = $('#carouselInputList');
        inputList.empty();
        $('#accordion-products > .panel').each(function () {
            var panel = $(this),
                title = panel.find('.carousel-title').val(),
                metaList = title;
            panel.find('.product-title').each(function () {
                var input_title = $(this),
                    title = input_title.val(),
                    text = input_title.next().val();
                metaList += '_@@_' + title + '_%%_' + text
            });
            inputList.append('<input type="hidden" val="' + metaList + '">')
        });
    })
</script>