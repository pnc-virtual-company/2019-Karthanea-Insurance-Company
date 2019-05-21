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
                ->select('*')
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
        $billDate = new Bill;
        $start    = new DateTime($contract->startdate);
        $end      = new DateTime($contract->enddate);
        $interval = DateInterval::createFromDateString('1 month');
        $period   = new DatePeriod($start, $interval, $end);
        
        foreach($period as $dt){ 
           $billDate= $dt->format("Y-m") . PHP_EOL; 

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

    public function addData(Request $request)
    {
        $bills = array(
                'startdate' => 'required|alpha_num',
                'monthlybill' => 'required|alpha_num',
                'enddate' => 'required|alpha_num',
        );
        // $validator = Validator::make(Input::all(), $bills);
        // if ($validator->fails()) {
        //     return Response::json(array(

        //             'errors' => $validator->getMessageBag()->toArray(),
        //     ));
        // } else {
            // while ($data->month = $request->startdate <= $data->duedate = $request->enddate) {
                $data = new Bill();
                $data->month = $request->startdate;
                $data->amount = $request->monthlybill;
                $data->duedate = $request->enddate;
                $data->save();
            // }
            // return response()->json($data);
        // }
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
