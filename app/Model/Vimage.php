<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Vimage extends Model
{
  public function vehicle(){
    return $this->belongsTo(Vehicle::class);
  }
}
