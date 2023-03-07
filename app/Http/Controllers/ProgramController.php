<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function program()
    {
        return view('program');
    }

    public function program2(){
        
        return view('program2');
    }

    public function program3(){
        return view('program3');
    }
}
