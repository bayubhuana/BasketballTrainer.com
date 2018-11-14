<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Controller_VideoUser extends Controller
{

  public function getVideo($folder, $filename){
    $filename = $folder.'/'.$filename;
    return response(Storage::get($filename), 200)->header('Content-Type', 'video/mp4');
  }

}
