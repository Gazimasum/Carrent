<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Notifications\VerifyRegistration;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Auth;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
      $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required',
      ]);

      //Find User by this email
      $user = User::where('email', $request->email)->first();
    if (!is_null($user)) {
      if ($user->status == 1) {
        // login This User

        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
          // Log Him Now
          Toastr::success('Successfully Login..', 'Success', ["positionClass" => "toast-top-center"]);
          return redirect()->intended(route('index'));
        }else {
          Toastr::error('Wrong Password!!', 'Error', ["positionClass" => "toast-top-center"]);
          return back();
        }
      }else {
        // Send him a token again
        if (!is_null($user)) {
          $user->notify(new VerifyRegistration($user));
          Toastr::success('A New confirmation email has sent to you.. Please check and confirm your email', 'Success', ["positionClass" => "toast-top-center"]);

          return redirect('/');
        }else {
          Toastr::warning('Please login first !!', 'warning', ["positionClass" => "toast-top-center"]);

          return redirect()->route('login');
        }
      }}
      else {
          Toastr::error('Invalid Login!! You have No account in this Email.. ', 'warning', ["positionClass" => "toast-top-center"]);

        return back();
      }

    }
}
