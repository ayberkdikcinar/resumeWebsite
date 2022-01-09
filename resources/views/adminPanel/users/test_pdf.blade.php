<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="public/back/css/view-detailed-user.css" rel="stylesheet">
     <!-- Custom fonts for this template-->
     <link href="public/back/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
     
     <!-- Custom styles for this template-->
     <link href="public/back/css/sb-admin-2.min.css" rel="stylesheet">
     <link href="public/back/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
     
     <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
     integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    

<div class="container emp-profile">
            
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="" alt=""/>
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
                                <li class="nav-item">
                                    <a class="nav-link" id="courses-tab" data-toggle="tab" href="#courses" role="tab" aria-controls="courses" aria-selected="false">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="documents-tab" data-toggle="tab" href="#documents" role="tab" aria-controls="documents" aria-selected="false">Documents</a>
                                </li>
                            </ul>
                        </div>
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
                    <div class="col-md-6" style="margin-top: -7%;">
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
                                        <label>Job Preferences</label>     
                                        <ul style="list-style-type:none; padding: 0;">
                                        @foreach ($user->jobPreferences as $item)
                                        <div class="row">
                                            <div class="col-md-6">
                                                <li>Field <p>{{$item->field}}</p></li> 
                                            </div>
                                            <div class="col-md-6">
                                                <li>Desired Location <p>{{$item->desired_location}}</p></li>   
                                            </div>
                                        </div>   
                                        <hr>  
                                        @endforeach                                        
                                        </ul>                  
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
                            <div class="tab-pane fade" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                                
                                @foreach ($user->courses as $item)    
                                <div class="row">  
                                    <div class="col-md-12">
                                        <div class="card" style="width: 32rem; margin-bottom:5%;">
                                            <div class="card-body">
                                              <h5 class="card-title"><strong>{{$item->name}}</strong></h5>
                                              <h6>Description</h6>
                                              <p class="card-text">{{$item->description}}</p>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                              <li class="list-group-item"><h6>Provider</h6><p>{{$item->provider}}</p></li>
                                              <li class="list-group-item"><h6>Completed date</h6><p>{{$item->completed_time}}</p></li>
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
    </body>
    
<!-- Bootstrap core JavaScript-->
<script src="public/back/vendor/jquery/jquery.min.js"></script>
<script src="public/back/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="public/back/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="public/back/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="public/back/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="public/back/js/demo/chart-area-demo.js"></script>
<script src="public/back/js/demo/chart-pie-demo.js"></script>
<script src="public/back/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="public/back/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
<script src="public/back/js/demo/datatables-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </html>