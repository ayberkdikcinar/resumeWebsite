<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Page;
use Faker\Provider\ar_EG\Company;

class FrontController extends Controller
{
    public function login(){
        $loginpage = Page::where('slug','loginpage')->first();
        if(!Auth::check())
            return view('front.login',compact('loginpage'));
        else return redirect()->back();
    }
    public function index(){
        $homepage = Homepage::find(1);
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
        $courses = Auth::user()->courses;
        $experiences = Auth::user()->experiences;
        $educations = Auth::user()->educations;
        $languages = Auth::user()->languages;
        $skills = Auth::user()->skills;
        $job_preferences = Auth::user()->jobPreferences;
        return view('front.profile', compact('courses', 'educations', 'experiences', 'languages', 'skills', 'job_preferences'));
    }
    public function changePassword(){
        return view('front.password_change');
    }
    
    
}
