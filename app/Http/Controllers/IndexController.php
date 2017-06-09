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
}