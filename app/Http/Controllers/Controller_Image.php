<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class Controller_Image extends Controller
{
    public function getImage($folder, $filename){
      $filename = $folder.'/'.$filename;

      return response(Storage::get($filename), 200)->header('Content-Type', 'image/jpeg');
    }
}
