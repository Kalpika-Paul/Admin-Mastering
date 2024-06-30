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

        // dd( Category::all());
       
            $category = Category::all();
            return view('category', ['category' => $category]);
        
    }

    public function newcategory (){
        return view ('newcategory');
    }
   
    public function store (Request $request)
    {
        // dd($request);

        $data = $request->validate([
           
            'name'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'email'=>'required|email',
            'area'=>'required'


        ]);


         $newCategory = Category::create($data);
     
         if ($newCategory) 
    {

        return redirect(route('account.category'))->with('success', 'Category created successfully');
    }  
    
    else {
        return redirect()->back()->with('error', 'Failed to create category');
    }
       
    }

   

}
