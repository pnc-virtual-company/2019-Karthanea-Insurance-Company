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
        $client =Client::find($id);
        $clientStatus = Client::where('id',$id)->update(array('status','Disable'));
        
        // $clientStatus->update($client->status);

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
      $client = Client::find($id);
      $status = Client::lists('id','status');

        if (is_null($client)) {
            return Redirect::route('/clientAchive');
        } 
        return View::make('pages::AchiveClient',compact('client','status'))->with($status);
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
      
        $client = Clientlist::findOrFail($id);//seect * from Post where id=$id
        $clientStatus = Clientlist::where('id',$id)->update(array('status','Disable'));
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
