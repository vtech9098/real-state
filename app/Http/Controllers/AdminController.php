<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
    // admin login form
    public function AdminForm(){
        return view('admin.admin_login.adminlogin');
    }
    // admin login function
    public function AdminLogin(Request $request){
        // dd(auth::guard());exit;
        $user = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')])){
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');
        }
    }
    // dashborad
    public function Dashboard(Request $request){
        // dd($request);
        return view('admin/dashboard');
    }
    public function Dashboard2(Request $request){
        // dd($request);
        return view('admin/dashboard');
    }

    // admin login
    public function AdminLogout(){
        Auth::logout();
        return redirect('admin/loginform');
    }
}
