<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_Rebound extends Controller
{
    public function index (){
  return view('interface_Rebound');
  }

  public function Latihan (){
return view('v_LatihanRebound');
}

  public function record (Request $request){

    $Rebound = new Rebound();

    $Rebound -> id_member = auth()->user()->id;
    $Rebound -> time_training = $request->input('time');
    $Rebound->save();

    return redirect()
          ->route('KeTutorial');
        }
}
