<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function list(){
        $time=Instructor::all();

       // dd($time);
        return view('backend.pages.instructors.list', compact('time'));
    }
    public function create(){
        return view('backend.pages.instructors.create');
    }

    public function store(Request $request){
        //dd($request->all());

        Instructor::create([
            //database colomn name=>input field name

           'name'=>$request->instructor_name,
           'address'=>$request->instructor_address,
           'image'=>$request->instructor_image,
           'e-mail'=>$request->instructor_email,
           'Mobile'=>$request->instructor_mobile,
           'date_of_birth'=>$request->date_of_birth,


        ]);

    }
}
