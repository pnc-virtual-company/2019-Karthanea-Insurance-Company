<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Client;
use \App\Bill;
use \App\BillStatus;
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $contract = Contract::find($id);
        $billDate = new Bill;

        $startdate = $request->startdate;
        $enddate= $request->enddate;
        $amountBill = $request->monthlybill;
        $monthDue= $request->monthlyduedate;

        $start    = new DateTime($contract->startdate);
       // $start->modify('first day of this month');
        $end      = new DateTime($contract->enddate);
      
        $interval = DateInterval::createFromDateString('1 month');
        //$interval = DateInterval::createFromDateString('1 day');
        $period   = new DatePeriod($start, $interval, $end);
        
        foreach($period as $data){
            $billDate->month = $start;
            $billDate->duedate= $end;
            $billDate->amount= $amountBill;

            $billDate->save();
        }
        // $bills = Bill::create($request->all());

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
        $billStatus = BillStatus::all();
        $data['states'] = $billStatus;

        return response()->json($data);
        
    }

    /**
     * show bill table of client
     */
    public function showBill(Request $request)
    {
        // $bills = Bill::all();
        // $json['bills'] = $bills;

        // return response()->json($json);
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
