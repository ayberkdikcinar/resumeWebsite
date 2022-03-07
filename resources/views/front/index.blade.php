@extends('front.layouts.master')
@section('title')
{{$homepage->title}}
@endsection
@section('content')

<div class="page-content-product">
   <div class="main-product" style="background-image: url('{{asset("")}}{{$homepage->banner_image_url}}');">
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
   <div class="cat-main-box">
      <div class="container">
         <div class="row panel-row">
            <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.0s">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <img src="{{asset('')}}front/images/get-icon.jpg" class="icon-small" alt="">
                     <h4>{!!$homepage->card_one_title!!}</h4>
                     <p>{!!$homepage->card_one_content!!}</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <img src="{{asset('')}}front/images/xpann-icon.jpg" class="icon-small" alt="">
                     <h4>{!!$homepage->card_two_title!!}</h4>
                     <p>{!!$homepage->card_two_content!!}</p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-6 wow fadeIn hidden-sm" data-wow-delay="0.4s">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <img src="{{asset('')}}front/images/create-icon.jpg" class="icon-small" alt="">
                     <h4>{!!$homepage->card_three_title!!}</h4>
                     <p>{!!$homepage->card_three_content!!}</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="products_exciting_box">
      <center>
         <h3>{!!$homepage->top_body_title!!}</h3>
      </center>
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
               <div class="exciting_box f_pd">
                  <p>{!!$homepage->top_body_left_content!!}</p>
               </div>
            </div>
            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
               <div class="exciting_box l_pd">
                  <p>{!!$homepage->top_body_right_content!!}</p>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="products_exciting_box">
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
               <div class="exciting_box f_pd">
                  <h3>{!!$homepage->bottom_body_title!!}</h3>
               </div>
            </div>
            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
               <div class="exciting_box l_pd">
                  <p>{!!$homepage->bottom_body_content!!}</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
{!!$homepage->content!!}
@endsection