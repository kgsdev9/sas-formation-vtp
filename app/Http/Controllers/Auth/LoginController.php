<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    public function __construct()
    {
        $this->middleware(['guest', 'admin']);
    }

    public function login() {
        return view('Auth.login');
    }

    public function loginForUser(Request $request)
    {
        $verifications = $request->only('email', 'password');
        if (Auth::attempt($verifications)) {
            flashy()->success('Bienvenue '. Auth::user()->name);
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Identifiants incorrects.',
        ])->onlyInput('email');
    }


}
