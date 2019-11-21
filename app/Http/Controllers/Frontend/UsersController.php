<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Brian2694\Toastr\Facades\Toastr;
use Auth;
use User;

class UsersController extends Controller
{
  public function __construct()
  {
       $this->middleware(['auth', 'verified']);
  }
  public function profile()
  {
    $user = Auth::user();
    return view('frontend.pages.users.profile', compact('user'));
  }
  public function update(Request $request)
  {
    $user = Auth::user();

    $this->validate($request, [
      'name' => 'string|max:50',
      'dob' => 'date',
      'email' => 'string|email|max:60|unique:users,email,'.$user->id,
      'country' => 'max:20',
      'city' => 'max:20',
      'phonenumber' => 'max:15|unique:users,phone_no,'.$user->id,
      'address' => 'max:100',
    ]);

    $user->name = $request->name;
    $user->dob = $request->dob;
    $user->email = $request->email;
    $user->country = $request->country;
    $user->city = $request->city;
    $user->phone_no = $request->phonenumber;
    $user->street_address = $request->address;
    $user->save();
     Toastr::success('Updated Successfull....', 'Success', ["positionClass" => "toast-top-center"]);
    return back();
  }

  public function updatepasswordview()
  {
    $user = Auth::user();
    return view('frontend.pages.users.update_password', compact('user'));
  }

  public function updatepassword(Request $request)
  {
    $this->validate($request, [
      'password' => 'max:50|min:7|confirmed'
    ]);
    $user = Auth::user();
    if ($request->password != NULL || $request->password != "") {
      $user->password = Hash::make($request->password);
    }
    $user->save();
       Toastr::success('Password Updated Successfull....', 'Success', ["positionClass" => "toast-top-center"]);

    return back();
  }

}
