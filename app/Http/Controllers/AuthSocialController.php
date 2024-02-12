<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Services\RoleService;
use Laravel\Socialite\Facades\Socialite;


class AuthSocialController extends Controller
{

    protected $roleService ;

    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();
        $user =User::where('email', $googleUser->email)->first();
        if(!$user)
        {
            $user = User::create([
             'name' => $googleUser->name,
             'fullname' => $googleUser->name,
             'adresse' => $googleUser->name,
             'phone' => $googleUser->name ,
             'role_id' => $this->roleService->giveDefaultRole(),
             'email' => $googleUser->email,
              'password' => \Hash::make(rand(100000,999999)
            )]);
        }
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);

    }


}
