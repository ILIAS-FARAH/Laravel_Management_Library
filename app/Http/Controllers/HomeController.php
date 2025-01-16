<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;
            if ($usertype == "user") {
                return view("user_interface_dashboard");
            } else if ($usertype == "admin") {
                return view("dashboard_interface");
            } else {
                return redirect()->back();
            }
        }
    }
    public function showUsers()
    {
        $users = User::with('reservations')->where('usertype', 'user')->get();
        return view('info_user', compact('users'));
    }
    public function userSatus()
    {
        $pendingUsers = User::where('status', 'waiting')->get();
        return view('pending_user', compact('pendingUsers'));
    }

    public function updateStatus($status, $id)
    {

        $user = User::find($id);
        if ($status == 'rejected') {
            $user->delete();
        } else {
            $user->status = $status;
            $user->save();
        }

        return redirect()->back()->with('message', 'User status updated successfully!');
    }

}
