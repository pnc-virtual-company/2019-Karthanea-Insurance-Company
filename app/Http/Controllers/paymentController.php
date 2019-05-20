<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Client;
use \App\Contract;
use \App\ContractType;
use \App\Contractstatus;
use \App\Contracttype;
use \App\Contractstatus;
use \App\Bill;
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
    public function store(Request $request,$id)
    {
        $contract = Contract::find($id);
        $bills = Bill::all();
        //dd($contract1);

        $start    = new DateTime($contract->startdate);
       // $start->modify('first day of this month');
        $end      = new DateTime($contract->enddate);
        //dd($contract1->enddate);
      
        $interval = DateInterval::createFromDateString('1 month');
        //$interval = DateInterval::createFromDateString('1 day');
        $period   = new DatePeriod($start, $interval, $end);
        
        dd($bills);
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

        return response()->json($data);
        
    }

    /**
     * show bill table of client
     */
    public function showBill(Request $request)
    {
        $bills = Bill::all();
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
       $contract = Contract::find($id);
       $bill = Bill::all();
       $billDiff = $bill->diff($contract->bill);

       return view('pages.paymentList',compact('contract','bill'));
    //     $client = Client::all();
    //     $contract = Contract::all();
    //     $contract1 = Contract::find(1);
    //     $contractStatus = \App\Contractstatus::all();
    //     $contracttype = Contracttype::all();
    //     $bill = Bill::all();
    //     //dd($contract1);

    //     $start    = new DateTime($contract1->startdate);
    //    // $start->modify('first day of this month');
    //     $end      = new DateTime($contract1->enddate);
    //     //dd($contract1->enddate);
    //     $end->modify('first day of next month');
    //     $interval = DateInterval::createFromDateString('1 month');
        
    //     $period   = new DatePeriod($start, $interval, $end);
        
    //     return view('pages.paymentList',compact('period','start','end','contractStatus','client','contract','contracttype','bill' ));
    // }
    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    // //     $contract = Contract::find($id);
    // //    $bill = Bill::all();
    // //    $billDiff = $bill->diff($contract->bill);
    // //    return view('pages.paymentList',compact('contract','bill'));
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
        $bill = \App\Contract::findOrFail($id);
        $bill->update($request->all());
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

    public function listCContract($id)
    {
        $clientContract = Client::find($id);
        $clientContract->client;
        return view('pages.paymentList', compact('clientContract'));
    }

    
}
