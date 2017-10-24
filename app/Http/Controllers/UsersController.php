<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class UsersController extends Controller {
    public function show() {
        return view('users.show.show');
    }

    public function getUsers(Request $request) {
        $search = $request->input('search','');
        $paginate = $request->input('paginate',10);
        $except = $request->input('except','');

        $position = strpos($search, " ");
        $partialQuery = '';
        if($position !== false){
            $exploded = explode(" ",$search);
            $partialQuery = "(user_name LIKE \"%$exploded[0]%\" and user_last_name LIKE \"%$exploded[1]%\") OR ";
            if(isset($exploded[3])) {
                $partialQuery = "(user_name LIKE \"%".$exploded[0].' '.$exploded[1]."%\" and user_last_name LIKE \"%".$exploded[2].' '.$exploded[3]."%\") OR ";
            } else if(isset($exploded[2])) {
                $partialQuery = "(user_name LIKE \"%".$exploded[0].' '.$exploded[1]."%\" and user_last_name LIKE \"%$exploded[2]%\") OR (user_name LIKE \"%$exploded[0]%\" and user_last_name LIKE \"%".$exploded[1].' '.$exploded[2]."%\") OR";
            }
        }

        $posts = User::select([
            'user_id',
            DB::raw('CONCAT(user_name, \' \', user_last_name) as user_full_name'),
            'email as user_email',
        ])
            ->orderBy('user_id');

        if($request->input('get_users_by') == 'search') {
            $posts->whereRaw(
                "(
                $partialQuery
                user_name LIKE \"%$search%\"
                OR post_id LIKE \"%$search%\"
                )"
            );
        }

        if($except != '') {
            $posts->where('post_id','!=',$except);
        }

        $query = $posts->paginate($paginate);
        return $query;
    }

    public function edit($id) {
        $user = User::find($id);

        $params = [
            'user'  => $user
        ];

        return view('users.edit.edit', $params);
    }

    public function update(Request $request, $id) {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($id,'user_id'),
            ],
        ],[

        ],[
            'name'          =>  'nombre',
            'last_name'     =>  'apellido',
            'email'         =>  'correo electrónico'
        ]);

        $editPassword = false;
        $password = $request->input('password');
        if(!empty($password)) {
            $this->validate($request,[
                'password' => 'required|string|min:6|confirmed',
            ],[

            ],[
                'password' => 'contraseña',
            ]);

            $editPassword = true;
        }


        $user = User::find($id);
        $user->user_name = $request->input('name');
        $user->user_last_name = $request->input('last_name');
        $user->email = $request->input('email');
        if($editPassword) {
            $user->password = bcrypt($password);
        }
        $user->save();

        \Session::flash('alertMessage','Usuario editado existosamente.');
        \Session::flash('alert-class','alert-success');

        return view('users.show.show');
    }

    public function delete(Request $request) {
        $user = User::find($request->input('user_id'));
        $user->delete();

        $jsonResponse = [
            'alert_class' => 'alert-success',
            'msg'   => 'Usuario eliminado correctamente'
        ];

        return response()->json($jsonResponse);
    }
}