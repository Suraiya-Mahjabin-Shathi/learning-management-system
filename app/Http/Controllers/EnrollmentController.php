<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

        // $request->validate([
        //     "user_id"=>"required",
        //     "course_id"=>"required",
        //     "enrollment_date"=>"required",
        //     "payment_date"=>"required",
        //     "amount"=>"required",
        //     "payment_type"=>"required",
        //     "transaction_id"=>"required",
           
        // ]);
        
        Enrollment::create([
            //database column name=>input field name

            'user_id'=> $request->user_id,
            'course_id'=> $request->course_id,
            'enrollment_date'=> $request->enrollment_date,
            'payment_date'=> $request->payment_date,
            'amount'=> $request->amount,
            'payment_type'=> $request->payment_type,
            'transaction_id'=> $request->transaction_id,
            'status'=> $request->status,
        ]);

        return redirect()->route("enrollment");
    }

    public function acceptEnrollment(Request $request, $enrollment_id)
    {
      $enrollment=Enrollment::find($enrollment_id);
      $enrollment->update([
        'status'=>'accept'
      ]);
      return redirect()->route('enrollment')->with('message','accepted successfully');
    }

    public function rejectEnrollment(Request $request, $enrollment_id)
    {
      $enrollment=Enrollment::find($enrollment_id);
      $enrollment->update([
        'status'=>'reject'
      ]);
      return redirect()->route('enrollment')->with('message','rejected successfully');
    }

    



    public function report()
    {
        return view('backend.pages.report.enrollment');
    }

    public function reportSearch(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'from_date'    => 'required|date',
            'to_date'      => 'required|date|after:from_date',
        ]);

        if($validator->fails())
        {
//            notify()->error($validator->getMessageBag());
            notify()->error('From date and to date required and to should greater then from date.');
            return redirect()->back();
        }


       $from=$request->from_date;
       $to=$request->to_date;

//       $status=$request->status;

        $enrollment=Enrollment::whereBetween('created_at', [$from, $to])->get();
        return view('backend.pages.report.enrollment',compact('enrollment'));

    }
}
    

   

