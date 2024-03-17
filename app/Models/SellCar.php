<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellCar extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'model',
        'year',
        'ownr_name',
        'capacity',
        'type',
        'price',
        'contact',
        
    ];
}
