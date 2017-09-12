<script>
    $(document).ready(function() {
        $('.input-file-img').change(readFile);

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

        $('#page_type').change(function () {
            var select = $(this),
                selected_option = select.find('option:selected').val();

            $('.form-container').fadeOut('fast');

            $page_slug_container = $('#page_url').closest('.col-sm-12');
            $form = '';

            switch (selected_option) {
                case '2':
                    $('#micro-form').fadeIn('fast');
                    $page_slug_container.fadeIn('fast');
                    break;
                case '3':
                    $('#external-form').fadeIn('fast');
                    $page_slug_container.fadeOut('fast');
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