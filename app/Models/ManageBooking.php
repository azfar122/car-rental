<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageBooking extends Model
{
    use HasFactory;
    protected $fillable = [
        'name' ,
        'vehicle' ,
        'from_date' ,
        'to_date' ,
        'status' ,
        'message' ,
         
      
   ];
}
