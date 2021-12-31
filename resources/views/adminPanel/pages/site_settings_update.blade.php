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
        <form action="" method="POST">
           
            @csrf
            <div class="form-group">
                <label>Title <label style="color: red">*</label> </label>
                <input type="text" name="title" class="form-control" value="" required>
            </div>
            <div class="form-group">
                <label>Logo</label><br>
                <img src="{{asset('/front/images/logo.png')}}" style="margin: 2%">
                <input type="file" name="image" class="form-control" value="">
            </div>
            <div class="form-group">
                <label>Social Links</label><br>        
              
                <div class="row">
                    <div class="col md-6"><i class="fab fa-facebook"></i><input type="text" name="facebook" class="form-control"></div>
                    <div class="col md-6"><i class="fab fa-linkedin"></i><input type="text" name="linkedIn" class="form-control"></div>
                </div>
                <div class="row">
                    <div class="col md-6"><i class="fab fa-instagram"></i><input type="text" name="instagram" class="form-control"></div>
                    <div class="col md-6"><i class="fab fa-twitter"></i><input type="text" name="twitter" class="form-control"></div>
                </div>
                
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn-block btn btn-primary">Update</button>
            </div>

        </form>  
    </div>
</div>
@endsection
