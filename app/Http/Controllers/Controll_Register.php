<?php
//use Illuminate\Http\Request;
//use app\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;


class Controll_Register extends Controller
{
  //$namafile;
    public function index(){
      return view('v_register');
    }
    public function keindex(){
      return view('v_register');
    }
    public function prosesRegister(Request $request){
      //proses pengambilan pwd
      $password = $request->input('password');
      $hashed = bcrypt($password);

      //proses upload fillable
      storage::put(
        'fotoprofiluser/'.Input::get('username').'.jpeg',
        file_get_contents($request->file('foto')->getRealPath())
      );

      $member = new Member();
      $member -> username =$request->input('username');
      $member -> email = $request->input('email');
      $member -> foto_profile = $request->input('username').'.jpeg';
      //  $member -> FOTO_PROFILE ='$namafile';
      $member -> password = $hashed;
      $member->save();

      return redirect()
          	->route('Login');

    }
}
