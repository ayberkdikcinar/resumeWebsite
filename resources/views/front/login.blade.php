@extends('front.layouts.master')
@section('title')
Login
@endsection
@section('content')
<div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{asset('front')}}/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
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
                <input type="text" class="form-control" id="username" name="username">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password"> 
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
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