<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
  public $table = "video";
    protected $fillable = [
      'id_member', 'video',
      ];
}
