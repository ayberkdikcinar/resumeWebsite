@extends('adminPanel.layouts.master')
@section('title')
{{$loginpage->title}}
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
        <form action="{{route('admin.pagesUpdatePost','loginpage')}}" method="POST" enctype="multipart/form-data">
           
            @csrf
            <div class="form-group">
                <label>Title <label style="color: red">*</label> </label>
                <input type="text" name="title" class="form-control" value="{{$loginpage->title}}" required>
            </div>
            <label>Image</label>
            <div class="form-group">
                <div class="image-upload">
                    <label for="file-input">
                      <img src="{{asset('')}}{{$loginpage->image_url}}" width="250" id="uploadPreview"/>
                    </label>
                    <input id="uploadImage" type="file" name="image" accept="image/*" onchange="PreviewImage();"/>
                  </div>
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
