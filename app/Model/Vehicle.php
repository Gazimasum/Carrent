<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
        public function Vimage(){
        return $this->hasMany(Vimage::class);
      }

        public function Brand(){
        return Brand::where('id',$this->VehiclesBrand)->first()->name;
      }

      public static function totalv()
      {
      $totaluser=Vehicle::count();
      return $totaluser;
      }

}
