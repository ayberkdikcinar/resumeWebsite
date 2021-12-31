<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Page;
class FrontController extends Controller
{
    public function login(){
        if(!Auth::check())
            return view('front.login');
        else return redirect()->back();
    }
    public function index(){
        $homepage = Page::where('slug','homepage')->first();
        return view('front.index',compact('homepage'));
    }
    public function howItWorks(){
        $howItWorks = Page::where('slug','howitworks')->first();
        return view('front.how_it_works',compact('howItWorks'));
    }
    public function aboutUs(){
        $aboutUs = Page::where('slug','aboutus')->first();
        return view('front.about_us',compact('aboutUs'));
    }
    public function contactUs(){
        $contactUs = Page::where('slug','contactus')->first();
        return view('front.contact_us',compact('contactUs'));
    }
    public function termsOfUse(){
        $termsOfUse = Page::where('slug','termsofuse')->first();
        return view('front.terms_of_use',compact('termsOfUse'));
    }
    public function privacyPolicies(){
        $privacyPolicies = Page::where('slug','privacypolicies')->first();
        return view('front.privacy_policies',compact('privacyPolicies'));
    }
    public function resume(){
        return view('front.resume_multistep');
    }
    public function profile(){
        return view('front.profile');
    }
    
    
}
