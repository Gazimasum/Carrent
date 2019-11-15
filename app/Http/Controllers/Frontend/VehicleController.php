<?php

namespace App\Http\Controllers\Frontend;

use App\Model\Vehicle;
use App\Model\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $vehicle = Vehicle::where('id',$id)->first();
        $samevehicles = Vehicle::where('VehiclesBrand',$vehicle->VehiclesBrand)->get();
        return view('frontend.pages.vehicles_details',compact('vehicle','samevehicles'));
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
    public function show(Vehicle $vehicle)
    {
        //
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
      $vehicle = Vehicle::where('VehiclesBrand',$brand)->where('FuelType',$type)->get();
      $vehiclecount=Vehicle::where('VehiclesBrand',$brand)->where('FuelType',$type)->count();
      $recentvehicle = Vehicle::orderby('id','desc')->get();
      if ($vehiclecount!=null) {
          return view('frontend.pages.carlisting')->with('vehicle', $vehicle)->with('recentvehicle', $recentvehicle)->with('vehiclecount', $vehiclecount);
      }
      else {
        session()->flash('sticky_error', 'No Car available...');
      return redirect()->route('car_list');
      }
    }


}
