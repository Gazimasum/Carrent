<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
  public static function totalbooking()
  {
  $totaluser=Booking::count();
  return $totaluser;
  }

}
