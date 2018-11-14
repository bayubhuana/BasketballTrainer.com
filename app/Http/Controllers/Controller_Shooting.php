<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_Shooting extends Controller
{
    public function index (){
  return view('interface_Shooting');
  }

  public function Latihan (){
return view('v_LatihanShooting');
}

  public function record (Request $request){

    $Shooting = new Shooting();

    $Shooting -> id_member = auth()->user()->id;
    $Shooting -> time_training = $request->input('time');
    $Shooting->save();

    return redirect()
          ->route('KeTutorial');
        }
}
