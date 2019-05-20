<?php
namespace App\Http\Controllers;
   
use App\Note;
use Illuminate\Http\Request;
use Redirect;
use PDF;
   
// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function index()
    {
        $data['notes'] = \App\Contract::paginate(10);
   
        return view('pages.addContract',$data);
    }
 
    public function pdf(){
      
     $data['title'] = 'Notes List';
     $data['notes'] =  \App\Contract::get();
 
     $pdf = PDF::loadView('pages.notes_pdf', $data);
   
     return $pdf->download('contractlist.pdf');
    
    }
}
