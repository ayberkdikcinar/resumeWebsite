@extends('front.layouts.master')
@section('title')
RESUME | MY SKILLS
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
            <form id="form" action="{{route('resume.skills.post')}}" method="POST">
                @csrf
                <ul id="progressbar">
                    <li class="active" id="step1"><strong>About Me</strong></li>
                    <li class="active" id="step2"><strong>My Experience</strong></li>
                    <li class="active" id="step3"><strong>My Education</strong></li>
                    <li class="active" id="step4"><strong>Languages I Know</strong></li>
                    <li class="active" id="step5"><strong>My Skills</strong></li>
                    <li id="step6"><strong>Courses I Have Completed</strong></li>
                    <li id="step7"><strong>Job Preferences</strong></li>
                    <li id="step8"><strong>Documents</strong></li>
                </ul>
                <div class="progress">
                    <div class="progress-bar" style="width: 62.5%;"></div>
                </div> <br>
                <fieldset>
                    <div class="form-row">
                        <h2>MY SKILLS</h2>
                        <hr width="27%" />
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                @foreach ($skills as $skill)
                                <div class="form-group col-md-3">
                                    <ul class="list-group">
                                        <li class="list-group-item active" style="background-color: #2F8D46;">{{$skill->type}}</li>
                                        <li class="list-group-item">{{$skill->name}}</li>
                                    </ul>
                                </div>
                                <div class="form-group col-md-1">
                                    <a href="#" class="btn btn-danger"><span class="material-icons">delete</span></a>
                                </div>
                                @endforeach
                            </div>
                            <hr>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="Level">Level*</label>
                                <select class="form-control dropdown" id="type" name="type" required>
                                    <option value="" selected="selected" disabled="disabled">-- select one --</option>
                                    <option value="SOFT">SOFT</option>
                                    <option value="HARD">HARD</option>
                                    <option value="EXPERT">EXPERT</option>
                                    
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Skill">Skill*</label>
                                <input type="text" class="form-control" name="name" placeholder="e.g Photoshop">
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <center>
                                    <input type="submit" name="submit" class="btn btn-warning" value="Add Skill" />
                                </center>
                            </div>
                        </div>
                        <a href="{{ route('resume.courses')}}" class="btn btn-primary next-step">Next Step</a>
                        <a href="{{ route('resume.languages')}}" class="btn btn-primary previous-step">Previous Step</a>
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