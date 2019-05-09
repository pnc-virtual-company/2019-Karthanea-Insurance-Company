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
        $client = Client::all();
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
<<<<<<< HEAD
=======
        $client = Clientlist::create($request->all());

        return redirect('/clientAchive');
>>>>>>> 5c321484623f8237a48c52350c765ecb261d2a63

        $client = Client::create($request->all());
        return redirect('/clientAchive');
       
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
<<<<<<< HEAD
     //
=======
        //
>>>>>>> 5c321484623f8237a48c52350c765ecb261d2a63
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
<<<<<<< HEAD
    {
      
      $client =Client::find($id);//seect * from Post where id=$id
      $client->update($request->all());
      return  redirect('/clientAchive');
=======
    { 
        $client = Clientlist::findOrFail($id);//seect * from Post where id=$id
        $client->update($request->all());
        return  redirect('/clientAchive');
>>>>>>> 5c321484623f8237a48c52350c765ecb261d2a63
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //
    // }
}
