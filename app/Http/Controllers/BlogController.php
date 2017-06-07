<?php

namespace App\Http\Controllers;

class BlogController extends Controller {
    public  function create() {
        return view('blog.create.create');
    }

    public function store() {

    }
}
