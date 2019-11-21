<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin;
use App\Model\Brand;
use App\Model\Vehicle;
use App\Model\Booking;


class PagesController extends Controller
{
  public function __construct()
 {
   $this->middleware('auth:admin');
 }

 public function index(){
   return view('backend.pages.index');
 }
 public function createbrand()
 {
   return view('backend.pages.brands.create');
 }

 public function managebrand()
 {
   $brands = Brand::get();
   return view('backend.pages.brands.manage',compact('brands'));
 }

 public function editbrand($id)
 {
   $brands = Brand::find($id);
   return view('backend.pages.brands.edit',compact('brands'));
 }

 public function createvehicle()
 {
   $brands=Brand::all();
   return view('backend.pages.vehicle.create',compact('brands'));
 }
 public function editvehicle($id)
 {
   $vehicles=Vehicle::find($id);
   $brands=Brand::all();
   return view('backend.pages.vehicle.edit',compact('vehicles','brands'));
 }
 public function bookingview()
 {

   $booking=Booking::all();
   return view('backend.pages.managebooking',compact('booking'));
 }


}
