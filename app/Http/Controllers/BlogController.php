<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller {
    public  function create() {
        return view('blog.create.create');
    }

    public function store(Request $request) {
        $post = new Blog();

        $post->post_title = $request->input('post_title');
        $post->post_content = $request->input('post_content');
        $post_date = date('Y-m-d',strtotime($request->input('post_date')));
        $post->post_date = $post_date;
        $post->save();

        ImgUploadController::fileUpload(public_path().'\uploads\blog\\'.$post->post_id.'\\','post_img');

        $jsonData = array(
            'success'   => true,
            'msg'       => 'Post creado existosamente.'
        );

        \Session::flash('alertMessage','Nueva post creado.');
        \Session::flash('alert-class','alert-success');

        return response()->json($jsonData);
    }

    public function edit($id)
    {
        $post = Blog::find($id);

        if (!$post) {
            return abort('404');
        }

        $imgArray = scandir(public_path() . '\uploads\blog\\' . $id . '\\');
        $post_img = $imgArray[2];

        $params = [
            'post'  => $post,
            'post_img'   => $post_img
        ];

        return view('blog.edit.edit',$params);
    }

    public function update($id) {
        return;
    }
}
