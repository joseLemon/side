<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request) {
        $data = $request->all();
        $data['email'] = trim($request->input('email'));
        $request->replace($data);

        $this->validate($request, [
            'email'     => 'required|email',
            'password'  => 'required',
        ], [
            'email.required'    => 'El correo electrónico es obligatorio.',
            'email.email'       => 'El correo electrónico no es válido.',
            'password.required' => 'La contraseña es obligatoria.',
        ]);

        $user = User::where('user_email', 'LIKE', $request->input('email'))->first();
        if($user !== NULL && Hash::check($request->input('password'), $user->user_password)) {
            if (Auth::login($user)) {
                return redirect()->route('home');
            } else {
                \Session::flash('globalMessage','El usuario y/o contraseña es incorrecto');
                \Session::flash('alert-class','alert-danger');
                return redirect()->route('login')->withInput();
            }
        } else {
            \Session::flash('globalMessage','El usuario y/o contraseña es incorrecto');
            \Session::flash('alert-class','alert-danger');
            return redirect()->route('login')->withInput();
        }
    }

    public function logOut() {
        Auth::logout();
        return redirect()->route('dashboard.home');
    }
}
