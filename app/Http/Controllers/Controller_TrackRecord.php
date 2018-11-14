<?php

namespace App\Http\Controllers;

use App\Member;
use App\Dribbling;
use App\Pivot;
use App\Shooting;
use App\Rebound;
use App\Passing_Catching;
use App\M_TrackRecord;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class Controller_TrackRecord extends Controller
{
    public function index (){
      return view('v_TrackRecord');
    //return view ()
      //return view ('v_TrackRecord', compact ('t_Dribbling','t_Pivot','t_Passing_Catching','t_Shooting','t_Rebound'));
      //->with($data);
    }

    public function ViewRecording (){
        //$totaltime = auth()->user()->Pivot->sum('time_training');
        $Dribbling = Dribbling::where('id_member',auth()->user()->id)->get();
        $Pivot = Pivot::where('id_member',auth()->user()->id)->get();
        $Passing_Catching = Passing_Catching::where('id_member',auth()->user()->id)->get();
        $Shooting = Shooting::where('id_member',auth()->user()->id)->get();
        $Rebound = Rebound::where('id_member',auth()->user()->id)->get();


        $t_Dribbling = $Dribbling -> sum('time_training') ;
        $t_Pivot = $Pivot -> sum('time_training') ;
        $t_Passing_Catching = $Passing_Catching -> sum('time_training') ;
        $t_Shooting = $Shooting -> sum('time_training') ;
        $t_Rebound = $Rebound -> sum('time_training') ;
        //return view ('v_TrackRecord', compact ('t_Dribbling'));
          return view ('v_TrackRecord', compact ('t_Dribbling','t_Pivot','t_Passing_Catching','t_Shooting','t_Rebound'));
      }

      public function reset (){
          //$totaltime = auth()->user()->Pivot->sum('time_training');
          $Dribbling = Dribbling::where('id_member',auth()->user()->id)->get();
          $Pivot = Pivot::where('id_member',auth()->user()->id)->get();
          $Passing_Catching = Passing_Catching::where('id_member',auth()->user()->id)->get();
          $Shooting = Shooting::where('id_member',auth()->user()->id)->get();
          $Rebound = Rebound::where('id_member',auth()->user()->id)->get();

          foreach ($Dribbling as $d) {
            $d->delete();
          }

          foreach ($Pivot as $d) {
            $d->delete();
          }
          foreach ($Passing_Catching as $d) {
            $d->delete();
          }
          foreach ($Shooting as $d) {
            $d->delete();
          }
          foreach ($Rebound as $d) {
            $d->delete();
          }

          $t_Dribbling = $Dribbling -> sum('time_training') ;
          $t_Pivot = $Pivot -> sum('time_training') ;
          $t_Passing_Catching = $Passing_Catching -> sum('time_training') ;
          $t_Shooting = $Shooting -> sum('time_training') ;
          $t_Rebound = $Rebound -> sum('time_training') ;

          return redirect()
                ->route('KeTrackRecord');

          //return view ('v_TrackRecord', compact ('t_Dribbling','t_Pivot','t_Passing_Catching','t_Shooting','t_Rebound'));  }

    }
}
