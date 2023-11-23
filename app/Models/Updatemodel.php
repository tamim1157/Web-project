<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Updatemodel extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'u_rollno',
        'u_class',
        'u_bangla1',
        'u_english1',
        'u_math1',
        'u_physics1',
        'u_chemistry1',
        'u_bangla12',
        'u_english2',
        'u_math2',
        'u_physics2',
        'u_chemistry2',
    ];
}

