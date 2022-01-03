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
        $howItWorks = Page::where('slug','how-it-works')->first();
        return view('adminPanel.pages.how_it_works_update',compact('howItWorks'));
    }
    public function contactUsUpdate(){
        $contactUs = Page::where('slug','contact-us')->first();
        return view('adminPanel.pages.contact_us_update',compact('contactUs'));
    }
    public function aboutUsUpdate(){
        $aboutUs = Page::where('slug','about-us')->first();
        return view('adminPanel.pages.about_us_update',compact('aboutUs'));
    }
    public function privacyPoliciesUpdate(){
        $privacyPolicies = Page::where('slug','privacy-policies')->first();
        return view('adminPanel.pages.privacy_policies_update',compact('privacyPolicies'));
    }
    public function termsOfUseUpdate(){
        $termsOfUse = Page::where('slug','terms-of-use')->first();
        return view('adminPanel.pages.terms_of_use_update',compact('termsOfUse'));
    }
    public function siteSettings(){
        $setting = Site_setting::find(1);
        return view('adminPanel.pages.site_settings_update',compact('setting'));
    }
    public function siteSettingsPost(Request $request){
        $setting = Site_setting::find(1);
      

        $setting->title = $request->title;
        $setting->license = $request->license;
        $setting->twitter_url = $request->twitter;
        $setting->facebook_url = $request->facebook;
        $setting->linkedin_url = $request->linkedin;
        $setting->instagram_url = $request->instagram;

        if($request->hasFile('logo')){
            if($request->logo!=null){
                $imagename='logo_image.'.$request->logo->getClientOriginalExtension();
                $request->logo->move(public_path('uploads'),$imagename);
                $setting->logo_url = 'uploads/'.$imagename;
            }    
        }
        try{
            $setting->save();

        } catch (\Exception $th) {
            return back()->withErrors($th->getMessage()); 
        }
        toastr()->success('Success','Website settings has been updated');
        return redirect()->back();
    }

    public function pagesUpdatePost(Request $request,$slug){

        $page= Page::where('slug',$slug)->first();
        if($page){
            $page->title = $request->title;
            $page->bannerTitle = $request->banner_title;
            $page->bannerContext = $request->banner_context;
            $page->content = $request->content;

            if($request->hasFile('image')){
                if($request->image!=null){
                    $imagename=$slug.'_image.'.$request->image->getClientOriginalExtension();
                    $request->image->move(public_path('uploads'),$imagename);
                    $page->image_url = 'uploads/'.$imagename;
                }    
            }
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
        
    }


}
