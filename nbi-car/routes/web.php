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
    route::resource('/index','IndexController');
    route::resource('/agentHome','agent\HomeController');
    route::resource('/agentCase','agent\assignedCaseController');
    route::resource('/agentProfile','agent\userProfileController');
    route::resource('/agentChangePassword','agent\changePasswordController');
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
    route::resource('/caseNature','admin\caseNatureController');
    route::resource('/caseStatus','admin\CaseStatusController');
    route::resource('/caseReport','admin\caseReportController');
    route::resource('/addNewCase','admin\addCaseController');
    route::resource('/manageAccounts','admin\manageAccountController');
    route::resource('/profile','admin\ProfileController');
    route::resource('/adminChangePassword','admin\changePasswordController');
    Route::resource('/updateCase','admin\caseReportController');
    Route::resource('/caseReview','admin\caseReviewController');
    //Route::resource('/deleteCase','admin\caseDeleteController');
    Route::get('deleteCase/{caseid}','admin\caseReportController@showcase');
##############################ADMIN UPDATE, DELETE####################################
    Route::post('/natureUpdate','admin\caseNatureController@update');
    Route::post('/createNature','admin\caseNatureController@store');
    Route::post('/deleteNature','admin\caseNatureController@delete');
    Route::post('/caseDeleted','admin\caseReportController@delete');
    Route::post('/updateCaseStatus','admin\CaseStatusController@update');
    Route::post('/addCaseStatus','admin\CaseStatusController@store');
    //HINDI PA TAPOS
    Route::post('/updatedCase','admin\caseReportController@update');
    Route::post('/userUpdate','admin\manageAccountController@update');
    Route::post('/addNewUser','admin\manageAccountController@store');
    Route::post('/passwordReset','admin\manageAccountController@edit');
    Route::post('/adminAddCase','admin\addCaseController@store');
######################################################################################
});
############################USER CHANGEPASSWORD ( Home Controller )####################
Route::get('/changePassword','HomeController@showChangePasswordForm');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');
######################################################################################

Route::group(['middleware' => ['web', 'auth']], function(){
    /*
    Route::get('/', function () {
        return view('auth/login');
    });
    */
    route::get('/', function(){
    if(Auth::user()->role == 'Encoder'){
        return redirect('/encoderHome');
        /*
        $showData = DB::table('nature')
            ->join('casenature','nature.natureid','=','casenature.natureid')
            ->join('caseagent','casenature.caseid','=','caseagent.caseid')
            ->join('users','users.userid','=','caseagent.userid')
            ->join('cases','caseagent.caseid','=','cases.caseid')
            ->join('agent','caseagent.userid','=','agent.userid')
            ->join('case_suspects','case_suspects.caseid','=','cases.caseid')
            ->join('case_status','case_status.statusid','=','cases.statusid')
            ->join('case_victims','case_victims.caseid','=','cases.caseid')
            ->select('nature.*','case_status.*','caseagent.*','users.*','agent.*','cases.*','case_suspects.*','case_victims.*'
            ,DB::raw("GROUP_CONCAT(DISTINCT CONCAT (agent.position, ' ', users.firstName,' ',users.lastName) SEPARATOR ' and ') as full_name")
            ,DB::raw("GROUP_CONCAT(DISTINCT CONCAT (nature.nature) SEPARATOR ' and ') as natureName")
            ,DB::raw("GROUP_CONCAT(DISTINCT CONCAT(case_suspects.suspect_name) SEPARATOR ' and ') as suspectName"))
            ->groupBy(DB::raw('caseagent.caseid'),
            DB::raw('case_victims.caseid'),
            DB::raw('case_suspects.caseid'))
            ->orderby('cases.docketnumber','ASC')
            ->where('cases.caseStatus','=','Available')
            ->where('nature.natureAvailability','=','Available')
            ->get();
            return view ('encoder.home',compact('showData'));
        */
    } else if(Auth::user()->role == 'Investigator') {

        $showData = DB::table('nature')
        ->join('casenature','nature.natureid','=','casenature.natureid')
        ->join('caseagent','casenature.caseid','=','caseagent.caseid')
        ->join('users','users.userid','=','caseagent.userid')
        ->join('cases','caseagent.caseid','=','cases.caseid')
        ->join('agent','caseagent.userid','=','agent.userid')
        ->join('case_suspects','case_suspects.caseid','=','cases.caseid')
        ->join('case_status','case_status.statusid','=','cases.statusid')
        ->join('case_victims','case_victims.caseid','=','cases.caseid')
        ->select('nature.*','case_status.*','caseagent.*','users.*','agent.*','cases.*','case_suspects.*','case_victims.*'
        ,DB::raw("GROUP_CONCAT(DISTINCT CONCAT (agent.position, ' ', users.firstName,' ',users.lastName) SEPARATOR ' and ') as full_name")
        ,DB::raw("GROUP_CONCAT(DISTINCT CONCAT (nature.nature) SEPARATOR ' and ') as natureName")
        ,DB::raw("GROUP_CONCAT(DISTINCT CONCAT(case_suspects.suspect_name) SEPARATOR ' and ') as suspectName"))
        ->groupBy(DB::raw('caseagent.caseid'),
        DB::raw('case_victims.caseid'),
        DB::raw('case_suspects.caseid'))
        ->orderby('cases.docketnumber','ASC')
        ->where('cases.caseStatus','=','Available')
        ->get();
        return view ('agent.home',compact('showData'));

    }else {
        /*
        $showData = DB::table('users')
        ->join('logs','users.userid','=','logs.userid')
        ->select('users.*','logs.*'
                ,DB::raw("CONCAT(users.firstName,' ',users.lastName) AS name")
                )
        ->get();
        */
        return redirect('/adminHome');
        //return view ('admin.home',compact('showData'));
    }
    });
});



/*Authorization access roles

//AGENT ROLES
Route::group(['middleware' => '\App\Http\Middleware\AgentMiddleware'], function()
{
Route::get( '/agentHome', 'HomeController@agent');
Route::get( '/agentCase','HomeController@agent');
Route::get( '/agentProfile','HomeController@agent');
Route::get( '/agentChangePassword','HomeController@agent');
});

//ENCODER ROLES
Route::group(['middleware' => '\App\Http\Middleware\EncoderMiddleware'], function()
{
    Route::get( '/encoderHome', 'HomeController@encoder');
    Route::get( '/encoderProfile','HomeController@encoder');
    Route::get( '/addCase','HomeController@encoder');
    Route::get( '/encoderCCN','HomeController@encoder');
    Route::get( '/encoderChangePassword','HomeController@encoder');
    Route::get( '/complaintSheet','HomeController@encoder');
});

*/

//Route::get('/home', 'HomeController@index')->name('home');

