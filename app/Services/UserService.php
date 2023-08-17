<?php

namespace App\Services ;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;


class UserService  {

    protected $userRepository  ;
    protected $roleService;


    public function __construct(UserRepository $userRepository, RoleService $roleService)
    {
        $this->userRepository = $userRepository;
        $this->roleService = $roleService;
    }

    public function createUsser(array $data):User {
        return User::create([
            'name' => $data['name'],
            'fullname' => $data['fullname'],
            'phone' => $data['phone'],
            'adresse' => $data['adresse'],
            'email' =>$data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $this->roleService->giveDefaultRole()
        ]);
    }

    public function all() {
        return  $this->userRepository->all();
       }

       public function countUser() {
        return $this->userRepository->countUser();
    }


}
