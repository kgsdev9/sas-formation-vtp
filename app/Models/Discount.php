<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $fillable = ['discount_percent', 'course_id', 'code', 'delai', 'slug', 'status', 'expire_at'];


    public function course() {
        return $this->belongsTo(Course::class, 'course_id');
    }



}
