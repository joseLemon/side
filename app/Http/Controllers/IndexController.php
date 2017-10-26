<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\LoginController;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function micro (Request $request, $name) {
        switch ($name) {
            case 'login':
            case 'home':
                return LoginController::index();
                break;
            case 'logout':
                return LoginController::logOut();
                break;
            case 'setLanguage':
                return $this->setLanguage($request);
                break;
            case 'register':
                if(Auth::user()->user_role_id != 1) {
                    $page_id = Auth::user()->page_id;
                    if($page_id) {
                        return redirect()->route('page.edit',[$page_id]);
                    } else {
                        // return custom error page
                        return abort(403);
                    }
                }
                return view('auth.register');
                break;
        }

        $page = Page::where('page_url',$name)
            ->join('colors','colors.color_id','=','pages.color_id')
            ->first();

        if(!$page) {
            return abort(404);
        }

        // Construcción
        if($page->page_type_id == 2) {
            //return $this->underConstruction();
            $page->micro = $page->micro()->first();
        }

        if($page->page_type_id == 4) {
            $page->micro = $page->carousel()->first();
            $page->slider = $page->sliderInfo()->get();

            foreach($page->slider as $key => $slider){
                $page->slider[$key]->products;
            }
        }

        if($page->page_type_id == 5) {
            $page->micro = $page->micro()->first();
            $page->calendar = $page->years()->get();

            /*foreach($page->calendar as $key => $year){
                $page->calendar[$key]->months;
            }*/
        }

        $params = [
            'page' => $page,
        ];

        return view('site.micro',$params);
    }

    public function underConstruction () {
        return view('site.under_construction');
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