@extends('front.layouts.master')
@section('title')
{!!$howItWorks->title!!}
@endsection
@section('content')

<div class="does-box">
      <p style="text-align: center; font-size: xx-large">{!!$howItWorks->title!!}</p>
      <div class="container">
         <div class="panel panel-default">
            <div class="panel-body">
               {!!$howItWorks->content!!}
            </div> 
         </div> 
      </div>
</div>  

@endsection