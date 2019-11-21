<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

use App\User;

class VerficationController extends Controller
{
    public function verify($token)
    {
      $user = User::where('remember_token', $token)->first();
      if (!is_null($user)) {
        $user->status = 1;
        $user->remember_token = NULL;
        $user->save();
          Toastr::success('You are registered successfully !! Login Now', 'Success', ["positionClass" => "toast-top-center"]);

        return back();
      }else {
          Toastr::error('Sorry !! Your token is not matched !!', 'Error', ["positionClass" => "toast-top-center"]);

        return back();
      }

    }
}
