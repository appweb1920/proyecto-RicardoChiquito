<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    
    protected $redirectTo;// = RouteServiceProvider::HOME;

    public function username(Type $var = null)
    {
        return 'email';
    }

    public function redirectTo(Type $var = null)
    {
        $user=Auth::user();
        //dd($user);
        if(is_null($user->tipo))
            $redirectTo='/vistaUsuario';
        else{
            $redirectTo='/home';
        } 
            return $redirectTo;
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
