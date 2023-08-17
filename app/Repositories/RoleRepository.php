<?php


namespace App\Repositories ;

use App\Models\Role;


class RoleRepository  {

    public  $role ;

    public function  __construct(Role $role)
    {
        $this->role = $role ;
    }

    public function roleFormateur() {
        $role =  $this->role->where('name', 'formateur')->first();
        return $role->id ;
    }

    public function giveDefaultRole() {
        $role =  $this->role->where('name', 'utilisateur')->first();
        return $role->id ;
    }



}
