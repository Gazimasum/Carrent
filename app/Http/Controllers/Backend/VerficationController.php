<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Admin;

class VerficationController extends Controller
{



  public function verify($token)
  {
    $admin = Admin::where('remember_token', $token)->first();
    if (!is_null($admin)) {
      $admin->remember_token = NULL;
      $admin->save();
      session()->flash('success', 'You are registered successfully !! Login Now');
      return redirect('/admin/login');
    }else {
    session()->flash('errors', 'Sorry !! Your token is not matched !!');
      return redirect('/admin/register');
    }

  }
}
