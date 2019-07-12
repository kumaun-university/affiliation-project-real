<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Notification;
use App\Notifications\UserActivation;
use Session;

class NewRequestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $users = User::all();
        return view('admin.pages.newrequest')->with('users',$users);
    }

    public function activateUser(Request $request,$user_id)
    {
        $user=User::find($user_id);
        $user->status = 1;
        $user->save();
        Notification::send($user, new UserActivation($user));
        Session::flash('success','User has been activated!');
        return redirect()->back();
       
    }
}
