<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function View(){
        return view('admin.login');
    }

    public function Login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ],[
            'email.required' => 'Email Wajib Di Isi',
            'password.required' => 'Password Wajib Di Isi'
        ]);
    
        $infoLogin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infoLogin)){
            return redirect(route('Data'));
        }else{
            $errors = ['email' => 'Login failed. Please check your email and password.'];
            return back()->withErrors($errors)->withInput();
        }

    }

    public function Logout(){
        Auth::logout();
        return redirect('');
    }
}
