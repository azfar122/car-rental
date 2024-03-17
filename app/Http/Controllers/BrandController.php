<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('createbrand');
    }
    
    public function save(Request $request)
    {
        $contact = Brand::create($request->all());
        return back();
        
    }

    public function list()
    {
        $category = Brand::all();
        return view('managebrand',compact('category'));
    }

    public function deletebrand($id)
    {
        $user = Brand::find($id);
        $user->delete();
        return back();
    }
    
    public function editbrand($id)
    {
        $category = Brand::find($id);
        return view('editbrand',compact('category'));

    }
}
