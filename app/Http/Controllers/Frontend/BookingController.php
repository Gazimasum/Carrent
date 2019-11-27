<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\BookingNotification;
use Brian2694\Toastr\Facades\Toastr;
use Auth;
use App\Model\Admin;
class BookingController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
      $booking = new Booking();
      $user = Auth::user();

      $booking->message = $request->message;
      $booking->from_date = $request->fromdate;
      $booking->to_date = $request->todate;
      $booking->vehicle_id = $id;

      if (Auth::check()) {
        $booking->useremail = $user->email;
        $booking->user_id = $user->id;
      }

  //    session()->flash('success', 'Booking Success');
// $user->notify(new InvoicePaid($invoice));
if ($booking->save()) {
  // code...

      $admin = Admin::get();
      foreach ($admin as $a) {
        $a->notify(new BookingNotification);
      }
       Toastr::success('Booking Success wait for our call....', 'Success', ["positionClass" => "toast-top-center"]);
          return redirect()->route('index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }

    public function mybooking()
    {
      $user = Auth::user();
     $booking = Booking::where('user_id',$user->id)->paginate(4);
     return view('frontend.pages.users.my_booking',compact('booking','user'));
    }
}
