<?php

namespace App\Http\Controllers;

use App\Models\Homepage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Page;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class FrontController extends Controller
{
    public function login()
    {
        $loginpage = Page::where('slug', 'loginpage')->first();
        if (!Auth::check())
            return view('front.login', compact('loginpage'));
        else return redirect()->back();
    }
    public function register()
    {
        if (!Auth::check())
            return view('front.register');
        else return redirect()->back();
    }
    public function index()
    {
        $homepage = Homepage::find(1);
        return view('front.index', compact('homepage'));
    }
    public function howItWorks()
    {
        $howItWorks = Page::where('slug', 'how-it-works')->first();
        return view('front.how_it_works', compact('howItWorks'));
    }
    public function aboutUs()
    {
        $aboutUs = Page::where('slug', 'about-us')->first();
        return view('front.about_us', compact('aboutUs'));
    }
    public function contactUs()
    {
        $contactUs = Page::where('slug', 'contact-us')->first();
        return view('front.contact_us', compact('contactUs'));
    }

    public function termsOfUse()
    {
        $termsOfUse = Page::where('slug', 'terms-of-use')->first();
        return view('front.terms_of_use', compact('termsOfUse'));
    }
    public function privacyPolicies()
    {
        $privacyPolicies = Page::where('slug', 'privacy-policies')->first();
        return view('front.privacy_policies', compact('privacyPolicies'));
    }
    public function resume()
    {
        return view('front.resume_multistep');
    }
    public function profile()
    {
        $courses = Auth::user()->courses;
        $experiences = Auth::user()->experiences;
        $educations = Auth::user()->educations;
        $languages = Auth::user()->languages;
        $skills = Auth::user()->skills;
        $job_preferences = Auth::user()->jobPreferences;
        $documents = Auth::user()->documents;
        return view('front.profile', compact('courses', 'educations', 'experiences', 'languages', 'skills', 'job_preferences', 'documents'));
    }
    public function changePassword()
    {
        return view('front.password_change');
    }
    public function forgotPassword()
    {
        return view('front.forgot_password');
    }
    public function forgotPasswordPost(Request $request)
    {

        $request->email;
        $newPassword = Str::random(12);
        $user = User::where('email', $request->email)->first();
        if ($user) {
            try {
                $user->password = bcrypt($newPassword);
                $user->save();
                $request->username = $user->username;
                $request->password = $newPassword;
                MailController::mailSend($request);
            } catch (\Exception $th) {
                return back()->withErrors($th->getMessage());
            }
            return redirect()->back()->with('success', 'New password sent successfully. Please check your email!');
        } else return back()->with('error', 'The account for the given e-mail was not found.');
    }
}
