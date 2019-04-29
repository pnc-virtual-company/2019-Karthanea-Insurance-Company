<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvatarController extends Controller
{
    public function imageUpload(){
        return view('users.userProfile',array('users'=>Auth::users()));
    }
    
    public function upload( Request $request){
        if($request->hasFile('fileUpload')){
            
            $fileName = $request->file('fileUpload')->getClientOriginalName();
            
            $request->file('fileUpload')->storeAs('storage/images',$fileName);
            
            $user = Auth::users();
            $user->profile = $fileName;
            
            $user->save();

        }
        return view('users.userProfile',array('users'=>Auth::users()));
    }
}
