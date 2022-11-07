<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Learner;

class LearnerController extends Controller
{
    public function list(){

        $learn=Learner::all();
        //dd($learn);
        

        return view('backend.pages.learners.list', compact('learn'));
    }
    
    public function create(){
        return view('backend.pages.learners.create');
    }

    public function store(REQUEST $request){
        //dd($request->all());
        Learner::create([
            'name'=>$request->name,
            'password'=>$request->password,
            'image'=>$request->image,
            'dob'=>$request->Birth_date,
            'email'=>$request->email,
            'Mobile'=>$request->Mobile_number,
            'gender'=>$request->Gender,
            'mark'=>$request->mark,

        ]);
    }



}
