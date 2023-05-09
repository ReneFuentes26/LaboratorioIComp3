<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tareas extends Model
{
    use HasFactory;

    static $rules =[
        'task_name' => 'required|string|min:4',
        'task_time' => 'required|date|min:8'
    ];
}
