@extends('front.layouts.master')
@section('title')
{!!$contactUs->title!!}
@endsection
@section('content')
<div class="does-box">
   <p style="text-align: center; font-size: xx-large">{!!$contactUs->title!!}</p>
   <div class="container">
      <div class="panel panel-default">
         <div class="panel-body">
            <div>
               {!!$contactUs->content!!}
            </div>
            <div>
               <img class="img-responsive" style="margin-top:25px;" src="{{asset('')}}{{$contactUs->image_url}}"/>
            </div>
         
         </div> 
      </div> 
   </div>  
</div>
@endsection