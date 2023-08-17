<?php

namespace App\Repositories ;

use App\Models\User;


class UserRepository  {

    public  $user ;

    public function  __construct(User $user)
    {
        $this->user = $user ;
    }

    public function all() {
     return  $this->user->orderByDesc('created_at')->take(10)->get();
    }

    public function countUser() {
        return $this->user->count();
    }


   

}
