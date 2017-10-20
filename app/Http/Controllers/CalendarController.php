<?php

namespace App\Http\Controllers;

use App\Models\Month;
use App\Models\PageMicro;
use App\Models\Year;
use Illuminate\Http\Request;

class CalendarController extends Controller {
    public function yearDelete (Request $request) {
        $type = $request->input('type');
        $id = $request->input('id');
        $type_text = '';

        if($type == 'year') {
            $year = Year::find($id);
            $year->delete();
            $type_text = 'Año';
        }

        \Session::flash('alertMessage',$type_text.' eliminado correctamente.');
        \Session::flash('alert-class','alert-success');
    }

    public function getYearFiles (Request $request) {
        $year_id = $request->input('year_id');

        $files = Month::select([
            'month_number',
            'month_file'
        ])
        ->where('year_id',$year_id)
            ->get();

        return $files;
    }
}