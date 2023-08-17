<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    use HasFactory;

    protected $fillable = ['fullname', 'slug', 'telephone', 'whattsapp', 'description', 'perfomance', 'status', 'popular', 'genre', 'avatar', 'poste'];


    public function courses() {
        return $this->hasMany(Course::class);
    }





}

