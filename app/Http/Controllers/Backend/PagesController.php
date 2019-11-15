<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin;

class PagesController extends Controller
{
  public function __construct()
 {
   $this->middleware('auth:admin');
 }

 public function index(){
   return view('backend.pages.index');
 }
}
