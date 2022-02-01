@extends('front.layouts.master')
@section('title')
{!!$aboutUs->title!!}
@endsection
@section('content')
<div class="does-box">
   <p style="text-align: center; font-size: xx-large">{!!$aboutUs->title!!}</p>
   <div class="container">
      <div class="panel panel-default">
         <div class="panel-body">
            <div>
               {!!$aboutUs->content!!}
            </div>
         <div>
            <img class="img-responsive" style="margin-top:25px;" src="{{asset('')}}{{$aboutUs->image_url}}"/>
         </div>
         </div> 
      </div> 
   </div>  
</div>    
@endsection