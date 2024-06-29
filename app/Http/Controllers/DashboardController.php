<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index(){
        return view ('dashboard');
    }

    public function category(){
        return view ('category');
    }

    public function newcategory (){
        return view ('newcategory');
    }
   
    public function store (Request $request)
    {
        // dd($request->name);

        $data = $request->validate([
           
            'name'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required|email',
            'area'=>'required'


        ]);


         $newCategory = Category::create($data);
     
         if ($newCategory) {
        return redirect(route('account.dashboard'))->with('success', 'Category created successfully');
    }   else {
        return redirect()->back()->with('error', 'Failed to create category');
    }
       
    }

   

}
