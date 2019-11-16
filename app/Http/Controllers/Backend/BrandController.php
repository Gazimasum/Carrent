<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Brand;

class BrandController extends Controller
{
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

     session()->flash('success',('A New Brand Added Successfully..'));
     return redirect()->route('admin.brand.create');
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
       session()->flash('success','brand has deleted Successfully..');
       return back();
     }

     public function update(Request $request,$id){
         $brand=Brand::find($id);
         $brand->name=$request->name;
         $brand->save();
       session()->flash('success',('Brand has updated Successfully..'));
       return redirect()->route('admin.brand.edit');
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
