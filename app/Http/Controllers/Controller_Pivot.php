<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller_Pivot extends Controller
{
      public function index (){
    return view('interface_Pivot');
    }

    public function Latihan (){
  return view('v_LatihanPivot');
  }

    public function record (Request $request){

      $Pivot = new Pivot();

      $Pivot -> id_member = auth()->user()->id;
      $Pivot -> time_training = $request->input('time');
      $Pivot ->save();

      return redirect()
            ->route('KeTutorial');
          }
}
