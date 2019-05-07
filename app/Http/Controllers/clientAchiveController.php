<?php

namespace App\Http\Controllers;
use Auth;
use App\Clientlist;
use Illuminate\Http\Request;

class clientAchiveController extends Controller
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

        $client = Clientlist::all();
        return view('pages.achiveClient',compact('client'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
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
       
        $client = Clientlist::create($request->all());
        return redirect('/achiveclient');
       

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

        
        $client = Clientlist::findOrFail($id);//seect * from Post where id=$id
        $client->update($request->all());
        return  redirect('/achiveclient');


        // $this->validate($request,[
        //     'firstname'=>'required',
        //     'lastname'=>'required',
        //     'addresss'=>'required',
        //     'phonenumber'=>'required',
        //     'email'=>'required'
        //   ]);
        // $client= Client::findOrFail($id);
        // $client ->firstname = $request->input('firstname') ; 
        // $client ->lastname = $request->input('lastname') ; 
        // $client ->addresss = $request->input('addresss') ; 
        // $client ->phonenumber = $request->input('phonenumber') ; 
        // $client ->email = $request->input('email') ; 
        // $client->save();

        // return  redirect('/achiveclient');
        

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
}
