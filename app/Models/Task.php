<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Boolean;

class Task extends Model
{
    protected $casts = [
        'is_completed' => 'boolean'
        ];
    protected $fillable = ['title', 'is_completed'];
}
