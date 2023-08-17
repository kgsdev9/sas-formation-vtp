<?php

namespace App\Services ;
use App\Repositories\TeacherRepository;



  class TeacherService  {


    public $teacherRepository   ;


    public function __construct(TeacherRepository $teacherRepository)
    {
        $this->teacherRepository  = $teacherRepository ;
    }


    public function teacherVerified() {
        return $this->teacherRepository->teacherVerified();
    }

    public function teacherNotVerified() {
        return $this->teacherRepository->teacherNotVerified();
    }


    public function  show(int $id) {
        return $this->teacherRepository->show($id);
    }


    public function countTeacher() {
        return $this->teacherRepository->countTeacher();
    }

    public function recentlyTeacher() {
        return $this->teacherRepository->recentlyTeacher();
    }


    public function all() {
        return $this->teacherRepository->all();
    }


    public function profileFormateur() {
        return $this->teacherRepository->profileFormateur();
    }



  }
