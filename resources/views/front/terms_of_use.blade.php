@extends('front.layouts.master')
@section('title')
Terms Of Use
@endsection
@section('content')
<div class="terms-conditions">
 
    <div class="container">
       <div class="row">
        {!!$termsOfUse->content!!}
       </div>
    </div>
 </div>   
@endsection