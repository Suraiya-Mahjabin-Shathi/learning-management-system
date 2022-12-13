<?php

namespace App\Http\Controllers;

use notify;
use App\Models\User;
use App\Models\Course;
use App\Models\Category;
use App\Models\Enrollment;
use App\Models\Instructor;
use App\Models\Learner;
use Illuminate\Http\Request;

class FrontendHomeController extends Controller
{
    public function home(){

        $categories=Category::all();
        $courses= Course::all();
        $instructors=User::where('role','instructor')->get();
     
        return view ('frontend.pages.home', compact('categories','courses','instructors'));
    }


    public function registration(Request $request)
    {

        $fileName = null;
        if ($request->hasFile('image')) {
            $fileName = date('ymdhmi') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        }

        User::create([
            'name'=>$request->name,
            'designation'=>$request->designation,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'address'=>$request->address,
            'date_of_birth'=>$request->date_of_birth,
            'password'=>bcrypt($request->password),
            'role'=>$request->role,
            'image' => $fileName,

        ]);  
        notify()->success('registration successful');
        return redirect()->back();
    }

    public function login(Request $request)
    {  
        $request->validate([
        'email'=>'required|email',
        'password'=>'required',
        ]);

         $credentials=$request->except('_token');
        if(auth()->attempt($credentials))
        {
            notify()->success('Login success');
            return redirect()->back();
        }
        
            notify()->error('invalid password');
            return redirect()->back();
    }

    public function userlogout()
    {
        auth()->logout();

        notify()->success('Logout success');
            return redirect()->back();
    }

    public function profile(){
        if(auth()->user()){

            $students=Enrollment::all();
            $enrollments = Enrollment::where('user_id',auth()->user()->id)->get();
            return view('frontend.pages.profile',compact('enrollments',"students"));
        }else{
            return to_route('home');
        }
    }

    public function editProfile($profile_id)
    {
        $user = User::find($profile_id);
        return view('frontend.pages.edit', compact('user'));
    }

    public function updateProfile(Request $request, $profile_id)
    {
       //validation

        $user=User::find($profile_id);
        $user->update([
            'name'=>$request->name,
            'designation'=>$request->designation,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'address'=>$request->address,
            'password'=>bcrypt($request->password),
            'role'=>$request->role,
        ]);

        notify()->success('User profile updated.');
        return redirect()->back();
    }

    public function search(Request $request)
    {
        $searchResult=Course::where('name','LIKE','%'.$request->search.'%')->get();

      return view('frontend.pages.search',compact('searchResult'));
    }
}
