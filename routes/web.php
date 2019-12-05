<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Frontend\PagesController@index')->name('index');
Route::get('/about_us', 'Frontend\PagesController@about_us')->name('about_us');
Route::get('/privacy', 'Frontend\PagesController@privacy')->name('privacy');
Route::get('/faqs', 'Frontend\PagesController@faqs')->name('faqs');
Route::get('/terms', 'Frontend\PagesController@terms')->name('terms');
Route::post('/message/store', 'Frontend\MessageController@store')->name('message');

Route::get('/car_list', 'Frontend\PagesController@car_list')->name('car_list');
Route::post('/search_vehicle', 'Frontend\VehicleController@search')->name('search_vehicle');
Route::get('/search', 'Frontend\PagesController@search')->name('search');

Route::get('/vehicles_details/{slug}','Frontend\VehicleController@show')->name('vehicles_details');
//contactController
Route::get('/contect_us', 'Frontend\ContactController@index')->name('contact_us');

//Booking
Route::post('booking/{id}','Frontend\BookingController@store')->name('booking');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'HomeController@index')->name('home');


//Admin Route
  Route::group(['prefix' => 'admin'],function(){

  Route::get('/home', 'Backend\PagesController@index')->name('admin.index');
  // Admin Login Routes
  Route::get('/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
  Route::post('/login/submit', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
  Route::post('/logout/submit', 'Auth\Admin\LoginController@logout')->name('admin.logout');

  Route::get('/change/password', 'Backend\AdminController@adminupdateview')->name('admin.password.chageview');
  // Route::post('/change/password/update', 'Backend\AdminController@passwordupdate')->name('admin.password.update');
  Route::post('/change/password/update', 'Backend\AdminController@profileUpdate')->name('admin.password.update');

  //admin registration
  Route::get('/register', 'Auth\Admin\RegisterController@showRegistrationForm')->name('adminregisterview');
  Route::post('/register/submit', 'Auth\Admin\RegisterController@adminregister')->name('admin.register');
    Route::get('/token/{token}', 'Backend\VerficationController@verify')->name('admin.verification');
  // Password Email Send
    Route::get('/password/reset', 'Auth\Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/resetPost', 'Auth\Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');

    // Password Reset
    Route::get('/password/reset/{token}', 'Auth\Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'Auth\Admin\ResetPasswordController@reset')->name('admin.password.reset.post');

    //brands
    Route::get('/create/brand','Backend\PagesController@createbrand')->name('admin.brand.create');
    Route::post('/store/brand','Backend\BrandController@store')->name('admin.brand.store');
    Route::get('/manage/brand','Backend\PagesController@managebrand')->name('admin.brand.manage');
    Route::get('/manage/brand/{id}','Backend\PagesController@editbrand')->name('admin.brand.edit');
    Route::post('/manage/brand/update/{id}','Backend\BrandController@update')->name('admin.brand.update');
    Route::post('/manage/brand/delete/{id}','Backend\BrandController@delete')->name('admin.brand.delete');

    //vehicle
    Route::get('/create/vehicle','Backend\PagesController@createvehicle')->name('admin.vehicle.create');
    Route::post('/store/vehicle','Backend\VehicleController@store')->name('admin.vehicle.store');
    Route::get('/manage/vehicle','Backend\VehicleController@index')->name('admin.vehicle.manage');
    Route::get('/manage/vehicle/{id}','Backend\PagesController@editvehicle')->name('admin.vehicle.edit');
    Route::post('/manage/vehicle/update/{id}','Backend\VehicleController@update')->name('admin.vehicle.update');
    Route::post('/manage/vehicle/delete/{id}','Backend\VehicleController@delete')->name('admin.vehicle.delete');
    Route::post('/manage/vehicle/changemainimage/{id}','Backend\VehicleController@changemainimage')->name('admin.vehicle.mainimage');
    Route::post('/manage/vehicle/changeimage/{id}','Backend\VehicleController@changeimage')->name('admin.vehicle.image');

//bookings

    Route::get('/booking','Backend\PagesController@bookingview')->name('admin.booking');
    Route::post('/booking/confirm/{id}','Backend\BookingController@confirm')->name('admin.booking.confirm');
    Route::post('/booking/notconfirm/{id}','Backend\BookingController@notconfirm')->name('admin.booking.notconfirm');
    Route::post('/booking/cancle/{id}','Backend\BookingController@cancle')->name('admin.booking.cancle');


    //testimonieal && contact_us

    Route::get('/testimonieal','Backend\TestimonielController@testimoniealview')->name('admin.testimonieal');
    Route::post('/testimonieal/active/{id}','Backend\TestimonielController@testimoniealactive')->name('admin.testimonieal.active');
    Route::post('/testimonieal/deactive/{id}','Backend\TestimonielController@testimoniealdeactive')->name('admin.testimonieal.deactive');

//Pages Content

  Route::get('/pagecontent','Backend\PagesController@pagecontent')->name('admin.pagecontent');
  Route::post('/pagecontent/update','Backend\PagesController@pagescotentupdate')->name('admin.pagescotent.update');

//users

Route::get('/reguser','Backend\PagesController@reguser')->name('reguserview');
  //messages

  Route::get('/message','Backend\PagesController@viewmessage')->name('viewmessage');
  Route::get('/message/seen/{id}','Backend\PagesController@seenmessage')->name('seenmessage');
  // Route::get('/message','Backend\PagesController@viewmessage')->name('viewmessage');

//contact_us

    Route::get('/contact','Backend\PagesController@contactview')->name('viewcontact');
    Route::post('/contact/{id}','Backend\PagesController@contactupdate')->name('updatecontact');
});


//user Route

Route::group(['prefix' => 'user'],function ()
{
//  Route::post('/reg','Auth\RegisterController@register')->name('registeration');
  Route::get('/ profile','Frontend\UsersController@profile')->name('profile');
  Route::get('/ mybooking','Frontend\BookingController@mybooking')->name('mybooking');
  Route::post('/ profile/update','Frontend\UsersController@update')->name('profile.update');
  Route::get('/ profile/updatepassword','Frontend\UsersController@updatepasswordview')->name('profile.update.password');
  Route::post('/ profile/ update/ password','Frontend\UsersController@updatepassword')->name('profile.updatepassword');


    // Password Email Send
      Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('user.password.request');
      Route::post('/password/resetPost', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('user.password.email');

      // Password Reset
      Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('user.password.reset');
      Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('user.password.reset.post');


  Route::get('/token/{token}', 'Frontend\VerficationController@verify')->name('user.verification');
  Route::get('/mytestimonial', 'Frontend\TestimonialController@index')->name('user.mytestimonial');
  Route::get('/posttestimonialview', 'Frontend\TestimonialController@view')->name('user.post_testimonial_view');
  Route::post('/testimonieal/post', 'Frontend\TestimonialController@store')->name('user.post_testimonial');
});


// API routes
Route::get('get-pagedetails/{types}', function($types){
  return json_encode(App\Model\Pagescontent::where('types', $types)->first());
});
