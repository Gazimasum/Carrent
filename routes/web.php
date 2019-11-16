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
Route::get('/car_list', 'Frontend\PagesController@car_list')->name('car_list');
Route::post('/search_vehicle', 'Frontend\VehicleController@search')->name('search_vehicle');
Route::get('/search', 'Frontend\PagesController@search')->name('search');

Route::get('/vehicles_details/{id}','Frontend\VehicleController@index')->name('vehicles_details');
//contactController
Route::get('/contect_us', 'Frontend\ContactController@index')->name('contact_us');

//Booking
Route::post('booking/{id}','Frontend\BookingController@store')->name('booking');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Admin Route
  Route::group(['prefix' => 'admin'],function(){
  Route::get('/home', 'Backend\PagesController@index')->name('admin.index');
  // Admin Login Routes
  Route::get('/login', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
  Route::post('/login/submit', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
  Route::post('/logout/submit', 'Auth\Admin\LoginController@logout')->name('admin.logout');

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


});


//user Route

Route::group(['prefix' => 'user'],function ()
{
  Route::get('/ profile','Frontend\UsersController@profile')->name('profile');
  Route::post('/ profile/update','Frontend\UsersController@update')->name('profile.update');
  Route::get('/ profile/updatepassword','Frontend\UsersController@updatepasswordview')->name('profile.update.password');
  Route::post('/ profile/ update/ password','Frontend\UsersController@updatepassword')->name('profile.updatepassword');
});
