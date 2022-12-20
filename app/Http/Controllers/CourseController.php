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

        $request->validate([
            "name"=>"required|unique:courses,name",
            "image"=>"required|unique:courses,image",
            "content"=>"required",
            "price"=>"required"
        ]);

        $fileName = null;
        if ($request->hasFile('image')) 
        {
            $fileName = date('ymdhmi') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        }

        Course::create([
            //database colomn name=>input field name
            'user_id' => $request->user_id,
            'name' => $request->name,
            'type' => $request->type,
            'image' => $fileName,
            'content' => $request-> content,
            'price'=>$request->price,
        ]);

        return redirect()->route('courses');
    }

    
    public function content($course_id)
    {
      $course=Course::find($course_id);
      return view('backend.pages.courses.content',compact('course'));
    }

    public function deleteCourse(int $course_id)
    {
        $test=Course::find($course_id);
        if($test){
          $test->delete();
          return redirect()->back()->with('message','course deleted successfully.');
        }
        else{
          return redirect()->back()->with('error','course not found.');
        }
    }

    public function viewCourse($course_id)
    {
      $course=Course::find($course_id);
      return view('backend.pages.courses.view',compact('course'));
    }

    public function edit($course_id)
    {
        $course=Course::find($course_id);
        return view('backend.pages.courses.edit',compact('course'));
    }

    public function update(Request $request,$course_id)
    {
        $course=Course::find($course_id);
        $fileName=$course->image;

        if($request->hasFile('image'))
        {
            // generate name
            $fileName=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        }

        $course->update([
            'name' => $request->name,
            'type' => $request->type,
            'image' => $fileName,
            'content' => $request-> content,
            'price'=>$request->price,
        ]);
        return redirect()->route('courses')->with('message','Update success.');
    }
}
