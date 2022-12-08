<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function list(){

        $courses =Course::all();

        return view('backend.pages.courses.list', compact('courses'));
    }

    public function create(){
        return view('backend.pages.courses.create');
    }

    public function store(REQUEST $request)
    {

        $fileName = null;
        if ($request->hasFile('image')) 
        {
            $fileName = date('ymdhmi') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        }

        Course::create([
            //database colomn name=>input field name
            
            'name' => $request->name,
            'type' => $request->type,
            'image' => $fileName,
            'content' => $request-> content,
        ]);

        return redirect()->route('courses');
    }

}
