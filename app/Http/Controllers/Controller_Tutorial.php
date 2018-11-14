<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_Tutorial extends Controller
{
  public function index (){
      return view ('v_Tutorial');
  }
}
