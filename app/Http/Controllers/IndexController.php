<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller {
    public function index(Request $request) {
        /*
        $request->request->add(['get_posts_by'=>'all']);
        $request->request->add(['paginate'=>'15']);
        */
        $posts = BlogController::getPosts($request);

        $params = [
            'posts'     => $posts
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