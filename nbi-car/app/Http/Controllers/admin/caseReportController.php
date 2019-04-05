<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Cases;
use function GuzzleHttp\Psr7\readline;

class caseReportController extends Controller
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
        $agent = DB::table('users')
        ->where('role','=','Agent')
        ->get();

        $agent2 = DB::table('users')
        ->where('role','=','Agent')
        ->get();

        $nature = DB::table('nature')
        ->where('natureAvailability','=','Available')
        ->get();
        $nature2 = DB::table('nature')
        ->where('natureAvailability','=','Available')
        ->get();

        $status = DB::table('case_status')
        ->where('caseStatusAvailability','=','Available')
        ->get();

        $showData = DB::table('nature')
        ->join('casenature','nature.natureid','=','casenature.natureid')
        ->join('caseagent','casenature.caseid','=','caseagent.caseid')
        ->join('users','users.userid','=','caseagent.userid')
        ->join('cases','caseagent.caseid','=','cases.caseid')
        ->leftJoin('complaintsheet','complaintsheet.caseid','=','cases.caseid')
        ->join('agent','caseagent.userid','=','agent.userid')
        ->join('case_suspects','case_suspects.caseid','=','cases.caseid')
        ->join('case_status','case_status.statusid','=','cases.statusid')
        ->join('case_victims','case_victims.caseid','=','cases.caseid')
        ->select('nature.*','case_status.*','caseagent.*','users.*','agent.*','cases.*','case_suspects.*','case_victims.*', 'complaintsheet.*'
        ,DB::raw("GROUP_CONCAT(DISTINCT CONCAT (agent.position, ' ', users.firstName,' ',users.lastName) SEPARATOR ' and ') as full_name")
        ,DB::raw("GROUP_CONCAT(DISTINCT CONCAT (nature.nature) SEPARATOR ' and ') as natureName")
        ,DB::raw("GROUP_CONCAT(DISTINCT CONCAT(case_suspects.suspect_name) SEPARATOR ' and ') as suspectName")
        ,DB::raw("cases.caseid AS sample"))
        ->groupBy(DB::raw('caseagent.caseid'),
        DB::raw('case_victims.caseid'),
        DB::raw('case_suspects.caseid'))
        ->orderby('cases.docketnumber','ASC')
        ->where('cases.caseStatus','=','Available')
        ->get();
        return view ('admin.caseReport',compact('showData','agent','nature','status','agent2','nature2'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $cases = Cases::findOrFail($request->caseid);
        $cases->update($request->all());
        /**
        *  Concatenate description for logs.
        */
        $caseID = $request['caseid'];
        $formDescription = $request['description'];
        $insertDescription = $formDescription. ' '.$caseID;
        Logs::create([
            'userid' => $request['userid'],
            'action' => $request['action'],
            'description' =>$insertDescription,
        ]);
        $request->session()->flash('alert-success', 'Case successfully " DELETED "');
        return redirect()->back();
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
    public function show($caseid)
    {
        //$users = DB::select('select * from cases where caseid = ?',[$caseid]);

        //dd($users);
        //return view('admin.caseUpdate',compact('showData'));
        /*
         $showData = DB::table('nature')
        ->join('casenature','nature.natureid','=','casenature.natureid')
        ->join('caseagent','casenature.caseid','=','caseagent.caseid')
        ->join('users','users.userid','=','caseagent.userid')
        ->join('cases','caseagent.caseid','=','cases.caseid')
        ->leftJoin('complaintsheet','complaintsheet.caseid','=','cases.caseid')
        ->join('agent','caseagent.userid','=','agent.userid')
        ->join('case_suspects','case_suspects.caseid','=','cases.caseid')
        ->join('case_status','case_status.statusid','=','cases.statusid')
        ->join('case_victims','case_victims.caseid','=','cases.caseid')
        ->select('nature.*','case_status.*','caseagent.*','users.*','agent.*','cases.*','case_suspects.*','case_victims.*', 'complaintsheet.*'
        ,DB::raw("GROUP_CONCAT(DISTINCT CONCAT (agent.position, ' ', users.firstName,' ',users.lastName) SEPARATOR ' and ') as full_name")
        ,DB::raw("GROUP_CONCAT(DISTINCT CONCAT (nature.nature) SEPARATOR ' and ') as natureName")
        ,DB::raw("GROUP_CONCAT(DISTINCT CONCAT(case_suspects.suspect_name) SEPARATOR ' and ') as suspectName")
        ,DB::raw("cases.caseid AS sample"))
        ->groupBy(DB::raw('caseagent.caseid'),
        DB::raw('case_victims.caseid'),
        DB::raw('case_suspects.caseid'))
        ->orderby('cases.docketnumber','ASC')
        ->where('cases.caseStatus','=','Available')
        ->where('cases.caseid','=',$caseid)
        ->get();
        */
        $showData = DB::table('cases')
        ->join('case_status', 'case_status.statusid', '=' ,'cases.statusid')
        ->join('casenature' ,'casenature.caseid', '=' ,'cases.caseid')
        ->join('nature' ,'nature.natureid', '=' ,'casenature.natureid')
        ->join('caseagent', 'caseagent.caseid' ,'=' ,'cases.caseid')
        ->join('users' , 'users.userid', '=', 'caseagent.userid')
        ->join('agent' ,'agent.userid', '=' ,'users.userid')
        ->join('case_suspects', 'case_suspects.caseid', '=', 'cases.caseid')
        ->join('case_victims' , 'case_victims.caseid', '=' ,'cases.caseid')
        ->leftJoin('complaintsheet' , 'complaintsheet.caseid', '=', 'cases.caseid')
        ->select('cases.caseid AS case_id', 'cases.docketnumber', 'cases.ccn', 'cases.acmo', 'cases.complainantname',
        'cases.complainant_Address', 'cases.complainant_Contact_Number', 'cases.dateTerminated', 'case_status.status','caseagent.dateassigned',
        'nature.nature', 'nature.casetype', 'nature.description', 'users.firstName', 'users.middleInitial', 'users.lastName',
        'agent.position', 'case_suspects.suspect_name', 'case_suspects.height', 'case_suspects.weight', 'case_suspects.suspect_Address',
        'case_suspects.suspect_Contact_Number', 'case_suspects.suspect_Sex', 'case_suspects.suspect_Age', 'case_suspects.suspect_Civil_Status',
        'case_suspects.suspect_Occupation', 'case_victims.victim_name', 'case_victims.weight', 'case_victims.height', 'case_victims.victim_Address',
        'case_victims.victim_Contact_Number', 'case_victims.victim_Sex', 'case_victims.victim_Age', 'case_victims.victim_Civil_Status', 'case_victims.victim_Occupation',
        'complaintsheet.place_Committed', 'complaintsheet.date_Committed', 'complaintsheet.narration_Of_Facts', 'complaintsheet.reported_Any_Agency',
        'complaintsheet.status_of_Investigation', 'complaintsheet.where_court_Proceedings', 'complaintsheet.report_Considerations',
        DB::raw("CONCAT(users.firstName,' ',users.middleInitial,'. ',users.lastName,' ',agent.position) AS agentName"))
        ->orderby('cases.caseid','ASC')
        ->where('cases.caseStatus','=','Available')
        ->where('cases.caseid','=',$caseid)
        ->get();
        return view('admin.caseUpdate',compact('showData'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'reere';
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
