<?php

namespace App\Http\Controllers;


use App\Note;
use Illuminate\Http\Request;
use Redirect;
use PDF;
class PaymentPdfController extends Controller
{
    public function index()
    {
        $data['note'] = \App\Bill::paginate(10);
        
        return view('pages.paymentList',response()->json($data));
    }
 
    public function pdf(){
    
     $data['note'] =  \App\Bill::get();
 
     $pdf = PDF::loadView('pages.payment_pdf', $data);
   
     return $pdf->download('paymentlist.pdf');
    }
}
