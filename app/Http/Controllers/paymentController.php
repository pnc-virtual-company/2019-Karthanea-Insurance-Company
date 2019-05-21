<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Client;
use \App\Bill;
use \App\BillStatus;
use \App\Contract;
use \App\ContractType;
use \App\Contractstatus;
use DateTime;
use DateInterval;
use DatePeriod;
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
        
        $contract = Contract::all();
        $client = Client::where('status',1)
                ->groupBy('id')
                ->get();
        return view("pages.paymentList",compact('client','contract'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contract = Contract::all();
        $billDate = new Bill();
        // Start date
        $start_date = $request->input('startdate');
        // End date
        $end_date = $request->input('enddate');

        while (strtotime($start_date) <= strtotime($end_date)) {
            $start_date = date ("Y-mmm", strtotime("+1 month", strtotime($start_date)));
        }
        return redirect('/payment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showData(Request $request)
    {
        
        $client=Client::all();
        $clientContract = Contract::all();
        $data['contracts']=$clientContract;
        $contractStatus = Contractstatus::all();
        $data['status']= $contractStatus;
        $contractType = ContractType::all();
        $data['type'] = $contractType;
        $bill = Bill::all();
        $data['bills'] = $bill;

        return response()->json($data);
        
    }

    /**
     * show bill table of client
     */
    public function showBill(Request $request)
    {
        $bills = Bill::all();
        $billStatus = BillStatus::all();
        $json['states'] = $billStatus;
        $json['bills'] = $bills;

        return response()->json($json);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $
        $billStatus = Bill::all();
       return view('pages.paymentList',compact('billStatus'));
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
        $billStatus = BillStatus::find($id);
        $billStatus->update($request->status);
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
