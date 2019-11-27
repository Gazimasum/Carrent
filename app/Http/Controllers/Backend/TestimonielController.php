<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Model\Testimonial;

class TestimonielController extends Controller
{

  public function __construct()
 {
   $this->middleware('auth:admin');
 }

public function testimoniealview()
{
$testimonial = Testimonial::get();
return view('backend.pages.testimonieal',compact('testimonial'));
}
public function testimoniealactive($id)
{
  $testimonial = Testimonial::find($id);
  $testimonial->status = 1;
  $testimonial->save();
   Toastr::success('Active Successfully..', 'Success', ["positionClass" => "toast-top-center"]);
  return back();
}
public function testimoniealdeactive($id)
{
$testimonial = Testimonial::find($id);
$testimonial->status = 0;
$testimonial->save();
 Toastr::success('Deactive Successfully..', 'Success', ["positionClass" => "toast-top-center"]);
return back();
}
}
