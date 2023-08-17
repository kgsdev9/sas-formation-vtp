<?php

namespace App\Repositories ;

use App\Models\Level;



class LevelRepository  {

    public  $level ;

    public function  __construct(Level $level)
    {
        $this->level= $level ;
    }

    public function all() {
     return  $this->level->all();
    }


}
