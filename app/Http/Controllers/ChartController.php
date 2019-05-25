<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Bill;
// use App\Call;
class ChartController extends Controller
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
         $bill= Bill::orderBy('month','asc')->get();
         
        return view('pages.chart',compact('bill'));
      
    }


    public function payment(Request $request){
        $amountBill = Bill::orderBy('month','acs')->get();
        //return $amountBill;
        
        $json['amount'] = $amountBill;
        return response()->json($json);
    }
 

 }
