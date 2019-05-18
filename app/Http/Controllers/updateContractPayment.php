<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Client;
use \App\Contract;
use \App\Contracttype;
use \App\Contractstatus;
use \App\Bill;
use DateTime;
use DateInterval;
use DatePeriod;
class updateContractPayment extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){ 
    // foreach ($period as $dt) {
    //     echo $dt->format("m-Y") . PHP_EOL."</br>";
    // }
    $client = Client::all();
    $contract = Contract::all();
    $contract1 = Contract::find(1);
    $contractStatus = \App\Contractstatus::all();
    $contracttype = Contracttype::all();
    $bill = Bill::all();
    //dd($contract1);

    $start    = new DateTime($contract1->startdate);
   // $start->modify('first day of this month');
    $end      = new DateTime($contract1->enddate);
    //dd($contract1->enddate);
    $end->modify('first day of next month');
    $interval = DateInterval::createFromDateString('1 month');
    
    $period   = new DatePeriod($start, $interval, $end);
    
    return view('pages.paymentList',compact('start','end','period','contractStatus','client','contract','contracttype','bill' ));
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
    public function show($id)
    {
        // $client = Client::all();
        // $bill = Bill::all();
        // $billDiff = $bill->diff($contract->bill);
        // // $contract = Contract::with('contracttype')->where('id',$contracttype_id)->first();
        // return view('pages.paymentList',compact('contract'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    //     $contract = Contract::find($id);
    //    $bill = Bill::all();
    //    $billDiff = $bill->diff($contract->bill);
    //    return view('pages.paymentList',compact('contract','bill'));
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
        $user = \App\Contract::findOrFail($id);
        $user->update($request->all());
        return  redirect('/updateContract');
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




    public function listCContract($id)
    {
        $clientContract = Client::find($id);
        $clientContract->client;
        return view('pages.paymentList', compact('clientContract'));
    }

    
}
