<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Model\Admin;
use App\User;
use App\Model\Brand;
use App\Model\Vehicle;
use App\Model\Booking;
use App\Model\Pagescontent;
use App\Model\Message;
use App\Model\Contact;


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

 public function pagecontent()
 {
    return view('backend.pages.managepages');

 }

 public function pagescotentupdate(Request $request)
 {
   $content  = Pagescontent::where('types',$request->type)->first();
   $content->details = $request->pgedetails;
   $content->update();
    Toastr::success('Content has updated Successfully..', 'Success', ["positionClass" => "toast-top-center"]);
    return back();
 }


public function viewmessage()
{
  $message = Message::get();
  // foreach ($message as $m) {
  //   $message->status = 1;
  //   $message->save();
  // }

  return view('backend.pages.messageview',compact('message'));
}


public function seenmessage($id)
{
  $message = Message::find($id);
  $message->status=1;
  $message->update();
  Toastr::success('Message Seen..', 'Success', ["positionClass" => "toast-top-center"]);
  return back();
}


public function reguser()
{
  $user = User::get();
  return view('backend.pages.userview',compact('user'));
}

public function contactview()
{
  $c = Contact::find(1)->first();
  return view('backend.pages.updatecontact',compact('c'));
}
public function contactupdate(Request $r,$id)
{
    $c = Contact::find(1);
    $c->email = $r->email;
    $c->phone = $r->phone;
    $c->address = $r->address;
    $c->update();
    Toastr::success('Contact Information Updated..', 'Success', ["positionClass" => "toast-top-center"]);
    return back();

}

public function chngpassview()
{
  return view('backend.pages.changepassword');
}
}
