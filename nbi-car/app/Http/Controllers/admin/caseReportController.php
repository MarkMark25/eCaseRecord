<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\addNewCase;
use App\Cases;
use App\Logs;
use App\Nature;
use App\Users;
use App\CaseAgent;
use App\CaseNature;
use App\CaseSuspect;
use App\CaseVictims;
use App\ComplaintSheet;
use Carbon\Carbon;
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
        ->where('cases.caseAvailability','=','Available')
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
        if($request==true){
            $caseStatus = $request['caseAvailability'];
            $caseID = $request['caseID'];
            DB::update('update cases set caseAvailability = ? where caseid = ?',[$caseStatus,$caseID]);
            /**
            *  Concatenate description for logs.
            */
            $formDescription = $request['descriptionOne'];
            $insertDescription = $formDescription. ' '.$caseID;
            Logs::create([
                'userid' => $request['userid'],
                'action' => $request['action'],
                'description' =>$insertDescription,
            ]);
            return redirect('/caseReport')->with('alert-success', 'Successfully delete case!');
        }else{
            return redirect('/caseReport')->with('alert-danger', 'ERROR!');
        }
        /*
        if($request==true){
            $deleteCase = Cases::find($request->caseID);
            $caseStatus = $request['caseAvailability'];
            $deleteCase->update([
                'caseAvailability'=>$caseStatus,
            ]);

            $caseID = $request['caseID'];
            $formDescription = $request['description'];
            $insertDescription = $formDescription. ' '.$caseID;
            Logs::create([
                'userid' => $request['userid'],
                'action' => $request['action'],
                'description' =>$insertDescription,
            ]);
            return redirect('/caseReport')->with('alert-success', 'Successfully delete case!');
            //$request->session()->flash('alert-success', 'Successfully delete case!');
            //return redirect()->route('/caseReport');
            //return redirect()->back();
        }else{
            return redirect('/caseReport')->with('alert-danger', 'ERROR!');
        }
        */
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
            //Cases Update
            $casesID = $request['caseID'];
            $cases = User::findOrFail($request->caseID);
            $cases->update([
                'docketnumber' => $request['docketnumber'],
                'ccn' => $request['ccn'],
                'acmo' => $request['acmo'],
                'complainantname' => $request['complainant'],
                'dateTerminated' =>  $request['dateTerminated'],
                'statusid' => $request['status'],
                'complainant_Address' => $request['complainantAddress'],
                'complainant_Contact_Number' => $request['complainantTelNumber'],
            ]);
            //Agent update date assigned
            $dateAssigned = Caseagent::findOrFail($request->datecaseID);
            $dateAssigned->update([
                'dateassigned' => $request['dateAssigned'],
            ]);
            //Case Agent store agent and dates
            $dateAgentAssigned = $request['dateAssigned'];
            if(count($request->fld_val2)>0) {
                foreach($request->fld_val2 as $item => $v){
                    $data2 = array(
                        'caseid' => $casesID    ,
                        'userid' => $request->fld_val2[$item],
                        'dateassigned'=> $dateAgentAssigned,
                    );
                    CaseAgent::create($data2);
                }
            }
            //Complaint Sheet Update
            $complainSheet = ComplaintSheet::findOrFail($request->complainSheetID);
            $complainSheet->update([
                    'caseid' => $casesID,
                    'place_Committed' => $request['whereCommitted'],
                    'date_Committed' => $request['whenCommitted'],
                    'narration_Of_Facts' => $request['narrationOfFacts'],
                    'reported_Any_Agency' => $request['hasTheMatter'],
                    'status_of_Investigation' => $request['statusOfInvestigation'],
                    'where_court_Proceedings' => $request['isTheMatterComplained'],
                    'report_Considerations' => $request['whatConsidirations '],
                ]);
            //Case nature store
            if(count($request->fld_val1)>0) {
                foreach($request->fld_val1 as $item => $v){
                    $data3 = array(
                        'caseid' => $casesID,
                        'natureid' => $request->fld_val1[$item],
                    );
                    CaseNature::create($data3);
                }
            }
            //Suspect name store
            if(count($request->suspectNameA)>0) {
                foreach($request->suspectNameA as $item => $v){
                    $data4 = array(
                        'caseid' => $casesID,
                        'suspect_name' => $request->suspectNameA[$item],
                        'suspect_Address'=> $request->suspectAddressA[$item],
                        'suspect_Contact_Number'=> $request->suspectTelNumberA[$item],
                        'suspect_Sex'=> $request->suspectSexA[$item],
                        'suspect_Age'=> $request->suspectAgeA[$item],
                        'suspect_Civil_Status'=> $request->suspectCivilStatusA[$item],
                        'suspect_Occupation'=> $request->suspectOccupationA[$item],
                    );
                    CaseSuspect::create($data4);
                }
            }
            //Victim name store
            if(count($request->victimNameA)>0) {
                foreach($request->victimNameA as $item => $v){
                    $data5 = array(
                        'caseid' => $casesID,
                        'victim_name' => $request->victimNameA[$item],
                        'victim_Address' => $request->victimAddressA[$item],
                        'victim_Contact_Number' => $request->victimTelNumberA[$item],
                        'victim_Sex' => $request->victimSexA[$item],
                        'victim_Age' => $request->victimAgeA[$item],
                        'victim_Civil_Status' => $request->victimCivilStatusA[$item],
                        'victim_Occupation' => $request->victimOccupationA[$item],
                    );
                    CaseVictims::create($data5);
                }
            }
            //Activity Logs create
            $formDescription = $request['description'];
            $insertDescription = $formDescription. ' '.$casesID;
            Logs::create([
                'userid' => $request['userid'],
                'action' => $request['action'],
                'description' => $insertDescription,
            ]);
            //Delete Case Nature
            CaseNature::whereIn('cnatureid', $request->caseNatureID)->destroy();
            //Delete Suspect
            CaseSuspect::whereIn('id',$request->suspectID)->destory();
            //Delete Victims
            CaseVictims::whereIn('id',$request->victimID)->destroy();

        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Response $request)
    {

    }
}
