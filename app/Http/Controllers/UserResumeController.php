<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserResumeController extends Controller
{    
    public function index(){
        return view('resume.about');
    }

    public function contact(){
        return view('resume.contact');
    }

    public function courses(){
        return view('resume.courses');
    }

    public function documents(){
        return view('resume.documents');
    }

    public function education(){
        return view('resume.education');
    }

    public function experience(){
        return view('resume.experience');
    }

    public function job_preferences(){
        return view('resume.job_preferences');
    }

    public function languages(){
        return view('resume.languages');
    }
    
    public function skills(){
        return view('resume.skills');
    }
    
}
