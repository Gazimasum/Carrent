<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Notifications\BookingConfirmNotification;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Model\Booking;
use App\User;

class BookingController extends Controller
{
  public function __construct()
 {
   $this->middleware('auth:admin');
 }

    public function confirm($id)
    {
      $booking = Booking::find($id);
      $booking->status=1;

      if ($booking->save()) {
        $user = User::find($booking->user_id);
          $user->notify(new BookingConfirmNotification);
          Toastr::success('Notification Send To Customer....', 'Success', ["positionClass" => "toast-top-center"]);
        return back();
      }


    }
    public function notconfirm($id)
    {
      $booking = Booking::find($id);
      $booking->status=0;
      $booking->save();
      return back();
    }
    public function cancle($id)
    {
      $booking = Booking::find($id);
      $booking->status=2;
      $booking->save();
      return back();
    }
}
