<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use App\Video;
class Controller_Video extends Controller
{
    public function index()
    {
      $data=Video::orderBy('id','desc')->get();
      return view('v_Video_Tutorial' ,compact('data'));
    }

    public function v_UploadVideo()
    {
      return view('v_UploadVideo');
  }

    public function UploadingVideo(Request $request)
    {
      $filename = md5(date('Y-m-d h:i:s').auth()->user()->id.rand(10,999)).'.mp4';

      $file = $request->file('video');
      $path = public_path().'/videoUser/';

      $file->move($path, $filename);

      $video = new Video();
      $video-> id_member= auth()->user()->id;
      $video-> video = 'videoUser/'.$filename;
      $video->save();

      return redirect()
          	->route('keVideoTutorial');



    }
}
