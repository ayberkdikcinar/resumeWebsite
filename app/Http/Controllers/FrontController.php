<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function login(){
        if(!Auth::check())
            return view('front.login');
        else return redirect()->back();
    }
    public function index(){
        return view('front.index');
    }
    public function howItWorks(){
        return view('front.how_it_works');
    }
    public function aboutUs(){
        return view('front.about_us');
    }
    public function contactUs(){
        return view('front.contact_us');
    }
    public function termsOfUse(){
        return view('front.terms_of_use');
    }
    public function resume(){
        return view('front.resume_multistep');
    }
    public function profile(){
        return view('front.profile');
    }
    
    
}
