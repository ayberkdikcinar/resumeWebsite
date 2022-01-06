<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Page;
class FrontController extends Controller
{
    public function login(){
        $loginpage = Page::where('slug','loginpage')->first();
        if(!Auth::check())
            return view('front.login',compact('loginpage'));
        else return redirect()->back();
    }
    public function index(){
        $homepage = Page::where('slug','homepage')->first();
        return view('front.index',compact('homepage'));
    }
    public function howItWorks(){
        $howItWorks = Page::where('slug','how-it-works')->first();
        return view('front.how_it_works',compact('howItWorks'));
    }
    public function aboutUs(){
        $aboutUs = Page::where('slug','about-us')->first();
        return view('front.about_us',compact('aboutUs'));
    }
    public function contactUs(){
        $contactUs = Page::where('slug','contact-us')->first();
        return view('front.contact_us',compact('contactUs'));
    }
    
    public function termsOfUse(){
        $termsOfUse = Page::where('slug','terms-of-use')->first();
        return view('front.terms_of_use',compact('termsOfUse'));
    }
    public function privacyPolicies(){
        $privacyPolicies = Page::where('slug','privacy-policies')->first();
        return view('front.privacy_policies',compact('privacyPolicies'));
    }
    public function resume(){
        return view('front.resume_multistep');
    }
    public function profile(){
        return view('front.profile');
    }
    public function changePassword(){
        return view('front.password_change');
    }
    
    
}
