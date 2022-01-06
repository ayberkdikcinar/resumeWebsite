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
            <div class="row">    
                <div class="col md-4">
                    <label>Page Title <label style="color: red">*</label> </label>
                    <input type="text" name="title" class="form-control" value="{{$homepage->title}}" required>
                </div>
                <div class="col md-8">
                    <label>Banner Image</label>
                    <div class="image-upload">
                        <label for="file-input">
                            <img src="{{asset('')}}{{$homepage->banner_image_url}}" width="250" id="uploadPreview"/>
                        </label>
                        <input id="uploadImage" type="file" name="image" accept="image/*" onchange="PreviewImage();"/>
                    </div>
                </div>
            </div>
           
            <div class="form-group">
                <div class="row">
                    <div class="col md-2">
                        <label>Banner Title</label>
                        <input type="text" name="banner_title" class="form-control" value="{{$homepage->bannerTitle}}">
                    </div>
                    <div class="col md-10"> 
                        <label>Banner Content</label>
                        <textarea type="text" name="banner_content" class="form-control" rows="4">{{$homepage->bannerContext}}</textarea>
                    </div>
                </div>         
            </div>
            <hr>
            <div class="form-group" style="background-color: skyblue; text-align: center; padding:2%; margin:2%;">
                <div class="row">
                    <div class="col md-4">
                        <strong><label>Card-1 Title</label></strong>
                        <input type="text" name="card_one_title" class="form-control" style="margin-bottom: 2%" value="{{$homepage->card_one_title}}">
                        <strong><label>Card-1 Content</label></strong>
                        <textarea type="text" name="card_one_content" class="form-control" rows="3">{{$homepage->card_one_content}}</textarea>
                    </div>
                    <div class="col md-4">
                        <strong><label>Card-2 Title</label></strong>
                        <input type="text" name="card_two_title" class="form-control" style="margin-bottom: 2%" value="{{$homepage->card_two_title}}">
                        <strong><label>Card-2 Content</label></strong>
                        <textarea type="text" name="card_two_content" class="form-control" rows="3">{{$homepage->card_two_content}}</textarea>
                    </div>
                    <div class="col md-4">
                        <strong><label>Card-3 Title</label></strong>
                        <input type="text" name="card_three_title" class="form-control" style="margin-bottom: 2%" value="{{$homepage->card_three_title}}">
                        <strong><label>Card-3 Content</label></strong>
                        <textarea type="text" name="card_three_content" class="form-control" rows="3">{{$homepage->card_three_content}}</textarea>
                    </div>
                </div>         
            </div>
            <hr>
            <div style="background-color: snow; padding:1%">
                <div class="row" style=" margin:1%">
                    <div class="col md-4">
                        <label style="color: red">Top Body Title</label>
                        <input type="text" name="top_body_title" class="form-control" value="{{$homepage->top_body_title}}">
                    </div>
                    <div class="col md-4"> 
                        <label style="color: red">Top Body Left Content</label>
                        <textarea type="text" name="top_body_left_content" class="form-control" rows="3">{{$homepage->top_body_left_content}}</textarea>
                    </div>
                    <div class="col md-4"> 
                        <label style="color: red">Top Body Right Content</label>
                        <textarea type="text" name="top_body_right_content" class="form-control" rows="3">{{$homepage->top_body_right_content}}</textarea>
                    </div>
                </div>
                <hr>
                <div class="row" style=" margin:1%">
                    <div class="col md-4">
                        <label style="color: red">Bottom Body Title</label>
                        <input type="text" name="bottom_body_title" class="form-control" value="{{$homepage->bottom_body_title}}">
                    </div>
                    <div class="col md-4"> 
                        <label style="color: red">Bottom Body Content</label>
                        <textarea type="text" name="bottom_body_content" class="form-control" rows="4">{{$homepage->bottom_body_content}}</textarea>
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