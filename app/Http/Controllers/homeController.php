<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index (Request $request) {
        return view('pages.home')->with('request', $request);
    }
}
