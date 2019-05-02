<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class clientAchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client=Client::all();
        return view('pages.AchiveClient',compact('client'));
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
        return  redirect('/achiveclient');
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
        $this->validate($request,[
            'firstname'=>'required',
            'lastname'=>'required',
            'addresss'=>'required',
            'phonenumber'=>'required',
            'email'=>'required'
          ]);
        $client= Client::find($id);
        $client ->firstname = $request->input('firstname') ; 
        $client ->lastname = $request->input('lastname') ; 
        $client ->addresss = $request->input('addresss') ; 
        $client ->phonenumber = $request->input('phonenumber') ; 
        $client ->email = $request->input('email') ; 
        $client->save();
        return  redirect('/achiveclient');
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