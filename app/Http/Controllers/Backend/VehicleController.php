<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Model\Brand;
use App\Model\Vehicle;
use App\Model\Vimage;
use Image;


class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $vehicles = Vehicle::get();
      return view('backend.pages.vehicle.manage',compact('vehicles'));

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
      $this->validate($request,
         ['vehicletitle' => 'required',
         'brandname' => 'required',
         'vehicleoverview' => 'required|max:255',
         'priceperday'=>'required',
        'fueltype'=>'required',
        'modelyear'=>'required',
        'filename'=>'required',

       ],
       [
       'vehicletitle.required'=>"Please Provide a Title Name.",
       'vehicleoverview.max'=>"Please Provide maximum 250 word.",
     ]);

     $v=new Vehicle();
     $v->vehiclestitle=$request->vehicletitle;
     $v->vehiclesbrand=$request->brandname;
     $v->vehiclesoverview=$request->vehicleoverview;
     $v->priceperday=$request->priceperday;
     $v->fueltype=$request->fueltype;
     $v->modelyear=$request->modelyear;

     if($request->seatingcapacity!=null)
     $v->seatingcapacity = $request->seatingcapacity;
     else
        $v->seatingcapacity = 0;

        if($request->airconditioner!=null)
     $v->airconditioner = $request->airconditioner;
     else
        $v->airconditioner = 0;

        if($request->powerdoorlocks!=null)
     $v->powerdoorlocks = $request->powerdoorlocks;
     else
        $v->powerdoorlocks = 0;

        if($request->antilockbrakingsys!=null)
     $v->antilockbrakingsystem= $request->antilockbrakingsys;
     else
        $v->antilockbrakingsystem = 0;

        if($request->brakeassist!=null)
     $v->brakeassist = $request->brakeassist;
     else
        $v->brakeassist = 0;

        if($request->powersteering!=null)
     $v->powersteering = $request->powersteering;
     else
        $v->powersteering = 0;

        if($request->driverairbag!=null)
     $v->driverairbag = $request->driverairbag;
     else
        $v->driverairbag = 0;

        if($request->passengerairbag!=null)
     $v->passengerairbag = $request->passengerairbag;
     else
        $v->passengerairbag = 0;

        if($request->powerwindow!=null)

     $v->powerwindows = $request->powerwindow;
     else
        $v->powerwindows = 0;

        if($request->cdplayer!=null)
     $v->cdplayer = $request->cdplayer;
     else
        $v->cdplayer = 0;

        if($request->centrallocking!=null)
     $v->centrallocking = $request->centrallocking;
     else
        $v->centrallocking = 0;

        if($request->crashcensor!=null)
     $v->crashsensor = $request->crashcensor;
     else
        $v->crashsensor = 0;

        if($request->leatherseats!=null)
     $v->leatherseats = $request->leatherseats;
     else
        $v->leatherseats = 0;
     $v->save();

     if (count($request->filename)>0) {
       foreach ($request->filename as $image) {
        // $image= $request->file('user_image');
         $img=time().'.'.$image->getClientOriginalExtension();
         $location= public_path('admin/img/vehicleimages/'.$img);
         Image::make($image)->save($location);
         $vimage = new Vimage;
         $vimage->vehicle_id = $v->id;
         $vimage->image= $img;
         $vimage->save();
       }
     }


     // session()->flash('success',('A New Brand Added Successfully..'));
   Toastr::success('A New Vehicle Added Successfully..', 'Success', ["positionClass" => "toast-top-center"]);
    //  Toastr::success('message', 'Category add successfully!');
     return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $v=Vehicle::find($id);

      $v->vehiclestitle=$request->vehicletitle;
      $v->vehiclesbrand=$request->brandname;
      $v->vehiclesoverview=$request->vehicleoverview;
      $v->priceperday=$request->priceperday;
      $v->fueltype=$request->fueltype;
      $v->modelyear=$request->modelyear;

      if($request->seatingcapacity!=null)
      $v->seatingcapacity = $request->seatingcapacity;
      else
         $v->seatingcapacity = 0;

         if($request->airconditioner!=null)
      $v->airconditioner = $request->airconditioner;
      else
         $v->airconditioner = 0;

         if($request->powerdoorlocks!=null)
      $v->powerdoorlocks = $request->powerdoorlocks;
      else
         $v->powerdoorlocks = 0;

         if($request->antilockbrakingsys!=null)
      $v->antilockbrakingsystem= $request->antilockbrakingsys;
      else
         $v->antilockbrakingsystem = 0;

         if($request->brakeassist!=null)
      $v->brakeassist = $request->brakeassist;
      else
         $v->brakeassist = 0;

         if($request->powersteering!=null)
      $v->powersteering = $request->powersteering;
      else
         $v->powersteering = 0;

         if($request->driverairbag!=null)
      $v->driverairbag = $request->driverairbag;
      else
         $v->driverairbag = 0;

         if($request->passengerairbag!=null)
      $v->passengerairbag = $request->passengerairbag;
      else
         $v->passengerairbag = 0;

         if($request->powerwindow!=null)

      $v->powerwindows = $request->powerwindow;
      else
         $v->powerwindows = 0;

         if($request->cdplayer!=null)
      $v->cdplayer = $request->cdplayer;
      else
         $v->cdplayer = 0;

         if($request->centrallocking!=null)
      $v->centrallocking = $request->centrallocking;
      else
         $v->centrallocking = 0;

         if($request->crashcensor!=null)
      $v->crashsensor = $request->crashcensor;
      else
         $v->crashsensor = 0;

         if($request->leatherseats!=null)
      $v->leatherseats = $request->leatherseats;
      else
         $v->leatherseats = 0;
      $v->save();

        Toastr::success('Vehicle has updated Successfully..', 'Success', ["positionClass" => "toast-top-center"]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id){

          $vehicle=Vehicle::find($id);
          if (!Is_null($vehicle)) {

            $vehicle->delete();
          }
           foreach ($vehicle->Vimage as $img) {
              // code...

            $file_name=$img->image;
            if (file_exists("admin/img/vehicleimages/".$file_name)) {
              // code...
              unlink("admin/img/vehicleimages/".$file_name);
            }
              $img->delete();
            }
         // session()->flash('success','brand has deleted Successfully..');
          Toastr::success(' Vehicle Deleted Successfully..', 'Success', ["positionClass" => "toast-top-center"]);
          return back();
        }

        public function changeimage(Request $request,$id)
        {

            $image=$request->image;
             // $image= $request->file('user_image');
              $img=time().'.'.$image->getClientOriginalExtension();
              $location= public_path('admin/img/vehicleimages/'.$img);
              Image::make($image)->save($location);
              $vimage = Vimage::find($id);
              $vimage->image= $img;
              $vimage->save();
              Toastr::success(' Image Changes Successfully..', 'Success', ["positionClass" => "toast-top-center"]);
              return back();

        }


}
