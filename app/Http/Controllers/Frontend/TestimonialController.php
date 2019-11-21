<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Auth;
class TestimonialController extends Controller
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
        $user = Auth::user();
      $testimonial = Testimonial::get();
      return view('frontend.pages.users.mytestimonial',compact('testimonial','user'));
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
      $user=Auth::user();
      $testimonial = new Testimonial();
      $testimonial->username = $user->name;
      $testimonial->useremail = $user->name;
      $testimonial->message = $request->message;
      $testimonial->save();
      Toastr::success('Your Testimonial Post Successfully....', 'Success', ["positionClass" => "toast-top-center"]);
      return back();
    }
public function view()
{
  $user=Auth::user();
  return view('frontend.pages.users.post_testimonial',compact('user'));
}
    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }
}
