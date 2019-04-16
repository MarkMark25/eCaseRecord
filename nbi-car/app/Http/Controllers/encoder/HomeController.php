<?php

namespace App\Http\Controllers\encoder;
use DB; //DATABASE CONNECTION TAG
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('preventBackHistory'); $this->middleware('auth');
    }

    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
            ->where('cases.caseAvailability','=','Available')
            ->get();
            return view ('encoder.home',['showData'=>$showData]);
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
