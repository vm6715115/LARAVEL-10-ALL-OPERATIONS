<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classs extends Model
{
    use HasFactory;

    protected $table = 'class_data';

    protected $fillable = [
        'cid',
        'class',
    ];
}
