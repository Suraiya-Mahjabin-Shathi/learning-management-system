<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Learner;
use App\Models\User;

class LearnerController extends Controller
{
    public function list(){

        $learn=User::where('role','learner')->get();
        //dd($learn);
        return view('backend.pages.learners.list', compact('learn'));
    }
    
    public function create(){
        return view('backend.pages.learners.create');
    }

    public function store(REQUEST $request){
// dd($request->all());
        $fileName=null;
        if($request->hasFile('image'))
        {
            // generate name
            $fileName=date('Ymdhmi').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        }
        // dd($request->all());
        User::create([
            'name'=>$request->name,
            'address'=>$request-> address,
            'image'=>$fileName,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'date_of_birth'=>$request->date_of_birth,
            'gender'=>$request->gender, 
        ]);
        return redirect()->route("learner");
    }

    public function deleteLearner(int $learner_id)
    {
        $test=User::find($learner_id);
        if($test){
          $test->delete();
          return redirect()->back()->with('message','learner deleted successfully.');
        }
        else{
          return redirect()->back()->with('error','learner not found.');
        }
    }
    public function viewLearner($learner_id)
    {
        $learner =User::find($learner_id);
        return view('backend.pages.learners.view', compact('learner'));
    }

    public function editLearner($learner_id)
    {
        $learner=User::find($learner_id);
       
        return view('backend.pages.learners.edit',compact('learner'));
    }

    public function update(Request $request, $learner_id)
    {

        $learner =User::find($learner_id);
        $fileName = $learner->image;

        if ($request->hasFile('image')) {
            // generate name
            $fileName = date('Ymdhmi') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads', $fileName);
        }

        $learner->update([

            'name'=>$request->name,
            'address'=>$request-> address,
            'image'=>$fileName,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'date_of_birth'=>$request->date_of_birth,
            'gender'=>$request->gender, 
        ]);
        return redirect()->route('learner')->with('message', 'Update success.');
    }




}
