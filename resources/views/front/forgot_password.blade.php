@extends('front.layouts.master')
@section('title')
Forgot Password
@endsection
@section('content')
    <div class="container">
      <div class="row" style="display: flex; align-items: center; justify-content: center">
            <div class="col-md-4" style="text-align: center; margin-top: 3%">
              @if(\Session::has('success'))
                  <div class="alert alert-success m-3">{{ \Session::get('success') }}</div>
                  {{ \Session::forget('success') }}
              @endif
              @if(\Session::has('error'))
                <div class="alert alert-danger m-3">{{ \Session::get('error') }}</div>
                {{ \Session::forget('error') }}
              @endif
            </div>              
      </div>
    </div>
  <div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default" style="margin-top: 2%">
                    <div class="panel-body" style="border-style:groove;">
                        <div class="text-center">
                          <h3><i class="fa fa-lock fa-4x"></i></h3>
                          <h2 class="text-center">Forgot Password?</h2>
                          <p>You can reset your password here.</p>
                            <div class="panel-body">  
                              <form class="form" action="{{route('forgotPassword.post')}}" method="post">
                                @csrf
                                <fieldset style="background-color: white">
                                  <div class="form-group">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>     
                                      <input id="emailInput" placeholder="email address" name="email" class="form-control" type="email" 
                                      oninvalid="setCustomValidity('Please enter a valid email address!')" onchange="try{setCustomValidity('')}catch(e){}" required="">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <input class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                                  </div>
                                </fieldset>
                              </form>                  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection