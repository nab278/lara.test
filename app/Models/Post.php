<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // 1. Import the trait
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     use HasFactory; 
    //
     protected $table = 'post';
}
