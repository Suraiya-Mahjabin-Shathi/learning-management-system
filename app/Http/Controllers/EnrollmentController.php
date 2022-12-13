<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function list(){
        $cats = Enrollment::all();

        return view('backend.pages.enrollment.list', compact('cats'));
    }

    public function create(){
        return view('backend.pages.enrollment.create');
    }

    public function store(Request $request){
        
        Enrollment::create([
            //database column name=>input field name

            'user_id'=> $request->user_id,
            'course_id'=> $request->course_id,
            'enrollment_date'=> $request->enrollment_date,
            'payment_date'=> $request->payment_date,
            'amount'=> $request->amount,
            'payment_type'=> $request->payment_type,
            'transaction_id'=> $request->transaction_id,
        ]);

        return redirect()->route("enrollment");
    }
    public function deleteEnrollment(int $enrollment_id)
    {
        $test=Enrollment::find($enrollment_id);
        if($test){
          $test->delete();
          return redirect()->back()->with('message','enrollment deleted successfully.');
        }
        else{
          return redirect()->back()->with('error','enrollment not found.');
        }
    }
    public function viewEnrollment($enrollment_id)
    {
      $enrollment=Enrollment::find($enrollment_id);
      return view('backend.pages.enrollment.view',compact('enrollment'));
    }

   
}
