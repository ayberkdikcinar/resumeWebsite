@extends('front.layouts.master')
@section('title')
RESUME | JOB PREFERENCES
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="px-4 pt-4 pb-0 mt-3 mb-3">
            @if(count($errors)>0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                {{$error}}
                @endforeach
            </div>
            @endif
            <form id="form" action="{{route('resume.job_preferences.post')}}" method="POST">
                @csrf
                <ul id="progressbar">
                    <li class="active" id="step1"><strong>About Me</strong></li>
                    <li class="active" id="step2"><strong>My Experience</strong></li>
                    <li class="active" id="step3"><strong>My Education</strong></li>
                    <li class="active" id="step4"><strong>Languages I Know</strong></li>
                    <li class="active" id="step5"><strong>My Skills</strong></li>
                    <li class="active" id="step6"><strong>Courses I Have Completed</strong></li>
                    <li class="active" id="step7"><strong>Job Preferences</strong></li>
                    <li id="step8"><strong>Documents</strong></li>
                </ul>
                <div class="progress">
                    <div class="progress-bar" style="width: 87.5%;"></div>
                </div> <br>

                <fieldset>
                    <div class="form-row">
                        <h2>JOB PREFERENCES</h2>
                        <hr width="27%" />
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                @foreach ($job_preferences as $job_preference)
                                <div class="form-group col-md-5">
                                    <ul class="list-group">
                                        <li class="list-group-item active" style="background-color: #2F8D46;">{{$job_preference->field}}</li>
                                        <li class="list-group-item">{{$job_preference->desired_location}}</li>
                                    </ul>
                                </div>
                                <div class="form-group col-md-1">
                                    <a href="{{ route('resume.resource_delete',['user_id' => $job_preference->user_id, 'type' => 'job_preference','id' => $job_preference->id])}}" class="btn btn-danger"><span class="material-icons">delete</span></a>
                                </div>
                                @endforeach
                            </div>
                            <hr>
                            <hr>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="course-name">Course Name*</label>
                                <input type="text" class="form-control" name="name" placeholder="e.g Machine Learning" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="desired-position-type">Desired Position type</label>
                                <select class="form-control dropdown" id="field" name="field" required>
                                    <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                    <optgroup label="Healthcare Practitioners and Technical Occupations:">
                                        <option value="Chiropractor">- Chiropractor</option>
                                        <option value="Dentist">- Dentist</option>
                                        <option value="Dietitian">- Dietitian</option>
                                        <option value="Nutritionist">- Nutritionist</option>
                                        <option value="Optometrist">- Optometrist</option>
                                        <option value="Pharmacist">- Pharmacist</option>
                                        <option value="Physician">- Physician</option>
                                        <option value="Physician Assistant">- Physician Assistant</option>
                                        <option value="Podiatrist<">- Podiatrist</option>
                                        <option value="Registered Nurse">- Registered Nurse</option>
                                        <option value="Therapist">- Therapist</option>
                                        <option value="Veterinarian">- Veterinarian</option>
                                        <option value="Health Technologist">- Health Technologist</option>
                                        <option value="Technician">- Technician</option>
                                    </optgroup>
                                    <optgroup label="Healthcare Support Occupations:">
                                        <option value="Nursing">- Nursing</option>
                                        <option value="Psychiatric">- Psychiatric</option>
                                        <option value="Home Health Aide">- Home Health Aide</option>
                                        <option value="Occupational and Physical Therapist Assistant/Aide">- Occupational and Physical Therapist Assistant/Aide</option>
                                    </optgroup>
                                    <optgroup label="Business, Executive, Management, and Financial Occupations:">
                                        <option value="Chief Executive">- Chief Executive</option>
                                        <option value="General Manager">- General Manager</option>
                                        <option value="Operations Manager">- Operations Manager</option>
                                        <option value="Advertising Manager">- Advertising Manager</option>
                                        <option value="Marketing Manager">- Marketing Manager</option>
                                        <option value="Promotions Manager">- Promotions Manager</option>
                                        <option value="Public Relations Manager">- Public Relations Manager</option>
                                        <option value="Sales Manager">- Sales Manager</option>
                                        <option value="Operations Specialties Manager">- Operations Specialties Manager (e.g., IT or HR Manager)</option>
                                        <option value="Construction Manager">- Construction Manager</option>
                                        <option value="Engineering Manager">- Engineering Manager</option>
                                        <option value="Accountant">- Accountant</option>
                                        <option value="Auditor">- Auditor</option>
                                        <option value="Business Operations">- Business Operations</option>
                                        <option value="Financial Specialist">- Financial Specialist</option>
                                        <option value="Business Owner">- Business Owner</option>
                                    </optgroup>
                                    <optgroup label="Architecture and Engineering Occupations:">
                                        <option value="Architect">- Architect</option>
                                        <option value="Surveyor">- Surveyor</option>
                                        <option value="Cartographer">- Cartographer</option>
                                        <option value="Engineer">- Engineer</option>
                                    </optgroup>
                                    <optgroup label="Education, Training, and Library Occupations:">
                                        <option value="Postsecondary Teacher">- Postsecondary Teacher (e.g., College Professor)</option>
                                        <option value="Primary School Teacher">- Primary School Teacher</option>
                                        <option value="Secondary School Teacher">- Secondary School Teacher</option>
                                        <option value="Special Education School Teacher">- Special Education School Teacher</option>
                                        <option value="Trainer">- Trainer</option>
                                        <option value="Instructor">- Instructor</option>
                                        <option value="Librarian">- Librarian</option>
                                    </optgroup>
                                    <optgroup label="Other Professional Occupations:">
                                        <option value="Artist">- Artist</option>
                                        <option value="Designer">- Designer</option>
                                        <option value="Entertainer">- Entertainer</option>
                                        <option value="Sportsman">- Sportsan</option>
                                        <option value="Computer Specialist">- Computer Specialist</option>
                                        <option value="Mathematical Scientist">- Mathematical Scientist</option>
                                        <option value="Counselor">- Counselor</option>
                                        <option value="Social Worker">- Social Worker</option>
                                        <option value="Community and Social Service Specialist">- Community and Social Service Specialist</option>
                                        <option value="Lawyer">- Lawyer</option>
                                        <option value="Judge">- Judge</option>
                                        <option value="Life Scientist">- Life Scientist (e.g., Animal, Food, Soil)</option>
                                        <option value="Biological Scientist">- Biological Scientist</option>
                                        <option value="Zoologist">- Zoologist</option>
                                        <option value="Astronomer">- Astronomer</option>
                                        <option value="Physicist">- Physicist</option>
                                        <option value="Chemist">- Chemist</option>
                                        <option value="Hydrologist">- Hydrologist</option>
                                        <option value="Clergy">- Clergy</option>
                                        <option value="Director of Religious Activities/Education">- Director of Religious Activities/Education</option>
                                        <option value="Social Scientist and Related Worker">- Social Scientist and Related Worker</option>
                                    </optgroup>
                                    <optgroup label="Office and Administrative Support Occupations:">
                                        <option value="Supervisor of Administrative Support Workers">- Supervisor of Administrative Support Workers</option>
                                        <option value="Financial Clerk">- Financial Clerk</option>
                                        <option value="Secretary">- Secretary or Administrative Assistant</option>
                                        <option value="Administrative Assistant">- Administrative Assistant</option>
                                        <option value="Material Recording, Scheduling, and Dispatching Worker">- Material Recording, Scheduling, and Dispatching Worker</option>
                                    </optgroup>
                                    <optgroup label="Services Occupations:">
                                        <option value="Fire Fighting">- Fire Fighting</option>
                                        <option value="Police Officer">- Police Officer</option>
                                        <option value="Correctional Officer">- Correctional Officer</option>
                                        <option value="Chef/Head Cook">- Chef/Head Cook</option>
                                        <option value="Cook">- Cook</option>
                                        <option value="Food Preparation Worker">- Food Preparation Worker</option>
                                        <option value="Bartender">- Bartender</option>
                                        <option value="Waiter">- Waiter</option>
                                        <option value="Waitress">- Waitress</option>
                                        <option value="Building and Grounds Cleaning and Maintenance">- Building and Grounds Cleaning and Maintenance</option>
                                        <option value="Hairdresser">- Hairdresser</option>
                                        <option value="Flight Attendant">- Flight Attendant</option>
                                        <option value="Concierge">- Concierge</option>
                                        <option value="Sales Supervisor">- Sales Supervisor</option>
                                        <option value="Retail Sales Worker">- Retail Sales Worker</option>
                                        <option value="Insurance Sales Agent">- Insurance Sales Agent</option>
                                        <option value="Sales Representative">- Sales Representative</option>
                                        <option value="Real Estate Sales Agent">- Real Estate Sales Agent</option>
                                    </optgroup>
                                    <optgroup label="Agriculture, Maintenance, Repair, and Skilled Crafts Occupations:">
                                        <option value="Construction Laborer">- Construction Laborer</option>
                                        <option value="Electrician">- Electrician</option>
                                        <option value="Farmer">- Farmer</option>
                                        <option value="Fisher">- Fisher</option>
                                        <option value="Forester">- Forester</option>
                                        <option value="Mechanic">- Mechanic</option>
                                        <option value="Producer">- Producer</option>
                                    </optgroup>
                                    <optgroup label="Transportation Occupations:">
                                        <option value="Aircraft Pilot">- Aircraft Pilot</option>
                                        <option value="Flight Engineer">- Flight Engineer</option>
                                        <option value="Motor Vehicle Operator">- Motor Vehicle Operator</option>
                                    </optgroup>
                                    <optgroup label="Other Occupations:">
                                        <option value="Military">- Military</option>
                                        <option value="Homemaker">- Homemaker</option>
                                        <option value="Student">- Student</option>
                                        <option value="Not Applicable">- Not Applicable</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <center>
                                    <input type="submit" name="submit" class="btn btn-warning" value="Add Job Preference" />
                                </center>
                            </div>
                        </div>

                        <a href="{{ route('resume.job_preferences')}}" class="btn btn-primary next-step">Next Step</a>
                        <a href="{{ route('resume.skills')}}" class="btn btn-primary previous-step">Previous Step</a>

                </fieldset>
            </form>
        </div>
    </div>
</div>
</body>
@section('js')
<script>
    $("input:checkbox").click(function() {
        $("#date").prop("disabled", this.checked);
    });
</script>
@endsection
@endsection