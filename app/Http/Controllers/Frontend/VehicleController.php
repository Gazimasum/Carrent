<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Vehicle;
use App\Model\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     * @param  \App\Model\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
      $vehicle = Vehicle::where('slug',$slug)->first();
      $samevehicles = Vehicle::where('VehiclesBrand',$vehicle->VehiclesBrand)->get();
      return view('frontend.pages.vehicles_details',compact('vehicle','samevehicles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        //
    }
    public function search(Request $r)
    {
      $type = $r->fueltype;
      $brand = $r->brand;
      $vehicle = Vehicle::where('VehiclesBrand',$brand)->where('FuelType',$type)->paginate(6);
      $vehiclecount=Vehicle::where('VehiclesBrand',$brand)->where('FuelType',$type)->count();
      $recentvehicle = Vehicle::orderby('id','desc')->paginate(3);
      if ($vehiclecount!=null) {
        Toastr::success(''.$vehiclecount.' car Available in your filter', 'Success', ["positionClass" => "toast-top-center"]);
          return view('frontend.pages.carlisting')->with('vehicle', $vehicle)->with('recentvehicle', $recentvehicle)->with('vehiclecount', $vehiclecount);
      }
      else {
        Toastr::error('No Car Available in your filter....', 'Error', ["positionClass" => "toast-top-center"]);

      return redirect()->route('car_list');
      }
    }


}
