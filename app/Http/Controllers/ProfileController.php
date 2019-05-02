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
    public function profile(Request $request)
    {
        $user = Auth::user();
        return view('pages.profile', ['user' => $user]);
    }
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $user = Auth::user();
        $avatarName = request()->profile->getClientOriginalName();
        
        $request->file('pages.profile')->storeAs('public/images',$avatarName);
        $user->avatar = $avatarName;
        $user->save();
        return back()
            ->with('success','You have successfully upload image.');
    
    }
}
