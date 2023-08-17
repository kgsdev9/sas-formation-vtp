<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;

class GestionUserController extends Controller
{
    protected $userService ;


    public function __construct(UserService $userService)
    {
        $this->userService = $userService ;
    }


    public function   index() {

        return view('admin.users.liste', [
            'allUsers' => $this->userService->all()
        ]);

    }


}
