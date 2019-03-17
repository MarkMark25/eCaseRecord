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
    return view('auth/login'); //replace home
});

Auth::routes();

#AGENT
route::resource('/index','IndexController');
route::resource('/agentHome','agent\HomeController');
route::resource('/agentCase','agent\assignedCaseController');
route::resource('/agentProfile','agent\userProfileController');
route::resource('/agentChangePassword','agent\changePasswordController');
#ENCODER
route::resource('/encoderHome','encoder\HomeController');
route::resource('/encoderProfile','encoder\userProfileController');
route::resource('/addCase','encoder\addCaseController');
route::resource('/encoderCCN','encoder\ccnController');
route::resource('/encoderChangePassword','encoder\changePasswordController');
route::resource('/complaintSheet','encoder\ComplaintSheetController');

Route::post('/ccnUpdate','encoder\ccnController@update');
Route::post('/encoderAddCase','encoder\addCaseController@store');

Route::get('/changePassword','HomeController@showChangePasswordForm');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

Route::group(['middleware' => ['web', 'auth']], function(){
    /*
    Route::get('/', function () {
        return view('auth/login');
    });
    */
    route::get('/', function(){
    if(Auth::user()->role == 'Encoder'){
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
        ->get();
        return view ('encoder.home',['showData'=>$showData]);

    } else if(Auth::user()->role == 'Agent') {

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
        ->get();
        return view ('agent.home',['showData'=>$showData]);

    }else {
        return view();
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

