<?php

namespace App\Services ;

use App\Repositories\RoleRepository;

class RoleService  {

    protected $roleRepository ;

    public function  __construct(RoleRepository $roleRepository)
    {
        $this->roleRepository  = $roleRepository;
    }


    public function roleFormateur() {
        return $this->roleRepository->roleFormateur();
    }


    public function giveDefaultRole() {
        return $this->roleRepository->giveDefaultRole();
    }



}
