<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageContactController extends Controller
{
    public function index()
    {
        return view('managebooking');
    }
}
