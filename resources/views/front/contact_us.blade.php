@extends('front.layouts.master')
@section('content')
    <div class="container">
       <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
             <div class="does-box">              
                <div class="panel-body">
                   {!!$contactUs->content!!}                 
                </div>
                <img src="{{asset('front')}}/images/mac-about.png" alt="" />
             </div>
          </div>
       </div>
    </div>
 

@endsection