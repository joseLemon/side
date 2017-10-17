<div class="row no-margin">
    <div class="col-sm-12">
        <h3>Prontuarios</h3>
        <div class="panel-group" id="accordion-calendar">
            <div class="panel panel-default" id="1" my_id="1" type="year" data-year="2013">
                <div class="panel-heading" data-toggle="collapse" data-parent="#accordion-calendar" href="#collapse1">
                    <h4 class="panel-title">2013
                        <button type="button" class="expand-accordion">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="deletePanel">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                    <div class="panel-body text-center">

                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <h4>Enero</h4>
                            <label for="january" class="input-file-cms document">
                                <span class="label_text">{{ isset($page->micro->file_program_15) ? $page->micro->file_program_15 : 'Elegir documento' }}</span>
                                <input type="file" name="january[]" id="january" class="input-file-doc" accept="application/pdf">
                                <input type="hidden" name="state_january_check" id="state_january_check">
                            </label>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <h4>Febrero</h4>
                            <label for="february" class="input-file-cms document">
                                <span class="label_text">{{ isset($page->micro->file_program_15) ? $page->micro->file_program_15 : 'Elegir documento' }}</span>
                                <input type="file" name="february[]" id="february" class="input-file-doc" accept="application/pdf">
                                <input type="hidden" name="state_february_check" id="state_february_check">
                            </label>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <h4>Marzo</h4>
                            <label for="march" class="input-file-cms document">
                                <span class="label_text">{{ isset($page->micro->file_program_15) ? $page->micro->file_program_15 : 'Elegir documento' }}</span>
                                <input type="file" name="march[]" id="march" class="input-file-doc" accept="application/pdf">
                                <input type="hidden" name="state_march_check" id="state_march_check">
                            </label>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <h4>Abril</h4>
                            <label for="april" class="input-file-cms document">
                                <span class="label_text">{{ isset($page->micro->file_program_15) ? $page->micro->file_program_15 : 'Elegir documento' }}</span>
                                <input type="file" name="april[]" id="april" class="input-file-doc" accept="application/pdf">
                                <input type="hidden" name="state_april_check" id="state_april_check">
                            </label>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <h4>Mayo</h4>
                            <label for="may" class="input-file-cms document">
                                <span class="label_text">{{ isset($page->micro->file_program_15) ? $page->micro->file_program_15 : 'Elegir documento' }}</span>
                                <input type="file" name="may[]" id="may" class="input-file-doc" accept="application/pdf">
                                <input type="hidden" name="state_may_check" id="state_may_check">
                            </label>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <h4>Junio</h4>
                            <label for="june" class="input-file-cms document">
                                <span class="label_text">{{ isset($page->micro->file_program_15) ? $page->micro->file_program_15 : 'Elegir documento' }}</span>
                                <input type="file" name="june[]" id="june" class="input-file-doc" accept="application/pdf">
                                <input type="hidden" name="state_june_check" id="state_june_check">
                            </label>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <h4>Julio</h4>
                            <label for="july" class="input-file-cms document">
                                <span class="label_text">{{ isset($page->micro->file_program_15) ? $page->micro->file_program_15 : 'Elegir documento' }}</span>
                                <input type="file" name="july[]" id="july" class="input-file-doc" accept="application/pdf">
                                <input type="hidden" name="state_july_check" id="state_july_check">
                            </label>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <h4>Agosto</h4>
                            <label for="august" class="input-file-cms document">
                                <span class="label_text">{{ isset($page->micro->file_program_15) ? $page->micro->file_program_15 : 'Elegir documento' }}</span>
                                <input type="file" name="august[]" id="august" class="input-file-doc" accept="application/pdf">
                                <input type="hidden" name="state_august_check" id="state_august_check">
                            </label>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <h4>Septiembre</h4>
                            <label for="september" class="input-file-cms document">
                                <span class="label_text">{{ isset($page->micro->file_program_15) ? $page->micro->file_program_15 : 'Elegir documento' }}</span>
                                <input type="file" name="september[]" id="september" class="input-file-doc" accept="application/pdf">
                                <input type="hidden" name="state_september_check" id="state_september_check">
                            </label>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <h4>Octubre</h4>
                            <label for="october" class="input-file-cms document">
                                <span class="label_text">{{ isset($page->micro->file_program_15) ? $page->micro->file_program_15 : 'Elegir documento' }}</span>
                                <input type="file" name="october[]" id="october" class="input-file-doc" accept="application/pdf">
                                <input type="hidden" name="state_october_check" id="state_october_check">
                            </label>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <h4>Noviembre</h4>
                            <label for="november" class="input-file-cms document">
                                <span class="label_text">{{ isset($page->micro->file_program_15) ? $page->micro->file_program_15 : 'Elegir documento' }}</span>
                                <input type="file" name="november[]" id="november" class="input-file-doc" accept="application/pdf">
                                <input type="hidden" name="state_november_check" id="state_november_check">
                            </label>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <h4>Diciembre</h4>
                            <label for="december" class="input-file-cms document">
                                <span class="label_text">{{ isset($page->micro->file_program_15) ? $page->micro->file_program_15 : 'Elegir documento' }}</span>
                                <input type="file" name="december[]" id="december" class="input-file-doc" accept="application/pdf">
                                <input type="hidden" name="state_december_check" id="state_december_check">
                            </label>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>