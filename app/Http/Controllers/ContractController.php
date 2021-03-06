<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract ;
use App\Client ;
use App\Bill ;
use App\BillStatus;
use App\Contractstatus;
use App\Contracttype;
use  PDF;
use DateTime;
use DateInterval;
use DatePeriod;
class ContractController extends Controller
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
        $contractselect = Contract::all();
        $contracttype = Contracttype::all();
        $contractStatus = Contractstatus::all();
        $client = Client::all();
        $billStatus = BillStatus::all();
        // $pdf = PDF::loadView('pages.addContract');
        // $pdf->save('contract.pdf');
        
        return view('pages.addContract',compact('contractselect','contracttype','client','billStatus','contractStatus'));
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
        $contract = Contract::create($request->all());

        // get contract id
        $contractId = $contract->id;
        // Start date
        $start_date = $contract->startdate;
        $dueDate = $contract->monthlyduedate;
        // amount of monthly bill of contract
        $amount = $contract->monthlybill;
        // End date
        $end_date = $contract->enddate;
        $billStatusId = 1;
        // get start date and end date
        $begin = new DateTime( "$start_date" );
        $end   = new DateTime( "$end_date" );
        
        for($i = $begin; $i <= $end; $i->modify('+1 month')){
            
            $billDate = new Bill();
            $start_date=$i->format("Y-m-d");
            $due_date=$i->format("Y-m-$dueDate");
            $billDate->month = $start_date;
            $billDate->amount = $amount;
            $billDate->duedate = $due_date;
            $billDate->contract_id = $contractId;
            $billDate->billStatus_id = $billStatusId;

            $billDate->save();
        }
        return redirect('/contract');
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
        $contractupdate = \App\Contract::find($id);//select * from Post where id=$id
        $contractupdate->update($request->all());
        
        return  redirect('/contract');
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
    // public function export_pdf()
    // {
    //     $contractselect = \App\Contract::all();
    //     $contracttype = \App\Contracttype::all();
    //     $contractStatus = \App\Contractstatus::all();
    //     $client = \App\Client::all();
    //     $bill = Bill::all();
    //   // Fetch all customers from database
    //   //$data = Contract::get();
  
    //   // Send data to the view using loadView function of PDF facade
    //   $pdf = PDF::loadView('pages.addContract');
  
    //   // If you want to store the generated pdf to the server then you can use the store function
    //   $pdf->save('contract.pdf');
  
    //   // Finally, you can download the file using download function
    //   return $pdf->download('contracts.pdf',compact('contractselect','contracttype','client','bill','contractStatus'));
    // }

}
