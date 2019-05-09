<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercallController extends Controller
{
   public function index(){
       return view('pages.userCall');
   }
}
