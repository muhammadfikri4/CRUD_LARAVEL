<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function index(Request $request) {
        return view('pages.about')->with('request', $request);;
    }
}
