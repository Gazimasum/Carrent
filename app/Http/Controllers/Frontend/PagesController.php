<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Vehicle;
use App\Model\Brand;
use App\Model\Testimonial;
use App\Model\Pagescontent;

class PagesController extends Controller
{
  public function index()
  {
    $vehicle = Vehicle::all();
    $testimonial = Testimonial::where('status',1)->get();
 return view('frontend.pages.index',compact('vehicle','testimonial'));
  }


  public function about_us()
  {
    $about = Pagescontent::where('types','aboutus')->get();
    return view('frontend.pages.about_us',compact('about'));
  }


  public function car_list()
  {
    $vehicle=Vehicle::all();
    $vehiclecount=Vehicle::all()->count();
    $recentvehicle = Vehicle::orderby('id','desc')->get();
    return view('frontend.pages.carlisting',compact('vehicle','recentvehicle','vehiclecount'));
  }


  public function search(Request $request){
    $search=$request->search;
    $brand_id=0;
    $brand=Brand::where('name','like','%'.$search.'%')->first();
    if ($brand!=null) {
      $brand_id=$brand->id;
    } else {
      $brand_id=0;
    }
    $vehicle = Vehicle::orWhere('VehiclesTitle','like','%'.$search.'%')
    ->orWhere('VehiclesBrand',$brand_id)
    ->orWhere('FuelType','like','%'.$search.'%')
    ->orWhere('PricePerDay','like','%'.$search.'%')
    ->orderBy('id','desc')
    ->get();

    $recentvehicle = Vehicle::orderby('id','desc')->get();

    $vehiclecount = Vehicle::orWhere('VehiclesTitle','like','%'.$search.'%')
    ->orWhere('VehiclesBrand',$brand_id)
    ->orWhere('FuelType','like','%'.$search.'%')
    ->orWhere('PricePerDay','like','%'.$search.'%')
    ->count();

    return view('frontend.pages.carlisting',compact('vehicle','recentvehicle','vehiclecount'));
  }

  public function privacy()
  {
    $privacy = Pagescontent::where('types','privacy')->get();
    return view('frontend.pages.privecy',compact('privacy'));
  }
  public function faqs()
  {
    $faqs = Pagescontent::where('types','faqs')->get();
    return view('frontend.pages.faqs',compact('faqs'));
  }
  public function terms()
  {
    $terms = Pagescontent::where('types','terms')->get();
    return view('frontend.pages.terms',compact('terms'));
  }
}
