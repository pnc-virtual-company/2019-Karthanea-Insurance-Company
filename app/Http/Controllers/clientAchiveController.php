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
       
        $client = Clientlist::create($request->all());

        return redirect('/clientAchive');


=======
        $client = Client::create($request->all());
        return redirect('/clientAchive');
>>>>>>> d7a2b165434f2cfd465565b5222d58fe16c64976
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
      $disable = $request->disable;
      $disable = Client::where('status','Active')->first();
        if ($disable.checked == true) {
            $disable = Client::where('status','Disable')->first();
        } else {
            $disable = Client::where('status','Active')->first();
        }
        $disable = Client::where('status',$disable);
      $client->update($request->all());
      return  redirect('/clientAchive');
    { 
        $client = Clientlist::findOrFail($id);//seect * from Post where id=$id
        $client->update($request->all());
        return  redirect('/clientAchive');
      $client->update($request->all());
      return  redirect('/clientAchive');

<<<<<<< HEAD
        return  redirect('/clientAchive');




       

=======
    }
>>>>>>> d7a2b165434f2cfd465565b5222d58fe16c64976

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
