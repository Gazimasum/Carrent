<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Booking extends Model
{
  public static function totalbooking()
  {
  $totalbook=Booking::count();
  return $totalbook;
  }
//   public function Vehicle(){
//   return Vehicle::where('id',$this->vehicle_id)->first();
// }
public function vehicle(){
  return $this->belongsTo(Vehicle::class);
}
public function user(){
  return $this->belongsTo(User::class);
}


public static function totalnewbook()
{
$totalbook = Booking::where('status',0)->count();
return $totalbook;
}
}
