<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Experience;
use App\Models\Job_preference;
use App\Models\Language;
use App\Models\Skill;
use App\Models\Course;
use App\Models\Document;
use App\Models\Education;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ResumeController extends Controller
{
    

    /*public function contact(){
        return view('resume.contact');
    }*/

    public function documents(){
        $user = User::findOrFail(Auth::user()->id);
        return view('resume.documents',compact('user'));
    }
    public function addDocument(Request $request,$document_type){
        
        
        $user = User::findOrFail(Auth::user()->id);

        $document = new Document;
        
        ///validation of the file, max 5mb, pdf,and word are accepted.
        $request->validate([
            'file' => 'required|mimes:png,jpg,jpeg,doc,docx,pdf|max:2048'
        ]);
        
        if($request->hasFile('file')){

            if($user->documents->where('type',$document_type)->count()>=5){
                return back()->withErrors("You already have uploaded maximum number of files for type $document_type!"); 
            }

            $name = time().'_'.$request->file->getClientOriginalName();
            $folder = $request->file('file')->storeAs('uploads/'.Str::slug($user->username),'', 'public');
            
            /*if (!Storage::exists($folder)) {
                Storage::makeDirectory($folder, 0775, true, true);

            }*/
            $request->file->move(public_path($folder),$name);
            
            $document->type=$document_type;
            $document->document_url=$folder.'/'.$name;
            $document->user_id = $user->id;
            
           
        }
        try {
            $document->save();

        } catch (\Exception $th) {
            return back()->withErrors($th->getMessage()); 
        }

        return redirect()->back();
        

    }
    ///////////////
    
    public function about(){
        $user = Auth::user();
        return view('resume.about',compact('user'));
    }

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
        $user->email =$request->email;
        $user->phone =$request->phone;
        $user->about =$request->about;
        
        
        if($request->hasFile('image')){
            
            $imagename='profile_photo.'.$request->image->getClientOriginalExtension();
            $folder = $request->file('image')->storeAs('uploads/'.Str::slug($user->username),'', 'public');

            $request->image->move(public_path($folder),$imagename);
            $user->photo_url=$folder.'/'.$imagename;
        }
        try {
            $user->save();

        } catch (\Exception $th) {
            return back()->withErrors($th->getMessage()); 
        }
        return redirect()->route('resume.about');

    }

    ////////////////

    public function experience(){
        $experiences = Auth::user()->experiences;
        return view('resume.experience',compact('experiences'));
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
            
        return redirect()->route('resume.experience');
        
    }

    ////////////////

    public function education(){

        $educations = Auth::user()->educations;
        return view('resume.education',compact('educations'));
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
        
        return redirect()->route('resume.education');


    }

    ////////////////

    public function languages(){
        $languages = Auth::user()->languages;
        return view('resume.languages',compact('languages'));
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
        
        return redirect()->route('resume.languages');

    }

    ////////////////

    public function skills(){
        $skills = Auth::user()->skills;
        return view('resume.skills',compact('skills'));
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

        return redirect()->route('resume.skills');

    }
    
    ////////////////

    public function courses(){
        $courses = Auth::user()->courses;
        return view('resume.courses',compact('courses'));
    }

    public function addCourse(Request $request){

        $course = new Course;

        $course->name= $request->name;
        $course->provider = $request->provider;
        $course->from_time = $request->from_time;
        $course->to_time = $request->to_time;
        $course->description = $request->description;
      
        $course->user_id = Auth::user()->id;

        try {
            $course->save();

        } catch (\Exception $th) {
            return back()->withErrors($th->getMessage()); 
        }
        return redirect()->route('resume.courses');

    }
    
    ////////////////

    public function job_preferences(){
        $job_preferences = Auth::user()->jobPreferences;
        return view('resume.job_preferences',compact('job_preferences'));
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
        return redirect()->route('resume.job_preferences');

    }
    public function resourceDelete($user_id,$type,$id){
        
        $user = Auth::user();

        if($user->id == $user_id){
            switch ($type) {
                case 'job_preference':
                    Job_preference::findOrFail($id)->delete();
                    break;
                case 'course':
                    Course::findOrFail($id)->delete();
                    break;
                case 'skill':
                    Skill::findOrFail($id)->delete();
                    break;
                case 'language':
                    Language::findOrFail($id)->delete();
                    break;
                case 'education':
                    Education::findOrFail($id)->delete();
                    break;
                case 'experience':
                    Experience::findOrFail($id)->delete();
                    break;  
                case 'document':
                    Document::findOrFail($id)->delete();
                    $path = 'uploads/'.$user->username;
                    if (File::exists($path)) File::deleteDirectory($path);
                    break;  
                default:
                    break;
            }
        }
        return redirect()->back();
    }
    ////////////


}
