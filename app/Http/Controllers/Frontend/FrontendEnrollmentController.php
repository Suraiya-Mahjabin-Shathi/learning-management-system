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

        Enrollment::create([
            //database column name=>input field name

            'user_id'=>auth()->user()->id,
            'course_id'=>$course->id,
            'enrollment_date'=> $request->enrollment_date,
            'payment_date'=> $request->payment_date,
            'amount'=> $request->amount,
            'payment_type'=> $request->payment_type,
            'transaction_id'=> $request->transaction_id,
        ]);
        return redirect()->route('home');
    }
}
