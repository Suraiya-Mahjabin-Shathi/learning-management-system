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

        $categories=Category::where("status","active")->get();
        $courses= Course::all();
        $instructors=User::where('role','instructor')->get();
     
        return view ('frontend.pages.home', compact('categories','courses','instructors'));
    }


    public function registration(Request $request)
    {

         $request->validate([
               "name"=>"required",
               "email"=>"required|unique:users,email",
               "mobile"=>"required|numeric|digits:11",
               "password"=>"required|min:5",
               "date_of_birth"=>"required",   
         ]);

        $fileName = null;
        if ($request->hasFile('image')) {
            $fileName = date('ymdhmi') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads',$fileName);
        }

        User::create([
            
            'name'=>$request->name, 
            'image' => $fileName,
            'designation'=>$request->designation,
            'role'=>$request->role,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'gender'=>$request->gender,
            'password'=>bcrypt($request->password),
            'date_of_birth'=>$request->date_of_birth,
            'address'=>$request->address,

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
            notify()->success("Login success as ". auth()->user()->role);
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

            $courses=Course::where("user_id",auth()->user()->id)->pluck("id")->toArray();
            
            $students=Enrollment::whereIn("course_id",$courses)->get();

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

    public function content($content_id){
     
        $content= Course::find($content_id);
        return view ('frontend.pages.content', compact('content'));
    }

    public function cat_course($id){

        $cat = Category::find($id);
        $courses = Course::where("type",$cat->name)->get();

        // dd($courses);
        return view ('frontend.pages.cat_course');
    }

}
