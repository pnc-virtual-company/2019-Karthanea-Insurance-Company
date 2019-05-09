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
        $clientStatus = Client::where('status','Disable')->first();
        $client = Client::all();
        $disable = Client::where('status','Active')->first();
        return view('pages.AchiveClient',compact('client','disable','clientStatus'));
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
     * Update client status function
     *
     * @param Request $request
     * @return void
     */
    public function status(Request $request, $id){
        dd($clientStatus = Client::where('status','Active'));
        $client =Client::find($id);
        $clientStatus = Client::where('status','Active')->first();
        if ($clientStatus.checked == true) {
            $clientStatus = Client::where('status','Disable')->first();
        } else {
            $clientStatus = Client::where('status','Active')->first();
        }
        $clientStatus = Client::where('status',$clientStatus);
        $clientStatus->update();

        return  redirect('/clientAchive');
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
      
      $client =Client::find($id);//seect * from Post where id=$id
    //   $disable = $request->disable;
      

    //   $disable = Client::where('status','Active')->first();
       
      $client->update($request->all());
      return  redirect('/clientAchive');
    { 
        $client = Clientlist::findOrFail($id);//seect * from Post where id=$id
        $client->update($request->all());
        return  redirect('/clientAchive');
      $client->update($request->all());
      return  redirect('/clientAchive');

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
