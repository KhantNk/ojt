<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'email',
        'gender',
        'address',
        'dob',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
