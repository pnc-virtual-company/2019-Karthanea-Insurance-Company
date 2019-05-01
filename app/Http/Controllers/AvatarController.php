<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
class AvatarController extends Controller
{
      /**
     * 
     * Display a the profile page. Accessible to any authenticated user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function profile(Request $request)
    {
        $user = Auth::user();
        return view('users.userProfile', ['user' => $user]);
    }
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
    // public function profile()
    // {
    //     $user = Auth::user();
    //     return view('users.userProfile',compact('user',$user));
    // }
    public function update_avatar(Request $request){
         if($request->hasFile('avatar')){
             $avatar = $request->file('avatar');
             $filename = time() . '.' . $avatar->getClientOrginalExtension();
             Image::make($avatar)->resize(300,300)->save (public_path('public/images' . $filename));
             $user = Auth::user();
             $user->avatar=$filename;
             $user->save();
        // $request->validate([
        //     'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        // $user = Auth::user();

        // $avatarName =request()->avatar->getClientOriginalName();

        // $request->file('avatar')->storeAs('public/images',$avatarName);

        // $user->avatar = $avatarName;
        // $user->save();

        // return back()
        //     ->with('success','You have successfully upload image.');

    }
    return view('users.userProfile',array('users'=>Auth::users()));
}
}
