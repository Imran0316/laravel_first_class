<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    

    public function data(){
        return view('welcome');
    }
    public function check(){
        return view('check');
    }
    public function inform(){
        return view('inform');
    }

}
