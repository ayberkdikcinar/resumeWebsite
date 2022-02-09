@extends('front.layouts.master')
@section('title')
PROFILE | {{Auth::User()->name}} {{Auth::User()->surname}}
@endsection
@section('content')
<div class="product-page-main">
   <div class="container">
      <div class="row">
         <div class="col-md-1 col-sm-4 "></div>
         <div class="col-md-3 col-sm-4 ">
            <div class="left-profile-box-m prod-page">
               <div class="panel-body">
                  <img src="{{asset('')}}{{Auth::User()->photo_url}}" class="profile-picture" />
               </div>
               <div class="pof-text">
                  <h3 style="text-transform: uppercase;">{{Auth::User()->username}}</h3>
               </div>

            </div>
            <ul class="list-group">
               <li class="list-group-item">Contact</li>
               <li class="list-group-item">{{Auth::User()->email}}</li>
               <li class="list-group-item">{{Auth::User()->phone}}</li>
               <li class="list-group-item">
                  <center><a href="{{route('admin.user.generatePDF', Auth::User()->id)}}"><img src="{{asset('uploads/pdf_download.png')}}" width="70px" height="75px"></a></center>
               </li>
            </ul>
         </div>
         <div class="col-md-8 col-sm-8">
            <div class="panel-body">

               <div class="description-box">

                  <div class="dex-a">
                     <h3 style=" text-transform: uppercase;">{{Auth::User()->name}} {{Auth::User()->surname}}</h3>
                     <hr>
                     <h4>Description</h4>
                     <p>
                        {{Auth::User()->about}}
                     </p>
                  </div>

                  <div class="spe-a">
                     <div id="accordion">
                        <ul>
                           <li class="clearfix">
                              <div class="card">
                                 <div class="card-header collapsed card-link profile-info" data-toggle="collapse" href="#about">
                                    <h4 style="padding: 5px;"><i class="fas fa-angle-down"></i> ABOUT</h4>
                                 </div>
                                 <div class="profile-edit">
                                    <a href="{{ route('resume.about')}}" class="btn-profile-edit btn-success"><span class="material-icons">edit</span></a>
                                 </div>
                                 <div id="about" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                       <ul>
                                          <li class="clearfix">
                                             <div class="col-md-4">
                                                <h5>Date of Birth</h5>
                                             </div>
                                             <div class="col-md-8">
                                                <p>{{Auth::User()->date_of_birth}}</p>
                                             </div>
                                          </li>
                                          <li class="clearfix">
                                             <div class="col-md-4">
                                                <h5>Country of Birth</h5>
                                             </div>
                                             <div class="col-md-8">
                                                <p>{{Auth::User()->country_of_birth}}</p>
                                             </div>
                                          </li>
                                          <li class="clearfix">
                                             <div class="col-md-4">
                                                <h5>Country of Residence</h5>
                                             </div>
                                             <div class="col-md-8">
                                                <p>{{Auth::User()->country_of_residence}}</p>
                                             </div>
                                          </li>
                                          <li class="clearfix">
                                             <div class="col-md-4">
                                                <h5>Marital Status</h5>
                                             </div>
                                             <div class="col-md-8">
                                                <p>{{Auth::User()->marital_status}}</p>
                                             </div>
                                          </li>
                                          <li class="clearfix">
                                             <div class="col-md-4">
                                                <h5>Current Position</h5>
                                             </div>
                                             <div class="col-md-8">
                                                <p>{{Auth::User()->current_position}}</p>
                                             </div>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="clearfix">
                              <div class="card">
                                 <div class="card-header collapsed card-link profile-info" data-toggle="collapse" href="#experience">
                                    <h4 style="padding: 5px;"><i class="fas fa-angle-down"></i> EXPERIENCES</h4>
                                 </div>
                                 <div class="profile-edit">
                                    <a href="{{ route('resume.experience')}}" class="btn-profile-edit btn-success"><span class="material-icons">edit</span></a>
                                 </div>
                                 <div id="experience" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                       @foreach ($experiences as $experience)
                                       <ul>
                                          <li class="clearfix">
                                             <div class="col-md-4">
                                                <h5>Company Name</h5>
                                             </div>
                                             <div class="col-md-8">
                                                <p>{{$experience->company_name}}</p>
                                             </div>
                                          </li>
                                          <li class="clearfix">
                                             <div class="col-md-4">
                                                <h5>Location</h5>
                                             </div>
                                             <div class="col-md-8">
                                                <p>{{$experience->location}}</p>
                                             </div>
                                          </li>
                                          <li class="clearfix">
                                             <div class="col-md-4">
                                                <h5>Position</h5>
                                             </div>
                                             <div class="col-md-8">
                                                <p>{{$experience->position}}</p>
                                             </div>
                                          </li>
                                          <li class="clearfix">
                                             <div class="col-md-4">
                                                <h5>Position Title</h5>
                                             </div>
                                             <div class="col-md-8">
                                                <p>{{$experience->position_title}}</p>
                                             </div>
                                          </li>
                                          <li class="clearfix">
                                             <div class="col-md-4">
                                                <h5>Working Time</h5>
                                             </div>
                                             <div class="col-md-8">
                                                <p>{{$experience->from_time}} - {{$experience->to_time}}</p>
                                             </div>
                                          </li>
                                          <li class="clearfix">
                                             <div class="col-md-4">
                                                <h5>Description</h5>
                                             </div>
                                             <div class="col-md-8">
                                                <p>{{$experience->description}}</p>
                                             </div>
                                          </li>
                                       </ul>
                                       <hr>
                                       @endforeach
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="clearfix">
                              <div class="card">
                                 <div class="card-header collapsed card-link profile-info" data-toggle="collapse" href="#education">
                                    <h4 style="padding: 5px;"><i class="fas fa-angle-down"></i> EDUCATIONS</h4>
                                 </div>
                                 <div class="profile-edit">
                                    <a href="{{ route('resume.education')}}" class="btn-profile-edit btn-success"><span class="material-icons">edit</span></a>
                                 </div>
                                 <div id="education" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                       @foreach ($educations as $education)
                                       <ul>
                                          <li class="clearfix">
                                             <div class="col-md-4">
                                                <h5>Education Level, School and Location</h5>
                                             </div>
                                             <div class="col-md-8">
                                                <p>{{$education->education_level}} / {{$education->school}} / {{$education->location}}</p>
                                             </div>
                                          </li>
                                          <li class="clearfix">
                                             <div class="col-md-4">
                                                <h5>Degree amd Area of Study</h5>
                                             </div>
                                             <div class="col-md-8">
                                                <p>{{$education->degree}} | {{$education->area_of_study}}</p>
                                             </div>
                                          </li>
                                          <li class="clearfix">
                                             <div class="col-md-4">
                                                <h5>Study Time</h5>
                                             </div>
                                             <div class="col-md-8">
                                                <p>{{$education->from_time}} - {{$education->to_time}}</p>
                                             </div>
                                          </li>
                                          <li class="clearfix">
                                             <div class="col-md-4">
                                                <h5>Activities and Societies</h5>
                                             </div>
                                             <div class="col-md-8">
                                                <p>{{$education->activities_societies}}</p>
                                             </div>
                                          </li>
                                          <li class="clearfix">
                                             <div class="col-md-4">
                                                <h5>Description</h5>
                                             </div>
                                             <div class="col-md-8">
                                                <p>{{$education->description}}</p>
                                             </div>
                                          </li>
                                       </ul>
                                       <hr>
                                       @endforeach
                                    </div>
                                 </div>
                           </li>
                           <li class="clearfix">
                              <div class="card">
                                 <div class="card-header collapsed card-link profile-info" data-toggle="collapse" href="#languages">
                                    <h4 style="padding: 5px;"><i class="fas fa-angle-down"></i> LANGUAGES</h4>
                                 </div>
                                 <div class="profile-edit">
                                    <a href="{{ route('resume.languages')}}" class="btn-profile-edit btn-success"><span class="material-icons">edit</span></a>
                                 </div>
                                 <div id="languages" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                       @foreach ($languages as $language)
                                       <ul>
                                          <li class="clearfix">
                                             <div class="col-md-4">
                                                <h5>Language</h5>
                                             </div>
                                             <div class="col-md-8">
                                                <p>{{$language->name}}</p>
                                             </div>
                                          </li>
                                          <li class="clearfix">
                                             <div class="col-md-4">
                                                <h5>Proficiency</h5>
                                             </div>
                                             <div class="col-md-8">
                                                <p>{{$language->proficiency}}</p>
                                             </div>
                                          </li>
                                       </ul>
                                       <hr>
                                       @endforeach
                                    </div>
                                 </div>
                           </li>
                           <li class="clearfix">
                              <div class="card">
                                 <div class="card-header collapsed card-link profile-info" data-toggle="collapse" href="#skills">
                                    <h4 style="padding: 5px;"><i class="fas fa-angle-down"></i> SKILLS</h4>
                                 </div>
                                 <div class="profile-edit">
                                    <a href="{{ route('resume.skills')}}" class="btn-profile-edit btn-success"><span class="material-icons">edit</span></a>
                                 </div>
                                 <div id="skills" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                       @foreach ($skills as $skill)
                                       <ul>
                                          <li class="clearfix">
                                             <div class="col-md-4">
                                                <h5>Level</h5>
                                             </div>
                                             <div class="col-md-8">
                                                <p>{{$skill->type}}</p>
                                             </div>
                                          </li>
                                          <li class="clearfix">
                                             <div class="col-md-4">
                                                <h5>Skill</h5>
                                             </div>
                                             <div class="col-md-8">
                                                <p>{{$skill->name}}</p>
                                             </div>
                                          </li>
                                       </ul>
                                       <hr>
                                       @endforeach
                                    </div>
                                 </div>
                           </li>
                           <li class="clearfix">
                              <div class="card">
                                 <div class="card-header collapsed card-link profile-info" data-toggle="collapse" href="#courses">
                                    <h4 style="padding: 5px;"><i class="fas fa-angle-down"></i> COURSES</h4>
                                 </div>
                                 <div class="profile-edit">
                                    <a href="{{ route('resume.courses')}}" class="btn-profile-edit btn-success"><span class="material-icons">edit</span></a>
                                 </div>
                                 <div id="courses" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                       @foreach ($courses as $course)
                                       <ul>
                                          <li class="clearfix">
                                             <div class="col-md-4">
                                                <h5>Course Name</h5>
                                             </div>
                                             <div class="col-md-8">
                                                <p>{{$course->name}}</p>
                                             </div>
                                          </li>
                                          <li class="clearfix">
                                             <div class="col-md-4">
                                                <h5>Provider</h5>
                                             </div>
                                             <div class="col-md-8">
                                                <p>{{$course->provider}}</p>
                                             </div>
                                          </li>
                                          <li class="clearfix">
                                             <div class="col-md-4">
                                                <h5>Time</h5>
                                             </div>
                                             <div class="col-md-8">
                                                <p>{{$course->from_time}} - {{$course->to_time}}</p>
                                             </div>
                                          </li>
                                          <li class="clearfix">
                                             <div class="col-md-4">
                                                <h5>Description</h5>
                                             </div>
                                             <div class="col-md-8">
                                                <p>{{$course->description}}</p>
                                             </div>
                                          </li>
                                       </ul>
                                       <hr>
                                       @endforeach
                                    </div>
                                 </div>
                           </li>
                           <li class="clearfix">
                              <div class="card">
                                 <div class="card-header collapsed card-link profile-info" data-toggle="collapse" href="#job_preferences">
                                    <h4 style="padding: 5px;"><i class="fas fa-angle-down"></i> JOB PREFERENCES</h4>
                                 </div>
                                 <div class="profile-edit">
                                    <a href="{{ route('resume.job_preferences')}}" class="btn-profile-edit btn-success"><span class="material-icons">edit</span></a>
                                 </div>
                                 <div id="job_preferences" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                       @foreach ($job_preferences as $job_preference)
                                       <ul>
                                          <li class="clearfix">
                                             <div class="col-md-4">
                                                <h5>Desired Position Type</h5>
                                             </div>
                                             <div class="col-md-8">
                                                <p>{{$job_preference->field}}</p>
                                             </div>
                                          </li>
                                          <li class="clearfix">
                                             <div class="col-md-4">
                                                <h5>Locations</h5>
                                             </div>
                                             <div class="col-md-8">
                                                <p>{{$job_preference->desired_location}}</p>
                                             </div>
                                          </li>
                                       </ul>
                                       <hr>
                                       @endforeach
                                    </div>
                                 </div>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection