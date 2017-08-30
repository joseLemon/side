<script>
    $(document).ready(function() {

        $('input[type=file]').change(readFile);

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
    });
</script>