<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use App\User;
use \App\Logs;
use App\Http\Requests\addNewUser;

class manageAccountController extends Controller
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
        $showData = DB::table('users')
            ->select('users.*')
            ->where('userStatus','=','Active')
            ->orWhere('userStatus','=','Inactive')
            ->orWhere('userStatus','=','Reassigned')
            ->get();
        return view ('admin.manageAccount',compact('showData'));
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
    public function store(addNewUser $request)
    {
        $validator = Validator::make($request->all(),[
            'firstName' => 'bail|required|max:50',
            'lastName' => 'required|max:50',
            'username' => 'required|unique:users|max:50',
            'middleInitial' => 'required|max:5',
            'password' => 'required|max:255',
        ]);

        if ($validator->fails()){
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }else {
            $users = User::create([
                'firstName' => $request['firstName'],
                'middleInitial' => $request['middleInitial'],
                'lastName' => $request['lastName'],
                'role' => $request['role'],
                'username' => $request['username'],
                'password' => Hash::make($request['password'])
            ])->userid;
            $lastid = $users;
            $formDescription = $request['description'];
            $insertDescription = $formDescription. ' '.$lastid;
            Logs::create([
                'userid' => $request['userid'],
                'action' => $request['action'],
                'description' => $insertDescription,
            ]);
            $request->session()->flash('alert-success', 'Successfully register new user!');
            return redirect()->back();
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $userID = $request['useridOne'];
        $password = Hash::make($request['password']);
        DB::update('update users set password = ? where userid = ?',[$password,$userID]);
    /*
        $user = User::findOrFail($request->useridOne);
        $user->update($request->all());
        $userID = $request['useridOne'];
    */
        $formDescription = $request['description'];
        $insertDescription = $formDescription. ' '.$userID;
        Logs::create([
            'userid' => $request['userid'],
            'action' => $request['action'],
            'description' => $insertDescription,
        ]);
        $request->session()->flash('alert-success', 'Password successfully reset!');
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'firstName' => 'bail|required|max:50',
            'lastName' => 'required|max:50',
            'username' => 'required|max:50',
        ]);

        if ($validator->fails()){
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }else {
            $user = User::findOrFail($request->useridOne);
            $user->update($request->all());
            $userID = $request['useridOne'];
            $formDescription = $request['description'];
            $insertDescription = $formDescription. ' '.$userID;
            Logs::create([
                'userid' => $request['userid'],
                'action' => $request['action'],
                'description' => $insertDescription,
            ]);
            $request->session()->flash('alert-success', 'User details successfully updated!');
            return redirect()->back();
        }

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
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request){

    }
}
