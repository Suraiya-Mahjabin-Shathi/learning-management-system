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
       
        $fileName = null;
        if ($request->hasFile('image')) 
        {
            $fileName = date('ymdhmi') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        }

        Instructor::create([
            //database column name=>input field name
           'name'=>$request->name,
           'address'=>$request->address,
           'image'=>$fileName,
           'email'=>$request->email,
           'mobile'=>$request->mobile,
           'date_of_birth'=>$request->date_of_birth,
        ]);
        return redirect()->route("instructor");
    }

    public function deleteInstructor(int $instructor_id)
    {
        $test=Instructor::find($instructor_id);
        if($test){
          $test->delete();
          return redirect()->back()->with('message','instructor deleted successfully.');
        }
        else{
          return redirect()->back()->with('error','instructor not found.');
        }
    }
    
    public function viewInstructor($instructor_id)
    {
      $instructor=Instructor::find($instructor_id);
      return view('backend.pages.instructors.view',compact('instructor'));
    }

    public function editInstructor($instructor_id)
    {
        $instructor=Instructor::find($instructor_id);
       
        return view('backend.pages.instructors.edit',compact('instructor'));
    }

    public function update(Request $request, $instructor_id)
    {

        $instructor =Instructor::find($instructor_id);
        $fileName = $instructor->image;

        if ($request->hasFile('image')) {
            // generate name
            $fileName = date('Ymdhmi') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $fileName);
        }

        $instructor->update([

            'name'=>$request->name,
            'address'=>$request->address,
            'image'=>$fileName,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'date_of_birth'=>$request->date_of_birth
        ]);
        return redirect()->route('instructor')->with('message', 'Update success.');
    }

}
