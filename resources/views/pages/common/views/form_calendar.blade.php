<div class="row no-margin">
    <div class="col-sm-12">
        <h3>Prontuarios</h3>
        <div class="panel-group" id="accordion-calendar">

            @foreach($years as $key => $year)
                <div class="panel panel-default" id="{{ $key }}" my_id="{{ $year->year_id }}" type="year" data-year="{{ $year->year_name }}">
                    <div class="panel-heading" data-toggle="collapse" data-parent="#accordion-calendar" href="#collapse{{ $key }}">
                        <h4 class="panel-title">{{ $year->year_name }}
                            <button type="button" class="expand-accordion">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                            <button type="button" class="deletePanel">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </button>
                        </h4>
                    </div>
                    <div id="collapse{{ $key }}" class="panel-collapse collapse">
                        <div class="panel-body text-center">

                            <input type="text" name="year[]" id="year" placeholder="Año" class="input-cms" value="{{ $year->year_name }}">
                            <input type="hidden" name="yearid[]" id="yearid" value="{{ $year->year_id }}">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <h4>Enero</h4>
                                <label for="january{{ $key }}" class="input-file-cms document">
                                    <span class="label_text">{{ isset($year->months[0]->month_file) ? $year->months[0]->month_file : 'Elegir documento' }}</span>
                                    <input type="file" name="january[]" id="january{{ $key }}" class="input-file-doc" accept="application/pdf">
                                    <input type="hidden" name="state_month_check_1_{{ $key }}" id="state_january_check">
                                    <button type="button" class="remove-file @if(!isset($year->months[0]->month_file)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <h4>Febrero</h4>
                                <label for="february{{ $key }}" class="input-file-cms document">
                                    <span class="label_text">{{ isset($year->months[1]->month_file) ? $year->months[1]->month_file : 'Elegir documento' }}</span>
                                    <input type="file" name="february[]" id="february{{ $key }}" class="input-file-doc" accept="application/pdf">
                                    <input type="hidden" name="state_month_check_2_{{ $key }}" id="state_february_check">
                                    <button type="button" class="remove-file @if(!isset($year->months[1]->month_file)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <h4>Marzo</h4>
                                <label for="march{{ $key }}" class="input-file-cms document">
                                    <span class="label_text">{{ isset($year->months[2]->month_file) ? $year->months[2]->month_file : 'Elegir documento' }}</span>
                                    <input type="file" name="march[]" id="march{{ $key }}" class="input-file-doc" accept="application/pdf">
                                    <input type="hidden" name="state_month_check_3_{{ $key }}" id="state_march_check">
                                    <button type="button" class="remove-file @if(!isset($year->months[2]->month_file)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <h4>Abril</h4>
                                <label for="april{{ $key }}" class="input-file-cms document">
                                    <span class="label_text">{{ isset($year->months[3]->month_file) ? $year->months[3]->month_file : 'Elegir documento' }}</span>
                                    <input type="file" name="april[]" id="april{{ $key }}" class="input-file-doc" accept="application/pdf">
                                    <input type="hidden" name="state_month_check_4_{{ $key }}" id="state_april_check">
                                    <button type="button" class="remove-file @if(!isset($year->months[3]->month_file)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <h4>Mayo</h4>
                                <label for="may{{ $key }}" class="input-file-cms document">
                                    <span class="label_text">{{ isset($year->months[4]->month_file) ? $year->months[4]->month_file : 'Elegir documento' }}</span>
                                    <input type="file" name="may[]" id="may{{ $key }}" class="input-file-doc" accept="application/pdf">
                                    <input type="hidden" name="state_month_check_5_{{ $key }}" id="state_may_check">
                                    <button type="button" class="remove-file @if(!isset($year->months[4]->month_file)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <h4>Junio</h4>
                                <label for="june{{ $key }}" class="input-file-cms document">
                                    <span class="label_text">{{ isset($year->months[5]->month_file) ? $year->months[5]->month_file : 'Elegir documento' }}</span>
                                    <input type="file" name="june[]" id="june{{ $key }}" class="input-file-doc" accept="application/pdf">
                                    <input type="hidden" name="state_month_check_6_{{ $key }}" id="state_june_check">
                                    <button type="button" class="remove-file @if(!isset($year->months[5]->month_file)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <h4>Julio</h4>
                                <label for="july{{ $key }}" class="input-file-cms document">
                                    <span class="label_text">{{ isset($year->months[6]->month_file) ? $year->months[6]->month_file : 'Elegir documento' }}</span>
                                    <input type="file" name="july[]" id="july{{ $key }}" class="input-file-doc" accept="application/pdf">
                                    <input type="hidden" name="state_month_check_7_{{ $key }}" id="state_july_check">
                                    <button type="button" class="remove-file @if(!isset($year->months[6]->month_file)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <h4>Agosto</h4>
                                <label for="august{{ $key }}" class="input-file-cms document">
                                    <span class="label_text">{{ isset($year->months[7]->month_file) ? $year->months[7]->month_file : 'Elegir documento' }}</span>
                                    <input type="file" name="august[]" id="august{{ $key }}" class="input-file-doc" accept="application/pdf">
                                    <input type="hidden" name="state_month_check_8_{{ $key }}" id="state_august_check">
                                    <button type="button" class="remove-file @if(!isset($year->months[7]->month_file)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <h4>Septiembre</h4>
                                <label for="september{{ $key }}" class="input-file-cms document">
                                    <span class="label_text">{{ isset($year->months[8]->month_file) ? $year->months[8]->month_file : 'Elegir documento' }}</span>
                                    <input type="file" name="september[]" id="september{{ $key }}" class="input-file-doc" accept="application/pdf">
                                    <input type="hidden" name="state_month_check_9_{{ $key }}" id="state_september_check">
                                    <button type="button" class="remove-file @if(!isset($year->months[8]->month_file)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <h4>Octubre</h4>
                                <label for="october{{ $key }}" class="input-file-cms document">
                                    <span class="label_text">{{ isset($year->months[9]->month_file) ? $year->months[9]->month_file : 'Elegir documento' }}</span>
                                    <input type="file" name="october[]" id="october{{ $key }}" class="input-file-doc" accept="application/pdf">
                                    <input type="hidden" name="state_month_check_10_{{ $key }}" id="state_october_check">
                                    <button type="button" class="remove-file @if(!isset($year->months[9]->month_file)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <h4>Noviembre</h4>
                                <label for="november{{ $key }}" class="input-file-cms document">
                                    <span class="label_text">{{ isset($year->months[10]->month_file) ? $year->months[10]->month_file : 'Elegir documento' }}</span>
                                    <input type="file" name="november[]" id="november{{ $key }}" class="input-file-doc" accept="application/pdf">
                                    <input type="hidden" name="state_month_check_11_{{ $key }}" id="state_november_check">
                                    <button type="button" class="remove-file @if(!isset($year->months[10]->month_file)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                                </label>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <h4>Diciembre</h4>
                                <label for="december{{ $key }}" class="input-file-cms document">
                                    <span class="label_text">{{ isset($year->months[11]->month_file) ? $year->months[11]->month_file : 'Elegir documento' }}</span>
                                    <input type="file" name="december[]" id="december{{ $key }}" class="input-file-doc" accept="application/pdf">
                                    <input type="hidden" name="state_month_check_12_{{ $key }}" id="state_december_check">
                                    <button type="button" class="remove-file @if(!isset($year->months[11]->month_file)){{ 'hidden' }}@endif"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="text-right">
            <button type="button" id="add-year">Agregar Año</button>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        deletePanel();
    });

    $('#add-year').click(function () {
        var accordion = $('#accordion-calendar'),
            panel_number = (accordion.children().length)+1,
            panel_id = 'panel-'+panel_number;

        accordion.append(
            '<div class="panel panel-default" id="'+panel_id+'" my_id="'+panel_number+'" type="year" data-year="null">' +
            '<div class="panel-heading" data-toggle="collapse" data-parent="#accordion-calendar" href="#collapse'+panel_number+'">' +
            '<h4 class="panel-title">Año (nuevo)' +
            '<button type="button" class="expand-accordion">' +
            '<i class="fa fa-plus" aria-hidden="true"></i>' +
            '</button>' +
            '<button type="button" class="deletePanel new">' +
            '<i class="fa fa-times" aria-hidden="true"></i>' +
            '</button>' +
            '</h4>' +
            '</div>' +
            '<div id="collapse'+panel_number+'" class="panel-collapse collapse">' +
            '<div class="panel-body text-center">' +
            '<input type="text" name="year[]" id="year" placeholder="Año" class="input-cms">' +
            '<input type="hidden" name="yearid[]" id="yearid" value="new">' +
            '<div class="col-lg-3 col-md-4 col-sm-6">' +
            '<h4>Enero</h4>' +
            '<label for="january'+panel_number+'" class="input-file-cms document">' +
            '<span class="label_text">Elegir documento</span>' +
            '<input type="file" name="january[]" id="january'+panel_number+'" class="input-file-doc" accept="application/pdf">' +
            '<input type="hidden" name="state_january_check" id="state_month_check_1_'+panel_number+'">' +
            '<button type="button" class="remove-file hidden"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>' +
            '</label>' +
            '</div>' +
            '<div class="col-lg-3 col-md-4 col-sm-6">' +
            '<h4>Febrero</h4>' +
            '<label for="february'+panel_number+'" class="input-file-cms document">' +
            '<span class="label_text">Elegir documento</span>' +
            '<input type="file" name="february[]" id="february'+panel_number+'" class="input-file-doc" accept="application/pdf">' +
            '<input type="hidden" name="state_february_check" id="state_month_check_2_'+panel_number+'">' +
            '<button type="button" class="remove-file hidden"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>' +
            '</label>' +
            '</div>' +
            '<div class="col-lg-3 col-md-4 col-sm-6">' +
            '<h4>Marzo</h4>' +
            '<label for="march'+panel_number+'" class="input-file-cms document">' +
            '<span class="label_text">Elegir documento</span>' +
            '<input type="file" name="march[]" id="march'+panel_number+'" class="input-file-doc" accept="application/pdf">' +
            '<input type="hidden" name="state_march_check" id="state_month_check_3_'+panel_number+'">' +
            '<button type="button" class="remove-file hidden"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>' +
            '</label>' +
            '</div>' +
            '<div class="col-lg-3 col-md-4 col-sm-6">' +
            '<h4>Abril</h4>' +
            '<label for="april'+panel_number+'" class="input-file-cms document">' +
            '<span class="label_text">Elegir documento</span>' +
            '<input type="file" name="april[]" id="april'+panel_number+'" class="input-file-doc" accept="application/pdf">' +
            '<input type="hidden" name="state_april_check" id="state_month_check_4_'+panel_number+'">' +
            '<button type="button" class="remove-file hidden"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>' +
            '</label>' +
            '</div>' +
            '<div class="col-lg-3 col-md-4 col-sm-6">' +
            '<h4>Mayo</h4>' +
            '<label for="may'+panel_number+'" class="input-file-cms document">' +
            '<span class="label_text">Elegir documento</span>' +
            '<input type="file" name="may[]" id="may'+panel_number+'" class="input-file-doc" accept="application/pdf">' +
            '<input type="hidden" name="state_may_check" id="state_month_check_5_'+panel_number+'">' +
            '<button type="button" class="remove-file hidden"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>' +
            '</label>' +
            '</div>' +
            '<div class="col-lg-3 col-md-4 col-sm-6">' +
            '<h4>Junio</h4>' +
            '<label for="june'+panel_number+'" class="input-file-cms document">' +
            '<span class="label_text">Elegir documento</span>' +
            '<input type="file" name="june[]" id="june'+panel_number+'" class="input-file-doc" accept="application/pdf">' +
            '<input type="hidden" name="state_june_check" id="state_month_check_6_'+panel_number+'">' +
            '<button type="button" class="remove-file hidden"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>' +
            '</label>' +
            '</div>' +
            '<div class="col-lg-3 col-md-4 col-sm-6">' +
            '<h4>Julio</h4>' +
            '<label for="july'+panel_number+'" class="input-file-cms document">' +
            '<span class="label_text">Elegir documento</span>' +
            '<input type="file" name="july[]" id="july'+panel_number+'" class="input-file-doc" accept="application/pdf">' +
            '<input type="hidden" name="state_july_check" id="state_month_check_7_'+panel_number+'">' +
            '<button type="button" class="remove-file hidden"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>' +
            '</label>' +
            '</div>' +
            '<div class="col-lg-3 col-md-4 col-sm-6">' +
            '<h4>Agosto</h4>' +
            '<label for="august'+panel_number+'" class="input-file-cms document">' +
            '<span class="label_text">Elegir documento</span>' +
            '<input type="file" name="august[]" id="august'+panel_number+'" class="input-file-doc" accept="application/pdf">' +
            '<input type="hidden" name="state_august_check" id="state_month_check_8_'+panel_number+'">' +
            '<button type="button" class="remove-file hidden"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>' +
            '</label>' +
            '</div>' +
            '<div class="col-lg-3 col-md-4 col-sm-6">' +
            '<h4>Septiembre</h4>' +
            '<label for="september'+panel_number+'" class="input-file-cms document">' +
            '<span class="label_text">Elegir documento</span>' +
            '<input type="file" name="september[]" id="september'+panel_number+'" class="input-file-doc" accept="application/pdf">' +
            '<input type="hidden" name="state_september_check" id="state_month_check_9_'+panel_number+'">' +
            '<button type="button" class="remove-file hidden"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>' +
            '</label>' +
            '</div>' +
            '<div class="col-lg-3 col-md-4 col-sm-6">' +
            '<h4>Octubre</h4>' +
            '<label for="october'+panel_number+'" class="input-file-cms document">' +
            '<span class="label_text">Elegir documento</span>' +
            '<input type="file" name="october[]" id="october'+panel_number+'" class="input-file-doc" accept="application/pdf">' +
            '<input type="hidden" name="state_october_check" id="state_month_check_10_'+panel_number+'">' +
            '<button type="button" class="remove-file hidden"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>' +
            '</label>' +
            '</div>' +
            '<div class="col-lg-3 col-md-4 col-sm-6">' +
            '<h4>Noviembre</h4>' +
            '<label for="november'+panel_number+'" class="input-file-cms document">' +
            '<span class="label_text">Elegir documento</span>' +
            '<input type="file" name="november[]" id="november'+panel_number+'" class="input-file-doc" accept="application/pdf">' +
            '<input type="hidden" name="state_november_check" id="state_month_check_11_'+panel_number+'">' +
            '<button type="button" class="remove-file hidden"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>' +
            '</label>' +
            '</div>' +
            '<div class="col-lg-3 col-md-4 col-sm-6">' +
            '<h4>Diciembre</h4>' +
            '<label for="december'+panel_number+'" class="input-file-cms document">' +
            '<span class="label_text">Elegir documento</span>' +
            '<input type="file" name="december[]" id="december'+panel_number+'" class="input-file-doc" accept="application/pdf">' +
            '<input type="hidden" name="state_december_check" id="state_month_check_12_'+panel_number+'">' +
            '<button type="button" class="remove-file hidden"><i class="fa fa-window-close-o" aria-hidden="true"></i></button>' +
            '</label>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>'
        );

        deletePanel();
        initReadFiles();
    });

    function deletePanel() {
        $('.deletePanel').click(function (e) {
            e.preventDefault();
            e.stopImmediatePropagation();

            var button = $(this),
                panel = button.closest('.panel');

            if(button.hasClass('new')) {
                panel.remove();
            } else {
                var id = panel.attr('my_id'),
                    type = panel.attr('type');

                $.ajax({
                    type: 'GET',
                    url: '{{ route('year.delete') }}',
                    data: {
                        'id': id,
                        'type': type
                    }
                }).success(function () {
                    location.reload();
                }).fail(function () {
                    $.alert({
                        title: 'Error al borrar el año.',
                        content: 'No se pudo completar la operación, intentalo nuevamente más tarde.',
                        backgroundDismiss: 'cancel'
                    })
                });

            }
        });
    }
</script>