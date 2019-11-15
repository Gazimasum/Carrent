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
});


//user Route

Route::group(['prefix' => 'user'],function ()
{
  Route::get('/ profile','Frontend\UsersController@profile')->name('profile');
  Route::post('/ profile/update','Frontend\UsersController@update')->name('profile.update');
  Route::get('/ profile/updatepassword','Frontend\UsersController@updatepasswordview')->name('profile.update.password');
  Route::post('/ profile/ update/ password','Frontend\UsersController@updatepassword')->name('profile.updatepassword');
});
