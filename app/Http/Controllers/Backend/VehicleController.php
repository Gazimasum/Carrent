<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Brian2694\Toastr\Facades\Toastr;
use App\Model\Brand;
use App\Model\Vehicle;
use App\Model\Mainimage;
use App\Model\Vimage;

use Image;
use File;


class VehicleController extends Controller
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
         'vehicleoverview' => 'required',
         'priceperday'=>'required',
        'fueltype'=>'required',
        'modelyear'=>'required',
        'filename'=>'required',
        'image' =>'required',
        'filename'=>'required',

       ],
       [
       'vehicletitle.required'=>"Please Provide a Title Name.",
       // 'vehicleoverview.max'=>"Please Provide maximum 500 word.",
     ]);

     $v=new Vehicle();
     $v->vehiclestitle=$request->vehicletitle;
     $v->vehiclesbrand=$request->brandname;
     $v->slug=Str::slug($request->vehicletitle, '-');
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

     // if ($request->image!=>null) {
     //
     //    // $image= $request->file('user_image');
     //     $img=time().'.'.$image->getClientOriginalExtension();
     //     $location= public_path('images/vehicle/mainimages/'.$img);
     //     Image::make($image)->save($location);
     //     $image_resize->resize(300, 300);
     //     $mainimage = new Mainimage;
     //     $mainimage->vehicle_id = $v->id;
     //     $mainimage->image= $img;
     //     $mainimage->save();
     //
     // }

     if($request->hasFile('image')) {

         $image       = $request->file('image');
         $filename    = time().'.'.$image->getClientOriginalExtension();

         $image_resize = Image::make($image->getRealPath());
         $image_resize->resize(356, 278);
         $image_resize->save(public_path('images/vehicle/mainimages/' .$filename));
         $mainimage = new Mainimage();
         $mainimage->vehicle_id = $v->id;
         $mainimage->image= $filename;
         $mainimage->save();

     }

     if($request->hasfile('filename'))
      {
         foreach($request->file('filename') as $image)
         {

             $name=time().".".$image->getClientOriginalName();
             $image->move(public_path().'/images/vehicle/', $name);
              $form= new Vimage();
           $form->image=$name;
           $form->vehicle_id=$v->id;
           $form->save();
         }
      }


     // session()->flash('success',('A New Brand Added Successfully..'));
   Toastr::success('A New Vehicle Added Successfully..', 'Success', ["positionClass" => "toast-top-center"]);
    //  Toastr::success('message', 'Category add successfully!');
      return redirect()->route('admin.vehicle.manage');
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
      if($v!=null){
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
      $v->update();


        Toastr::success('Vehicle has updated Successfully..', 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.vehicle.manage');
      }
        else {
          Toastr::error('Vehicle has not Found ..', 'Error', ["positionClass" => "toast-top-center"]);
          return back();
        }
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

            $filename = $vehicle->mainimage->image;
            if(File::exists('images/vehicle/mainimages/'.$filename)){
              File::delete('images/vehicle/mainimages/'.$filename);
            }
              // $mainimage->delete();
           foreach ($vehicle->Vimage as $img) {
              // code...
            $file_name=$img->image;
            if(File::exists('images/vehicle/'.$file_name)){
              File::delete('images/vehicle/'.$file_name);
            }
            }
            if (!Is_null($vehicle)) {
              $vehicle->delete();
               }


          Toastr::success(' Vehicle Deleted Successfully..', 'Success', ["positionClass" => "toast-top-center"]);
          return back();
    }

        public function changemainimage(Request $request,$id)
        {

          $mainimage = Mainimage::find($id);

          if(File::exists('images/vehicle/mainimages/'.$mainimage->image)){
            File::delete('images/vehicle/mainimages/'.$mainimage->image);
          }

          $image       = $request->file('mainimage');
          $filename    = time().'.'.$image->getClientOriginalExtension();

          $image_resize = Image::make($image->getRealPath());
          $image_resize->resize(356, 278);
          $image_resize->save(public_path('images/vehicle/mainimages/' .$filename));

              $mainimage->image= $filename;
              $mainimage->save();
              Toastr::success('Mainimage Image Changes Successfully..', 'Success', ["positionClass" => "toast-top-center"]);
              return back();

        }
        public function changeimage(Request $request,$id)
        {

            $image=$request->image;
             // $image= $request->file('user_image');
              $img=time().'.'.$image->getClientOriginalExtension();
              $image_resize = Image::make($image->getRealPath());
              $image_resize->resize(700, 560);
              $image_resize->save(public_path('images/vehicle/' .$img));
              $vimage = Vimage::find($id);

              if(File::exists('images/vehicle/'.$vimage->image)){
                File::delete('images/vehicle/'.$vimage->image);
              }

              $vimage->image= $img;
              $vimage->save();
              Toastr::success(' Image Changes Successfully..', 'Success', ["positionClass" => "toast-top-center"]);
              return back();

        }

        public function imageadd(Request $r,$id)
        {
          $vimage = new Vimage();
          $image=$r->image;
           // $image= $request->file('user_image');
            $img=time().'.'.$image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(700, 560);
            $image_resize->save(public_path('images/vehicle/' .$img));
            $vimage->image= $img;
            $vimage->vehicle_id=$id;
            $vimage->save();
            Toastr::success(' Image Added Successfully..', 'Success', ["positionClass" => "toast-top-center"]);
            return back();
        }


}
