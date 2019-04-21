<?php

namespace App\Http\Controllers\admin;
use DB; //DATABASE CONNECTION TAG
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ccnAcmoRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $showData = DB::table('cases as c')
            ->join('caseagent as ca','ca.caseid','=','c.caseid')
            ->join('casenature as cn', 'cn.caseid','=','c.caseid')
            ->join('nature as na','na.natureid','=','cn.natureid')
            ->join('case_status as s','s.statusid','=','c.statusid')
            ->join('case_suspects as cs','cs.caseid','=','c.caseid')
            ->join('case_victims as cv','cv.caseid','=','c.caseid')
            ->join('users as usr','usr.userid','=','ca.userid')
            ->join('agent as agt','agt.userid','=','usr.userid')
            ->select('c.caseid','s.status','c.ccn'
                ,DB::raw("GROUP_CONCAT(DISTINCT CONCAT(c.complainantname, ', ',cv.victim_name) SEPARATOR ', ') as comvic")
                ,DB::raw("GROUP_CONCAT(DISTINCT CONCAT(agt.position, ' ',usr.lastName) SEPARATOR '\n') as agentoncase")
                ,DB::raw("GROUP_CONCAT(DISTINCT CONCAT (cs.suspect_name) SEPARATOR ' \n ') as subject")
                ,DB::raw("GROUP_CONCAT(DISTINCT CONCAT (na.nature) SEPARATOR ' \n ') as case_nature")
                ,DB::raw("GROUP_CONCAT(DISTINCT CONCAT (ca.dateAssigned) SEPARATOR ' \n ') as assigneddate"))
            ->where(function ($query) {
                $query->whereNull('c.ccn')
                     ->orWhere('c.ccn','=','');
                })
            ->where(function ($query) {
                $query->whereNull('c.acmo')
                    ->orWhere('c.acmo','=','');
            })  
            ->groupBy('c.caseid')
            ->orderBy('ca.dateAssigned','DESC')
            ->get();
            
        return view('admin.ccnAcmoRequest',['showData'=>$showData]);
    }

    public function fetch_data(Request $request)
    {
        $this->f_date = $request->input('from_date'); 
        $this->t_date = $request->input('to_date'); 
        if($request->ajax())
        {
         if( $this->f_date != '' &&  $this->t_date != '')
         {
            
          $showData = DB::table('cases as c')
                ->join('caseagent as ca','ca.caseid','=','c.caseid')
                ->join('casenature as cn', 'cn.caseid','=','c.caseid')
                ->join('nature as na','na.natureid','=','cn.natureid')
                ->join('case_status as s','s.statusid','=','c.statusid')
                ->join('case_suspects as cs','cs.caseid','=','c.caseid')
                ->join('case_victims as cv','cv.caseid','=','c.caseid')
                ->join('users as usr','usr.userid','=','ca.userid')
                ->join('agent as agt','agt.userid','=','usr.userid')
            ->select('c.caseid','s.status','c.ccn'
                ,DB::raw("GROUP_CONCAT(CONCAT(c.complainantname, ', ',cv.victim_name) SEPARATOR ', ') as comvic")
                ,DB::raw("GROUP_CONCAT(CONCAT(agt.position, ' ',usr.lastName) SEPARATOR '\n') as agentoncase")
                ,DB::raw("GROUP_CONCAT(DISTINCT CONCAT (cs.suspect_name) SEPARATOR ' \n ') as subject")
                ,DB::raw("GROUP_CONCAT(DISTINCT CONCAT (na.nature) SEPARATOR ' \n ') as case_nature")
                ,DB::raw("GROUP_CONCAT(DISTINCT CONCAT (ca.dateAssigned) SEPARATOR ' \n ') as assigneddate"))
            ->where(function ($query) {
                $query->whereNull('c.ccn')
                      ->orWhere('c.ccn','=','');
                })
            ->where(function ($query) {
                    $query->whereNull('c.acmo')
                          ->orWhere('c.acmo','=','');
                })   
            ->whereBetween('ca.dateAssigned', array($this->f_date, $this->t_date))
            ->groupBy('c.docketNumber')
            ->orderBy('ca.dateAssigned','DESC')
            ->get();
         }
         else
         {
            $showData = DB::table('cases as c')
                ->join('caseagent as ca','ca.caseid','=','c.caseid')
                ->join('casenature as cn', 'cn.caseid','=','c.caseid')
                ->join('nature as na','na.natureid','=','cn.natureid')
                ->join('case_status as s','s.statusid','=','c.statusid')
                ->join('case_suspects as cs','cs.caseid','=','c.caseid')
                ->join('case_victims as cv','cv.caseid','=','c.caseid')
                ->join('users as usr','usr.userid','=','ca.userid')
                ->join('agent as agt','agt.userid','=','usr.userid')
            ->select('c.caseid','s.status','c.ccn'
                ,DB::raw("GROUP_CONCAT(distinct CONCAT(c.complainantname, ', ',cv.victim_name) SEPARATOR ', ') as comvic")
                ,DB::raw("GROUP_CONCAT(distinct CONCAT(agt.position, ' ',usr.lastName) SEPARATOR '\n') as agentoncase")
                ,DB::raw("GROUP_CONCAT(DISTINCT CONCAT (cs.suspect_name) SEPARATOR ' \n ') as subject")
                ,DB::raw("GROUP_CONCAT(DISTINCT CONCAT (na.nature) SEPARATOR ' \n ') as case_nature")
                ,DB::raw("GROUP_CONCAT(DISTINCT CONCAT (ca.dateAssigned) SEPARATOR ' \n ') as assigneddate"))
            ->where(function ($query) {
                $query->whereNull('c.ccn')
                    ->orWhere('c.ccn','=','');
            })
            ->where(function ($query) {
                $query->whereNull('c.acmo')
                    ->orWhere('c.acmo','=','');
                })   
            ->groupBy('c.docketNumber')
            ->orderBy('ca.dateAssigned','DESC')
            ->get();
         }
         echo json_encode($showData);
       }
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
