@extends('front.layouts.master')
@section('title')
About Us
@endsection
@section('content')
<div class="section-white">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            {!!$aboutUs->content!!}
         </div>
       </div>
    </div>
 </div>
@endsection