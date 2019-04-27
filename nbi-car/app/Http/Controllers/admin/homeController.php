<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class homeController extends Controller
{
    public function __construct()
    {
        $this->middleware('preventBackHistory'); $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendingCase = DB::table('cases')
        ->join('case_status','cases.statusid','=','case_status.statusid')
        ->join('caseagent', 'cases.caseid','=','caseagent.caseid')
        ->join('users','caseagent.userid','=','users.userid')
        ->join('case_suspects', 'case_suspects.caseid','=','cases.caseid')
        ->select('cases.complainantname', 'caseagent.dateassigned', 'case_status.status'
        ,DB::raw("GROUP_CONCAT(DISTINCT CONCAT(case_suspects.suspect_name) SEPARATOR ' and ') as suspectName")
        ,DB::raw("GROUP_CONCAT(DISTINCT CONCAT (users.firstName,' ',users.lastName) SEPARATOR ' and ') as full_name")
        )
        ->groupBy(DB::raw('caseagent.caseid'))
        ->whereNull('cases.dateTerminated')
        ->orWhere('case_status.status','=','Under Investigation')
        ->orderBy('dateAssigned','DESC')
        ->limit(10)
        ->get();

        $activeUsers = DB::table('users')
        ->where('userStatus','=','Active')
        ->count();

        $totalRecords = DB::table('cases')
        ->where('caseAvailability','=','Available')
        ->count();

        $caseRecords = DB::table('cases')
        ->join('case_status','case_status.statusid','=','cases.statusid')
        ->select(DB::raw("COUNT(cases.caseid) AS caseRecords"))
        ->whereNotNull('cases.dateTerminated')
        ->orWhere('case_status.status','!=','Under Investigation')
        ->get();

        $chart = DB::table('nature')
        ->join('casenature','casenature.natureid','=','nature.natureid')
        ->select('nature.nature',
        DB::raw("count(casenature.caseid) AS totalNumber"))
        ->groupBy(DB::raw('nature.natureid'))
        ->get();

        $showData = DB::table('users')
        ->join('logs','users.userid','=','logs.userid')
        ->select('users.*','logs.*'
                ,DB::raw("CONCAT(users.firstName,' ',users.lastName) AS name")
                )
        ->orderBy('logs.created_at','DESC')
        ->limit(10)
        ->get();
        return view('admin.home',compact('showData','pendingCase','activeUsers','totalRecords','caseRecords','chart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
