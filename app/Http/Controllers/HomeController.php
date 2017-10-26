<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        if(Auth::user()->user_role_id > 3) {
            $page_id = Auth::user()->page_id;
            if($page_id) {
                return redirect()->route('page.edit',[$page_id]);
            } else {
                // return custom error page
                return abort(403);
            }
        }
        return view('blog.show.show');
    }
}
