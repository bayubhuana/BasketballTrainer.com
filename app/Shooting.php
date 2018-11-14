<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shooting extends Model
{
  public $table = "shooting";
    protected $fillable = [
      'id_member', 'time'
    ];

}
