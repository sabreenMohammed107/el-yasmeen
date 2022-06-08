<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {


        return view('index');
    }

    public function gallery(){
        return view('gallery');
    }
}
