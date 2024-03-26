<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class halamanController extends Controller
{
    public function home()
    {
        return view('home');   
    }
}
