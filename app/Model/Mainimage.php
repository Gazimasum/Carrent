<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Mainimage extends Model
{
  public function vehicle(){
    return $this->belongsTo(Vehicle::class);
  }
}
