<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user(); 
        return view('profile',compact('user'));
    }
    public function upload(Request $request)
    {
       
        $request->validate([
            'profile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($request->hasFile('profile')){
            $avatarName = request()->profile->getClientOriginalName();
            $request->file('profile')->storeAs('public/avatar',$avatarName);
            
            $user = Auth::user();
            $user->avatar = $avatarName;
            $user->save();
           
        }
        return back()
            ->with('success','You have successfully upload image.');
    }
}
