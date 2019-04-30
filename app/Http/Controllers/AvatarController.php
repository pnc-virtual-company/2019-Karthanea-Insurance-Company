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
    public function profile()
    {
        $user = Auth::user();
        return view('users.userProfile',compact('user',$user));
    }
    public function update_avatar(Request $request){

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();

        $avatarName =request()->avatar->getClientOriginalName();

        $request->file('avatar')->storeAs('public/images',$avatarName);

        $user->avatar = $avatarName;
        $user->save();

        return back()
            ->with('success','You have successfully upload image.');

    }
}
