<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


    protected $table = 'images';

    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'class',
        'language',
        'gender',
        'phone',
        'address',
        'image'

    ];
}
