<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'Student_data';

    protected $fillable = [
        'id',
        'fname',
        'lname',
        'email',
        'password',
        'confpassword',
        'class',
        'gender',
        'address',
        'phone',

    ];
}
