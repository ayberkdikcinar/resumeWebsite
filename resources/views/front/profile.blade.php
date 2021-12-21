@extends('front.layouts.master')
@section('title')
@section('content')
<hr>
Welcome back! {{Auth::User()->username}}
<hr>
@endsection