@section('head')
    <link rel="stylesheet" href="{{ asset('public/js/modules/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('public/js/modules/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/cms/filesCalendar.css') }}">
@stop
<!-- ================================== -->

<!-- ///////////  PRONTUARIOS  \\\\\\\\\\\ -->

<!-- ================================== -->
<div class="prontuarios" id="prontuarios">
    <?php
    $counter = 0;
    $arrLenght = count($page->calendar);
    ?>
    <?php foreach ($page->calendar as $year) { ?>
    <?php if($counter == 0 || $counter%5 == 0) { ?>
    <div class="flex-container">
        <?php } ?>
        <div class="year-selector active" data-year="{{ $year->year_name }}" data-yearid="{{ $year->year_id }}">
            <h4 class="vertical-align-abs">{{ $year->year_name }}</h4>
        </div>
        <?php if(($counter+1)%5 == 0 || $counter+1 == $arrLenght) { ?>
        <div class="month-selection">
            <button class="close-month-selection">
                <i class="fa fa-times" aria-hidden="true"></i>
            </button>
            <div class="flex-container">
                <div class="month-selector" data-month="1">
                    <a href="" target="_blank">
                        <h4 class="vertical-align-abs">Enero</h4>
                    </a>
                </div>
                <div class="month-selector" data-month="2">
                    <a href="" target="_blank">
                        <h4 class="vertical-align-abs">Febrero</h4>
                    </a>
                </div>
                <div class="month-selector" data-month="3">
                    <a href="" target="_blank">
                        <h4 class="vertical-align-abs">Marzo</h4>
                    </a>
                </div>
                <div class="month-selector" data-month="4">
                    <a href="" target="_blank">
                        <h4 class="vertical-align-abs">Abril</h4>
                    </a>
                </div>
            </div>
            <div class="flex-container">
                <div class="month-selector" data-month="5">
                    <a href="" target="_blank">
                        <h4 class="vertical-align-abs">Mayo</h4>
                    </a>
                </div>
                <div class="month-selector" data-month="6">
                    <a href="" target="_blank">
                        <h4 class="vertical-align-abs">Junio</h4>
                    </a>
                </div>
                <div class="month-selector" data-month="7">
                    <a href="" target="_blank">
                        <h4 class="vertical-align-abs">Julio</h4>
                    </a>
                </div>
                <div class="month-selector" data-month="8">
                    <a href="" target="_blank">
                        <h4 class="vertical-align-abs">Agosto</h4>
                    </a>
                </div>
            </div>
            <div class="flex-container">
                <div class="month-selector" data-month="9">
                    <a href="" target="_blank">
                        <h4 class="vertical-align-abs">Septiembre</h4>
                    </a>
                </div>
                <div class="month-selector" data-month="10">
                    <a href="" target="_blank">
                        <h4 class="vertical-align-abs">Octubre</h4>
                    </a>
                </div>
                <div class="month-selector" data-month="11">
                    <a href="" target="_blank">
                        <h4 class="vertical-align-abs">Noviembre</h4>
                    </a>
                </div>
                <div class="month-selector" data-month="12">
                    <a href="" target="_blank">
                        <h4 class="vertical-align-abs">Diciembre</h4>
                    </a>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php $counter++ ?>
        <?php if( $counter%5 == 0 || $counter == $arrLenght ) { ?>
    </div>
    <?php } ?>
    <?php } ?>
</div>
@section('scripts')
    <script>
        /* REFRESH SRC OF VIDEO IFRAME */
        var iframe;
        $(document).ready(function() {
            iframe = $("#video-modal").find('iframe').attr('src');
            $("#video-modal").find('iframe').attr("src", "");
        });
        $("#video-modal").on('show.bs.modal', function () {
            $(this).find('iframe').attr("src", iframe);
        });
        $("#video-modal").on('hidden.bs.modal', function () {
            $(this).find('iframe').attr("src", "");
        });

        $('.year-selector').click(function () {
            var year_selector = $(this),
                year = year_selector.data('year'),
                year_id = year_selector.data('yearid'),
                container = year_selector.closest('.flex-container');

            container.find('.year-selector').each(function () {
                $(this).not(year_selector).removeClass('active');
            });

            container.find('.month-selection').addClass('shown');
            year_selector.css({'pointer-events':'none'});

            $.ajax({
                type: 'GET',
                url: '{{ route('calendar.getYearFiles') }}',
                data: {
                    'year_id': year_id
                }
            }).success(function (data) {
                $.each(data,function (i) {
                    var anchor = $('.month-selector[data-month='+data[i].month_number+']').find('a');
                    if(data[i].month_file != null) {
                        anchor.attr('href','{{ asset('public/uploads/pages/'.$page->page_id) }}/'+data[i].month_file).attr('target','_blank').css({'pointer-events':'all'});
                    } else {
                        anchor.attr('href','#').attr('target','_self').css({'pointer-events':'none'});
                    }
                });
            });
        });

        $('.close-month-selection').click(function () {
            var btnClose = $(this),
                monthSelection = btnClose.closest('.month-selection'),
                container = btnClose.closest('.flex-container');
            monthSelection.removeClass('shown');

            container.find('.year-selector').each(function () {
                var year_selector = $(this);

                if(!year_selector.hasClass('active')) {
                    year_selector.addClass('active');
                } else {
                    year_selector.css({'pointer-events':'all'});
                }
            });
        });
    </script>
@stop