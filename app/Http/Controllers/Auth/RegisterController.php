<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\User;
use App\Notifications\VerifyRegistration;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    use RegistersUsers;
    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone'=>['required','min:11','max:15','unique:users'],
            'email' => ['required', 'string', 'email:rfc', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:7', 'confirmed'],
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
protected function register(Request $request)
    {

      $this->validate($request, [
        'name' => 'required| string| max:255',
        'phone_no'=>'required|min:11|max:15|unique:users',
        'email' => 'required| string| email:rfc| max:255| unique:users',
        'password' => 'required| string| min:7| confirmed',
      ]);

$random = Str::random(40);
  $userr=User::where('email',$request->email)->first();
  if (is_null($userr)) {
    $userr=User::where('phone_no',$request->phone_no)->first();
    if (is_null($userr)) {
          $user = User::create([
            'name' => $request->name,
            'phone_no' => $request->phone_no,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'remember_token'  =>str_random(50),
            'status'  => 0,
          ]);
          $user->notify(new VerifyRegistration($user));

          Toastr::success('A confirmation email has sent to you.. Please check and confirm your email', 'success', ["positionClass" => "toast-top-center"]);
          return redirect('/');
        }
    else {
      Toastr::warning('Phone Already in Used..', 'warning', ["positionClass" => "toast-top-center"]);
      return redirect('/');
    }
  } else {
      Toastr::warning('Email Already in Used..', 'warning', ["positionClass" => "toast-top-center"]);
    return redirect('/');
  }
    }
}
