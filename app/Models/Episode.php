<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;
    protected $name = ['name', 'duration', 'course_id', 'formateur_id'];

    public function course() {
        return $this->belongsTo(Course::class, 'course_id');
    }


}

