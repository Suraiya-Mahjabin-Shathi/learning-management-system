<?php

namespace App\Http\Controllers;

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
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'mobile'=>$request->mobile,
            'password'=>bcrypt($request->password),
            'role'=>'customer'

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


}
