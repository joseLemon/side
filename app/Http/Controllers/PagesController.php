<?php
namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Color;
use App\Models\Month;
use App\Models\Page;
use App\Models\PageCalendar;
use App\Models\PageCarousel;
use App\Models\PageExternal;
use App\Models\PageIndex;
use App\Models\PageMicro;
use App\Models\PageType;
use App\Models\Product;
use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        /*if($page_type_id == 2) {
            $this->validatePageMicro($request);
        } else if($page_type_id == 3) {
            $this->validatePageExternal($request);
        }*/

        $sequence = Page::where('sequence', '>', 0)->count()+1;

        $page = new Page();
        $page->page_title = $request->input('page_title');
        $page->color_id = $request->input('color');
        $page->page_url = $request->input('page_url');
        $page->page_type_id = $page_type_id;
        $page->sequence = $sequence;
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

        if($page_type_id >= 2 && $page_type_id != 3) {
            $page_id = $page->page_id;

            if($page_type_id == 2) {
                $page = new PageMicro();
            } else if($page_type_id == 4) {
                $page = new PageCarousel();
            } else if($page_type_id == 5) {
                $page = new PageMicro();
            }
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

            //  DIAMANTE 2
            $page->es_diamond_2_text = $request->input('es_diamond_2_text');
            $page->en_diamond_2_text = $request->input('en_diamond_2_text');
            $page->diamond_2_url = $request->input('diamond_2_url');

            //  DIAMANTE 3
            $page->es_diamond_3_text = $request->input('es_diamond_3_text');
            $page->en_diamond_3_text = $request->input('en_diamond_3_text');
            $page->diamond_3_url = $request->input('diamond_3_url');

            //  DIAMANTE 4
            $page->es_diamond_4_text = $request->input('es_diamond_4_text');
            $page->en_diamond_4_text = $request->input('en_diamond_4_text');
            $page->diamond_4_url = $request->input('diamond_4_url');

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

            if($page_type_id == 2 || $page_type_id == 5) {

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
                if($_FILES['file_program_1']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_1', false, true, true);
                    $page->file_program_1 = $_FILES['file_program_1']['name'];
                }

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
                if($_FILES['file_program_2']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_2', false, true, true);
                    $page->file_program_2 = $_FILES['file_program_2']['name'];
                }

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
                if($_FILES['file_program_3']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_3', false, true, true);
                    $page->file_program_3 = $_FILES['file_program_3']['name'];
                }

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
                if($_FILES['file_program_4']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_4', false, true, true);
                    $page->file_program_4 = $_FILES['file_program_4']['name'];
                }

                if($_FILES['program_5_img']['size'] > 0) {
                    $delete = false;
                    if($page->program_5_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_5_img',$delete, true,1920,2000,true, false);
                    $page->program_5_img = $_FILES['program_5_img']['name'];
                }
                $page->es_program_5_title = $request->input('es_program_5_title');
                $page->en_program_5_title = $request->input('en_program_5_title');
                $page->es_program_5_text = $request->input('es_program_5_text');
                $page->en_program_5_text = $request->input('en_program_5_text');
                if($_FILES['file_program_5']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_5', false, true, true);
                    $page->file_program_5 = $_FILES['file_program_5']['name'];
                }

                if($_FILES['program_6_img']['size'] > 0) {
                    $delete = false;
                    if($page->program_6_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_6_img',$delete, true,1920,2000,true, false);
                    $page->program_6_img = $_FILES['program_6_img']['name'];
                }
                $page->es_program_6_title = $request->input('es_program_6_title');
                $page->en_program_6_title = $request->input('en_program_6_title');
                $page->es_program_6_text = $request->input('es_program_6_text');
                $page->en_program_6_text = $request->input('en_program_6_text');
                if($_FILES['file_program_6']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_6', false, true, true);
                    $page->file_program_6 = $_FILES['file_program_6']['name'];
                }

                if($_FILES['program_7_img']['size'] > 0) {
                    $delete = false;
                    if($page->program_7_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_7_img',$delete, true,1920,2000,true, false);
                    $page->program_7_img = $_FILES['program_7_img']['name'];
                }
                $page->es_program_7_title = $request->input('es_program_7_title');
                $page->en_program_7_title = $request->input('en_program_7_title');
                $page->es_program_7_text = $request->input('es_program_7_text');
                $page->en_program_7_text = $request->input('en_program_7_text');
                if($_FILES['file_program_7']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_7', false, true, true);
                    $page->file_program_7 = $_FILES['file_program_7']['name'];
                }

                if($_FILES['program_8_img']['size'] > 0) {
                    $delete = false;
                    if($page->program_8_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_8_img',$delete, true,1920,2000,true, false);
                    $page->program_8_img = $_FILES['program_8_img']['name'];
                }
                $page->es_program_8_title = $request->input('es_program_8_title');
                $page->en_program_8_title = $request->input('en_program_8_title');
                $page->es_program_8_text = $request->input('es_program_8_text');
                $page->en_program_8_text = $request->input('en_program_8_text');
                if($_FILES['file_program_8']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_8', false, true, true);
                    $page->file_program_8 = $_FILES['file_program_8']['name'];
                }

                if($_FILES['program_9_img']['size'] > 0) {
                    $delete = false;
                    if($page->program_9_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_9_img',$delete, true,1920,2000,true, false);
                    $page->program_9_img = $_FILES['program_9_img']['name'];
                }
                $page->es_program_9_title = $request->input('es_program_9_title');
                $page->en_program_9_title = $request->input('en_program_9_title');
                $page->es_program_9_text = $request->input('es_program_9_text');
                $page->en_program_9_text = $request->input('en_program_9_text');
                if($_FILES['file_program_9']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_9', false, true, true);
                    $page->file_program_9 = $_FILES['file_program_9']['name'];
                }

                if($_FILES['program_10_img']['size'] > 0) {
                    $delete = false;
                    if($page->program_10_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_10_img',$delete, true,1920,2000,true, false);
                    $page->program_10_img = $_FILES['program_10_img']['name'];
                }
                $page->es_program_10_title = $request->input('es_program_10_title');
                $page->en_program_10_title = $request->input('en_program_10_title');
                $page->es_program_10_text = $request->input('es_program_10_text');
                $page->en_program_10_text = $request->input('en_program_10_text');
                if($_FILES['file_program_10']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_10', false, true, true);
                    $page->file_program_10 = $_FILES['file_program_10']['name'];
                }

                if($_FILES['program_11_img']['size'] > 0) {
                    $delete = false;
                    if($page->program_11_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_11_img',$delete, true,1920,2000,true, false);
                    $page->program_11_img = $_FILES['program_11_img']['name'];
                }
                $page->es_program_11_title = $request->input('es_program_11_title');
                $page->en_program_11_title = $request->input('en_program_11_title');
                $page->es_program_11_text = $request->input('es_program_11_text');
                $page->en_program_11_text = $request->input('en_program_11_text');
                if($_FILES['file_program_11']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_11', false, true, true);
                    $page->file_program_11 = $_FILES['file_program_11']['name'];
                }

                if($_FILES['program_12_img']['size'] > 0) {
                    $delete = false;
                    if($page->program_12_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_12_img',$delete, true,1920,2000,true, false);
                    $page->program_12_img = $_FILES['program_12_img']['name'];
                }
                $page->es_program_12_title = $request->input('es_program_12_title');
                $page->en_program_12_title = $request->input('en_program_12_title');
                $page->es_program_12_text = $request->input('es_program_12_text');
                $page->en_program_12_text = $request->input('en_program_12_text');
                if($_FILES['file_program_12']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_12', false, true, true);
                    $page->file_program_12 = $_FILES['file_program_12']['name'];
                }

                if($_FILES['program_13_img']['size'] > 0) {
                    $delete = false;
                    if($page->program_13_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_13_img',$delete, true,1920,2000,true, false);
                    $page->program_13_img = $_FILES['program_13_img']['name'];
                }
                $page->es_program_13_title = $request->input('es_program_13_title');
                $page->en_program_13_title = $request->input('en_program_13_title');
                $page->es_program_13_text = $request->input('es_program_13_text');
                $page->en_program_13_text = $request->input('en_program_13_text');
                if($_FILES['file_program_13']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_13', false, true, true);
                    $page->file_program_13 = $_FILES['file_program_13']['name'];
                }

                if($_FILES['program_14_img']['size'] > 0) {
                    $delete = false;
                    if($page->program_14_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_14_img',$delete, true,1920,2000,true, false);
                    $page->program_14_img = $_FILES['program_14_img']['name'];
                }
                $page->es_program_14_title = $request->input('es_program_14_title');
                $page->en_program_14_title = $request->input('en_program_14_title');
                $page->es_program_14_text = $request->input('es_program_14_text');
                $page->en_program_14_text = $request->input('en_program_14_text');
                if($_FILES['file_program_14']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_14', false, true, true);
                    $page->file_program_14 = $_FILES['file_program_14']['name'];
                }

                if($_FILES['program_15_img']['size'] > 0) {
                    $delete = false;
                    if($page->program_15_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_15_img',$delete, true,1920,2000,true, false);
                    $page->program_15_img = $_FILES['program_15_img']['name'];
                }
                $page->es_program_15_title = $request->input('es_program_15_title');
                $page->en_program_15_title = $request->input('en_program_15_title');
                $page->es_program_15_text = $request->input('es_program_15_text');
                $page->en_program_15_text = $request->input('en_program_15_text');
                if($_FILES['file_program_15']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_15', false, true, true);
                    $page->file_program_15 = $_FILES['file_program_15']['name'];
                }

                if($_FILES['program_16_img']['size'] > 0) {
                    $delete = false;
                    if($page->program_16_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_16_img',$delete, true,1920,2000,true, false);
                    $page->program_16_img = $_FILES['program_16_img']['name'];
                }
                $page->es_program_16_title = $request->input('es_program_16_title');
                $page->en_program_16_title = $request->input('en_program_16_title');
                $page->es_program_16_text = $request->input('es_program_16_text');
                $page->en_program_16_text = $request->input('en_program_16_text');
                if($_FILES['file_program_16']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_16', false, true, true);
                    $page->file_program_16 = $_FILES['file_program_16']['name'];
                }

                //  TERCER BANNER
                /*if($_FILES['banner_3_img']['size'] > 0) {
                    $delete = false;
                    if($page->banner_3_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','banner_3_img',$delete, true,1920,2000,true, false);
                    $page->banner_3_img = $_FILES['banner_3_img']['name'];
                }*/

                /*//  PROGRAMAS ADMINISTRADOS
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
                if($_FILES['file_program_1_2']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_1_2', false, true, true);
                    $page->file_program_1_2 = $_FILES['file_program_1_2']['name'];
                }

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
                if($_FILES['file_program_2_2']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_2_2', false, true, true);
                    $page->file_program_2_2 = $_FILES['file_program_2_2']['name'];
                }*/

            } else if($page_type_id == 4) {
                $products = $request->input('products');
                foreach($products as $iterationId => $product) {
                    $productArray = explode('_@@_', $product);
                    $carousel_id = $productArray[1];
                    if($carousel_id == 'new') {
                        $carousel = new Carousel();
                    } else {
                        $carousel = Carousel::find($carousel_id);
                    }
                    $carousel_title = $productArray[0];
                    $carousel->carousel_title = $carousel_title;
                    $carousel->page_id = $page->page_id;
                    $carousel->save();

                    foreach ($productArray as $metaId => $meta) {
                        if($metaId == 0 || $metaId == 1) {
                            continue;
                        } else {
                            $productItem = explode('_%%_', $meta);
                            $product_id = $productItem[2];

                            if($product_id == 'new') {
                                $product = new Product();
                            } else if($product_id != null) {
                                $product = Product::find($product_id);
                            }

                            $product->carousel_id = $carousel->carousel_id;
                            $product->product_title = $productItem[0];
                            $product->product_text = $productItem[1];
                            $img_file = 'product_'.($iterationId+1).'-'.($metaId-1).'_img';
                            if(isset($_FILES[$img_file])) {
                                if($_FILES[$img_file]['size'] > 0) {
                                    $delete = false;
                                    if($product->product_img) {
                                        $delete = true;
                                    }
                                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/products/',$img_file,$delete, true,1920,2000,false, false);
                                    $product->product_img = $_FILES[$img_file]['name'];
                                }
                            }
                            $product->save();
                        }
                    }
                }
            }
            if($page_type_id == 5) {
                $years = $request->input('year');
                $yearIDs = $request->input('yearid');
                foreach ($years as $year) {
                    if(empty($year)) {
                        return redirect()->back()->withErrors(['El nombre de los Años es obligatorio.']);
                    }
                }
                foreach ($years as $key => $newYear) {
                    $yearID = $yearIDs[$key];
                    if($yearID != 'new') {
                        $year = Year::find($yearID);
                    } else {
                        $year = new Year();
                    }
                    $year->page_id = $page->page_id;
                    $year->year_name = $newYear;
                    $year->save();

                    if($yearID != 'new') {
                        $month = Month::where('year_id',$yearID)
                            ->where('month_number',1)
                            ->first();
                    } else {
                        $month = new Month();
                        $month->month_number = 1;
                        $month->year_id = $year->year_id;
                    }
                    if($_FILES['january']['size'][$key] > 0) {
                        $delete = false;
                        if($month->month_file) {
                            $delete = true;
                        }
                        fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page->page_id.'/','january', $delete, true, false,true,$key);
                        $month->month_file = $_FILES['january']['name'][$key];
                    }
                    $month->save();
                    if($yearID != 'new') {
                        $month = Month::where('year_id',$yearID)
                            ->where('month_number',2)
                            ->first();
                    } else {
                        $month = new Month();
                        $month->month_number = 2;
                        $month->year_id = $year->year_id;
                    }
                    if($_FILES['february']['size'][$key] > 0) {
                        $delete = false;
                        if($month->month_file) {
                            $delete = true;
                        }
                        fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page->page_id.'/','february', $delete, true, false,true,$key);
                        $month->month_file = $_FILES['february']['name'][$key];
                    }
                    $month->save();
                    if($yearID != 'new') {
                        $month = Month::where('year_id',$yearID)
                            ->where('month_number',3)
                            ->first();
                    } else {
                        $month = new Month();
                        $month->month_number = 3;
                        $month->year_id = $year->year_id;
                    }
                    if($_FILES['march']['size'][$key] > 0) {
                        $delete = false;
                        if($month->month_file) {
                            $delete = true;
                        }
                        fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page->page_id.'/','march', $delete, true, false,true,$key);
                        $month->month_file = $_FILES['march']['name'][$key];
                    }
                    $month->save();
                    if($yearID != 'new') {
                        $month = Month::where('year_id',$yearID)
                            ->where('month_number',4)
                            ->first();
                    } else {
                        $month = new Month();
                        $month->month_number = 4;
                        $month->year_id = $year->year_id;
                    }
                    if($_FILES['april']['size'][$key] > 0) {
                        $delete = false;
                        if($month->month_file) {
                            $delete = true;
                        }
                        fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page->page_id.'/','april', $delete, true, false,true,$key);
                        $month->month_file = $_FILES['april']['name'][$key];
                    }
                    $month->save();
                    if($yearID != 'new') {
                        $month = Month::where('year_id',$yearID)
                            ->where('month_number',5)
                            ->first();
                    } else {
                        $month = new Month();
                        $month->month_number = 5;
                        $month->year_id = $year->year_id;
                    }
                    if($_FILES['may']['size'][$key] > 0) {
                        $delete = false;
                        if($month->month_file) {
                            $delete = true;
                        }
                        fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page->page_id.'/','may', $delete, true, false,true,$key);
                        $month->month_file = $_FILES['may']['name'][$key];
                    }
                    $month->save();
                    if($yearID != 'new') {
                        $month = Month::where('year_id',$yearID)
                            ->where('month_number',6)
                            ->first();
                    } else {
                        $month = new Month();
                        $month->month_number = 6;
                        $month->year_id = $year->year_id;
                    }
                    if($_FILES['june']['size'][$key] > 0) {
                        $delete = false;
                        if($month->month_file) {
                            $delete = true;
                        }
                        fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page->page_id.'/','june', $delete, true, false,true,$key);
                        $month->month_file = $_FILES['june']['name'][$key];
                    }
                    $month->save();
                    if($yearID != 'new') {
                        $month = Month::where('year_id',$yearID)
                            ->where('month_number',7)
                            ->first();
                    } else {
                        $month = new Month();
                        $month->month_number = 7;
                        $month->year_id = $year->year_id;
                    }
                    if($_FILES['july']['size'][$key] > 0) {
                        $delete = false;
                        if($month->month_file) {
                            $delete = true;
                        }
                        fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page->page_id.'/','july', $delete, true, false,true,$key);
                        $month->month_file = $_FILES['july']['name'][$key];
                    }
                    $month->save();
                    if($yearID != 'new') {
                        $month = Month::where('year_id',$yearID)
                            ->where('month_number',8)
                            ->first();
                    } else {
                        $month = new Month();
                        $month->month_number = 8;
                        $month->year_id = $year->year_id;
                    }
                    if($_FILES['august']['size'][$key] > 0) {
                        $delete = false;
                        if($month->month_file) {
                            $delete = true;
                        }
                        fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page->page_id.'/','august', $delete, true, false,true,$key);
                        $month->month_file = $_FILES['august']['name'][$key];
                    }
                    $month->save();
                    if($yearID != 'new') {
                        $month = Month::where('year_id',$yearID)
                            ->where('month_number',9)
                            ->first();
                    } else {
                        $month = new Month();
                        $month->month_number = 9;
                        $month->year_id = $year->year_id;
                    }
                    if($_FILES['september']['size'][$key] > 0) {
                        $delete = false;
                        if($month->month_file) {
                            $delete = true;
                        }
                        fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page->page_id.'/','september', $delete, true, false,true,$key);
                        $month->month_file = $_FILES['september']['name'][$key];
                    }
                    $month->save();
                    if($yearID != 'new') {
                        $month = Month::where('year_id',$yearID)
                            ->where('month_number',10)
                            ->first();
                    } else {
                        $month = new Month();
                        $month->month_number = 10;
                        $month->year_id = $year->year_id;
                    }
                    if($_FILES['october']['size'][$key] > 0) {
                        $delete = false;
                        if($month->month_file) {
                            $delete = true;
                        }
                        fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page->page_id.'/','october', $delete, true, false,true,$key);
                        $month->month_file = $_FILES['october']['name'][$key];
                    }
                    $month->save();
                    if($yearID != 'new') {
                        $month = Month::where('year_id',$yearID)
                            ->where('month_number',11)
                            ->first();
                    } else {
                        $month = new Month();
                        $month->month_number = 11;
                        $month->year_id = $year->year_id;
                    }
                    if($_FILES['november']['size'][$key] > 0) {
                        $delete = false;
                        if($month->month_file) {
                            $delete = true;
                        }
                        fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page->page_id.'/','november', $delete, true, false,true,$key);
                        $month->month_file = $_FILES['november']['name'][$key];
                    }
                    $month->save();
                    if($yearID != 'new') {
                        $month = Month::where('year_id',$yearID)
                            ->where('month_number',12)
                            ->first();
                    } else {
                        $month = new Month();
                        $month->month_number = 12;
                        $month->year_id = $year->year_id;
                    }
                    if($_FILES['december']['size'][$key] > 0) {
                        $delete = false;
                        if($month->month_file) {
                            $delete = true;
                        }
                        fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page->page_id.'/','december', $delete, true, false,true,$key);
                        $month->month_file = $_FILES['december']['name'][$key];
                    }
                    $month->save();
                }
            }
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
        $getAll = $request->input('getAll', false);

        $date = date('Y-m-d', strtotime(str_replace('/', '-', $search)));
        if($date == '1970-01-01') {
            $date = $search;
        }

        if($getAll) {
            $pages = Page::select([
                'pages.page_id',
                'page_title',
                'page_url',
                'page_img',
                'color_slug',
                'pages.created_at as page_date',
                'page_type_id as page_type',
                'page_external_url'
            ])
                ->join('colors','colors.color_id','=','pages.color_id')
                ->leftJoin('pages_external','pages_external.page_id','=','pages.page_id')
                ->groupBy('pages.page_id')
                ->orderBy('pages.sequence');
        } else {
            $pages = Page::select([
                'page_id',
                'page_title',
                'created_at as page_date',
                'page_type_id as page_type',
                'sequence'
            ])
                ->orderBy('pages.sequence');
        }

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

        if($getAll) {
            $query = $pages->get();
        } else {
            $query = $pages->paginate($paginate);
        }

        setlocale(LC_ALL,"es_MX","es_Mx","esp");
        foreach($query as $q) {
            $date = \DateTime::createFromFormat('Y-m-d H:i:s', $q->page_date);
            $q->page_date = ucfirst(strftime("%B %d, %y",$date->getTimestamp()));
        }

        return $query;
    }

    public static function searchPages(Request $request) {
        $search = $request->input('search','');
        $paginate = $request->input('paginate',15);
        $page = $request->input('page',1);
        $except = $request->input('except',1);
        $lang = $request->input('lang','es');

        $searchTerms = explode(' ', $search);
        $searchTermBits = [];
        foreach ($searchTerms as $term) {
            $term = trim($term);
            if (!empty($term)) {
                if($lang == 'es') {
                    $searchTermBits[] = "page_title LIKE \"%$term%\"".
                        " OR pages_micro.es_diamond_1_text LIKE \"%$term%\"".
                        " OR pages_micro.es_page_about_title LIKE \"%$term%\"".
                        " OR pages_micro.es_page_about_text LIKE \"%$term%\"".
                        " OR pages_micro.es_about_1_title LIKE \"%$term%\"".
                        " OR pages_micro.es_about_1_text LIKE \"%$term%\"".
                        " OR pages_micro.es_about_2_title LIKE \"%$term%\"".
                        " OR pages_micro.es_about_2_text LIKE \"%$term%\"".
                        " OR pages_micro.es_about_3_title LIKE \"%$term%\"".
                        " OR pages_micro.es_about_3_text LIKE \"%$term%\"".
                        " OR pages_micro.es_programs_title LIKE \"%$term%\"".
                        " OR pages_micro.es_program_1_title LIKE \"%$term%\"".
                        " OR pages_micro.es_program_1_text LIKE \"%$term%\"".
                        " OR pages_micro.es_program_2_title LIKE \"%$term%\"".
                        " OR pages_micro.es_program_2_text LIKE \"%$term%\"".
                        " OR pages_micro.es_program_3_title LIKE \"%$term%\"".
                        " OR pages_micro.es_program_3_text LIKE \"%$term%\"".
                        " OR pages_micro.es_program_4_title LIKE \"%$term%\"".
                        " OR pages_micro.es_program_4_text LIKE \"%$term%\"".
                        " OR pages_micro.es_program_5_title LIKE \"%$term%\"".
                        " OR pages_micro.es_program_5_text LIKE \"%$term%\"".
                        " OR pages_micro.es_program_6_title LIKE \"%$term%\"".
                        " OR pages_micro.es_program_6_text LIKE \"%$term%\"".
                        " OR pages_micro.es_program_7_title LIKE \"%$term%\"".
                        " OR pages_micro.es_program_7_text LIKE \"%$term%\"".
                        " OR pages_micro.es_program_8_title LIKE \"%$term%\"".
                        " OR pages_micro.es_program_8_text LIKE \"%$term%\"".
                        " OR pages_micro.es_program_9_title LIKE \"%$term%\"".
                        " OR pages_micro.es_program_9_text LIKE \"%$term%\"".
                        " OR pages_micro.es_program_10_title LIKE \"%$term%\"".
                        " OR pages_micro.es_program_10_text LIKE \"%$term%\"".
                        " OR pages_micro.es_program_11_title LIKE \"%$term%\"".
                        " OR pages_micro.es_program_11_text LIKE \"%$term%\"".
                        " OR pages_micro.es_program_12_title LIKE \"%$term%\"".
                        " OR pages_micro.es_program_12_text LIKE \"%$term%\"".
                        " OR pages_micro.es_program_13_title LIKE \"%$term%\"".
                        " OR pages_micro.es_program_13_text LIKE \"%$term%\"".
                        " OR pages_micro.es_program_14_title LIKE \"%$term%\"".
                        " OR pages_micro.es_program_14_text LIKE \"%$term%\"".
                        " OR pages_micro.es_program_15_title LIKE \"%$term%\"".
                        " OR pages_micro.es_program_15_text LIKE \"%$term%\"".
                        " OR pages_micro.es_program_16_title LIKE \"%$term%\"".
                        " OR pages_micro.es_program_16_text LIKE \"%$term%\"".
                        " OR pages_carousel.es_diamond_1_text LIKE \"%$term%\"".
                        " OR pages_carousel.es_page_about_title LIKE \"%$term%\"".
                        " OR pages_carousel.es_page_about_text LIKE \"%$term%\"".
                        " OR pages_carousel.es_about_1_title LIKE \"%$term%\"".
                        " OR pages_carousel.es_about_1_text LIKE \"%$term%\"".
                        " OR pages_carousel.es_about_2_title LIKE \"%$term%\"".
                        " OR pages_carousel.es_about_2_text LIKE \"%$term%\"".
                        " OR pages_carousel.es_about_3_title LIKE \"%$term%\"".
                        " OR pages_carousel.es_about_3_text LIKE \"%$term%\"";
                } else if($lang == 'en') {
                    $searchTermBits[] = "page_title LIKE \"%$term%\"".
                        " OR pages_micro.en_diamond_1_text LIKE \"%$term%\"".
                        " OR pages_micro.en_page_about_title LIKE \"%$term%\"".
                        " OR pages_micro.en_page_about_text LIKE \"%$term%\"".
                        " OR pages_micro.en_about_1_title LIKE \"%$term%\"".
                        " OR pages_micro.en_about_1_text LIKE \"%$term%\"".
                        " OR pages_micro.en_about_2_title LIKE \"%$term%\"".
                        " OR pages_micro.en_about_2_text LIKE \"%$term%\"".
                        " OR pages_micro.en_about_3_title LIKE \"%$term%\"".
                        " OR pages_micro.en_about_3_text LIKE \"%$term%\"".
                        " OR pages_micro.en_programs_title LIKE \"%$term%\"".
                        " OR pages_micro.en_program_1_title LIKE \"%$term%\"".
                        " OR pages_micro.en_program_1_text LIKE \"%$term%\"".
                        " OR pages_micro.en_program_2_title LIKE \"%$term%\"".
                        " OR pages_micro.en_program_2_text LIKE \"%$term%\"".
                        " OR pages_micro.en_program_3_title LIKE \"%$term%\"".
                        " OR pages_micro.en_program_3_text LIKE \"%$term%\"".
                        " OR pages_micro.en_program_4_title LIKE \"%$term%\"".
                        " OR pages_micro.en_program_4_text LIKE \"%$term%\"".
                        " OR pages_micro.en_program_5_title LIKE \"%$term%\"".
                        " OR pages_micro.en_program_5_text LIKE \"%$term%\"".
                        " OR pages_micro.en_program_6_title LIKE \"%$term%\"".
                        " OR pages_micro.en_program_6_text LIKE \"%$term%\"".
                        " OR pages_micro.en_program_7_title LIKE \"%$term%\"".
                        " OR pages_micro.en_program_7_text LIKE \"%$term%\"".
                        " OR pages_micro.en_program_8_title LIKE \"%$term%\"".
                        " OR pages_micro.en_program_8_text LIKE \"%$term%\"".
                        " OR pages_micro.en_program_9_title LIKE \"%$term%\"".
                        " OR pages_micro.en_program_9_text LIKE \"%$term%\"".
                        " OR pages_micro.en_program_10_title LIKE \"%$term%\"".
                        " OR pages_micro.en_program_10_text LIKE \"%$term%\"".
                        " OR pages_micro.en_program_11_title LIKE \"%$term%\"".
                        " OR pages_micro.en_program_11_text LIKE \"%$term%\"".
                        " OR pages_micro.en_program_12_title LIKE \"%$term%\"".
                        " OR pages_micro.en_program_12_text LIKE \"%$term%\"".
                        " OR pages_micro.en_program_13_title LIKE \"%$term%\"".
                        " OR pages_micro.en_program_13_text LIKE \"%$term%\"".
                        " OR pages_micro.en_program_14_title LIKE \"%$term%\"".
                        " OR pages_micro.en_program_14_text LIKE \"%$term%\"".
                        " OR pages_micro.en_program_15_title LIKE \"%$term%\"".
                        " OR pages_micro.en_program_15_text LIKE \"%$term%\"".
                        " OR pages_micro.en_program_16_title LIKE \"%$term%\"".
                        " OR pages_micro.en_program_16_text LIKE \"%$term%\"".
                        " OR pages_carousel.en_diamond_1_text LIKE \"%$term%\"".
                        " OR pages_carousel.en_page_about_title LIKE \"%$term%\"".
                        " OR pages_carousel.en_page_about_text LIKE \"%$term%\"".
                        " OR pages_carousel.en_about_1_title LIKE \"%$term%\"".
                        " OR pages_carousel.en_about_1_text LIKE \"%$term%\"".
                        " OR pages_carousel.en_about_2_title LIKE \"%$term%\"".
                        " OR pages_carousel.en_about_2_text LIKE \"%$term%\"".
                        " OR pages_carousel.en_about_3_title LIKE \"%$term%\"".
                        " OR pages_carousel.en_about_3_text LIKE \"%$term%\"";
                }
            }
        }

        $pages = Page::select([
            'page_title',
            'page_url',
            'page_external_url'
        ])
            ->leftJoin('pages_external','pages_external.page_id','=','pages.page_id')
            ->leftJoin('pages_micro','pages_micro.page_id','=','pages.page_id')
            ->leftJoin('pages_carousel','pages_carousel.page_id','=','pages.page_id')
            ->groupBy('pages.page_id')
            ->orderBy('pages.sequence');

        if(!empty($searchTermBits)) {
            $pages->whereRaw("(" . implode(' AND ',$searchTermBits) . ")");
        }

        if($except != '') {
            $pages->where('page_type_id','!=',$except);
        }

        //$query = $pages->get();
        $query = $pages->offset(($page-1))
            ->limit($paginate)
            ->get();

        $data = [];
        foreach($query as $q) {
            $url = $q->page_url;
            if(!$url) {
                $url = url($q->page_external_url);
            }
            $data[] = [
                'id' => $url,
                'text' => $q->page_title
            ];
        }
        $dataCount = count($query);
        $pagination = true;
        if($dataCount < $paginate) {
            $pagination = false;
        }

        $results = [
            'results' => $data,
            'pagination' => $pagination
        ];

        return $results;
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
        if(Auth::user()->user_role_id != 1) {
            $page_id = Auth::user()->page_id;
            if($page_id) {
                if($page_id != $id) {
                    return redirect()->route('page.edit',[$page_id]);
                }
            } else {
                // return custom error page
                return abort(403);
            }
        }

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

        if($page->page_type_id >= 2) {

            if($page->page_type_id == 2) {
                $page->micro = $page->micro()->first();
            }

            if($page->page_type_id == 3) {
                $page->external = $page->external()->first();
            }

            if($page->page_type_id == 4) {
                $page->micro = $page->carousel()->first();
                $carousels = Carousel::where('page_id',$page->page_id)
                    ->get();
                $params['carousels'] = $carousels;

                foreach ($carousels as $id => $carousel) {
                    $carousels[$id]->products;
                }
            }

            if($page->page_type_id == 5) {
                $page->micro = $page->micro()->first();
                $years = Year::where('page_id',$page->page_id)
                    ->get();
                $params['years'] = $years;

                foreach ($years as $id => $year) {
                    $years[$id]->months;
                }
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

            /* if($page->page_type_id == 2) {
                 $this->validatePageMicro($request);
             } else if($page->page_type_id == 3) {
                 $this->validatePageExternal($request);
             }*/

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
        if($request->input('page_img_check') == 'removed') {
            fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page->page_id.'/','page_img'.strchr($page->page_img,'.'));
            $page->page_img = \DB::raw('NULL');
        }
        $page->save();

        $page_type_id = $page->page_type_id;

        if($page_type_id >= 2 && $page_type_id != 3) {

            $page_id = $page->page_id;

            if($page_type_id == 2) {
                $page = PageMicro::where('page_id', $id)
                    ->first();
            } else if($page_type_id == 4) {
                $page = PageCarousel::where('page_id', $id)
                    ->first();
            } else if($page_type_id == 5) {
                $page = PageMicro::where('page_id', $id)
                    ->first();
            }

            if($_FILES['banner_1_img']['size'] > 0) {
                $delete = false;
                if($page->banner_1_img) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','banner_1_img',$delete, true,1920,2000,true, false);
                $page->banner_1_img = $_FILES['banner_1_img']['name'];
            }
            if($request->input('banner_1_img_check') == 'removed') {
                fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/','banner_1_img'.strchr($page->banner_1_img,'.'));
                $page->banner_1_img = \DB::raw('NULL');
            }

            //  DIAMANTE 1
            $page->es_diamond_1_text = $request->input('es_diamond_1_text');
            $page->en_diamond_1_text = $request->input('en_diamond_1_text');
            $page->diamond_1_url = $request->input('diamond_1_url');

            //  DIAMANTE 2
            $page->es_diamond_2_text = $request->input('es_diamond_2_text');
            $page->en_diamond_2_text = $request->input('en_diamond_2_text');
            $page->diamond_2_url = $request->input('diamond_2_url');

            //  DIAMANTE 3
            $page->es_diamond_3_text = $request->input('es_diamond_3_text');
            $page->en_diamond_3_text = $request->input('en_diamond_3_text');
            $page->diamond_3_url = $request->input('diamond_3_url');

            //  DIAMANTE 4
            $page->es_diamond_4_text = $request->input('es_diamond_4_text');
            $page->en_diamond_4_text = $request->input('en_diamond_4_text');
            $page->diamond_4_url = $request->input('diamond_4_url');

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
            if($request->input('state_about_1_check') == 'removed') {
                fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/','about_1_img'.strchr($page->about_1_img,'.'));
                $page->about_1_img = \DB::raw('NULL');
            }

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
            if($request->input('state_about_2_check') == 'removed') {
                fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/','about_2_img'.strchr($page->about_2_img,'.'));
                $page->about_2_img = \DB::raw('NULL');
            }

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
            if($request->input('state_about_3_check') == 'removed') {
                fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/','about_3_img'.strchr($page->about_3_img,'.'));
                $page->about_3_img = \DB::raw('NULL');
            }

            //  SEGUNDO BANNER/VIDEO
            if($_FILES['banner_2_img']['size'] > 0) {
                $delete = false;
                if($page->banner_2_img) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','banner_2_img',$delete, true,1920,2000,true, false);
                $page->banner_2_img = $_FILES['banner_2_img']['name'];
            }
            if($request->input('banner_2_img_check') == 'removed') {
                fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/','banner_2_img'.strchr($page->banner_2_img,'.'));
                $page->banner_2_img = \DB::raw('NULL');
            }
            $page->page_video_iframe = $request->input('page_video_iframe');

            if($page_type_id == 2 || $page_type_id == 5) {

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
                if($request->input('state_program_1_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/','program_1_img'.strchr($page->program_1_img,'.'));
                    $page->program_1_img = \DB::raw('NULL');
                }
                $page->es_program_1_title = $request->input('es_program_1_title');
                $page->en_program_1_title = $request->input('en_program_1_title');
                $page->es_program_1_text = $request->input('es_program_1_text');
                $page->en_program_1_text = $request->input('en_program_1_text');
                if($_FILES['file_program_1']['size'] > 0) {
                    fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page_id.'/','file_program_1',false,true,true);
                    $page->file_program_1 = $_FILES['file_program_1']['name'];
                }
                // DELETE FILE
                if($request->input('state_file_program_1_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/',$page->file_program_1);
                    $page->file_program_1 = \DB::raw('NULL');
                }

                if($_FILES['program_2_img']['size'] > 0) {
                    $delete = false;
                    if($page->program_2_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_2_img',$delete, true,1920,2000,true, false);
                    $page->program_2_img = $_FILES['program_2_img']['name'];
                }
                if($request->input('state_program_2_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/','program_2_img'.strchr($page->program_2_img,'.'));
                    $page->program_2_img = \DB::raw('NULL');
                }
                $page->es_program_2_title = $request->input('es_program_2_title');
                $page->en_program_2_title = $request->input('en_program_2_title');
                $page->es_program_2_text = $request->input('es_program_2_text');
                $page->en_program_2_text = $request->input('en_program_2_text');
                if($_FILES['file_program_2']['size'] > 0) {
                    fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page_id.'/','file_program_2',false,true,true);
                    $page->file_program_2 = $_FILES['file_program_2']['name'];
                }
                // DELETE FILE
                if($request->input('state_file_program_2_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/',$page->file_program_2);
                    $page->file_program_2 = \DB::raw('NULL');
                }

                if($_FILES['program_3_img']['size'] > 0) {
                    $delete = false;
                    if($page->program_3_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_3_img',$delete, true,1920,2000,true, false);
                    $page->program_3_img = $_FILES['program_3_img']['name'];
                }
                if($request->input('state_program_3_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/','program_3_img'.strchr($page->program_3_img,'.'));
                    $page->program_3_img = \DB::raw('NULL');
                }
                $page->es_program_3_title = $request->input('es_program_3_title');
                $page->en_program_3_title = $request->input('en_program_3_title');
                $page->es_program_3_text = $request->input('es_program_3_text');
                $page->en_program_3_text = $request->input('en_program_3_text');
                if($_FILES['file_program_3']['size'] > 0) {
                    fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page_id.'/','file_program_3',false,true,true);
                    $page->file_program_3 = $_FILES['file_program_3']['name'];
                }
                // DELETE FILE
                if($request->input('state_file_program_3_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/',$page->file_program_3);
                    $page->file_program_3 = \DB::raw('NULL');
                }

                if($_FILES['program_4_img']['size'] > 0) {
                    $delete = false;
                    if($page->program_4_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_4_img',$delete, true,1920,2000,true, false);
                    $page->program_4_img = $_FILES['program_4_img']['name'];
                }
                if($request->input('state_program_4_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/','program_4_img'.strchr($page->program_4_img,'.'));
                    $page->program_4_img = \DB::raw('NULL');
                }
                $page->es_program_4_title = $request->input('es_program_4_title');
                $page->en_program_4_title = $request->input('en_program_4_title');
                $page->es_program_4_text = $request->input('es_program_4_text');
                $page->en_program_4_text = $request->input('en_program_4_text');
                if($_FILES['file_program_4']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_4', false, true, true);
                    $page->file_program_4 = $_FILES['file_program_4']['name'];
                }
                // DELETE FILE
                if($request->input('state_file_program_4_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/',$page->file_program_4);
                    $page->file_program_4 = \DB::raw('NULL');
                }

                if($_FILES['program_5_img']['size'] > 0) {
                    $delete = false;
                    if($page->program_5_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_5_img',$delete, true,1920,2000,true, false);
                    $page->program_5_img = $_FILES['program_5_img']['name'];
                }
                if($request->input('state_program_5_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/','program_5_img'.strchr($page->program_5_img,'.'));
                    $page->program_5_img = \DB::raw('NULL');
                }
                $page->es_program_5_title = $request->input('es_program_5_title');
                $page->en_program_5_title = $request->input('en_program_5_title');
                $page->es_program_5_text = $request->input('es_program_5_text');
                $page->en_program_5_text = $request->input('en_program_5_text');
                if($_FILES['file_program_5']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_5', false, true, true);
                    $page->file_program_5 = $_FILES['file_program_5']['name'];
                }
                // DELETE FILE
                if($request->input('state_file_program_5_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/',$page->file_program_5);
                    $page->file_program_5 = \DB::raw('NULL');
                }

                if($_FILES['program_6_img']['size'] > 0) {
                    $delete = false;
                    if($page->program_6_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_6_img',$delete, true,1920,2000,true, false);
                    $page->program_6_img = $_FILES['program_6_img']['name'];
                }
                if($request->input('state_program_6_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/','program_6_img'.strchr($page->program_6_img,'.'));
                    $page->program_6_img = \DB::raw('NULL');
                }
                $page->es_program_6_title = $request->input('es_program_6_title');
                $page->en_program_6_title = $request->input('en_program_6_title');
                $page->es_program_6_text = $request->input('es_program_6_text');
                $page->en_program_6_text = $request->input('en_program_6_text');
                if($_FILES['file_program_6']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_6', false, true, true);
                    $page->file_program_6 = $_FILES['file_program_6']['name'];
                }
                // DELETE FILE
                if($request->input('state_file_program_6_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/',$page->file_program_6);
                    $page->file_program_6 = \DB::raw('NULL');
                }

                if($_FILES['program_7_img']['size'] > 0) {
                    $delete = false;
                    if($page->program_7_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_7_img',$delete, true,1920,2000,true, false);
                    $page->program_7_img = $_FILES['program_7_img']['name'];
                }
                if($request->input('state_program_7_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/','program_7_img'.strchr($page->program_7_img,'.'));
                    $page->program_7_img = \DB::raw('NULL');
                }
                $page->es_program_7_title = $request->input('es_program_7_title');
                $page->en_program_7_title = $request->input('en_program_7_title');
                $page->es_program_7_text = $request->input('es_program_7_text');
                $page->en_program_7_text = $request->input('en_program_7_text');
                if($_FILES['file_program_7']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_7', false, true, true);
                    $page->file_program_7 = $_FILES['file_program_7']['name'];
                }
                // DELETE FILE
                if($request->input('state_file_program_7_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/',$page->file_program_7);
                    $page->file_program_7 = \DB::raw('NULL');
                }

                if($_FILES['program_8_img']['size'] > 0) {
                    $delete = false;
                    if($page->program_8_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_8_img',$delete, true,1920,2000,true, false);
                    $page->program_8_img = $_FILES['program_8_img']['name'];
                }
                if($request->input('state_program_8_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/','program_8_img'.strchr($page->program_8_img,'.'));
                    $page->program_8_img = \DB::raw('NULL');
                }
                $page->es_program_8_title = $request->input('es_program_8_title');
                $page->en_program_8_title = $request->input('en_program_8_title');
                $page->es_program_8_text = $request->input('es_program_8_text');
                $page->en_program_8_text = $request->input('en_program_8_text');
                if($_FILES['file_program_8']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_8', false, true, true);
                    $page->file_program_8 = $_FILES['file_program_8']['name'];
                }
                // DELETE FILE
                if($request->input('state_file_program_8_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/',$page->file_program_8);
                    $page->file_program_8 = \DB::raw('NULL');
                }

                if($_FILES['program_9_img']['size'] > 0) {
                    $delete = false;
                    if($page->program_9_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_9_img',$delete, true,1920,2000,true, false);
                    $page->program_9_img = $_FILES['program_9_img']['name'];
                }
                if($request->input('state_program_9_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/','program_9_img'.strchr($page->program_9_img,'.'));
                    $page->program_9_img = \DB::raw('NULL');
                }
                $page->es_program_9_title = $request->input('es_program_9_title');
                $page->en_program_9_title = $request->input('en_program_9_title');
                $page->es_program_9_text = $request->input('es_program_9_text');
                $page->en_program_9_text = $request->input('en_program_9_text');
                if($_FILES['file_program_9']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_9', false, true, true);
                    $page->file_program_9 = $_FILES['file_program_9']['name'];
                }
                // DELETE FILE
                if($request->input('state_file_program_9_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/',$page->file_program_9);
                    $page->file_program_9 = \DB::raw('NULL');
                }

                if($_FILES['program_10_img']['size'] > 0) {
                    $delete = false;
                    if($page->program_10_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_10_img',$delete, true,1920,2000,true, false);
                    $page->program_10_img = $_FILES['program_10_img']['name'];
                }
                if($request->input('state_program_10_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/','program_10_img'.strchr($page->program_10_img,'.'));
                    $page->program_10_img = \DB::raw('NULL');
                }
                $page->es_program_10_title = $request->input('es_program_10_title');
                $page->en_program_10_title = $request->input('en_program_10_title');
                $page->es_program_10_text = $request->input('es_program_10_text');
                $page->en_program_10_text = $request->input('en_program_10_text');
                if($_FILES['file_program_10']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_10', false, true, true);
                    $page->file_program_10 = $_FILES['file_program_10']['name'];
                }
                // DELETE FILE
                if($request->input('state_file_program_10_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/',$page->file_program_10);
                    $page->file_program_10 = \DB::raw('NULL');
                }

                if($_FILES['program_11_img']['size'] > 0) {
                    $delete = false;
                    if($page->program_11_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_11_img',$delete, true,1920,2000,true, false);
                    $page->program_11_img = $_FILES['program_11_img']['name'];
                }
                if($request->input('state_program_11_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/','program_11_img'.strchr($page->program_11_img,'.'));
                    $page->program_11_img = \DB::raw('NULL');
                }
                $page->es_program_11_title = $request->input('es_program_11_title');
                $page->en_program_11_title = $request->input('en_program_11_title');
                $page->es_program_11_text = $request->input('es_program_11_text');
                $page->en_program_11_text = $request->input('en_program_11_text');
                if($_FILES['file_program_11']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_11', false, true, true);
                    $page->file_program_11 = $_FILES['file_program_11']['name'];
                }
                // DELETE FILE
                if($request->input('state_file_program_11_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/',$page->file_program_11);
                    $page->file_program_11 = \DB::raw('NULL');
                }

                if($_FILES['program_12_img']['size'] > 0) {
                    $delete = false;
                    if($page->program_12_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_12_img',$delete, true,1920,2000,true, false);
                    $page->program_12_img = $_FILES['program_12_img']['name'];
                }
                if($request->input('state_program_12_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/','program_12_img'.strchr($page->program_12_img,'.'));
                    $page->program_12_img = \DB::raw('NULL');
                }
                $page->es_program_12_title = $request->input('es_program_12_title');
                $page->en_program_12_title = $request->input('en_program_12_title');
                $page->es_program_12_text = $request->input('es_program_12_text');
                $page->en_program_12_text = $request->input('en_program_12_text');
                if($_FILES['file_program_12']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_12', false, true, true);
                    $page->file_program_12 = $_FILES['file_program_12']['name'];
                }
                // DELETE FILE
                if($request->input('state_file_program_12_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/',$page->file_program_12);
                    $page->file_program_12 = \DB::raw('NULL');
                }

                if($_FILES['program_13_img']['size'] > 0) {
                    $delete = false;
                    if($page->program_13_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_13_img',$delete, true,1920,2000,true, false);
                    $page->program_13_img = $_FILES['program_13_img']['name'];
                }
                if($request->input('state_program_13_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/','program_13_img'.strchr($page->program_13_img,'.'));
                    $page->program_13_img = \DB::raw('NULL');
                }
                $page->es_program_13_title = $request->input('es_program_13_title');
                $page->en_program_13_title = $request->input('en_program_13_title');
                $page->es_program_13_text = $request->input('es_program_13_text');
                $page->en_program_13_text = $request->input('en_program_13_text');
                if($_FILES['file_program_13']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_13', false, true, true);
                    $page->file_program_13 = $_FILES['file_program_13']['name'];
                }
                // DELETE FILE
                if($request->input('state_file_program_13_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/',$page->file_program_13);
                    $page->file_program_13 = \DB::raw('NULL');
                }

                if($_FILES['program_14_img']['size'] > 0) {
                    $delete = false;
                    if($page->program_14_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_14_img',$delete, true,1920,2000,true, false);
                    $page->program_14_img = $_FILES['program_14_img']['name'];
                }
                if($request->input('state_program_14_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/','program_14_img'.strchr($page->program_14_img,'.'));
                    $page->program_14_img = \DB::raw('NULL');
                }
                $page->es_program_14_title = $request->input('es_program_14_title');
                $page->en_program_14_title = $request->input('en_program_14_title');
                $page->es_program_14_text = $request->input('es_program_14_text');
                $page->en_program_14_text = $request->input('en_program_14_text');
                if($_FILES['file_program_14']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_14', false, true, true);
                    $page->file_program_14 = $_FILES['file_program_14']['name'];
                }
                // DELETE FILE
                if($request->input('state_file_program_14_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/',$page->file_program_14);
                    $page->file_program_14 = \DB::raw('NULL');
                }

                if($_FILES['program_15_img']['size'] > 0) {
                    $delete = false;
                    if($page->program_15_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_15_img',$delete, true,1920,2000,true, false);
                    $page->program_15_img = $_FILES['program_15_img']['name'];
                }
                if($request->input('state_program_15_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/','program_15_img'.strchr($page->program_15_img,'.'));
                    $page->program_15_img = \DB::raw('NULL');
                }
                $page->es_program_15_title = $request->input('es_program_15_title');
                $page->en_program_15_title = $request->input('en_program_15_title');
                $page->es_program_15_text = $request->input('es_program_15_text');
                $page->en_program_15_text = $request->input('en_program_15_text');
                if($_FILES['file_program_15']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_15', false, true, true);
                    $page->file_program_15 = $_FILES['file_program_15']['name'];
                }
                // DELETE FILE
                if($request->input('state_file_program_15_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/',$page->file_program_15);
                    $page->file_program_15 = \DB::raw('NULL');
                }

                if($_FILES['program_16_img']['size'] > 0) {
                    $delete = false;
                    if($page->program_16_img) {
                        $delete = true;
                    }
                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/','program_16_img',$delete, true,1920,2000,true, false);
                    $page->program_16_img = $_FILES['program_16_img']['name'];
                }
                if($request->input('state_program_16_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/','program_16_img'.strchr($page->program_16_img,'.'));
                    $page->program_16_img = \DB::raw('NULL');
                }
                $page->es_program_16_title = $request->input('es_program_16_title');
                $page->en_program_16_title = $request->input('en_program_16_title');
                $page->es_program_16_text = $request->input('es_program_16_text');
                $page->en_program_16_text = $request->input('en_program_16_text');
                if($_FILES['file_program_16']['size'] > 0) {
                    fileUploadController::generalUpload(public_path() . '/uploads/pages/' . $page_id . '/', 'file_program_16', false, true, true);
                    $page->file_program_16 = $_FILES['file_program_16']['name'];
                }
                // DELETE FILE
                if($request->input('state_file_program_16_check') == 'removed') {
                    fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page_id.'/',$page->file_program_16);
                    $page->file_program_16 = \DB::raw('NULL');
                }
            } else if($page_type_id == 4) {
                $products = $request->input('products');
                foreach($products as $iterationId => $product) {
                    $productArray = explode('_@@_', $product);
                    $carousel_id = $productArray[1];
                    if($carousel_id == 'new') {
                        $carousel = new Carousel();
                    } else {
                        $carousel = Carousel::find($carousel_id);
                    }
                    $carousel_title = $productArray[0];
                    $carousel->carousel_title = $carousel_title;
                    $carousel->page_id = $page->page_id;
                    $carousel->save();

                    foreach ($productArray as $metaId => $meta) {
                        if($metaId == 0 || $metaId == 1) {
                            continue;
                        } else {
                            $productItem = explode('_%%_', $meta);
                            $product_id = $productItem[2];

                            if($product_id == 'new') {
                                $product = new Product();
                            } else if($product_id != null) {
                                $product = Product::find($product_id);
                            }

                            $product->carousel_id = $carousel->carousel_id;
                            $product->product_title = $productItem[0];
                            $product->product_text = $productItem[1];
                            $img_file = 'product_'.($iterationId+1).'-'.($metaId-1).'_img';
                            //return;
                            if(isset($_FILES[$img_file])) {
                                if($_FILES[$img_file]['size'] > 0) {
                                    $delete = false;
                                    if($product->product_img) {
                                        $delete = true;
                                    }
                                    fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page_id.'/products/',$img_file,$delete, true,1920,2000,false, false);
                                    $product->product_img = $_FILES[$img_file]['name'];
                                }
                            }
                            $product->save();
                        }
                    }
                }
            }
            if($page_type_id == 5) {
                $years = $request->input('year');
                $yearIDs = $request->input('yearid');
                foreach ($years as $year) {
                    if(empty($year)) {
                        return redirect()->back()->withErrors(['El nombre de los Años es obligatorio.']);
                    }
                }
                foreach ($years as $key => $newYear) {
                    $yearID = $yearIDs[$key];
                    if($yearID != 'new') {
                        $year = Year::find($yearID);
                    } else {
                        $year = new Year();
                    }
                    $year->page_id = $page->page_id;
                    $year->year_name = $newYear;
                    $year->save();

                    if($yearID != 'new') {
                        $month = Month::where('year_id',$yearID)
                            ->where('month_number',1)
                            ->first();
                    } else {
                        $month = new Month();
                        $month->month_number = 1;
                        $month->year_id = $year->year_id;
                    }
                    if($_FILES['january']['size'][$key] > 0) {
                        $delete = false;
                        if($month->month_file) {
                            $delete = true;
                        }
                        fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page->page_id.'/','january', $delete, true, false,true,$key);
                        $month->month_file = $_FILES['january']['name'][$key];
                    }
                    // DELETE FILE
                    if($request->input('state_month_check_1_'.$key) == 'removed') {
                        fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page->page_id.'/',$month->month_file);
                        $month->month_file = \DB::raw('NULL');
                    }
                    $month->save();
                    if($yearID != 'new') {
                        $month = Month::where('year_id',$yearID)
                            ->where('month_number',2)
                            ->first();
                    } else {
                        $month = new Month();
                        $month->month_number = 2;
                        $month->year_id = $year->year_id;
                    }
                    if($_FILES['february']['size'][$key] > 0) {
                        $delete = false;
                        if($month->month_file) {
                            $delete = true;
                        }
                        fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page->page_id.'/','february', $delete, true, false,true,$key);
                        $month->month_file = $_FILES['february']['name'][$key];
                    }
                    // DELETE FILE
                    if($request->input('state_month_check_2_'.$key) == 'removed') {
                        fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page->page_id.'/',$month->month_file);
                        $month->month_file = \DB::raw('NULL');
                    }
                    $month->save();
                    if($yearID != 'new') {
                        $month = Month::where('year_id',$yearID)
                            ->where('month_number',3)
                            ->first();
                    } else {
                        $month = new Month();
                        $month->month_number = 3;
                        $month->year_id = $year->year_id;
                    }
                    if($_FILES['march']['size'][$key] > 0) {
                        $delete = false;
                        if($month->month_file) {
                            $delete = true;
                        }
                        fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page->page_id.'/','march', $delete, true, false,true,$key);
                        $month->month_file = $_FILES['march']['name'][$key];
                    }
                    // DELETE FILE
                    if($request->input('state_month_check_3_'.$key) == 'removed') {
                        fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page->page_id.'/',$month->month_file);
                        $month->month_file = \DB::raw('NULL');
                    }
                    $month->save();
                    if($yearID != 'new') {
                        $month = Month::where('year_id',$yearID)
                            ->where('month_number',4)
                            ->first();
                    } else {
                        $month = new Month();
                        $month->month_number = 4;
                        $month->year_id = $year->year_id;
                    }
                    if($_FILES['april']['size'][$key] > 0) {
                        $delete = false;
                        if($month->month_file) {
                            $delete = true;
                        }
                        fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page->page_id.'/','april', $delete, true, false,true,$key);
                        $month->month_file = $_FILES['april']['name'][$key];
                    }
                    // DELETE FILE
                    if($request->input('state_month_check_4_'.$key) == 'removed') {
                        fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page->page_id.'/',$month->month_file);
                        $month->month_file = \DB::raw('NULL');
                    }
                    $month->save();
                    if($yearID != 'new') {
                        $month = Month::where('year_id',$yearID)
                            ->where('month_number',5)
                            ->first();
                    } else {
                        $month = new Month();
                        $month->month_number = 5;
                        $month->year_id = $year->year_id;
                    }
                    if($_FILES['may']['size'][$key] > 0) {
                        $delete = false;
                        if($month->month_file) {
                            $delete = true;
                        }
                        fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page->page_id.'/','may', $delete, true, false,true,$key);
                        $month->month_file = $_FILES['may']['name'][$key];
                    }
                    // DELETE FILE
                    if($request->input('state_month_check_5_'.$key) == 'removed') {
                        fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page->page_id.'/',$month->month_file);
                        $month->month_file = \DB::raw('NULL');
                    }
                    $month->save();
                    if($yearID != 'new') {
                        $month = Month::where('year_id',$yearID)
                            ->where('month_number',6)
                            ->first();
                    } else {
                        $month = new Month();
                        $month->month_number = 6;
                        $month->year_id = $year->year_id;
                    }
                    if($_FILES['june']['size'][$key] > 0) {
                        $delete = false;
                        if($month->month_file) {
                            $delete = true;
                        }
                        fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page->page_id.'/','june', $delete, true, false,true,$key);
                        $month->month_file = $_FILES['june']['name'][$key];
                    }
                    // DELETE FILE
                    if($request->input('state_month_check_6_'.$key) == 'removed') {
                        fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page->page_id.'/',$month->month_file);
                        $month->month_file = \DB::raw('NULL');
                    }
                    $month->save();
                    if($yearID != 'new') {
                        $month = Month::where('year_id',$yearID)
                            ->where('month_number',7)
                            ->first();
                    } else {
                        $month = new Month();
                        $month->month_number = 7;
                        $month->year_id = $year->year_id;
                    }
                    if($_FILES['july']['size'][$key] > 0) {
                        $delete = false;
                        if($month->month_file) {
                            $delete = true;
                        }
                        fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page->page_id.'/','july', $delete, true, false,true,$key);
                        $month->month_file = $_FILES['july']['name'][$key];
                    }
                    // DELETE FILE
                    if($request->input('state_month_check_7_'.$key) == 'removed') {
                        fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page->page_id.'/',$month->month_file);
                        $month->month_file = \DB::raw('NULL');
                    }
                    $month->save();
                    if($yearID != 'new') {
                        $month = Month::where('year_id',$yearID)
                            ->where('month_number',8)
                            ->first();
                    } else {
                        $month = new Month();
                        $month->month_number = 8;
                        $month->year_id = $year->year_id;
                    }
                    if($_FILES['august']['size'][$key] > 0) {
                        $delete = false;
                        if($month->month_file) {
                            $delete = true;
                        }
                        fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page->page_id.'/','august', $delete, true, false,true,$key);
                        $month->month_file = $_FILES['august']['name'][$key];
                    }
                    // DELETE FILE
                    if($request->input('state_month_check_8_'.$key) == 'removed') {
                        fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page->page_id.'/',$month->month_file);
                        $month->month_file = \DB::raw('NULL');
                    }
                    $month->save();
                    if($yearID != 'new') {
                        $month = Month::where('year_id',$yearID)
                            ->where('month_number',9)
                            ->first();
                    } else {
                        $month = new Month();
                        $month->month_number = 9;
                        $month->year_id = $year->year_id;
                    }
                    if($_FILES['september']['size'][$key] > 0) {
                        $delete = false;
                        if($month->month_file) {
                            $delete = true;
                        }
                        fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page->page_id.'/','september', $delete, true, false,true,$key);
                        $month->month_file = $_FILES['september']['name'][$key];
                    }
                    // DELETE FILE
                    if($request->input('state_month_check_9_'.$key) == 'removed') {
                        fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page->page_id.'/',$month->month_file);
                        $month->month_file = \DB::raw('NULL');
                    }
                    $month->save();
                    if($yearID != 'new') {
                        $month = Month::where('year_id',$yearID)
                            ->where('month_number',10)
                            ->first();
                    } else {
                        $month = new Month();
                        $month->month_number = 10;
                        $month->year_id = $year->year_id;
                    }
                    if($_FILES['october']['size'][$key] > 0) {
                        $delete = false;
                        if($month->month_file) {
                            $delete = true;
                        }
                        fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page->page_id.'/','october', $delete, true, false,true,$key);
                        $month->month_file = $_FILES['october']['name'][$key];
                    }
                    // DELETE FILE
                    if($request->input('state_month_check_10_'.$key) == 'removed') {
                        fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page->page_id.'/',$month->month_file);
                        $month->month_file = \DB::raw('NULL');
                    }
                    $month->save();
                    if($yearID != 'new') {
                        $month = Month::where('year_id',$yearID)
                            ->where('month_number',11)
                            ->first();
                    } else {
                        $month = new Month();
                        $month->month_number = 11;
                        $month->year_id = $year->year_id;
                    }
                    if($_FILES['november']['size'][$key] > 0) {
                        $delete = false;
                        if($month->month_file) {
                            $delete = true;
                        }
                        fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page->page_id.'/','november', $delete, true, false,true,$key);
                        $month->month_file = $_FILES['november']['name'][$key];
                    }
                    // DELETE FILE
                    if($request->input('state_month_check_11_'.$key) == 'removed') {
                        fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page->page_id.'/',$month->month_file);
                        $month->month_file = \DB::raw('NULL');
                    }
                    $month->save();
                    if($yearID != 'new') {
                        $month = Month::where('year_id',$yearID)
                            ->where('month_number',12)
                            ->first();
                    } else {
                        $month = new Month();
                        $month->month_number = 12;
                        $month->year_id = $year->year_id;
                    }
                    if($_FILES['december']['size'][$key] > 0) {
                        $delete = false;
                        if($month->month_file) {
                            $delete = true;
                        }
                        fileUploadController::generalUpload(public_path().'/uploads/pages/'.$page->page_id.'/','december', $delete, true, false,true,$key);
                        $month->month_file = $_FILES['december']['name'][$key];
                    }
                    // DELETE FILE
                    if($request->input('state_month_check_12_'.$key) == 'removed') {
                        fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page->page_id.'/',$month->month_file);
                        $month->month_file = \DB::raw('NULL');
                    }
                    $month->save();
                }
            }
            $page->save();
        }

        if($page_type_id == 3) {
            $page_external = PageExternal::where('page_id',$id)
                ->first();
            $page_external->page_external_url = $request->input('page_external_url');
            $page_external->save();
        }

        \Session::flash('alertMessage','Página editada correctamente.');
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
        if(isset($_FILES['banner_1_img'])) {
            if ($_FILES['banner_1_img']['size'] > 0) {
                $delete = false;
                if ($page->banner_1_img) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path() . '/uploads/pages/' . $page->page_id . '/', 'banner_1_img', $delete, true, 1920, 2000, true, false);
                $page->banner_1_img = $_FILES['banner_1_img']['name'];
            }
        }
        if($request->input('state_1_check') == 'removed') {
            fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page->page_id.'/','banner_1_img'.strchr($page->banner_1_img,'.'));
            $page->banner_1_img = \DB::raw('NULL');
        }
        $page->es_banner_1_text = $request->input('es_banner_1_text');
        $page->en_banner_1_text = $request->input('en_banner_1_text');

        //  SEGUNDO BANNER/VIDEO
        if(isset($_FILES['banner_2_img'])) {
            if($_FILES['banner_2_img']['size'] > 0) {
                $delete = false;
                if($page->banner_2_img) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page->page_id.'/','banner_2_img',$delete, true,1920,2000,true, false);
                $page->banner_2_img = $_FILES['banner_2_img']['name'];
            }
        }
        if($request->input('state_2_check') == 'removed') {
            fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page->page_id.'/','banner_2_img'.strchr($page->banner_2_img,'.'));
            $page->banner_2_img = \DB::raw('NULL');
        }
        $page->es_banner_2_text_1 = $request->input('es_banner_2_text_1');
        $page->es_banner_2_text_2 = $request->input('es_banner_2_text_2');
        $page->en_banner_2_text_1 = $request->input('en_banner_2_text_1');
        $page->en_banner_2_text_2 = $request->input('en_banner_2_text_2');

        //  TERCER BANNER
        if(isset($_FILES['banner_3_img'])) {
            if($_FILES['banner_3_img']['size'] > 0) {
                $delete = false;
                if($page->banner_3_img) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page->page_id.'/','banner_3_img',$delete, true,1920,2000,true, false);
                $page->banner_3_img = $_FILES['banner_3_img']['name'];
            }
        }
        if($request->input('state_3_check') == 'removed') {
            fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page->page_id.'/','banner_3_img'.strchr($page->banner_3_img,'.'));
            $page->banner_3_img = \DB::raw('NULL');
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
        if(isset($_FILES['about_1_img'])) {
            if($_FILES['about_1_img']['size'] > 0) {
                $delete = false;
                if($page->about_1_img) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page->page_id.'/','about_1_img',$delete, true,1920,2000,true, false);
                $page->about_1_img = $_FILES['about_1_img']['name'];
            }
        }
        $page->es_about_1_title = $request->input('es_about_1_title');
        $page->es_about_1_text = $request->input('es_about_1_text');
        $page->en_about_1_title = $request->input('en_about_1_title');
        $page->en_about_1_text = $request->input('en_about_1_text');
        if($request->input('state_about_1_check') == 'removed') {
            fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page->page_id.'/','about_1_img'.strchr($page->about_1_img,'.'));
            $page->about_1_img = \DB::raw('NULL');
        }

        if(isset($_FILES['about_2_img'])) {
            if($_FILES['about_2_img']['size'] > 0) {
                $delete = false;
                if($page->about_2_img) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page->page_id.'/','about_2_img',$delete, true,1920,2000,true, false);
                $page->about_2_img = $_FILES['about_2_img']['name'];
            }
        }
        $page->es_about_2_title = $request->input('es_about_2_title');
        $page->es_about_2_text = $request->input('es_about_2_text');
        $page->en_about_2_title = $request->input('en_about_2_title');
        $page->en_about_2_text = $request->input('en_about_2_text');
        if($request->input('state_about_2_check') == 'removed') {
            fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page->page_id.'/','about_2_img'.strchr($page->about_2_img,'.'));
            $page->about_2_img = \DB::raw('NULL');
        }

        if(isset($_FILES['about_3_img'])) {
            if($_FILES['about_3_img']['size'] > 0) {
                $delete = false;
                if($page->about_3_img) {
                    $delete = true;
                }
                fileUploadController::imgUpload(public_path().'/uploads/pages/'.$page->page_id.'/','about_3_img',$delete, true,1920,2000,true, false);
                $page->about_3_img = $_FILES['about_3_img']['name'];
            }
        }
        $page->es_about_3_title = $request->input('es_about_3_title');
        $page->es_about_3_text = $request->input('es_about_3_text');
        $page->en_about_3_title = $request->input('en_about_3_title');
        $page->en_about_3_text = $request->input('en_about_3_text');
        if($request->input('state_about_3_check') == 'removed') {
            fileUploadController::deleteFile(public_path().'/uploads/pages/'.$page->page_id.'/','about_3_img'.strchr($page->about_3_img,'.'));
            $page->about_3_img = \DB::raw('NULL');
        }

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
            //'video_banner' => 'required|max:255',
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
            //'video_banner' => 'Video',
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
            'es_page_about_text' => 'required|max:1255',
            'es_about_1_title' => 'required|max:512',
            'es_about_1_text' => 'required|max:1024',
            'about_1_img' => 'required|sometimes',
            'es_about_2_title' => 'required|max:512',
            'es_about_2_text' => 'required|max:512',
            'about_2_img' => 'required|sometimes',
            'es_about_3_title' => 'required|max:512',
            'es_about_3_text' => 'required|max:512',
            'about_3_img' => 'required|sometimes',
            'banner_2_img' => 'required|sometimes',
            //'page_video_iframe' => 'required|max:512',
            /*'es_programs_title' => 'required|max:512',*/
            'es_program_1_title' => 'max:512',
            'program_1_img' => 'sometimes',
            'es_program_2_title' => 'max:512',
            'program_2_img' => 'sometimes',
            'es_program_3_title' => 'max:512',
            'program_3_img' => 'sometimes',
            'es_program_4_title' => 'max:512',
            'program_4_img' => 'sometimes',
            'banner_3_img' => 'sometimes',
            /*'es_programs_title_2' => 'max:512',
            'es_program_1_title_2' => 'max:512',
            'program_1_img_2' => 'sometimes',
            'es_program_2_title_2' => 'max:512',
            'program_2_img_2' => 'sometimes',*/
            'es_program_1_text' => 'max:512',
            'es_program_2_text' => 'max:512',
            'es_program_3_text' => 'max:512',
            'es_program_4_text' => 'max:512',
            /*'es_program_1_text_2' => 'max:512',
            'es_program_2_text_2' => 'max:512',*/
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
            //'page_video_iframe' => 'Video',
            /*'es_programs_title' => 'Título Programas',*/
            'es_program_1_title' => 'Título 1 programa',
            'program_1_img' => 'Imagen 1 programa',
            'es_program_2_title' => 'Título 2 programa',
            'program_2_img' => 'Imagen 2 programa',
            'es_program_3_title' => 'Título 3 programa',
            'program_3_img' => 'Imagen 3 programa',
            'es_program_4_title' => 'Título 4 programa',
            'program_4_img' => 'Imagen 4 programa',
            'banner_3_img' => 'Tercer banner',
            /*'es_programs_title_2' => 'Títulos programas administrados',
            'es_program_1_title_2' => 'Título 1 programa admin.',
            'program_1_img_2' => 'Imagen 1 programa admin.',
            'es_program_2_title_2' => 'Título 2 programa admin.',
            'program_2_img_2' => 'Imagen 2 programa admin.',*/
            'es_program_1_text' => 'Texto 1 programa',
            'es_program_2_text' => 'Texto 2 programa',
            'es_program_3_text' => 'Texto 3 programa',
            'es_program_4_text' => 'Texto 4 programa',
            /*'es_program_1_text_2' => 'Texto 1 programa admin.',
            'es_program_2_text_2' => 'Texto 2 programa admin.',*/
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
            'page_title'    => 'required|max:255',
            'page_url'      => 'required|sometimes',
        ],[
            'required'      =>  ':attribute es obliogatorio.',
            'max'           =>  ':attribute, la máxima cantidad de caracteres permitida para el campo o el nombre de archivo es de :max',
        ],[
            'page_title'    => 'Nombre del sitio',
            'page_url'      => 'URL del sitio',
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