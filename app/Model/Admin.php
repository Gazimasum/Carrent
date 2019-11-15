<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{

      /**
       * The attributes that are mass assignable.
       *
       * @var array
       */
      protected $fillable = [
          'name', 'email', 'password', 'remember_token'
      ];

      /**
       * The attributes that should be hidden for arrays.
       *
       * @var array
       */
      protected $hidden = [
          'password', 'remember_token',
      ];

      public function sendPasswordResetNotification($token)
      {
        $this->notify(new AdminPasswordResetNotification($token));
      }

      public static function totalAdmin(){


        $adminno=Admin::where('type','super Admin')->orwhere('type','Admin')->count();
        return $adminno;
      }
}
