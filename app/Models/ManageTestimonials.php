<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageTestimonials extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        
    ];
}
