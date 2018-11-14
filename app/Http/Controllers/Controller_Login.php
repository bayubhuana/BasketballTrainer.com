<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Illuminate\Support\Facades\Input;


class Controller_Login extends Controller
{
    public function index (){
  return view('v_Login');
  }

  public function prosesLogin (Request $request){
    $member = Member::where('username', $request->input('username'));
    if(!($member->count() >= 1)){
      return "usrname ngga ada";
    }

    $member = $member->first();
    if($member->checkPassword($request->input('password'))){
      auth()->login($member); //simpen ke ssesion login
      //return "sukses login";
      return redirect()->route('KeTutorial'); //ini redirect ke halaman login
    }

    return "gagal login cuy";
      //$namapengakses = auth()->user()->username;
    //return redirect()->route();//ini redirect ke halaman home karena salah password
    //$user = User::find($request->input('id'));
  }

  public function prosesLogout(){
    auth()->logout();
    return redirect()->route('Login');

  }

}
