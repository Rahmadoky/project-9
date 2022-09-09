<?php

namespace App\Http\Controllers;
use Auth;


class AuthController extends controller

{
    function showlogin(){
        return view('login');
    }

    // function loginProcess(){
    //     if(Auth()::attempt(['email' => request('email'), 'password' => request('password')])){
    //         return redirect('beranda')->with('success', 'Login Berhasil');
    //     }else{
    //         return back()->with('danger', 'Login Gagal, Cek Email dan Password Anda');
    //     }

    // }

    function loginProcess(){
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            return redirect('beranda')->with('succes', 'Login Berhasil');
        }else{
            return back()->with('danger', 'Login Gagal, Cek Email dan Password Anda');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('beranda');

    }

    function registration(){

    }

    function forgotPassword(){

    }
}