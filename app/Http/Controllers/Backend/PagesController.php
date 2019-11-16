<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin;
use App\Model\Brand;


class PagesController extends Controller
{
  public function __construct()
 {
   $this->middleware('auth:admin');
 }

 public function index(){
   return view('backend.pages.index');
 }
 public function createbrand()
 {
   return view('backend.pages.brands.create');
 }
 public function managebrand()
 {
   $brands = Brand::get();
   return view('backend.pages.brands.manage',compact('brands'));
 }

 public function editbrand($id)
 {
   $brands = Brand::find($id);
   return view('backend.pages.brands.edit',compact('brands'));
 }


}
