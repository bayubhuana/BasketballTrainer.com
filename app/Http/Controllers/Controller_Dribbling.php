<?php

namespace App\Http\Controllers;
use App\Dribbling;
use Illuminate\Http\Request;

class Controller_Dribbling extends Controller
{
      public function index (){
    return view('interface_Dribbling');
    }

      public function Latihan (){
    return view('v_LatihanDribbling');
    }

      public function record (Request $request){

        $Dribbling = new Dribbling();

        $Dribbling -> id_member = auth()->user()->id;
        $Dribbling -> time_training = $request->input('time');
        $Dribbling->save();

        return redirect()
              ->route('KeTutorial');
            }
}
