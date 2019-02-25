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

Route::get('/', function () {
    return view('welcome');
});
route::resource('/index','IndexController');
route::resource('/agentHome','agent\HomeController');
route::resource('/agentCase','agent\assignedCaseController');
route::resource('/agentProfile','agent\userProfileController');
route::resource('/agentChangePassword','agent\changePasswordController');
route::resource('/encoderHome','encoder\HomeController');
route::resource('/encoderProfile','encoder\userProfileController');
route::resource('/encoderCCN','encoder\ccnController');
route::resource('/addCase','encoder\addCaseController');
route::resource('/encoderChangePassword','encoder\changePasswordController');
route::resource('/complaintSheet','encoder\ComplaintSheetController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
