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
        $client = Client::all();
        return view('pages.clientList',compact('client'));

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
       
        $client = Client::all();
        return view('pages.AchiveClient',compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = Client::create($request->all());
        return redirect('/client');
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
        // $client = Client::findOrfail($id);
        // return view('pages.clientList',compact('client'));
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
        
        $client = \App\Client::find($id);//select * from Post where id=$id
        $client->update($request->all());
        return  redirect('/client');

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
