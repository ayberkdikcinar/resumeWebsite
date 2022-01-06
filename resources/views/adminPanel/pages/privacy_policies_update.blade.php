@extends('adminPanel.layouts.master')
@section('title')
{{$privacyPolicies->title}}
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
        <form action="{{route('admin.pagesUpdatePost','privacy-policies')}}" method="POST">
           
            @csrf
            <div class="form-group">
                <label>Title <label style="color: red">*</label> </label>
                <input type="text" name="title" class="form-control" value="{{$privacyPolicies->title}}" required>
            </div>
            <label>Content</label>
            <textarea name="content" id="summernote">{!!$privacyPolicies->content!!}</textarea>
            <div class="form-group">
                <button type="submit" name="submit" class="btn-block btn btn-primary">Update</button>
            </div>

        </form>  
    </div>
</div>
@endsection
