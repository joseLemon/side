<?php
namespace App\Http\Controllers;

use App\Models\Color;
use App\Models\Page;
use App\Models\PageExternal;
use App\Models\PageIndex;
use App\Models\PageMicro;
use App\Models\PageType;
use Illuminate\Http\Request;

class PagesController extends Controller {
    public function show() {
        return view('pages.show.show');
    }

    public function create () {
        $colors = Color::select(['color_name','color_id','color_slug'])->get();
        $page_types = PageType::select(['page_type_name','page_type_id'])
            ->where('page_type_id','!=',1)
            ->get();

        $params = [
            'colors'        =>  $colors,
            'page_types'    =>  $page_types
        ];

        return view('pages.create.create', $params);
    }

    public function store (Request $request) {
        $page_type_id = $request->input('page_type');

        $this->validateMainPageInfo($request);

        if($page_type_id == 2) {
            $this->validatePageMicro($request);
        } else if($page_type_id == 3) {
            $this->validatePageExternal($request);
        }

        $page = new Page();
        $page->page_title = $request->input('page_title');
        $page->color_id = $request->input('color');
        $page->page_url = $request->input('page_url');
        $page->page_type_id = $page_type_id;
        $page->save();

        //  IMAGEN DEL SITIO
        if($_FILES['page_img']['size'] > 0) {
            $delete = false;
            if($page->page_img) {
                $delete = true;
            }
            fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page->page_id.'/','page_img',$delete, true,1920,2000,true, false);
            $page->page_img = $_FILES['page_img']['name'];
        }
        $page->save();

        if($page_type_id == 2) {

            $page_id = $page->page_id;

            $page = new PageMicro();
            $page->page_id = $page_id;

            if($_FILES['banner_1_img']['size'] > 0) {
                $delete = false;
                if($page->banner_1_img) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','banner_1_img',$delete, true,1920,2000,true, false);
                $page->banner_1_img = $_FILES['banner_1_img']['name'];
            }

            //  DIAMANTE 1
            $page->es_diamond_1_text = $request->input('es_diamond_1_text');
            $page->en_diamond_1_text = $request->input('en_diamond_1_text');
            $page->diamond_1_url = $request->input('diamond_1_url');

            //  ACERCA DE
            $page->es_page_about_title = $request->input('es_page_about_title');
            $page->es_page_about_text = $request->input('es_page_about_text');
            $page->en_page_about_title = $request->input('en_page_about_title');
            $page->en_page_about_text = $request->input('en_page_about_text');

            //  INFORMACIÓN
            if($_FILES['about_1_img']['size'] > 0) {
                $delete = false;
                if($page->about_1_img) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','about_1_img',$delete, true,1920,2000,true, false);
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
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','about_2_img',$delete, true,1920,2000,true, false);
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
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','about_3_img',$delete, true,1920,2000,true, false);
                $page->about_3_img = $_FILES['about_3_img']['name'];
            }
            $page->es_about_3_title = $request->input('es_about_3_title');
            $page->es_about_3_text = $request->input('es_about_3_text');
            $page->en_about_3_title = $request->input('en_about_3_title');
            $page->en_about_3_text = $request->input('en_about_3_text');

            //  SEGUNDO BANNER/VIDEO
            if($_FILES['banner_2_img']['size'] > 0) {
                $delete = false;
                if($page->banner_2_img) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','banner_2_img',$delete, true,1920,2000,true, false);
                $page->banner_2_img = $_FILES['banner_2_img']['name'];
            }
            $page->page_video_iframe = $request->input('page_video_iframe');

            //  PROGRAMAS
            $page->es_programs_title = $request->input('es_programs_title');
            $page->en_programs_title = $request->input('en_programs_title');

            if($_FILES['program_1_img']['size'] > 0) {
                $delete = false;
                if($page->program_1_img) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_1_img',$delete, true,1920,2000,true, false);
                $page->program_1_img = $_FILES['program_1_img']['name'];
            }
            $page->es_program_1_title = $request->input('es_program_1_title');
            $page->en_program_1_title = $request->input('en_program_1_title');
            $page->es_program_1_text = $request->input('es_program_1_text');
            $page->en_program_1_text = $request->input('en_program_1_text');
            fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page_id.'/','file_program_1',false,true,true);

            if($_FILES['program_2_img']['size'] > 0) {
                $delete = false;
                if($page->program_2_img) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_2_img',$delete, true,1920,2000,true, false);
                $page->program_2_img = $_FILES['program_2_img']['name'];
            }
            $page->es_program_2_title = $request->input('es_program_2_title');
            $page->en_program_2_title = $request->input('en_program_2_title');
            $page->es_program_2_text = $request->input('es_program_2_text');
            $page->en_program_2_text = $request->input('en_program_2_text');
            fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page_id.'/','file_program_2',false,true,true);

            if($_FILES['program_3_img']['size'] > 0) {
                $delete = false;
                if($page->program_3_img) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_3_img',$delete, true,1920,2000,true, false);
                $page->program_3_img = $_FILES['program_3_img']['name'];
            }
            $page->es_program_3_title = $request->input('es_program_3_title');
            $page->en_program_3_title = $request->input('en_program_3_title');
            $page->es_program_3_text = $request->input('es_program_3_text');
            $page->en_program_3_text = $request->input('en_program_3_text');
            fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page_id.'/','file_program_3',false,true,true);

            if($_FILES['program_4_img']['size'] > 0) {
                $delete = false;
                if($page->program_4_img) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_4_img',$delete, true,1920,2000,true, false);
                $page->program_4_img = $_FILES['program_4_img']['name'];
            }
            $page->es_program_4_title = $request->input('es_program_4_title');
            $page->en_program_4_title = $request->input('en_program_4_title');
            $page->es_program_4_text = $request->input('es_program_4_text');
            $page->en_program_4_text = $request->input('en_program_4_text');
            fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page_id.'/','file_program_4',false,true,true);

            //  SEGUNDO BANNER/VIDEO
            if($_FILES['banner_3_img']['size'] > 0) {
                $delete = false;
                if($page->banner_3_img) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','banner_3_img',$delete, true,1920,2000,true, false);
                $page->banner_3_img = $_FILES['banner_3_img']['name'];
            }

            //  PROGRAMAS ADMINISTRADOS
            $page->es_programs_title_2 = $request->input('es_programs_title_2');
            $page->en_programs_title_2 = $request->input('en_programs_title_2');

            if($_FILES['program_1_img_2']['size'] > 0) {
                $delete = false;
                if($page->program_1_img_2) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_1_img_2',$delete, true,1920,2000,true, false);
                $page->program_1_img_2 = $_FILES['program_1_img_2']['name'];
            }
            $page->es_program_1_title_2 = $request->input('es_program_1_title_2');
            $page->en_program_1_title_2 = $request->input('en_program_1_title_2');
            $page->es_program_1_text_2 = $request->input('es_program_1_text_2');
            $page->en_program_1_text_2 = $request->input('en_program_1_text_2');
            fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page_id.'/','file_program_1_2',false,true,true);

            if($_FILES['program_2_img_2']['size'] > 0) {
                $delete = false;
                if($page->program_2_img_2) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_2_img_2',$delete, true,1920,2000,true, false);
                $page->program_2_img_2 = $_FILES['program_2_img_2']['name'];
            }
            $page->es_program_2_title_2 = $request->input('es_program_2_title_2');
            $page->en_program_2_title_2 = $request->input('en_program_2_title_2');
            $page->es_program_2_text_2 = $request->input('es_program_2_text_2');
            $page->en_program_2_text_2 = $request->input('en_program_2_text_2');
            fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page_id.'/','file_program_2_2',false,true,true);

            $page->save();

        }

        if($page_type_id == 3) {
            $page_external = new PageExternal();
            $page_external->page_id = $page->page_id;;
            $page_external->page_external_url = $request->input('page_external_url');
            $page_external->save();
        }

        \Session::flash('alertMessage','Página creada correctamente.');
        \Session::flash('alert-class','alert-success');

        return redirect()->route('pages.show');
    }

    public static function getPages(Request $request) {
        $search = $request->input('search','');
        $paginate = $request->input('paginate',10);
        $except = $request->input('except');

        $date = date('Y-m-d', strtotime(str_replace('/', '-', $search)));
        if($date == '1970-01-01') {
            $date = $search;
        }

        $pages = Page::select([
            'page_id',
            'page_title',
            'created_at as page_date',
            'page_type_id as page_type',
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

        if($page->page_type_id == 1) {
            return abort(403);
        }

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
            'id'            =>  $id,
            'page'          =>  $page,
        ];

        if($page->page_type_id == 1) {
            return view('pages.edit.index.edit',$params);
        }

        if($page->page_type_id == 2 || $page->page_type_id == 3) {

            if($page->page_type_id == 2) {
                $page->micro = $page->micro()->first();
            }

            if($page->page_type_id == 3) {
                $page->external = $page->external()->first();
            }

            $colors = Color::select(['color_name','color_id','color_slug'])->get();
            $page_types = PageType::select(['page_type_name','page_type_id'])
                ->where('page_type_id','!=',1)
                ->get();

            $params['colors'] = $colors;
            $params['page_types'] = $page_types;

        }

        return view('pages.edit.edit',$params);
    }

    public function update (Request $request, $id) {
        $page = Page::find($id);

        if($page->page_type_id == 1) {
            $page = PageIndex::find($id);
            return $this->updateIndex($request, $id, $page);
        } else {
            $this->validateMainPageInfo($request);

            if($page->page_type_id == 2) {
                $this->validatePageMicro($request);
            } else if($page->page_type_id == 3) {
                $this->validatePageExternal($request);
            }
            return $this->updateMicro($request, $id, $page);
        }
    }

    public function updateMicro (Request $request, $id, $page) {
        $page->page_title = $request->input('page_title');
        $page->color_id = $request->input('color');
        $page->page_url = $request->input('page_url');

        //  IMAGEN DEL SITIO
        if($_FILES['page_img']['size'] > 0) {
            $delete = false;
            if($page->page_img) {
                $delete = true;
            }
            fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page->page_id.'/','page_img',$delete, true,1920,2000,true, false);
            $page->page_img = $_FILES['page_img']['name'];
        }
        $page->save();

        $page_type_id = $page->page_type_id;

        if($page_type_id == 2) {

            $page_id = $page->page_id;

            $page = PageMicro::where('page_id',$id)
                ->first();

            if($_FILES['banner_1_img']['size'] > 0) {
                $delete = false;
                if($page->banner_1_img) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','banner_1_img',$delete, true,1920,2000,true, false);
                $page->banner_1_img = $_FILES['banner_1_img']['name'];
            }

            //  DIAMANTE 1
            $page->es_diamond_1_text = $request->input('es_diamond_1_text');
            $page->en_diamond_1_text = $request->input('en_diamond_1_text');
            $page->diamond_1_url = $request->input('diamond_1_url');

            //  ACERCA DE
            $page->es_page_about_title = $request->input('es_page_about_title');
            $page->es_page_about_text = $request->input('es_page_about_text');
            $page->en_page_about_title = $request->input('en_page_about_title');
            $page->en_page_about_text = $request->input('en_page_about_text');

            //  INFORMACIÓN
            if($_FILES['about_1_img']['size'] > 0) {
                $delete = false;
                if($page->about_1_img) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','about_1_img',$delete, true,1920,2000,true, false);
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
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','about_2_img',$delete, true,1920,2000,true, false);
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
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','about_3_img',$delete, true,1920,2000,true, false);
                $page->about_3_img = $_FILES['about_3_img']['name'];
            }
            $page->es_about_3_title = $request->input('es_about_3_title');
            $page->es_about_3_text = $request->input('es_about_3_text');
            $page->en_about_3_title = $request->input('en_about_3_title');
            $page->en_about_3_text = $request->input('en_about_3_text');

            //  SEGUNDO BANNER/VIDEO
            if($_FILES['banner_2_img']['size'] > 0) {
                $delete = false;
                if($page->banner_2_img) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','banner_2_img',$delete, true,1920,2000,true, false);
                $page->banner_2_img = $_FILES['banner_2_img']['name'];
            }
            $page->page_video_iframe = $request->input('page_video_iframe');

            //  PROGRAMAS
            $page->es_programs_title = $request->input('es_programs_title');
            $page->en_programs_title = $request->input('en_programs_title');

            if($_FILES['program_1_img']['size'] > 0) {
                $delete = false;
                if($page->program_1_img) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_1_img',$delete, true,1920,2000,true, false);
                $page->program_1_img = $_FILES['program_1_img']['name'];
            }
            $page->es_program_1_title = $request->input('es_program_1_title');
            $page->en_program_1_title = $request->input('en_program_1_title');
            $page->es_program_1_text = $request->input('es_program_1_text');
            $page->en_program_1_text = $request->input('en_program_1_text');
            fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page_id.'/','file_program_1',false,true,true);

            if($_FILES['program_2_img']['size'] > 0) {
                $delete = false;
                if($page->program_2_img) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_2_img',$delete, true,1920,2000,true, false);
                $page->program_2_img = $_FILES['program_2_img']['name'];
            }
            $page->es_program_2_title = $request->input('es_program_2_title');
            $page->en_program_2_title = $request->input('en_program_2_title');
            $page->es_program_2_text = $request->input('es_program_2_text');
            $page->en_program_2_text = $request->input('en_program_2_text');
            fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page_id.'/','file_program_2',false,true,true);

            if($_FILES['program_3_img']['size'] > 0) {
                $delete = false;
                if($page->program_3_img) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_3_img',$delete, true,1920,2000,true, false);
                $page->program_3_img = $_FILES['program_3_img']['name'];
            }
            $page->es_program_3_title = $request->input('es_program_3_title');
            $page->en_program_3_title = $request->input('en_program_3_title');
            $page->es_program_3_text = $request->input('es_program_3_text');
            $page->en_program_3_text = $request->input('en_program_3_text');
            fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page_id.'/','file_program_3',false,true,true);

            if($_FILES['program_4_img']['size'] > 0) {
                $delete = false;
                if($page->program_4_img) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_4_img',$delete, true,1920,2000,true, false);
                $page->program_4_img = $_FILES['program_4_img']['name'];
            }
            $page->es_program_4_title = $request->input('es_program_4_title');
            $page->en_program_4_title = $request->input('en_program_4_title');
            $page->es_program_4_text = $request->input('es_program_4_text');
            $page->en_program_4_text = $request->input('en_program_4_text');
            fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page_id.'/','file_program_4',false,true,true);

            //  SEGUNDO BANNER/VIDEO
            if($_FILES['banner_3_img']['size'] > 0) {
                $delete = false;
                if($page->banner_3_img) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','banner_3_img',$delete, true,1920,2000,true, false);
                $page->banner_3_img = $_FILES['banner_3_img']['name'];
            }

            //  PROGRAMAS ADMINISTRADOS
            $page->es_programs_title_2 = $request->input('es_programs_title_2');
            $page->en_programs_title_2 = $request->input('en_programs_title_2');

            if($_FILES['program_1_img_2']['size'] > 0) {
                $delete = false;
                if($page->program_1_img_2) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_1_img_2',$delete, true,1920,2000,true, false);
                $page->program_1_img_2 = $_FILES['program_1_img_2']['name'];
            }
            $page->es_program_1_title_2 = $request->input('es_program_1_title_2');
            $page->en_program_1_title_2 = $request->input('en_program_1_title_2');
            $page->es_program_1_text_2 = $request->input('es_program_1_text_2');
            $page->en_program_1_text_2 = $request->input('en_program_1_text_2');
            fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page_id.'/','file_program_1_2',false,true,true);

            if($_FILES['program_2_img_2']['size'] > 0) {
                $delete = false;
                if($page->program_2_img_2) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_2_img_2',$delete, true,1920,2000,true, false);
                $page->program_2_img_2 = $_FILES['program_2_img_2']['name'];
            }
            $page->es_program_2_title_2 = $request->input('es_program_2_title_2');
            $page->en_program_2_title_2 = $request->input('en_program_2_title_2');
            $page->es_program_2_text_2 = $request->input('es_program_2_text_2');
            $page->en_program_2_text_2 = $request->input('en_program_2_text_2');
            fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page_id.'/','file_program_2_2',false,true,true);

            $page->save();

        }

        if($page_type_id == 3) {
            $page_external = PageExternal::where('page_id',$id)
                ->first();
            $page_external->page_external_url = $request->input('page_external_url');
            $page_external->save();
        }

        \Session::flash('alertMessage','Página creada correctamente.');
        \Session::flash('alert-class','alert-success');

        return redirect()->route('pages.show');
    }

    public function updateIndex(Request $request, $id, $page) {
        $this->validateIndex($request);

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
            fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page->page_id.'/','banner_1_img',$delete, true,1920,2000,true, false);
            $page->banner_1_img = $_FILES['banner_1_img']['name'];
        }
        $page->es_banner_1_text = $request->input('es_banner_1_text');
        $page->en_banner_1_text = $request->input('en_banner_1_text');

        //  SEGUNDO BANNER
        if($_FILES['banner_2_img']['size'] > 0) {
            $delete = false;
            if($page->banner_2_img) {
                $delete = true;
            }
            fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page->page_id.'/','banner_2_img',$delete, true,1920,2000,true, false);
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
            fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page->page_id.'/','banner_3_img',$delete, true,1920,2000,true, false);
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
            fileUploadController::videoUpload(public_path().'/uploads/pages/'.$page->page_id.'/videos/','video_banner',$delete);
        }
        $page->video_banner = $_FILES['video_banner']['name'];*/

        //  INFORMACIÓN
        if($_FILES['about_1_img']['size'] > 0) {
            $delete = false;
            if($page->about_1_img) {
                $delete = true;
            }
            fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page->page_id.'/','about_1_img',$delete, true,1920,2000,true, false);
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
            fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page->page_id.'/','about_2_img',$delete, true,1920,2000,true, false);
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
            fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page->page_id.'/','about_3_img',$delete, true,1920,2000,true, false);
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

    private function validateIndex(Request $request) {
        $this->validate($request, [
            'banner_1_img' => 'required|sometimes',
            'banner_2_img' => 'required|sometimes',
            'banner_3_img' => 'required|sometimes',
            'es_diamond_1_text' => 'required|max:255',
            'es_diamond_2_text' => 'required|max:255',
            'es_diamond_3_text' => 'required|max:255',
            'es_diamond_4_text' => 'required|max:255',
            'es_banner_2_text_1' => 'required|max:128',
            'es_banner_2_text_2' => 'required|max:128',
            'es_banner_3_text' => 'required|max:128',
            'banner_3_url' => 'required|max:255',
            'es_sites_title' => 'required|max:128',
            'es_sites_subtitle' => 'required|max:128',
            'es_blog_title' => 'required|max:128',
            'video_banner' => 'required|max:255',
            'about_1_img' => 'required|sometimes',
            'es_about_1_title' => 'required|max:128',
            'es_about_1_text' => 'required|max:512',
            'about_2_img' => 'required|sometimes',
            'es_about_2_title' => 'required|max:128',
            'es_about_2_text' => 'required|max:512',
            'about_3_img' => 'required|sometimes',
            'es_about_3_title' => 'required|max:128',
            'es_about_3_text' => 'required|max:512',
        ], [
            'required'  =>  ':attribute es obliogatorio.',
            'max'       =>  ':attribute, la máxima cantidad de caracteres permitida para el campo o el nombre de archivo es de :max',
        ], [
            'banner_1_img' => 'Banner principal',
            'banner_2_img' => 'Segundo banner',
            'banner_3_img' => 'Tercer banner',
            'es_diamond_1_text' => 'Texto de rombo 1',
            'es_diamond_2_text' => 'Texto de rombo 2',
            'es_diamond_3_text' => 'Texto de rombo 3',
            'es_diamond_4_text' => 'Texto de rombo 4',
            'es_banner_2_text_1' => 'Texto de segundo banner',
            'es_banner_2_text_2' => 'Texto de segundo banner',
            'es_banner_3_text' => 'Texto de tercer banner',
            'banner_3_url' => 'URL de tercer banner',
            'es_sites_title' => 'Título de direcciones',
            'es_sites_subtitle' => 'Subtítulo de direcciones',
            'es_blog_title' => 'Título de blog',
            'video_banner' => 'Video',
            'about_1_img' => 'Imagen 1 información',
            'es_about_1_title' => 'Título 1 información',
            'es_about_1_text' => 'Texto 1 información',
            'about_2_img' => 'Imagen 2 información',
            'es_about_2_title' => 'Título 2 información',
            'es_about_2_text' => 'Texto 2 información',
            'about_3_img' => 'Imagen 3 información',
            'es_about_3_title' => 'Título 3 información',
            'es_about_3_text' => 'Texto 3 información',
        ]);
    }

    private function validatePageMicro(Request $request) {
        $this->validate($request, [
            'es_diamond_1_text' => 'required|max:255',
            'es_page_about_title' => 'required|max:128',
            'es_page_about_text' => 'required|max:512',
            'es_about_1_title' => 'required|max:128',
            'es_about_1_text' => 'required|max:512',
            'about_1_img' => 'required|sometimes',
            'es_about_2_title' => 'required|max:128',
            'es_about_2_text' => 'required|max:512',
            'about_2_img' => 'required|sometimes',
            'es_about_3_title' => 'required|max:128',
            'es_about_3_text' => 'required|max:512',
            'about_3_img' => 'required|sometimes',
            'banner_2_img' => 'required|sometimes',
            'page_video_iframe' => 'required|max:512',
            'es_programs_title' => 'required|max:128',
            'es_program_1_title' => 'required|max:128',
            'program_1_img' => 'required|sometimes',
            'es_program_2_title' => 'required|max:128',
            'program_2_img' => 'required|sometimes',
            'es_program_3_title' => 'required|max:128',
            'program_3_img' => 'required|sometimes',
            'es_program_4_title' => 'required|max:128',
            'program_4_img' => 'required|sometimes',
            'banner_3_img' => 'required|sometimes',
            'es_programs_title_2' => 'required|max:128',
            'es_program_1_title_2' => 'required|max:128',
            'program_1_img_2' => 'required|sometimes',
            'es_program_2_title_2' => 'required|max:128',
            'program_2_img_2' => 'required|sometimes',
            'es_program_1_text' => 'required|max:512',
            'es_program_2_text' => 'required|max:512',
            'es_program_3_text' => 'required|max:512',
            'es_program_4_text' => 'required|max:512',
            'es_program_1_text_2' => 'required|max:512',
            'es_program_2_text_2' => 'required|max:512',
        ],[
            'required'  =>  ':attribute es obliogatorio.',
            'max'       =>  ':attribute, la máxima cantidad de caracteres permitida para el campo o el nombre de archivo es de :max',
        ],[
            'es_diamond_1_text' => 'Texto rombo',
            'es_page_about_title' => 'Título de Acerca de',
            'es_page_about_text' => 'Texto de Acerca de',
            'es_about_1_title' => 'Título 1 información',
            'es_about_1_text' => 'Texto 1 información',
            'about_1_img' => 'Imagen 1 información',
            'es_about_2_title' => 'Título 2 información',
            'es_about_2_text' => 'Texto 2 información',
            'about_2_img' => 'Imagen 2 información',
            'es_about_3_title' => 'Título 3 información',
            'es_about_3_text' => 'Texto 3 información',
            'about_3_img' => 'Imagen 3 información',
            'banner_2_img' => 'Segundo banner',
            'page_video_iframe' => 'Video',
            'es_programs_title' => 'Título Programas',
            'es_program_1_title' => 'Título 1 programa',
            'program_1_img' => 'Imagen 1 programa',
            'es_program_2_title' => 'Título 2 programa',
            'program_2_img' => 'Imagen 2 programa',
            'es_program_3_title' => 'Título 3 programa',
            'program_3_img' => 'Imagen 3 programa',
            'es_program_4_title' => 'Título 4 programa',
            'program_4_img' => 'Imagen 4 programa',
            'banner_3_img' => 'Tercer banner',
            'es_programs_title_2' => 'Títulos programas administrados',
            'es_program_1_title_2' => 'Título 1 programa admin.',
            'program_1_img_2' => 'Imagen 1 programa admin.',
            'es_program_2_title_2' => 'Título 2 programa admin.',
            'program_2_img_2' => 'Imagen 2 programa admin.',
            'es_program_1_text' => 'Texto 1 programa',
            'es_program_2_text' => 'Texto 2 programa',
            'es_program_3_text' => 'Texto 3 programa',
            'es_program_4_text' => 'Texto 4 programa',
            'es_program_1_text_2' => 'Texto 1 programa admin.',
            'es_program_2_text_2' => 'Texto 2 programa admin.',
        ]);
    }

    private function validatePageExternal(Request $request) {
        $this->validate($request, [
            'page_external_url' => 'required|max:512'
        ],[
            'required'  =>  ':attribute es obliogatorio.',
            'max'       =>  ':attribute, la máxima cantidad de caracteres permitida para el campo o el nombre de archivo es de :max',
        ],[
            'page_external_url' => 'URL del sitio externo'
        ]);
    }

    private function validateMainPageInfo(Request $request) {
        $this->validate($request, [
            'page_title' => 'required|max:255',
            'page_url' => 'page_url|sometimes',
        ],[
            'required'  =>  ':attribute es obliogatorio.',
            'max'       =>  ':attribute, la máxima cantidad de caracteres permitida para el campo o el nombre de archivo es de :max',
        ],[
            'page_title' => 'Nombre del sitio',
            'page_url' => 'URL del sitio',
        ]);
    }

    function pageExists($id) {
        $page = Page::find($id);

        if (!$page) {
            return abort('404');
        }

        return $page;
    }
}