<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $table='lesson';
    protected $fillable = [
        'department_id',
        'name',
        'short_name',
        'start',
        'end',
        'password'
    ];
}
