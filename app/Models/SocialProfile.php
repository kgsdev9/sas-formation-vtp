<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialProfile extends Model
{
    use HasFactory;

    protected $fillable = ['facebook', 'github', 'youtube', 'instagram', 'twitter', 'lekindln'];
}
