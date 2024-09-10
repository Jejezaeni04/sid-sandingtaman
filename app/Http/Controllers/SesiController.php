<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index(){
        return view('auth.login');
    }
    function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong'
        ]);
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($infologin)) {
            return redirect()->route('dashboard')->with('Login_success','Anda Berhasil Login!!');
        }else{
            return redirect('login')->withErrors('Username dan Passsword Salah')->withInput();
        }
    }
    function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
