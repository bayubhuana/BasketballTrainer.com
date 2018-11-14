<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rebound extends Model
{
  public $table = "rebound";
    protected $fillable = [
      'id_member', 'time'
    ];

}
