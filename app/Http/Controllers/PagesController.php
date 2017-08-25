<?php
namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\PageIndex;
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
        $page->page_index = $page->join('page_index','page_index.page_id','=','pages.page_id')
            ->first();

        $params = [
            'id'    =>  $id,
            'page'  =>  $page
        ];

        if($page->page_type_id == 1) {
            return view('pages.edit.index.edit',$params);
        }

        return view('pages.edit.edit',$params);
    }


    public function updateIndex(Request $request, $id) {
        $page = PageIndex::find($id);

        if(!$page) {
            $page = new PageIndex();
        }

        $page->page_id = $id;

        //  BANNER PRINCIPAL
        if($_FILES['banner_1_img']['size'] > 0) {
            $delete = false;
            if($page->banner_1_img) {
                $delete = true;
            }
            echo ImgUploadController::fileUpload(public_path().'/uploads/pages/'.$page->page_id.'/','banner_1_img',$delete, true,1920,2000,true, false);
            $page->banner_1_img = $_FILES['banner_1_img']['name'];
        }

        //  SEGUNDO BANNER
        if($_FILES['banner_2_img']['size'] > 0) {
            $delete = false;
            if($page->banner_2_img) {
                $delete = true;
            }
            echo ImgUploadController::fileUpload(public_path().'/uploads/pages/'.$page->page_id.'/','banner_2_img',$delete, true,1920,2000,true, false);
            $page->banner_2_img = $_FILES['banner_2_img']['name'];
        }
        $page->es_banner_2_text_1 = $request->input('es_banner_2_text_1');
        $page->es_banner_2_text_2 = $request->input('es_banner_2_text_2');
        $page->en_banner_2_text_1 = $request->input('en_banner_2_text_1');
        $page->en_banner_2_text_2 = $request->input('en_banner_2_text_2');

        //  TERCER BANNER
        if($_FILES['banner_3_img']['size'] > 0) {
            $delete = false;
            if($page->banner_3_img) {
                $delete = true;
            }
            echo ImgUploadController::fileUpload(public_path().'/uploads/pages/'.$page->page_id.'/','banner_3_img',$delete, true,1920,2000,true, false);
            $page->banner_3_img = $_FILES['banner_3_img']['name'];
        }
        $page->es_banner_3_text = $request->input('es_banner_3_text');
        $page->en_banner_3_text = $request->input('en_banner_3_text');
        $page->banner_3_url = $request->input('banner_3_url');

        //  DIAMANTE 1
        $page->es_diamond_1_text = $request->input('es_diamond_1_text');
        $page->en_diamond_1_text = $request->input('en_diamond_1_text');
        $page->diamond_1_url = $request->input('diamond_1_url');

        //  DIAMANTE 2
        $page->es_diamond_2_text = $request->input('es_diamond_2_text');
        $page->en_diamond_2_text = $request->input('en_diamond_2_text');
        $page->diamond_2_url = $request->input('diamond_2_url');

        // DIAMANTE 3
        $page->es_diamond_3_text = $request->input('es_diamond_3_text');
        $page->en_diamond_3_text = $request->input('en_diamond_3_text');
        $page->diamond_3_url = $request->input('diamond_3_url');

        // DIAMANTE 4
        $page->es_diamond_4_text = $request->input('es_diamond_4_text');
        $page->en_diamond_4_text = $request->input('en_diamond_4_text');
        $page->diamond_4_url = $request->input('diamond_4_url');

        //  DIRECCIONES
        $page->es_sites_title = $request->input('es_sites_title');
        $page->en_sites_title = $request->input('en_sites_title');

        //  BLOG
        $page->es_blog_title = $request->input('es_blog_title');
        $page->en_blog_title = $request->input('en_blog_title');
        $page->es_sites_subtitle = $request->input('es_sites_subtitle');
        $page->en_sites_subtitle = $request->input('en_sites_subtitle');

        //  VIDEO
        /*if($_FILES['video_banner']['size'] > 0) {
            $delete = false;
            if($page->video_banner) {
                $delete = true;
            }
            ImgUploadController::videoUpload(public_path().'/uploads/pages/'.$page->page_id.'/videos/','video_banner',$delete);
        }
        $page->video_banner = $_FILES['video_banner']['name'];*/

        //  INFORMACIÓN
        if($_FILES['about_1_img']['size'] > 0) {
            $delete = false;
            if($page->about_1_img) {
                $delete = true;
            }
            echo ImgUploadController::fileUpload(public_path().'/uploads/pages/'.$page->page_id.'/','about_1_img',$delete, true,1920,2000,true, false);
            $page->about_1_img = $_FILES['about_1_img']['name'];
        }
        $page->es_about_1_title = $request->input('es_about_1_title');
        $page->es_about_1_text = $request->input('es_about_1_text');
        $page->en_about_1_title = $request->input('en_about_1_title');
        $page->en_about_1_text = $request->input('en_about_1_text');

        if($_FILES['about_2_img']['size'] > 0) {
            $delete = false;
            if($page->about_2_img) {
                $delete = true;
            }
            echo ImgUploadController::fileUpload(public_path().'/uploads/pages/'.$page->page_id.'/','about_2_img',$delete, true,1920,2000,true, false);
            $page->about_2_img = $_FILES['about_2_img']['name'];
        }
        $page->es_about_2_title = $request->input('es_about_2_title');
        $page->es_about_2_text = $request->input('es_about_2_text');
        $page->en_about_2_title = $request->input('en_about_2_title');
        $page->en_about_2_text = $request->input('en_about_2_text');

        if($_FILES['about_3_img']['size'] > 0) {
            $delete = false;
            if($page->about_3_img) {
                $delete = true;
            }
            echo ImgUploadController::fileUpload(public_path().'/uploads/pages/'.$page->page_id.'/','about_3_img',$delete, true,1920,2000,true, false);
            $page->about_3_img = $_FILES['about_3_img']['name'];
        }
        $page->es_about_3_title = $request->input('es_about_3_title');
        $page->es_about_3_text = $request->input('es_about_3_text');
        $page->en_about_3_title = $request->input('en_about_3_title');
        $page->en_about_3_text = $request->input('en_about_3_text');

        $page->save();

        \Session::flash('alertMessage','Página de inicio editada correctamente.');
        \Session::flash('alert-class','alert-success');

        return redirect()->route('pages.show');
    }

    function pageExists($id) {
        $page = Page::find($id);

        if (!$page) {
            return abort('404');
        }

        return $page;
    }
}