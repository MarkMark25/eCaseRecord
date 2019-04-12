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
        $this->middleware('preventBackHistory');
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $caseid)
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

        $sample = DB::table('case_suspects')
        ->where('caseid','=',$caseid)
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
        ,DB::raw("cases.caseid AS caseID")
        ,DB::raw("CONCAT(users.firstName,' ',users.middleInitial,'. ',users.lastName,' ',agent.position) AS agentName"))
        ->groupBy(DB::raw('caseagent.caseid'),
        DB::raw('case_victims.caseid'),
        DB::raw('case_suspects.caseid'))
        ->orderby('cases.docketnumber','ASC')
        ->where('cases.caseStatus','=','Available')
        ->get();

        return view ('admin.caseReport',compact('showData','agent','nature','status','agent2','nature2', 'sample'));
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
        $validator = Validator::make($request->all(), [
            'ccn' => 'nullable|unique:cases,ccn|max:255',
            'docketnumber' => 'required|unique:cases|max:255',
            'acmo' => 'nullable|unique:cases|max:255',
        ]);

        if ($validator->fails()){
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }else {

        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showcase($caseid){
        $cases = DB::table('cases')
        ->join('case_status', 'case_status.statusid', '=' ,'cases.statusid')
        ->select('cases.*','case_status.*'
        ,DB::raw("cases.caseid AS caseID"))
        ->where('caseid','=',$caseid)
        ->get();

        $casesComplaint = DB::table('cases')
        ->join('case_status', 'case_status.statusid', '=' ,'cases.statusid')
        ->select('cases.*','case_status.*'
        ,DB::raw("cases.caseid AS caseID"))
        ->where('caseid','=',$caseid)
        ->get();

        $agent = DB::table('caseagent')
        ->join('cases', 'caseagent.caseid' ,'=' ,'cases.caseid')
        ->join('users' , 'users.userid', '=', 'caseagent.userid')
        ->join('agent' ,'agent.userid', '=' ,'users.userid')
        ->select('cases.*','caseagent.*','agent.*'
        ,DB::raw("CONCAT(users.firstName,' ',users.middleInitial,'. ',users.lastName,' ',agent.position) AS agentName"))
        ->where('cases.caseid','=',$caseid)
        ->groupBy('users.userid')
        ->get();

        $dateAssigned = DB::table('caseagent')
        ->join('cases', 'caseagent.caseid' ,'=' ,'cases.caseid')
        ->join('users' , 'users.userid', '=', 'caseagent.userid')
        ->join('agent' ,'agent.userid', '=' ,'users.userid')
        ->select('cases.*','caseagent.*','agent.*'
        ,DB::raw("CONCAT(users.firstName,' ',users.middleInitial,'. ',users.lastName,' ',agent.position) AS agentName"))
        ->where('cases.caseid','=',$caseid)
        ->groupBy('cases.caseid')
        ->get();

        $complaintSheet = DB::table('complaintSheet')
        ->rightJoin('cases','cases.caseid','=','complaintSheet.caseid')
        ->select('cases.*','complaintSheet.*')
        ->where('complaintSheet.caseid','=',$caseid)
        ->get();

        $count = DB::table('cases')
        ->leftJoin('complaintSheet','cases.caseid','=','complaintSheet.caseid')
        ->select('cases.*','complaintSheet.*')
        ->where('complaintSheet.caseid','=',$caseid)
        ->count();

        $whenAndWhere = DB::table('complaintSheet')
        ->rightJoin('cases','cases.caseid','=','complaintSheet.caseid')
        ->select('cases.*','complaintSheet.*')
        ->where('complaintSheet.caseid','=',$caseid)
        ->get();

        $suspect = DB::table('case_suspects')
        ->where('caseid','=',$caseid)
        ->get();

        $victim = DB::table('case_victims')
        ->where('caseid','=',$caseid)
        ->get();

        $nature = DB::table('cases')
        ->join('casenature' ,'casenature.caseid', '=' ,'cases.caseid')
        ->join('nature' ,'nature.natureid', '=' ,'casenature.natureid')
        ->select('cases.*','casenature.*','nature.*')
        ->where('cases.caseid','=',$caseid)
        ->get();

        $status = DB::table('cases')
        ->join('case_status', 'case_status.statusid', '=' ,'cases.statusid')
        ->select('case_status.*','cases.*')
        ->where('cases.caseid','=',$caseid)
        ->get();

        return view('admin.deleteCase',compact('cases','agent','complaintSheet','suspect','victim','nature','status','casesComplaint','dateAssigned','whenAndWhere','count'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($caseid)
    {
        $cases = DB::table('cases')
        ->join('case_status', 'case_status.statusid', '=' ,'cases.statusid')
        ->select('cases.*','case_status.*'
        ,DB::raw("cases.caseid AS caseID"))
        ->where('caseid','=',$caseid)
        ->get();

        $dateTerminated = DB::table('cases')
        ->join('case_status', 'case_status.statusid', '=' ,'cases.statusid')
        ->select('cases.*','case_status.*'
        ,DB::raw("cases.caseid AS caseID"))
        ->where('caseid','=',$caseid)
        ->get();

        $casesComplaint = DB::table('cases')
        ->join('case_status', 'case_status.statusid', '=' ,'cases.statusid')
        ->select('cases.*','case_status.*'
        ,DB::raw("cases.caseid AS caseID"))
        ->where('caseid','=',$caseid)
        ->get();

        $agent = DB::table('caseagent')
        ->join('cases', 'caseagent.caseid' ,'=' ,'cases.caseid')
        ->join('users' , 'users.userid', '=', 'caseagent.userid')
        ->join('agent' ,'agent.userid', '=' ,'users.userid')
        ->select('cases.*','caseagent.*','agent.*'
        ,DB::raw("CONCAT(users.firstName,' ',users.middleInitial,'. ',users.lastName,' ',agent.position) AS agentName"))
        ->where('cases.caseid','=',$caseid)
        ->groupBy('users.userid')
        ->get();

        $agent2 = DB::table('users')
        ->where('role','=','Agent')
        ->where('userStatus','=','Active')
        ->get();

        $dateAssigned = DB::table('caseagent')
        ->join('cases', 'caseagent.caseid' ,'=' ,'cases.caseid')
        ->join('users' , 'users.userid', '=', 'caseagent.userid')
        ->join('agent' ,'agent.userid', '=' ,'users.userid')
        ->select('cases.*','caseagent.*','agent.*'
        ,DB::raw("CONCAT(users.firstName,' ',users.middleInitial,'. ',users.lastName,' ',agent.position) AS agentName"))
        ->where('cases.caseid','=',$caseid)
        ->groupBy('cases.caseid')
        ->get();

        $complaintSheet = DB::table('cases')
        ->leftJoin('complaintSheet','cases.caseid','=','complaintSheet.caseid')
        ->select('cases.*','complaintSheet.*')
        ->where('complaintSheet.caseid','=',$caseid)
        ->get();

        $whenAndWhere = DB::table('cases')
        ->leftJoin('complaintSheet','cases.caseid','=','complaintSheet.caseid')
        ->select('cases.*','complaintSheet.*')
        ->where('complaintSheet.caseid','=',$caseid)
        ->get();

        $count = DB::table('cases')
        ->leftJoin('complaintSheet','cases.caseid','=','complaintSheet.caseid')
        ->select('cases.*','complaintSheet.*')
        ->where('complaintSheet.caseid','=',$caseid)
        ->count();

        $suspect = DB::table('case_suspects')
        ->where('caseid','=',$caseid)
        ->get();

        $victim = DB::table('case_victims')
        ->where('caseid','=',$caseid)
        ->get();

        $nature = DB::table('cases')
        ->join('casenature' ,'casenature.caseid', '=' ,'cases.caseid')
        ->join('nature' ,'nature.natureid', '=' ,'casenature.natureid')
        ->select('cases.*','casenature.*','nature.*')
        ->where('cases.caseid','=',$caseid)
        ->get();

        $status = DB::table('cases')
        ->join('case_status', 'case_status.statusid', '=' ,'cases.statusid')
        ->select('case_status.*','cases.*')
        ->where('cases.caseid','=',$caseid)
        ->get();

        $statusAll = DB::table('case_status')
        ->where('caseStatusAvailability','=','Available')
        ->get();

        $nature2 = DB::table('nature')
        ->where('natureAvailability','=','Available')
        ->get();

        return view('admin.caseUpdate',compact('cases','agent','complaintSheet','suspect','victim','nature','status','casesComplaint','dateAssigned','whenAndWhere','dateTerminated','agent2','count','statusAll','nature2'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($caseid)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $deleteCase = Cases::findOrFail($request->caseID);
        $caseStatus = $request['caseStatus'];
        $deleteCase->update([
            'caseStatus'=>$caseStatus,
        ]);
        /**
        *  Concatenate description for logs.
        */
        $caseID = $request['caseID'];
        $formDescription = $request['description'];
        $insertDescription = $formDescription. ' '.$caseID;
        Logs::create([
            'userid' => $request['userid'],
            'action' => $request['action'],
            'description' =>$insertDescription,
        ]);
        //return redirect('/caseReport')->with('alert-success', 'Successfully delete case!');
        $request->session()->flash('alert-success', 'Successfully delete case!');
        return redirect()->route('/caseReport');
        //return redirect()->back();
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
