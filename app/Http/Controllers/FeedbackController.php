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

    //   $request->validate([
    //     "feedback"=>"required",
    // ]);
    
        // dd($request->all());
        Feedback::create([
            'user_id'=>auth()->user()->id,
            // 'name'=> $request->name,
            // 'email'=> $request->email,
            'course_id'=> $request->course_id,
            // 'name'=> $request->name,
            'feedback'=>$request->description
        ]);

        return redirect()->route('home');


    }
}
