<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Client;
use \App\Bill;
use \App\Contract;
use \App\ContractType;
use \App\Contractstatus;
class paymentController extends Controller
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
        $client = Client::where('status',1)
                ->select('*')
                ->get();
        $contract = Contract::all();
        return view("pages.paymentList",compact('client','contract'));
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
    public function showData(Request $request)
    {
        // $clientContract = Contract::where('client_id', $request->id)
        // ->select('*')
        // ->get();
        $client=Client::all();
        $clientContract = Contract::all();

        $data['contracts']=$clientContract;

        return response()->json($data);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

       $contract = Contract::find($id);
       $bill = Bill::all();
       $billDiff = $bill->diff($contract->bill);
       return view('pages.paymentList',compact('contract','bill'));

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
        $contract = Contract::find($id);
        $contract->update($request->all());
        $bill = Bill::all();
        $billDiff = $bill->diff($contract->bill);
        return  redirect('/payment');
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
