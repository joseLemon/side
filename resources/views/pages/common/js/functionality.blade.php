<script>
    $(document).ready(function() {
        $('.input-file-img').change(readFile);

        $('.img-container .remove-img').click(function () {
            var button = $(this),
                preview = button.closest('.preview'),
                input = preview.next().find('input'),
                check = input.next();

            preview.removeClass('active').find('img').attr('src', '');
            input.val('');
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
            }
        }

        $('#page_type').change(function () {
            var select = $(this),
                selected_option = select.find('option:selected').val();

            $('.form-container').fadeOut('fast');

            switch (selected_option) {
                case '2':
                    $('#micro-form').fadeIn('fast');
                    break;
                default:
                    break;
            }
        });
    });
</script>