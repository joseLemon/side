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

        if($_FILES['post_img']['size'] > 0) {
            ImgUploadController::fileUpload(public_path().'\uploads\blog\\'.$post->post_id.'\\','post_img');
        }

        \Session::flash('alertMessage','Nueva entrada creada.');
        \Session::flash('alert-class','alert-success');

        return redirect()->route('blog.show');
    }

    public function edit($id)
    {
        $post = Blog::find($id);

        if (!$post) {
            return abort('404');
        }

        $imgArray = scandir(public_path() . '\uploads\blog\\' . $id . '\\');
        $post_img = null;
        if(array_key_exists(2,$imgArray)) {
            $post_img = $imgArray[2];
        }

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

        if($_FILES['post_img']['size'] > 0) {
            ImgUploadController::fileUpload(public_path().'\uploads\blog\\'.$post->post_id.'\\','post_img',true);
        } else {
            //  Delete files if they exist
            $files = glob(public_path().'\uploads\blog\\'.$post->post_id.'\\'.'/*'); // get all file names
            foreach($files as $file){ // iterate files
                if(is_file($file))
                    unlink($file); // delete file
            }
        }

        \Session::flash('alertMessage','Entrada editada correctamente.');
        \Session::flash('alert-class','alert-success');

        return redirect()->route('blog.show');
    }

    public static function getPosts(Request $request) {
        $search = $request->input('search','');
        $paginate = $request->input('paginate',10);
        $date = date('Y-m-d', strtotime(str_replace('/', '-', $search)));
        if($date == '1970-01-01') {
            $date = $search;
        }

        $posts = Blog::select([
            DB::raw('DATE_FORMAT(post_date, \'%d-%m-%Y\') AS post_date'),
            DB::raw('IF (CHAR_LENGTH(post_content) > 150, CONCAT(RTRIM(REVERSE(SUBSTRING(REVERSE(LEFT(post_content, 150)),LOCATE(" ",REVERSE(LEFT(post_content, 150)))))), \' ...\'), post_content) AS post_excerpt'),
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
                OR post_date LIKE \"%$search%\"
                )"
            );
        }

        $query = $posts->paginate($paginate);

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
