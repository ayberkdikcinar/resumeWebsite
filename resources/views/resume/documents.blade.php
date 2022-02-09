<!-- if there is a wrong code in here it effects all the blade even it's still in comment -->
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
            <form id="form" action="{{route('resume.documents.post','null')}}" method="POST">
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
                    <div class="progress-bar" style="width: 100%;"></div>
                </div> <br>
            </form>
            <form id="form" action="{{route('resume.documents.post','main')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <div class="form-row">
                        <h2>DOCUMENTS</h2>
                        <hr width="27%" />
                    </div>
                </fieldset>
            </form>
            <form id="form" action="{{route('resume.documents.post','english-test')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="english-test">1. English Tests (IELTS,TOEFL,etc.)</label>
                        </div>
                        <div class="form-group col-md-6">

                            <div class="file-upload">
                                <div class="file-select">
                                    <div class="file-select-button" id="fileName-et">Choose File</div>
                                    <div class="file-select-name" id="noFile-et">No file chosen...</div>
                                    <input type="file" name="file" id="file-et" accept=".png,.jpg,.jpeg,.doc,.docx,.pdf" , required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            @foreach ($documents as $document)
                            @if ($document->type === 'english-test')
                            <div class="form-group col-md-5">
                                <ul class="list-group">
                                    <li class="list-group-item active" style="background-color: #2F8D46; margin-left:5%">
                                        <a href="{{asset('')}}{{$document->document_url}}" style="color: white;" target="_blank">{{substr(basename($document->document_url),11,21)}}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group col-md-1">
                                <a href="{{ route('resume.resource_delete', ['user_id' => $document->user_id, 'type' => 'document','id' => $document->id])}}" class="btn btn-danger"><span class="material-icons">delete</span></a>
                            </div>
                            @endif
                            @endforeach
                        </div>

                    </div>
                    <div class="form-group col-md-12">
                        <center>
                            <input type="submit" name="submit" class="btn btn-warning" value="Add English Test" />
                        </center>
                    </div>
                </fieldset>

            </form>
            <form id="form" action="{{route('resume.documents.post','last-degree-earned')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="english-test">1. Last degree earned (BA,MBA,PHD,Associate)</label>
                        </div>
                        <div class="form-group col-md-6">

                            <div class="file-upload">
                                <div class="file-select">
                                    <div class="file-select-button" id="fileName-lde">Choose File</div>
                                    <div class="file-select-name" id="noFile-lde">No file chosen...</div>
                                    <input type="file" name="file" id="file-lde" accept=".png,.jpg,.jpeg,.doc,.docx,.pdf" , required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            @foreach ($documents as $document)
                            @if ($document->type === 'last-degree-earned')
                            <div class="form-group col-md-5">
                                <ul class="list-group">
                                    <li class="list-group-item active" style="background-color: #2F8D46; margin-left:5%">
                                        <a href="{{asset('')}}{{$document->document_url}}" style="color: white;">{{substr(basename($document->document_url),11,21)}}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group col-md-1">
                                <a href="{{ route('resume.resource_delete', ['user_id' => $document->user_id, 'type' => 'document','id' => $document->id])}}" class="btn btn-danger"><span class="material-icons">delete</span></a>
                            </div>
                            @endif
                            @endforeach
                        </div>

                    </div>
                    <div class="form-group col-md-12">
                        <center>
                            <input type="submit" name="submit" class="btn btn-warning" value="Add Degree" />
                        </center>
                    </div>
                </fieldset>

            </form>
            <form id="form" action="{{route('resume.documents.post','professional-courses')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="english-test">3. Professional courses(Design, Marketing, Finance, Carpenter, etc)</label>
                        </div>
                        <div class="form-group col-md-6">

                            <div class="file-upload">
                                <div class="file-select">
                                    <div class="file-select-button" id="fileName-pc">Choose File</div>
                                    <div class="file-select-name" id="noFile-pc">No file chosen...</div>
                                    <input type="file" name="file" id="file-pc" accept=".png,.jpg,.jpeg,.doc,.docx,.pdf" , required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            @foreach ($documents as $document)
                            @if ($document->type === 'professional-courses')
                            <div class="form-group col-md-5">
                                <ul class="list-group">
                                    <li class="list-group-item active" style="background-color: #2F8D46; margin-left:5%">
                                        <a href="{{asset('')}}{{$document->document_url}}" style="color: white;">{{substr(basename($document->document_url),11,21)}}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group col-md-1">
                                <a href="{{ route('resume.resource_delete', ['user_id' => $document->user_id, 'type' => 'document','id' => $document->id])}}" class="btn btn-danger"><span class="material-icons">delete</span></a>
                            </div>
                            @endif
                            @endforeach
                        </div>

                    </div>
                    <div class="form-group col-md-12">
                        <center>
                            <input type="submit" name="submit" class="btn btn-warning" value="Add Professional Course" />
                        </center>
                    </div>
                </fieldset>

            </form>
            <form id="form" action="{{route('resume.documents.post','identification-document')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="english-test">4. Identification document (Passport or driver’s license, or any other document that proves your ID)</label>
                        </div>
                        <div class="form-group col-md-6">

                            <div class="file-upload">
                                <div class="file-select">
                                    <div class="file-select-button" id="fileName-id">Choose File</div>
                                    <div class="file-select-name" id="noFile-id">No file chosen...</div>
                                    <input type="file" name="file" id="file-id" accept=".png,.jpg,.jpeg,.doc,.docx,.pdf" , required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            @foreach ($documents as $document)
                            @if ($document->type === 'identification-document')
                            <div class="form-group col-md-5">
                                <ul class="list-group">
                                    <li class="list-group-item active" style="background-color: #2F8D46; margin-left:5%">
                                        <a href="{{asset('')}}{{$document->document_url}}" style="color: white;">{{substr(basename($document->document_url),11,21)}}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group col-md-1">
                                <a href="{{ route('resume.resource_delete', ['user_id' => $document->user_id, 'type' => 'document','id' => $document->id])}}" class="btn btn-danger"><span class="material-icons">delete</span></a>
                            </div>
                            @endif
                            @endforeach
                        </div>

                    </div>
                    <div class="form-group col-md-12">
                        <center>
                            <input type="submit" name="submit" class="btn btn-warning" value="Add Identification Document" />
                        </center>
                    </div>
                </fieldset>

            </form>
            <form id="form" action="{{route('resume.documents.post','additional-certificates')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="english-test">5. Additional Certificates</label>
                        </div>
                        <div class="form-group col-md-6">

                            <div class="file-upload">
                                <div class="file-select">
                                    <div class="file-select-button" id="fileName-ac">Choose File</div>
                                    <div class="file-select-name" id="noFile-ac">No file chosen...</div>
                                    <input type="file" name="file" id="file-ac" accept=".png,.jpg,.jpeg,.doc,.docx,.pdf" , required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            @foreach ($documents as $document)
                            @if ($document->type === 'additional-certificates')
                            <div class="form-group col-md-5">
                                <ul class="list-group">
                                    <li class="list-group-item active" style="background-color: #2F8D46; margin-left:5%">
                                        <a href="{{asset('')}}{{$document->document_url}}" style="color: white;">{{substr(basename($document->document_url),11,21)}}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group col-md-1">
                                <a href="{{ route('resume.resource_delete', ['user_id' => $document->user_id, 'type' => 'document','id' => $document->id])}}" class="btn btn-danger"><span class="material-icons">delete</span></a>
                            </div>
                            @endif
                            @endforeach
                        </div>

                    </div>
                    <div class="form-group col-md-12">
                        <center>
                            <input type="submit" name="submit" class="btn btn-warning" value="Add Identification Document" />
                        </center>
                    </div>
                    <a href="{{ route('profile')}}" class="btn btn-primary next-step">Finish</a>
                    <a href="{{ route('resume.job_preferences')}}" class="btn btn-primary previous-step">Previous Step</a>
                   
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
<script>
    $('#file-et').bind('change', function() {
        var filename = $("#file-et").val();
        if (/^\s*$/.test(filename)) {
            $(".file-upload").removeClass('active');
            $("#noFile-et").text("No file chosen...");
        } else {
            $(".file-upload").addClass('active');
            $("#noFile-et").text(filename.replace("C:\\fakepath\\", ""));
        }
    });

    $('#file-lde').bind('change', function() {
        var filename = $("#file-lde").val();
        if (/^\s*$/.test(filename)) {
            $(".file-upload").removeClass('active');
            $("#noFile-lde").text("No file chosen...");
        } else {
            $(".file-upload").addClass('active');
            $("#noFile-lde").text(filename.replace("C:\\fakepath\\", ""));
        }
    });

    $('#file-pc').bind('change', function() {
        var filename = $("#file-pc").val();
        if (/^\s*$/.test(filename)) {
            $(".file-upload").removeClass('active');
            $("#noFile-pc").text("No file chosen...");
        } else {
            $(".file-upload").addClass('active');
            $("#noFile-pc").text(filename.replace("C:\\fakepath\\", ""));
        }
    });

    $('#file-id').bind('change', function() {
        var filename = $("#file-id").val();
        if (/^\s*$/.test(filename)) {
            $(".file-upload").removeClass('active');
            $("#noFile-id").text("No file chosen...");
        } else {
            $(".file-upload").addClass('active');
            $("#noFile-id").text(filename.replace("C:\\fakepath\\", ""));
        }
    });
    
    $('#file-ac').bind('change', function() {
        var filename = $("#file-ac").val();
        if (/^\s*$/.test(filename)) {
            $(".file-upload").removeClass('active');
            $("#noFile-ac").text("No file chosen...");
        } else {
            $(".file-upload").addClass('active');
            $("#noFile-ac   ").text(filename.replace("C:\\fakepath\\", ""));
        }
    });
</script>
@endsection
@endsection