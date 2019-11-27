<?php

namespace App\Http\Controllers\Backend;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;
use Auth;

class AdminController extends Controller
{

  public function __construct()
 {
   $this->middleware('auth:admin');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }

  //   public function passwordupdate(Request $request)
  //   {
  //     $this->validate($request, [
  //       // 'oldpassword' => 'required',
  //       'password' => 'required|max:7|confirmed',
  //     ]);
  //   //     $admin = Auth::admin();
  //   //     $a= Admin::find($admin->id);
  //   //     $oldpass=Hash::make($r->oldpassword);
  //   //     if($a->password==$oldpass){
  //   //       $a->password =  Hash::make($r->newpassword);
  //   //       $a->update();
  //   //         Toastr::success('Password Updated..', 'Success', ["positionClass" => "toast-top-center"]);
  //   //         return back();
  //   // }
  //
  //   $admin = Auth::user();
  //   if ($request->password != NULL || $request->password != "") {
  //     $admin->password = Hash::make($request->password);
  //   }
  //   $admin->save();
  //   session()->flash('success', 'Password Change Successfully...');
  // return redirect('/admin/home');
  // }

  public function adminupdateview()
  {

    return view('backend.pages.profileupdate');
  }

  public function profileUpdate(Request $request)
  {
    $this->validate($request, [
        //'oldpassword' => 'required',
          'password' => 'required|min:7|confirmed',
        ]);
    $admin = Auth::user();
    if ($request->password != NULL || $request->password != "") {
      $admin->password = Hash::make($request->password);
    }
    $admin->save();
    Toastr::success('Password Change Successfully...', 'Success', ["positionClass" => "toast-top-center"]);
    return redirect('/admin/home');
  }
}
