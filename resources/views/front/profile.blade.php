@extends('front.layouts.master')
@section('title')
PROFILE | {{Auth::User()->name}} {{Auth::User()->surname}}
@endsection
@section('content')
<div class="product-page-main">
   <div class="container">
      <div class="row">
         <div class="col-md-1 col-sm-4 "></div>
         <div class="col-md-2 col-sm-4 ">
            <div class="left-profile-box-m prod-page">
               <div class="panel-body">
                  <img src="{{asset('')}}{{Auth::User()->photo_url}}" class="profile-picture" />
               </div>
               <div class="pof-text">
                  <h3 style=" text-transform: uppercase;">{{Auth::User()->username}}</h3>
               </div>

            </div>
            <ul class="list-group">
               <li class="list-group-item">Contact</li>
               <li class="list-group-item">{{Auth::User()->email}}</li>
               <li class="list-group-item">{{Auth::User()->phone}}</li>
            </ul>
         </div>
         <div class="col-md-8 col-sm-8">
            <div class="panel-body">

               <div class="description-box">
                  <div class="dex-a">
                     <h3 style=" text-transform: uppercase;">{{Auth::User()->name}} {{Auth::User()->surname}}</h3 ><hr>
                     <h4>Description</h4>
                     <p>
                        {{Auth::User()->about}}
                     </p>
                  </div>
                  <div class="spe-a">
                     <h4>About</h4>
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
                     <hr>
                     <h4>Experiences</h4>
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
                     </ul>
                     <hr>
                     @endforeach
                     <h4>Educations</h4>
                     @foreach ($educations as $education)
                     <ul>
                        <li class="clearfix">
                           <div class="col-md-4">
                              <h5>Education Level, School and Location/h5>
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
            </div>
         </div>
      </div>
   </div>
</div>
@endsection