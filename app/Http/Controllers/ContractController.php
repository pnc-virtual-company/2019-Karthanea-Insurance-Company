<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract ;
use App\Bill;
use App\Contractstatus;
use  PDF;
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
        $contractselect = \App\Contract::all();
        $contracttype = \App\Contracttype::all();
        $contractStatus = Contractstatus::all();
        $client = \App\Client::all();
        $bill = Bill::all();
        // $pdf = PDF::loadView('pages.addContract');
        // $pdf->save('contract.pdf');
        
        return view('pages.addContract',compact('contractselect','contracttype','client','bill','contractStatus'));
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
