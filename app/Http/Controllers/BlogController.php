<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller {
    public function show() {
        return view('blog.show.show');
    }

    public function create() {
        return view('blog.create.create');
    }

    public function store(Request $request) {
        $post = new Blog();

        $post->post_title = $request->input('post_title');
        $post->post_content = $request->input('post_content');
        $post_date = date('Y-m-d',strtotime($request->input('post_date')));
        $post->post_date = $post_date;
        $post->save();

        if($request->input('post_img') != '') {
            ImgUploadController::fileUpload(public_path().'\uploads\blog\\'.$post->post_id.'\\','post_img');
        }

        \Session::flash('alertMessage','Nueva entrada creada.');
        \Session::flash('alert-class','alert-success');

        return view('blog.show.show');
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

    public function update($id, Request $request) {
        $post = Blog::find($id);

        $post->post_title = $request->input('post_title');
        $post->post_content = $request->input('post_content');
        $post_date = date('Y-m-d',strtotime($request->input('post_date')));
        $post->post_date = $post_date;
        $post->save();

        if($request->input('post_img') != '') {
            ImgUploadController::fileUpload(public_path().'\uploads\blog\\'.$post->post_id.'\\','post_img');
        }

        \Session::flash('alertMessage','Entrada editada correctamente.');
        \Session::flash('alert-class','alert-success');

        return view('blog.show.show');
    }

    public function getPosts(Request $request) {
        $search = $request->input('search','');
        $date = date('Y-m-d', strtotime(str_replace('/', '-', $search)));

        $posts = Blog::select([
            DB::raw('DATE_FORMAT(post_date, \'%d-%m-%Y\') AS post_date'),
            'post_id',
            'post_title'
        ])
            ->orderBy('post_id');

        if($request->input('get_posts_by') == 'search') {
            $posts->whereRaw(
                "(
                post_title LIKE \"%$search%\"
                OR post_id LIKE \"%$search%\"
                OR post_date LIKE \"%$date%\"
                )"
            );
        }

        $query = $posts->paginate(10);

        return $query;
    }

    public function delete(Request $request) {
        $post = Blog::find($request->input('post_id'));
        $post->delete();

        $jsonResponse = [
            'alert_class' => 'alert-success',
            'msg'   => 'Entrada eliminada correctamente'
        ];

        return response()->json($jsonResponse);
    }
}
