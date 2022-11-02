<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Learner;

class LearnerController extends Controller
{
    public function list(){
        return view('backend.pages.learners.list');
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
            'dob'=>$request->Birthdate,
            'email'=>$request->email,
            'Mobile'=>$request->Mobilenumber,
            'gender'=>$request->Gender,
            'mark'=>$request->Exammark


        ]);
    }



}
