<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index(){
        return view('Auth.login');
    }

    public function actionLogin(Request $request) {
        $credential = $request->validate([
            'email'=> ['required', 'email'],
            'password'=> ['required']
        ]);

        if(Auth::attempt($credential)) {
            $request->session()->regenerate();
            // return redirect('home');
            return redirect('/dashboard');
        } else {
            Session::flash('error', "Email atau Password salah!");
            return redirect('login')->withErrors('Email atau Password salah!');
        }
    }
}
