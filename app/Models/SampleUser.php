<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SampleUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'lname',
        'birthdate',
        'uname',
        'password',
        'role',
    ];
}
