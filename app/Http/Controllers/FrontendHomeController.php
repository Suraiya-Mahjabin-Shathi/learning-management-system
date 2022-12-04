<?php

namespace App\Http\Controllers;

use App\Models\Category;
use notify;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendHomeController extends Controller
{
    public function home(){
     
        return view ('frontend.pages.home');
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
            'password'=>bcrypt($request->password),
            'role'=>'customer',
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
        return view('frontend.pages.profile');
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
            'role'=>'customer'
        ]);

        notify()->success('User profile updated.');
        return redirect()->back();
    }

    


    public function search(Request $request)
    {
        $searchResult=Category::where('name','LIKE','%'.$request->search_key.'%')->get();

      return view('frontend.pages.search',compact('searchResult'));
    }


}
