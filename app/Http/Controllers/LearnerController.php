<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Learner;

class LearnerController extends Controller
{
    public function list(){

        $learn=Learner::paginate(5);
        //dd($learn);
        

        return view('backend.pages.learners.list', compact('learn'));
    }
    
    public function create(){
        return view('backend.pages.learners.create');
    }

    public function store(REQUEST $request){

        $request->validate([

            'name'=>'required|unique:learners,name',
            'password'=>'required',
            'address'=>'required',
            'email'=>'required',
            'Mobile_number'=>'required',
            'Birth_date'=>'required',
            'Gender'=>'required',
            'mark'=>'required'


        ]);

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
