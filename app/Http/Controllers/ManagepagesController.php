<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagepagesController extends Controller
{
    public function index()
    {
        return view('managepages');
    }
}
