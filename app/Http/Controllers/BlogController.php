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
        $post_date = \DateTime::createFromFormat('d/m/Y', $request->input('post_date'))->format('Y-m-d');
        $post->post_date = $post_date;

        if($_FILES['post_img']['size'] > 0) {
            fileUploadController::imgUpload(public_path().'/uploads/blog/'.$post->post_id.'/','post_img',true,true,700,394,false);
        }

        $post->post_img = $_FILES['post_img']['name'];
        $post->save();

        \Session::flash('alertMessage','Nueva entrada creada.');
        \Session::flash('alert-class','alert-success');

        return redirect()->route('blog.show');
    }

    public function edit($id)
    {
        $post = $this->postExists($id);

        $params = [
            'post'  => $post
        ];


        return view('blog.edit.edit',$params);
    }

    public function update($id, Request $request) {
        $post = Blog::find($id);

        $post->post_title = $request->input('post_title');
        $post->post_content = $request->input('post_content');
        $post_date = \DateTime::createFromFormat('d/m/Y', $request->input('post_date'))->format('Y-m-d');
        $post->post_date = $post_date;
        $post->save();

        if($_FILES['post_img']['size'] > 0) {
            fileUploadController::imgUpload(public_path().'/uploads/blog/'.$post->post_id.'/','post_img',true,true,700,394,false);

            $post->post_img = $_FILES['post_img']['name'];
            $post->save();
        } else if($request->input('state_check') == 'removed') {
            //  Delete files if they exist
            $files = glob(public_path().'/uploads/blog/'.$post->post_id.'/'.'/*'); // get all file names
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
        $except = $request->input('except','');
        $date = date('Y-m-d', strtotime(str_replace('/', '-', $search)));
        if($date == '1970-01-01') {
            $date = $search;
        }

        $posts = Blog::select([
            DB::raw('IF (CHAR_LENGTH(post_content) > 150, CONCAT(RTRIM(REVERSE(SUBSTRING(REVERSE(LEFT(post_content, 150)),LOCATE(" ",REVERSE(LEFT(post_content, 150)))))), \' ...\'), post_content) AS post_excerpt'),
            'post_id',
            'post_date',
            'post_title',
            'post_img'
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

        if($except != '') {
            $posts->where('post_id','!=',$except);
        }

        $query = $posts->inRandomOrder()->paginate($paginate);

        setlocale(LC_ALL,"es_MX","es_Mx","esp");
        foreach($query as $q) {
            $date = \DateTime::createFromFormat('Y-m-d', $q->post_date);
            $q->post_date = ucfirst(strftime("%B %d, %y",$date->getTimestamp()));
        }

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

    public function single($id) {
        $post = $this->postExists($id);
        setlocale(LC_ALL,"es_MX","es_Mx","esp");
        $date = \DateTime::createFromFormat('Y-m-d', $post->post_date);
        $post->post_date = ucfirst(strftime("%B %d, %y",$date->getTimestamp()));

        $params = [
            'id'    => $id,
            'post'  => $post
        ];

        return view('site.single',$params);
    }

    function postExists($id) {
        $post = Blog::find($id);

        if (!$post) {
            return abort('404');
        }

        return $post;
    }
}
