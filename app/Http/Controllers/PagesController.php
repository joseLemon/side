<?php
namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PagesController extends Controller {
    public function show() {
        return view('pages.show.show');
    }

    public static function getPages(Request $request) {
        $search = $request->input('search','');
        $paginate = $request->input('paginate',10);
        $except = $request->input('except',3);

        $date = date('Y-m-d', strtotime(str_replace('/', '-', $search)));
        if($date == '1970-01-01') {
            $date = $search;
        }

        $pages = Page::select([
            'page_id',
            'page_title',
            'created_at as page_date'
        ])
            ->orderBy('page_id');

        if($request->input('get_pages_by') == 'search') {
            $pages->whereRaw(
                "(
                page_title LIKE \"%$search%\"
                OR page_id LIKE \"%$search%\"
                OR created_at LIKE \"%$date%\"
                OR created_at LIKE \"%$search%\"
                )"
            );
        }

        if($except != '') {
            $pages->where('page_type_id','!=',$except);
        }

        $query = $pages->paginate($paginate);

        setlocale(LC_ALL,"es_MX","es_Mx","esp");
        foreach($query as $q) {
            $date = \DateTime::createFromFormat('Y-m-d H:i:s', $q->page_date);
            $q->page_date = ucfirst(strftime("%B %d, %y",$date->getTimestamp()));
        }

        return $query;
    }

    public function delete(Request $request) {
        $page = Page::find($request->input('page_id'));
        $page->delete();

        $jsonResponse = [
            'alert_class' => 'alert-success',
            'msg'   => 'Página eliminada correctamente'
        ];

        return response()->json($jsonResponse);
    }

    public function edit($id) {
        $page = $this->pageExists($id);

        $params = [
            'id'    =>  $id,
            'page'  =>  $page
        ];

        if($page->page_type_id == 1) {
            return view('pages.edit.index.edit',$params);
        }

        return view('pages.edit.edit',$params);
    }


    public function updateIndex($id) {
        return;
    }

    function pageExists($id) {
        $page = Page::find($id);

        if (!$page) {
            return abort('404');
        }

        return $page;
    }
}