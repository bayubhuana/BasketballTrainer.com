<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_Profile extends Controller
{
    public function index(){
        return view ('v_Profile');
    }
}
