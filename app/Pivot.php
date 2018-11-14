<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pivot extends Model
{
  public $table = "pivot";
    protected $fillable = [
      'id_member', 'time'
    ];

}
