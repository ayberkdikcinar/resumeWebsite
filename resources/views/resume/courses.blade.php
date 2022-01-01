@extends('front.layouts.master')
@section('title')
RESUME | COURSES I HAVE COMPLETED
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
            <form id="form" action="{{route('resume.courses.post')}}" method="POST">
                @csrf
                <ul id="progressbar">
                    <li class="active" id="step1"><strong>About Me</strong></li>
                    <li class="active" id="step2"><strong>My Experience</strong></li>
                    <li class="active" id="step3"><strong>My Education</strong></li>
                    <li class="active" id="step4"><strong>Languages I Know</strong></li>
                    <li class="active" id="step5"><strong>My Skills</strong></li>
                    <li class="active" id="step6"><strong>Courses I Have Completed</strong></li>
                    <li id="step7"><strong>Job Preferences</strong></li>
                    <li id="step8"><strong>Documents</strong></li>
                </ul>
                <div class="progress">
                    <div class="progress-bar" style="width: 75%;"></div>
                </div> <br>

                <fieldset>
                    <div class="form-row">
                        <h2>COURSES I HAVE COMPLETED</h2>
                        <hr width="27%" />
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                @foreach ($courses as $course)
                                <div class="form-group col-md-5">
                                    <ul class="list-group">
                                        <li class="list-group-item active" style="background-color: #2F8D46;">{{$course->name}}</li>
                                        <li class="list-group-item">{{$course->provider}}</li>
                                        <li class="list-group-item">{{$course->from_time}} - {{$course->to_time}}</li>
                                        <li class="list-group-item">{{$course->description}}</li>
                                    </ul>
                                </div>
                                <div class="form-group col-md-1">
                                    <a href="#" class="btn btn-danger"><span class="material-icons">delete</span></a>
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
                                <label for="provider">Provider</label>
                                <input type="text" class="form-control" name="provider" placeholder="e.g Coursera" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="from-time">Time Period(From)*</label>
                                <input type="date" class="form-control" name="from_time" min="1900-01-01" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="to-now">Time Period(To)*</label>
                                <input type="date" class="form-control" name="to_time" min="1900-01-01" required>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" placeholder="Describe any extra informal education, not part of you degree, you completed. "></textarea>
                            </div>

                            <div class="form-group col-md-12">
                                <center>
                                    <input type="submit" name="submit" class="btn btn-warning" value="Add Course" />
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