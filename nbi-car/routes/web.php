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
    return view('auth/login');
});

Auth::routes();

########################AGENT#######################################################
Route::group(['middleware' => ['web','agent']], function() {
    /*
    route::resource('/index','IndexController');
    route::resource('/agentHome','agent\HomeController');
    route::resource('/agentCase','agent\assignedCaseController');
    route::resource('/agentProfile','agent\userProfileController');
    route::resource('/agentChangePassword','agent\changePasswordController');
    */
});
#####################################################################################

########################ENCODER######################################################
Route::group(['middleware' => ['web','encoder']], function() {
    route::resource('/encoderHome','encoder\HomeController');
    route::resource('/encoderProfile','encoder\userProfileController');
    route::resource('/addCase','encoder\addCaseController');
    route::resource('/encoderCCN','encoder\ccnController');
    route::resource('/encoderChangePassword','encoder\changePasswordController');
    route::resource('/complaintSheet','encoder\ComplaintSheetController');
});
#####################ENCODER UPDATE##################################################
Route::post('/ccnUpdate','encoder\ccnController@update');
#####################ENCODER STORE###################################################
Route::post('/encoderAddCase','encoder\addCaseController@store');
Route::post('/encoderAddComplaintSheet','encoder\ComplaintSheetController@store');
#####################################################################################

#############################ADMIN###################################################
Route::group(['middleware' => ['web','admin']], function() {
    route::resource('/adminHome','admin\homeController');
    route::resource('/ComplaintSheet','admin\ComplaintSheetController');
    route::resource('/userHistory','admin\userHistoryController');
    route::resource('/userLogs','admin\userLogsController');
    //CASE NATURE
    route::resource('/caseNature','admin\caseNatureController');
    Route::post('/natureUpdate','admin\caseNatureController@update');
    Route::post('/createNature','admin\caseNatureController@store');
    Route::post('/deleteNature','admin\caseNatureController@delete');
    //CASE STATUS
    route::resource('/caseStatus','admin\CaseStatusController');
    Route::post('/updateCaseStatus','admin\CaseStatusController@update');
    Route::post('/addCaseStatus','admin\CaseStatusController@store');
    //ADD CASE
    route::resource('/addNewCase','admin\addCaseController');
    Route::post('/adminAddCase','admin\addCaseController@store');
    //MANAGE ACCOUNT
    route::resource('/manageAccounts','admin\manageAccountController');
    Route::post('/userUpdate','admin\manageAccountController@update');
    Route::post('/addNewUser','admin\manageAccountController@store');
    Route::post('/passwordReset','admin\manageAccountController@edit');
    //
    route::resource('/profile','admin\ProfileController');
    route::resource('/adminChangePassword','admin\changePasswordController');
    Route::resource('/caseReview','admin\caseReviewController');
    //Route::resource('/deleteCase','admin\caseDeleteController');
    //Route::resource('/updateCase','admin\caseReportController@show');
    Route::resource('/caseReport','admin\caseReportController');
    Route::resource('/updateCase','admin\caseReportController');
    Route::post('/updatedCase','admin\caseReportController@update');
    /*
    Route::get('/updateCase/{caseid}','admin\caseReportController@show');
    //Route::post('/processUpdate','admin\caseReportController@update');

    Route::get('/updateCase/{caseid}','admin\caseUpdateController@show');
    Route::post('/processUpdate','admin\caseUpdateController@update')->name('processUpdate');
    Route::post('/test','admin\caseUpdateController@test');
    */
    Route::get('/deleteCase/{caseid}','admin\caseReportController@showcase');
    Route::post('/caseDeleted','admin\caseReportController@delete');
});

    Route::get('/changePassword','HomeController@showChangePasswordForm');
    Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

    Route::get('/backupdatabase', function () {
        $exitCode = Artisan::call('mysql:backup');
    });
Route::group(['middleware' => ['web', 'auth']], function(){

    route::get('/', function(){
    if(Auth::user()->role == 'Encoder'){
        return redirect('/encoderHome');
    } else if(Auth::user()->role == 'Investigator') {
        //return redirect('/');
    }else {
        return redirect('/adminHome');
    }
    });
});

