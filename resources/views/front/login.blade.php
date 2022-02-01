@extends('front.layouts.master')
@section('title')
Login
@endsection
@section('content')
<div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{asset('')}}{{$loginpage->image_url}}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              @if(count($errors)>0)
              <div class="alert alert-danger">
                      @foreach ($errors->all() as $error)
                      {{$error}}           
                  @endforeach   
              </div>
              @endif
            <form action="{{route('login.post')}}" method="post">
              @csrf
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="input-lg form-control" name="password" id="password" required> 
              </div>
              <div style="margin-bottom:3%">
              <label for="forgot_password"><a href="{{route('forgotPassword')}}" style="font-size: 13px">Forgot Password</a></label>
              </div>
              <input type="submit" value="Log In" class="btn btn-block btn-primary">
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

@endsection