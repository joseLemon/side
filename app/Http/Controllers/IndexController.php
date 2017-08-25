<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class IndexController extends Controller {
    public function index(Request $request) {
        $posts = BlogController::getPosts($request);

        $page = Page::where('page_type_id',1)->first();
        $page->page_index = $page->join('page_index','page_index.page_id','=','pages.page_id')
            ->first();

        $params = [
            'posts'     => $posts,
            'page'      => $page
        ];

        return view('site.index',$params);
    }

    public function micro (Request $request, $name) {
        $params = [];
        switch ($name) {
            case 'icatech':
                $params['overlay_color'] = 'red';
                break;
            default:
                return response(404);
                break;
        }

        return view('site.micro',$params);
    }
}