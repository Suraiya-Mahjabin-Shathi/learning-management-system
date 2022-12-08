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
// dd($request->all());
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

        $fileName=null;
        if($request->hasFile('image'))
        {
            // generate name
            $fileName=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        }


        // dd($request->all());
        Learner::create([
            'name'=>$request->name,
            'password'=>$request->password,
            'image'=>$fileName,
            'dob'=>$request->Birth_date,
            'email'=>$request->email,
            'Mobile'=>$request->Mobile_number,
            'gender'=>$request->Gender,
            'mark'=>$request->mark,

        ]);
        return redirect()->route("learner");
    }



}
