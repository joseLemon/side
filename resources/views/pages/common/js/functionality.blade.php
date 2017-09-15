<script>
    $(document).ready(function() {
        $('.input-file-img').change(readFile);
        $('.input-file-doc').change(readFileDoc);

        $('.img-container .remove-img').click(function () {
            var button = $(this),
                preview = button.closest('.preview'),
                input = preview.next().find('input'),
                check = input.next();

            preview.removeClass('active').find('img').attr('src', '');
            input.val('').data('value', '');
            check.val('removed');
        });

        function readFile() {
            if (this.files && this.files[0]) {

                var FR = new FileReader(),
                    input = $(this),
                    preview = input.closest('.img_upload_container').find('.preview'),
                    previewImg = preview.find('img');

                FR.addEventListener("load", function (e) {
                    previewImg.attr('src',e.target.result);
                });

                FR.readAsDataURL(this.files[0]);

                preview.addClass('active');

                input.data('value', '');
            }
        }

        function readFileDoc() {
            var input = $(this),
                label_text = input.closest('label').find('.label_text');
            if (this.files && this.files[0]) {

                var FR = new FileReader();

                FR.addEventListener("load", function (e) {
                    if(input.val() != '') {
                        input.addClass('loaded-file');
                        label_text.text(input.val().split('\\').pop());
                    } else {
                    }
                });

                FR.readAsDataURL(this.files[0]);
            } else {
                label_text.text('Elegir documento');
                input.removeClass('loaded-file');
            }
        }



        $('#page_type').change(function () {
            var select = $(this),
                selected_option = select.find('option:selected').val();

            $('.form-container').fadeOut('fast');

            var page_slug_container = $('#page_url').closest('.col-sm-12'),
                page_url_input = $('#page_url');

            switch (selected_option) {
                case '2':
                    $('#micro-form').fadeIn('fast');
                    page_slug_container.fadeIn('fast');
                    page_url_input.prop('disabled',false);
                    break;
                case '3':
                    $('#external-form').fadeIn('fast');
                    page_slug_container.fadeOut('fast');
                    page_url_input.prop('disabled',true);
                    break;
                default:
                    break;
            }
        });

        $(function() {
            $.widget( "custom.iconselectmenu", $.ui.selectmenu, {
                _renderItem: function( ul, item ) {
                    var li = $( "<li>", { text: item.label } );
                    if ( item.disabled ) {
                        li.addClass( "ui-state-disabled" );
                    }
                    $( "<span>", {
                        style: item.element.attr( "data-style" ),
                        "class": "ui-color-select " + item.element.attr( "data-class" )
                    })
                        .appendTo( li );
                    return li.appendTo( ul );
                }
            });
            $( "#color" )
                .iconselectmenu()
                .iconselectmenu( "menuWidget")
                .addClass( "ui-menu-icons avatar" );
        });
    });
</script>