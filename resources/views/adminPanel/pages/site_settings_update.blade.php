@extends('adminPanel.layouts.master')
@section('title')

@endsection
@section('content')

<div class="card shadow mb-4">
  
    <div class="card-body">
        @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>           
            @endforeach
            </ul>    
        </div>
        @endif
        <form action="{{route('admin.siteSettingsPost')}}" method="POST" enctype="multipart/form-data">     
            @csrf
            <div class="form-group">
                <label>Title <label style="color: red">*</label> </label>
                <input type="text" name="title" class="form-control" value="{{$setting->title}}" required>
            </div>
            <div class="form-group">
                <label>Logo <label style="color: red">*</label></label><br>
                <img src="{{asset('')}}{{$setting->logo_url}}" style="margin: 2%" width="150" id="uploadPreview"> Suggested Size (123x30)
                <input id="uploadImage" type="file" name="logo" class="form-control" accept="image/*" onchange="PreviewImage();">
            </div>
            <div class="form-group">
                <label>Social Links</label><br>        
              
                <div class="row">
                    <div class="col md-6"><i class="fab fa-facebook"></i><input type="text" name="facebook" class="form-control" value="{{$setting->facebook_url}}"></div>
                    <div class="col md-6"><i class="fab fa-linkedin"></i><input type="text" name="linkedin" class="form-control" value="{{$setting->linkedin_url}}"></div>
                </div>
                <div class="row">
                    <div class="col md-6"><i class="fab fa-instagram"></i><input type="text" name="instagram" class="form-control" value="{{$setting->instagram_url}}"></div>
                    <div class="col md-6"><i class="fab fa-twitter"></i><input type="text" name="twitter" class="form-control" value="{{$setting->twitter_url}}"></div>
                </div>
                
            </div>
            <div class="form-group">
                <label>License</label>
                <textarea type="text" name="license" class="form-control" rows="3">{{$setting->license}}</textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn-block btn btn-primary">Update</button>
            </div>

        </form>  
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>
@endsection