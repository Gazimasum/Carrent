<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Banner;
use Brian2694\Toastr\Facades\Toastr;
use Image;
use File;

class BannerController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }

  public function index()
  {
    $banners = Banner::orderBy('id', 'asc')->get();
    return view('backend.pages.banners.index', compact('banners'));
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'title'  => 'required',
      'text' =>'required',
      'image'  => 'required|image',
      'button_text'  => 'required',
      'button_link'  => 'nullable|url'
    ],
    [
      'title.required'  => 'Please provide Banner title',
      'text.required'  => 'Please provide Banner priority',
      'image.required'  => 'Please provide Banner image',
      'image.image'  => 'Please provide a valid Banner image',
      'button_link.url'  => 'Please provide a valid Banner button link'
    ]);

    $banner = new Banner();
    $banner->title = $request->title;
    $banner->text = $request->text;
    $banner->button_text = $request->button_text;
    $banner->button_link = $request->button_link;
    $banner->status = $request->status;
    if ($request->image > 0) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = 'images/banners/' .$img;
        Image::make($image)->save($location);
        $banner->image = $img;
    }
    $banner->save();
      Toastr::success('A new Banner has added successfully !!', 'Success', ["positionClass" => "toast-top-center"]);

    return redirect()->route('admin.banners');

  }

    public function update(Request $request, $id)
    {
          $this->validate($request, [
          'title'  => 'required',
          'image'  => 'nullable|image',
          'text'  => 'required',
          'button_link'  => 'nullable|url'
        ],
        [
          'title.required'  => 'Please provide Banner title',
          'text.required'  => 'Please provide Banner priority',
          'image.image'  => 'Please provide a valid Banner image',
          'button_link.url'  => 'Please provide a valid Banner button link'
        ]);

        $banner = Banner::find($id);
        $banner->title = $request->title;
        $banner->button_text = $request->button_text;
        $banner->button_link = $request->button_link;
        $banner->status = $request->status;
        $banner->text = $request->text;

        if ($request->image > 0) {
            // Delete the old Banner
            if (File::exists('images/banners/'.$banner->image)) {
                File::delete('images/banners/'.$banner->image);
              }

            $image = $request->file('image');
            $img = time() . '.'. $image->getClientOriginalExtension();
            $location = 'images/banners/' .$img;
            Image::make($image)->save($location);
            $banner->image = $img;
        }
        $banner->save();
          Toastr::success('Banner has updated successfully !!', 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->route('admin.banners');

    }

    public function delete($id)
    {
      $banner = Banner::find($id);
      if (!is_null($banner)) {
        //Delete Image
        if (File::exists('images/banners/'.$banner->image)) {
            File::delete('images/banners/'.$banner->image);
          }
        $banner->delete();
      }
        Toastr::success('Banner has deleted successfully !!', 'Success', ["positionClass" => "toast-top-center"]);

      return back();

    }
}
