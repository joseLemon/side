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

        if(!isset($_COOKIE['indexLanguage'])) {
            $this->setLanguage($request,'es');
        }

        return view('site.index',$params);
    }

    public function micro ($name) {
        $page = Page::where('page_url',$name)
            ->join('colors','colors.color_id','=','pages.color_id')
            ->first();

        if(!$page) {
            return abort(404);
        }

        $page->micro = $page->micro()->first();

        $params = [
            'page' => $page,
        ];

        return view('site.micro',$params);
    }

    public function setLanguage (Request $request, $language_str = 'es') {

        $language = $request->input('language');
        if(!$language) {
            $language = $language_str;
        }

        if($language == 'es' || $language == 'en') {
            setcookie('indexLanguage', $language, time() + (10 * 365 * 24 * 60 * 60), "/"); // delete in ten years
        } else {
            abort(404);
        }
    }
}