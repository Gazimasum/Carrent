<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Brand;
use Brian2694\Toastr\Facades\Toastr;

class BrandController extends Controller
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
      $this->validate($request,
         ['name' => 'required'
       ],
       [
       'name.required'=>"Please Provide a Brand Name.",
     ]);

     $brand=new Brand();
     $brand->name=$request->name;
     $brand->save();

     // session()->flash('success',('A New Brand Added Successfully..'));
   Toastr::success('A New Brand Added Successfully..', 'Success', ["positionClass" => "toast-top-center"]);
    //  Toastr::success('message', 'Category add successfully!');
     return redirect()->route('admin.brand.manage');
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
     public function delete($id){

       $brand=brand::find($id);
       if (!Is_null($brand)) {

         $brand->delete();
       }
      // session()->flash('success','brand has deleted Successfully..');
       Toastr::success(' Brand Deleted Successfully..', 'Success', ["positionClass" => "toast-top-center"]);
       return back();
     }

     public function update(Request $request,$id){
         $brand=Brand::find($id);
         $brand->name=$request->name;
         $brand->save();

       Toastr::success('Brand has updated Successfully..', 'Success', ["positionClass" => "toast-top-center"]);
      return redirect()->route('admin.brand.manage');
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
}
