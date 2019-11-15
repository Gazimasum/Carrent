<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
  public static function totalbrand()
  {
  $totalbrand=Brand::count();
  return $totalbrand;
  }

}
