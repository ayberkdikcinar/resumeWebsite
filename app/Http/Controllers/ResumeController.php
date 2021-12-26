<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Education;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Experience;
use App\Models\Job_preference;
use App\Models\Language;
use App\Models\Skill;
use Illuminate\Support\Facades\Hash;

class ResumeController extends Controller
{
    

    public function addUserAbout(Request $request){ //next butonunu post olarak verilcek!

        //validation

        

        $user = User::findOrFail(Auth::user()->id);
        
        $user->current_position = $request->current_position;
        $user->name = $request->firstname;
        $user->surname = $request->lastname;
        $user->date_of_birth = $request->date_of_birth;
        $user->country_of_birth =$request->country_of_birth;
        $user->country_of_residence =$request->country_of_residence;
        $user->marital_status =$request->marital_status;
        $user->about =$request->about;
        $user->photo_url =$request->photo_url;
        
        try {
            $user->save();

        } catch (\Exception $th) {
            return back()->withErrors($th->getMessage()); 
        }
        return redirect()->route('resume.experience');

    }

    public function addExperience(Request $request){//add experience butonunu post olarak verilcek!

        //validation
        $experience = new Experience;

        $experience->company_name= $request->company_name;
        $experience->position = $request->position;
        $experience->position_title = $request->position_title;
        $experience->location = $request->location;
        $experience->from_time = $request->from_time;
        $experience->to_time = $request->to_time;
        $experience->description = $request->description;

        $experience->user_id = Auth::user()->id;

        try {
            $experience->save();

        } catch (\Exception $th) {
            return back()->withErrors($th->getMessage()); 
        }
        $experiences = Auth::user()->experiences;
        
        return redirect()->back()->with(compact('experiences'));
        
    }

    public function addEducation(Request $request){ //add education butonunu post olarak verilcek!

        //validation

        $education = new Education;

        $education->education_level= $request->education_level;
        $education->school = $request->school;
        $education->from_time = $request->from_time;
        $education->to_time = $request->to_time;
        $education->degree = $request->degree;
        $education->area_of_study = $request->area_of_study;
        $education->location = $request->location;
        $education->activities_societies = $request->activities_societies;
        $education->description = $request->description;

        $education->user_id = Auth::user()->id;

        try {
            $education->save();

        } catch (\Exception $th) {
            return back()->withErrors($th->getMessage()); 
        }
        $educations = Auth::user()->educations;
        return redirect()->back()->with(compact('educations'));


    }

    public function addLanguage(Request $request){ ///language next butonunun oraya verilcek post olarak!

        //validation
        
        $language = new Language;

        $language->name= $request->name;
        $language->proficiency = $request->proficiency;

        $language->user_id = Auth::user()->id;

        try {
            $language->save();

        } catch (\Exception $th) {
            return back()->withErrors($th->getMessage()); 
        }
        $languages = Auth::user()->languages;
        return redirect()->route('resume.skills',compact('user'));

    }

    public function addSkill(Request $request){

        //validation
        
        $skill = new Skill;

        $skill->type= $request->type;
        $skill->name = $request->name;

        $skill->user_id = Auth::user()->id;

        try {
            $skill->save();

        } catch (\Exception $th) {
            return back()->withErrors($th->getMessage()); 
        }

        return redirect()->route('courses');

    }

    public function addCourse(Request $request){

        $course = new Course;

        $course->name= $request->name;
        $course->provider = $request->provider;
        $course->completed_time = $request->completed_time;
        $course->description = $request->description;
      
        $course->user_id = Auth::user()->id;

        try {
            $course->save();

        } catch (\Exception $th) {
            return back()->withErrors($th->getMessage()); 
        }
        return redirect()->route('job_preferences',compact('course'));

    }
    
    public function addJobPreference(Request $request){
        //validation
        
        $jobPreference = new Job_preference;

        $jobPreference->field= $request->field;
        $jobPreference->desired_location = $request->desired_location;

        $jobPreference->user_id = Auth::user()->id;

        try {
            $jobPreference->save();

        } catch (\Exception $th) {
            return back()->withErrors($th->getMessage()); 
        }
        return redirect()->route('index',compact('jobPreference'));

    }



}
