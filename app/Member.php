<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class Member extends Authenticatable{
    public $table = "member";
  protected $fillable = [
      'username', 'email', 'password','foto_profile'
  ];

  public function checkPassword($password)
  {
    return Hash::check($password, $this->password);
  }

  public function Dribbling()
  {
    return $hasMany(Dribbling::class);
  }

  public function Pivot()
  {
    return $hasMany(Pivot::class);
  }
  public function Shooting()
    {
      return $hasMany(Shooting::class);
    }
  public function Passing_Catching()
      {
        return $hasMany(Passing_Catching::class);
      }
  public function Rebound()
        {
          return $hasMany(Rebound::class);
        }
}
