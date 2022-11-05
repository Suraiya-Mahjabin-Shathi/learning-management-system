<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Console\Migrations\StatusCommand;

class CategoryController extends Controller
{
    public function list(){
        $cats=Category::all();

        //dd($cats);
        return view('backend.pages.categories.list', compact('cats'));
    }

    public function create(){
        return view('backend.pages.categories.create');
    }

    public function store(REQUEST $request){
      //  dd($request->all());

        Category::create([
            //database colomn name=>input field name

           'name'=>$request->name,
           'status'=>$request->status,
           'image'=>$request->image,
           'description'=>$request->description
        ]);
        
    }
}
