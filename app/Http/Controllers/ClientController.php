<?php

namespace App\Http\Controllers;
use Auth;
use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {

        $client=Client::all();
        return view('pages.AchiveClient',compact('client'));

        //$client = Client::all();
        //return view('pages.clientList',compact('client'));

    }
    public function userCall()
    {
//         return view('pages.userCall');
// =======
//         $client = Client::all();
//         return view('pages.clientList',compact('client'));

    }
    // public function userCall()
    // {
    //     return view('pages.userCall');
    // }
    // public function achiveClient(){
       
    //     $client=Client::all();
    //     return view('pages.clientList',compact('client'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "hi";
        // $client = Client::all();
        // return view('pages.AchiveClient',compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'firstname'=>'required',
            'lastname'=>'required',
            'addresss'=>'required',
            'phonenumber'=>'required',
            'email'=>'required'
          ]);
        $client= new Client;
        $client ->firstname = $request->input('firstname') ; 
        $client ->lastname = $request->input('lastname') ; 
        $client ->addresss = $request->input('addresss') ; 
        $client ->phonenumber = $request->input('phonenumber') ; 
        $client ->email = $request->input('email') ; 
        $client->save();
        return  redirect('/clientadd');
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
        $client = Client::findOrfail($id);
        return view('pages.AchiveClient',compact('client'));
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
        $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'addresss'=>'required',
            'phonenumber'=>'required',
            'email'=>'required'
          ]);
        $client=Client::find($id);
        $client->firstname=$request->get('firstname');
        $client->lastname=$request->get('lastname');
        $client->addresss=$request->get('addresss');
        $client->phonenumber=$request->get('phonenumber');
        $client->email=$request->get('email');
        $client->save();
        return redirect('/achiveclient');
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
