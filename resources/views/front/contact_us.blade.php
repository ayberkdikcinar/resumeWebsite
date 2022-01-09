@extends('front.layouts.master')
@section('title')
{!!$contactUs->title!!}
@endsection
@section('content')
<div class="does-box">
   <p style="text-align: center; font-size: xx-large">{!!$contactUs->title!!}</p>
   <div class="container">
      <div class="panel-body">
         <div style="margin-bottom:40px;">
            {!!$contactUs->content!!}
         </div>
         <div>
            <img class="img-responsive" src="{{asset('')}}{{$contactUs->image_url}}"/>
         </div>
      
      </div> 
   </div>  
</div>
@endsection