<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageSubscribersController extends Controller
{
    public function index()
    {
        return view('managesubs');
    }
}
