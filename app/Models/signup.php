<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Signup extends Model
{
    protected $fillable = [
        'nama',
        'NIM',
        'email',
        'password',
        'role',
    ];
}
