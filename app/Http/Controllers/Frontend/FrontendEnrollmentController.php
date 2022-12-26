<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class FrontendEnrollmentController extends Controller
{
    public function form($course_id){
        $course = Course::find($course_id);
       return view('frontend.enrollment.form',compact('course'));
    }
    public function save(Request $request,$course_id){
        $course = Course::find($course_id);

        // course_id
        // user_id

        $enrollCount=Enrollment::where('course_id',$course->id)->count();
        if($enrollCount < $course->capacity)
        {
            $enroll = Enrollment::where("user_id", auth()->user()->id)->where("course_id", $course->id)->first();
        
            if($enroll){
               notify()->warning("Already Enrolled");
               return to_route("home");
            }
            
   
           $request->validate([
               
               "enrollment_date"=>"required",
               "payment_date"=>"required",
               "amount"=>"required",
               "payment_type"=>"required",
               "transaction_id"=>"required",
              
           ]);
   
           Enrollment::create([
               //database column name=>input field name
   
               'user_id'=>auth()->user()->id,
               'course_id'=>$course->id,
               'enrollment_date'=> $request->enrollment_date,
               'payment_date'=> $request->payment_date,
               'amount'=> $request->amount,
               'payment_type'=> $request->payment_type,
               'transaction_id'=> $request->transaction_id,
               'status'=> $request->status,
           ]);

           notify()->success("Enrolled success");
           return redirect()->route('home');

        }
        notify()->warning("No seat available.");
    return redirect()->route('home');
        
    }


}
