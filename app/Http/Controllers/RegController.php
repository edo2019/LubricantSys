<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegController extends Controller
{
    public function index(Request $request)
    {

        return view('reg');
    }
}
