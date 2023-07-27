<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class registerController extends Controller
{
    public function index() {
        return view('Auth.register');
    }

    public function strike(Request $request) {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email:dns',
            'password' => 'required|string|min:5'
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' =>bcrypt ($request->input('password'))
        ]);

        return to_route('login');
    }
}
