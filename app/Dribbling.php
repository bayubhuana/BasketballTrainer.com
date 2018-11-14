<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dribbling extends Model
{
  public $table = "dribbling";
    protected $fillable = [
      'id_member', 'time'
    ];
}
