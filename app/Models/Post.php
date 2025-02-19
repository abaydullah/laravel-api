<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    Protected $fillable = ['title','content','created_at'];
}
