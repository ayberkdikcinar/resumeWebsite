@extends('adminPanel.layouts.master')
@section('title','')
@section('content')
@section('css')
  <link href="{{asset('back/')}}/css/profile.css" rel="stylesheet">  
@endsection
<div class="container emp-profile">
            
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="{{$user->photo_url}}" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        {{$user->name}} {{$user->surname}}
                                    </h5>
                                    <h6>
                                        <strong>Current position:</strong> {{$user->current_position}}
                                    </h6>

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="experience-tab" data-toggle="tab" href="#experience" role="tab" aria-controls="experience" aria-selected="false">Experience</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="education-tab" data-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="false">Education</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Download as a PDF"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <br/>
                            <p><strong>Contact Information</strong></p>
                            Email: {{$user->email}}<br/>
                            Phone: {{$user->phone}}
                            <hr>
                            <p><strong>Hard Skills</strong></p>
                            <ul style="list-style-type:none; padding: 0;">
                                @foreach ($user->skills->where('type','hard') as $item)
                                    <li>{{$item->name}}</li>
                                @endforeach
                            </ul>
                            <hr>
                            <p><strong>Soft Skills</strong></p>
                            <ul style="list-style-type:none; padding: 0;">
                                @foreach ($user->skills->where('type','soft') as $item)
                                    <li>{{$item->name}}</li>
                                @endforeach
                            </ul>
                            <hr>
                            <p><strong>Expert Skills</strong></p>
                            <ul style="list-style-type:none; padding: 0;">
                                @foreach ($user->skills->where('type','expert') as $item)
                                    <li>{{$item->name}}</li>
                                @endforeach
                            </ul>
                            <hr>
                            <p><strong>Languages</strong></p>
                            <ul style="list-style-type:none; padding: 0;">
                                @foreach ($user->languages as $item)
                                    <div class="row">
                                        <div class="col-md-6">
                                            @if ($item->proficiency=='intermediate')
                                            <li style="color:green;">{{$item->proficiency}}</li> 
                                            @elseif ($item->proficiency=='advanced')
                                            <li style="color:red;">{{$item->proficiency}}</li> 
                                            @else
                                            <li style="color:orange;">{{$item->proficiency}}</li> 
                                            @endif 
                                        </div>
                                        <div class="col-md-6">       
                                            <li> {{$item->name}}</li>
                                            </div>
                                    </div>
                                @endforeach
                            </ul>
                            <hr>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Firstname</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>{{$user->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Lastname</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>{{$user->surname}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Age</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>{{$user->getAge()}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Country of birth</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>{{$user->country_of_birth}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Country of Residence</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>{{$user->country_of_residence}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label>Marital status</label>
                                            </div>
                                            <div class="col-md-8">
                                                <p>{{$user->marital_status}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10">
                                                <label>Description</label>
                                                <p>{{$user->about}}</p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                                        @foreach ($user->experiences as $item)    
                                        <div class="row">  
                                            <div class="col-md-12">
                                                <div class="card" style="width: 32rem; margin-bottom:5%;">
                                                    <div class="card-body">
                                                      <h5 class="card-title"><strong>{{$item->company_name}}</strong></h5>
                                                      <h6>Description</h6>
                                                      <p class="card-text">{{$item->description}}</p>
                                                    </div>
                                                    <ul class="list-group list-group-flush">
                                                      <li class="list-group-item"><h6>Position Title - Position</h6><p>{{$item->position_title}} - {{$item->position}}</p></li>
                                                      <li class="list-group-item"><h6>From - To</h6><p>{{$item->from_time}} - {{$item->to_time}}</p></li>
                                                      <li class="list-group-item"><h6>Location</h6><p>{{$item->location}}</p></li>
                                                    </ul>
                                                  </div>
                                            </div>      
                                        </div>
                                        @endforeach
                            </div>
                            <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
                                
                                @foreach ($user->educations as $item)    
                                <div class="row">  
                                    <div class="col-md-12">
                                        <div class="card" style="width: 32rem; margin-bottom:5%;">
                                            <div class="card-body">
                                              <h5 class="card-title"><strong>{{$item->school}}</strong></h5>
                                              <h6>Description</h6>
                                              <p class="card-text">{{$item->description}}</p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                              <li class="list-group-item"><h6>Education Level - Degree</h6><p>{{$item->education_level}} - {{$item->degree}}</p></li>
                                              <li class="list-group-item"><h6>From - To</h6><p>{{$item->from_time}} - {{$item->to_time}}</p></li>
                                              <li class="list-group-item"><h6>Area of study</h6><p>{{$item->area_of_study}}</p></li>
                                              <li class="list-group-item"><h6>Location</h6><p>{{$item->location}}</p></li>
                                              <li class="list-group-item"><h6>Activities and societies</h6><p>{{$item->activities_societies}}</p></li>
                                            </ul>
                                          </div>
                                    </div>      
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                      
        </div>
@endsection