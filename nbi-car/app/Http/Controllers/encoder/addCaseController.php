<?php

namespace App\Http\Controllers\encoder;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\addNewCase;
use App\Nature;
use App\Cases;
use App\User;
use App\Logs;
use App\CaseAgent;
use App\CaseNature;
use App\CaseSuspect;
use App\CaseVictims;
use App\ComplaintSheet;
use Carbon\Carbon;


class addCaseController extends Controller
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
        ->where('userStatus','=','Active')
        ->get();
        $agent2 = DB::table('users')
        ->where('role','=','Agent')
        ->where('userStatus','=','Active')
        ->get();

        $nature = DB::table('nature')
        ->where('natureAvailability','=','Available')
        ->get();
        $nature2 = DB::table('nature')
        ->where('natureAvailability','=','Available')
        ->get();

        $status = DB::table('case_status')
        ->get();

        return view('encoder.addCase', compact('agent','nature','status','agent2','nature2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {/*
        $cases = Cases::create([
            'docketnumber' => $request['docketnumber'],
            'ccn' => $request['ccn'],
            'acmo' => $request['acmo'],
            'complainantname' => $request['complainant'],
            'dateTerminated' =>  $request['dateTerminated'],
            'statusid' => $request['status'],
        ])->caseid;
        $lastid = $cases;

        if(count($request->fld_val2)>0) {
            foreach($request->fld_val2 as $item => $v){
                $data2 = array(
                    'caseid' => $lastid,
                    'userid' => $request->fld_val2[$item],
                    'dateassigned'=> $request->dateAssigned,
                );
                CaseAgent::create($data2);
            }
        }
        if(count($request->fld_val1)>0) {
            foreach($request->fld_val1 as $item => $v){
                $data3 = array(
                    'caseid' => $lastid,
                    'natureid' => $request->fld_val1[$item],
                );
                CaseNature::create($data3);
            }
        }
        if(count($request->subject)>0) {
            foreach($request->subject as $item => $v){
                $data4 = array(
                    'caseid' => $lastid,
                    'suspect_name' => $request->subject[$item],
                );
                CaseSuspect::create($data4);
            }
        }
        if(count($request->victim)>0) {
            foreach($request->victim as $item => $v){
                $data5 = array(
                    'caseid' => $lastid,
                    'victim_name' => $request->victim[$item],
                );
                CaseVictims::create($data5);
            }
        }
        Logs::create([
            'userid' => $request['userid'],
            'action' => $request['action'],
            'description' => $request['description'],
        ]);
        $request->session()->flash('alert-success', 'Case record successfully inserted!');
        return redirect()->back();
        */
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
                $cases = Cases::create([
                    'docketnumber' => $request['docketnumber'],
                    'ccn' => $request['ccn'],
                    'acmo' => $request['acmo'],
                    'complainantname' => $request['complainant'],
                    'dateTerminated' =>  $request['dateTerminated'],
                    'statusid' => $request['status'],
                ])->caseid;
                $lastid = $cases;

                if(count($request->fld_val2)>0) {
                    foreach($request->fld_val2 as $item => $v){
                        $data2 = array(
                            'caseid' => $lastid,
                            'userid' => $request->fld_val2[$item],
                            'dateassigned'=> $request->dateAssigned,
                        );
                        CaseAgent::create($data2);
                    }
                }
                if(count($request->fld_val1)>0) {
                    foreach($request->fld_val1 as $item => $v){
                        $data3 = array(
                            'caseid' => $lastid,
                            'natureid' => $request->fld_val1[$item],
                        );
                        CaseNature::create($data3);
                    }
                }
                if(count($request->subject)>0) {
                    foreach($request->subject as $item => $v){
                        $data4 = array(
                            'caseid' => $lastid,
                            'suspect_name' => $request->subject[$item],
                        );
                        CaseSuspect::create($data4);
                    }
                }
                if(count($request->victim)>0) {
                    foreach($request->victim as $item => $v){
                        $data5 = array(
                            'caseid' => $lastid,
                            'victim_name' => $request->victim[$item],
                        );
                        CaseVictims::create($data5);
                    }
                }
                ComplaintSheet::create([
                    'caseid' => $lastid,
                ]);
                $formDescription = $request['description'];
                $insertDescription = $formDescription. ' '.$lastid;
                Logs::create([
                    'userid' => $request['userid'],
                    'action' => $request['action'],
                    'description' =>$insertDescription,
                ]);
                $request->session()->flash('alert-success', 'Case record successfully added!');
                return redirect()->back();
            }

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
