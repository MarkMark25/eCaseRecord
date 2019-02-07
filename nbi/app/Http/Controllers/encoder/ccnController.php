<?php

namespace App\Http\Controllers\encoder;
use DB; //DATABASE CONNECTION TAG
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ccnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$showData = DB::select('select * from administrator');
        //Select concat(a.firstname,' ',a.lastname) as 'admin', b.description, b.rental_price, b.product_code,
        //b.availability from product b join administrator a on a.admin_id = b.admin_id where a.role = 'admin'
        //ORDER BY a.firstname
        $showData = DB::table('product')
                    ->join('administrator','product.admin_id','=','administrator.admin_id')
                    ->where('administrator.role','=','admin')
                    ->select('administrator.firstname','administrator.lastname','product.description','product.rental_price','product.product_code','product.availability')
                    ->get();
        return view('encoder.ccnUpdate',['showData'=>$showData]);
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
