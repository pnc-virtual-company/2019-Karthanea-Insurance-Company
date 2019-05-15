<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Contract;
class PaymentsController extends Controller
{
    public function index(){

        $client = Client::all();
        return view('pages.payment',compact('client'));
    }

    // public function readData(){
    //     $clientContract = Contract::join('clientd','clients.id','=','contracts.client_id' )
    //     ->selectRaw('contracts.id,contracts.contracttype_id,contracts.status_id,contracts.startdate,contracts.enddate,contracts.monthlybill')
        
    //     ->get();

    //     return response($clientContract);
    // }
}
