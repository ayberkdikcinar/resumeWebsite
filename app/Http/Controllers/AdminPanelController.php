<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminPanelController extends Controller
{
    public function index(){
        return view('adminPanel.dashboard');
    }
    public function settings(){

        $user=Auth::User();
        
        return view('adminPanel.settings',compact('user'));
    }
}
