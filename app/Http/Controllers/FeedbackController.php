<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function list(){

        $feedbacks = Feedback::all();
        return view('backend.pages.feedback.list',compact("feedbacks"));
    }

    public function view($enrollment_id)
    {
       
      $enrollment=Enrollment::find($enrollment_id);
    //   dd($enrollment);
      return view('frontend.pages.feedback',compact('enrollment'));
    }

    public function store(Request $request, $enrollment_id)
    {
        // dd($request->all());

        Feedback::create([
            'user_id'=>auth()->user()->id,
            'course_id'=> $request->course_id,
            'enrollment_id'=> $enrollment_id,
            'feedback'=>$request->description
        ]);

        return redirect()->route('home');


    }
}
