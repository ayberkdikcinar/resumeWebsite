@extends('front.layouts.master')
@section('title')
{{$homepage->title}}
@endsection
@section('content')

<div class="page-content-product">
   <div class="main-product" style="background-image: url('{{asset('')}}{{$homepage->banner_image_url}}');">
      <!-- bu fotoğrafta backten çekilecek -->
      <div class="container">
         <div class="row clearfix">
            <div class="find-box">
               <h1>{!!$homepage->bannerTitle!!}</h1>
               <h4>{!!$homepage->bannerContent!!}</h4>         
            </div>
         </div>
      </div>
   </div>
</div>
{!!$homepage->content!!}
@endsection