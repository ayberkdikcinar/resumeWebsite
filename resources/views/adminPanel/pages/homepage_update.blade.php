@extends('adminPanel.layouts.master')
@section('title')
{{$homepage->title}}
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
        <form action="{{route('admin.homepageUpdatePost','homepage')}}" method="POST" enctype="multipart/form-data">
           
            @csrf
            <div class="form-group">
                <label>Title <label style="color: red">*</label> </label>
                <input type="text" name="title" class="form-control" value="{{$homepage->title}}" required>
            </div>
            <hr>
            <label>Banner Image</label>
            <div class="form-group">
                <div class="image-upload">
                    <label for="file-input">
                      <img src="{{asset('')}}{{$homepage->banner_image_url}}" width="250" id="uploadPreview"/>
                    </label>
                    <input id="uploadImage" type="file" name="image" accept="image/*" onchange="PreviewImage();"/>
                  </div>
            </div>
             
            <div class="form-group">
                <div class="row">
                    <div class="col md-4">
                        <label>Banner Title</label>
                        <input type="text" name="banner_title" class="form-control" value="{{$homepage->bannerTitle}}">
                    </div>
                    <div class="col md-8"> 
                        <label>Banner Content</label>
                        <textarea type="text" name="banner_content" class="form-control" rows="3">{{$homepage->bannerContext}}</textarea>
                    </div>
                </div>         
            </div>
            <hr>
            <div class="form-group">
                <div class="row">
                    <div class="col md-4">
                        <label>Card-1 Title</label>
                        <input type="text" name="card_one_title" class="form-control" value="{{$homepage->bannerTitle}}">
                        <label>Card-1 Content</label>
                        <input type="text" name="card_one_content" class="form-control" value="{{$homepage->bannerTitle}}">
                    </div>
                    <div class="col md-4">
                        <label>Card-2 Title</label>
                        <input type="text" name="card_two_title" class="form-control" value="{{$homepage->bannerTitle}}">
                        <label>Card-2 Content</label>
                        <input type="text" name="card_two_content" class="form-control" value="{{$homepage->bannerTitle}}">
                    </div>
                    <div class="col md-4">
                        <label>Card-3 Title</label>
                        <input type="text" name="card_three_title" class="form-control" value="{{$homepage->bannerTitle}}">
                        <label>Card-3 Content</label>
                        <input type="text" name="card_three_content" class="form-control" value="{{$homepage->bannerTitle}}">
                    </div>
                </div>         
            </div>
            <hr>
            <div class="form-group">
                <div class="row">
                    <div class="col md-4">
                        <label>Body Title</label>
                        <input type="text" name="body_title" class="form-control" value="{{$homepage->bannerTitle}}">
                    </div>
                    <div class="col md-4"> 
                        <label>Body Left Content</label>
                        <textarea type="text" name="body_left_content" class="form-control" rows="3">{{$homepage->bannerContext}}</textarea>
                    </div>
                    <div class="col md-4"> 
                        <label>Body Rigth Content</label>
                        <textarea type="text" name="body_right_content" class="form-control" rows="3">{{$homepage->bannerContext}}</textarea>
                    </div>
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