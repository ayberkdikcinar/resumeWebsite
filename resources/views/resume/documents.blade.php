<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @if(count($errors)>0)
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        {{$error}}
        @endforeach
    </div>
    @endif
    <form action="{{route('resume.documents.post','english-test')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input id="file-input" type="file" name="file" accept="image/*,.pdf" />
        <input type="submit" name="submit" class="btn btn-warning" value="Set About" />
    </form>
    <form action="{{route('resume.documents.post')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input id="file-input" type="file" name="file" accept="image/*,.pdf" />
        <input type="hidden" name="type" value="english-test">
        <input type="submit" name="submit" class="btn btn-warning" value="Set About" />
    </form>

</body>

</html>-->
@extends('front.layouts.master')
@section('title')
RESUME | DOCUMENTS
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
            <form id="form" action="{{route('resume.documents.post')}}" method="POST">
                @csrf
                <ul id="progressbar">
                    <li class="active" id="step1"><strong>About Me</strong></li>
                    <li class="active" id="step2"><strong>My Experience</strong></li>
                    <li class="active" id="step3"><strong>My Education</strong></li>
                    <li class="active" id="step4"><strong>Languages I Know</strong></li>
                    <li class="active" id="step5"><strong>My Skills</strong></li>
                    <li class="active" id="step6"><strong>Courses I Have Completed</strong></li>
                    <li class="active" id="step7"><strong>Job Preferences</strong></li>
                    <li class="active" id="step8"><strong>Documents</strong></li>
                </ul>
                <div class="progress">
                    <div class="progress-bar" style="width: 75%;"></div>
                </div> <br>
            </form>
            <form id="form" action="{{route('resume.documents.post')}}" method="POST">
                @csrf
                <fieldset>
                    <div class="form-row">
                        <h2>DOCUMENTS</h2>
                        <hr width="27%" />
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                @foreach ($documents as $document)
                                <div class="form-group col-md-5">
                                    <ul class="list-group">
                                        <li class="list-group-item active" style="background-color: #2F8D46;"></li>
                                        <li class="list-group-item">
                                            <!--{{$course->provider}}-->
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-group col-md-1">
                                    <a href="{{ route('resume.resource_delete',['user_id' => $document->user_id, 'type' => $document->type,'id' => $document->id])}}" class="btn btn-danger"><span class="material-icons">delete</span></a>
                                </div>
                                @endforeach
                            </div>
                            <hr>
                            <hr>
                        </div>
                    </div>
                </fieldset>
            </form>
            <form id="form" action="{{route('resume.documents.post')}}" method="POST">
                @csrf
                <fieldset>
                    
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="course-name">Course Name*</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="inputGroupFile02">
                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                </div>
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