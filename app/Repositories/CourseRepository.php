<?php

namespace App\Repositories ;

use App\Models\Course;
use Illuminate\Support\Facades\Auth;


class CourseRepository  {

    public $course ;

    public function  __construct(Course $course)
    {
        $this->course= $course ;
    }

    public function all() {
     return  $this->course->orderByDesc('created_at')->get();
    }

    public function countCourse() {
        return $this->course->all();
    }


    public function teacherCourse() {
        return $this->course->where('formateur_id', Auth::user()->prorietaire_id)->get();
    }


    public function randomCourse() {
        return $this->course->inRandomOrder()->get();
    }


}
