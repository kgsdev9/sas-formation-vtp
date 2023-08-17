<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['codeCommande','fullname','phone', 'adresse' , 'email',  'course_id', 'user_id', 'amount', 'status',];
}
