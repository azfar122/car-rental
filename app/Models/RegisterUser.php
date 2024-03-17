<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterUser extends Model
{
    use HasFactory;
    protected $guard = 'RegisterUser';
    protected $fillable = [
        'name',
        'email',
        'contact',
        'dob',
        'country',
        'city',
        'address',
        
    ];
}
