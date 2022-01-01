<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Page;
use App\Models\Site_setting;

class AdminPanelController extends Controller
{
    public function index(){
        return view('adminPanel.dashboard');
    }
    public function settings(){

        $user=Auth::User();
        
        return view('adminPanel.settings',compact('user'));
    }
    public function homepageUpdate(){
        $homepage = Page::where('slug','homepage')->first();
        return view('adminPanel.pages.homepage_update',compact('homepage'));
    }
    public function howItWorksUpdate(){
        $howItWorks = Page::where('slug','howitworks')->first();
        return view('adminPanel.pages.how_it_works_update',compact('howItWorks'));
    }
    public function contactUsUpdate(){
        $contactUs = Page::where('slug','contactus')->first();
        return view('adminPanel.pages.contact_us_update',compact('contactUs'));
    }
    public function aboutUsUpdate(){
        $aboutUs = Page::where('slug','aboutus')->first();
        return view('adminPanel.pages.about_us_update',compact('aboutUs'));
    }
    public function privacyPoliciesUpdate(){
        $privacyPolicies = Page::where('slug','privacypolicies')->first();
        return view('adminPanel.pages.privacy_policies_update',compact('privacyPolicies'));
    }
    public function termsOfUseUpdate(){
        $termsOfUse = Page::where('slug','termsofuse')->first();
        return view('adminPanel.pages.terms_of_use_update',compact('termsOfUse'));
    }
    public function siteSettings(){
        $setting = Site_setting::all();
        return view('adminPanel.pages.site_settings_update',compact('setting'));
    }


    public function pagesUpdatePost(Request $request,$slug){

        $page= Page::where('slug',$slug)->first();
        if($page){

            $page->title = $request->title;
            $page->bannerTitle = $request->banner_title;
            $page->bannerContext = $request->banner_context;
            $page->image_url = $request->image_url;
            $page->content = $request->content;
        }
        else{
            return back()->withErrors("Page not found"); 
        }

        try{
            $page->save();

        } catch (\Exception $th) {
            return back()->withErrors($th->getMessage()); 
        }

        toastr()->success('Success','Page has been updated');
        return redirect()->back();
        dd($request);
    }


}
