<?php

namespace App\Http\Controllers;
use App\Passing_Cacthing;
use Illuminate\Http\Request;

class Controller_Passing_Catching extends Controller
{
      public function index (){
    return view('interface_PassCacth');
    }

    public function Latihan (){
  return view('v_LatihanPassing');
  }

    public function record (Request $request){

      $Passing = new Passing_Cacthing();

      $Passing -> id_member = auth()->user()->id;
      $Passing -> time = $request->input('time');
      $Passing ->save();

      return redirect()
            ->route('KeTutorial');
          }
}
