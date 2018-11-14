<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passing_Catching extends Model
{
  public $table = "Passing_Catching";
    protected $fillable = [
      'id_member', 'time'
    ];

}
