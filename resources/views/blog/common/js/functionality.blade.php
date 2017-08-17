<script src="{{ asset('public/js/modules/tinymce/tinymce.min.js?apiKey=?apiKey=lmzwakfmcpx8xyo0kmi4gzbnvwa6qp6hdvku58vnvcjzdwpj') }}"></script>
<script>
    $(document).ready(function() {
        tinymce.init({
            selector: '#post_content',
            language: 'es',
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | preview media fullpage | forecolor backcolor',
            plugins: [
                'advlist autolink link image lists preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks code fullscreen insertdatetime media nonbreaking',
                'save table contextmenu directionality paste textcolor'
            ]
        });

        document.getElementById("post_img").addEventListener("change", readFile);

        $('.blog-sidebar .img-container .remove-img').click(function () {
            $('.preview').removeClass('active').find('img').attr('src','');
            $('#post_img').val('');
            $('#state_check').val('removed');
        });

        $( "#post_date" ).datepicker({
            dateFormat: "dd/mm/yy",
            beforeShow: function(input, inst) {
                var widget = $(inst).datepicker('widget');
                widget.css('margin-left', $(input).outerWidth() - widget.outerWidth());
            }
        });
    });

    function readFile() {
        if (this.files && this.files[0]) {
            var FR= new FileReader();
            FR.addEventListener("load", function(e) {
                document.getElementById("preview").src = e.target.result;
            });
            FR.readAsDataURL( this.files[0] );
            $('.preview').addClass('active');
        }
    }
</script>