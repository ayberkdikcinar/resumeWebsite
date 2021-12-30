@extends('front.layouts.master')
@section('title')
BURASI BACKTEN ÇEKİLECEK
@endsection
@section('content')


<div class="page-content-product">
   <div class="main-product" style="background-image: url('front/images/bg_img1.png');">
      <!-- bu fotoğrafta backten çekilecek -->
      <div class="container">
         <div class="row clearfix">
            <div class="find-box">
               <h1>H1 title - get db</h1>
               <h4>H4 sub title - get db</h4>
            </div>
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
                  <img src="front/images/works-icon-01.png" class="icon-small" alt="" style="width: 50px; height: 50px;">
                  <h4>sub three, first title - get db</h4>
                  <p>sub three, first info - get db
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
            <div class="panel panel-default">
               <div class="panel-body">
                  <img src="front/images/works-icon-02.png" class="icon-small" alt="" style="width: 50px; height: 50px;">
                  <h4>sub three, second title - get db</h4>
                  <p>sub three, second info - get db
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-sm-6 wow fadeIn hidden-sm" data-wow-delay="0.4s">
            <div class="panel panel-default">
               <div class="panel-body">
                  <img src="front/images/works-icon-03.png" class="icon-small" alt="" style="width: 50px; height: 50px;">
                  <h4>sub three, third title - get db</h4>
                  <p>sub three, third info - get db
                  </p>
               </div>
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
               <img src="images/exciting_img-01.jpg" class="icon-small" alt="" />
               <h4>What {firm name - get db} does.
               </h4>
               <p>{ get db hole area}<br><br>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris..
               </p>
            </div>
         </div>
         <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
            <div class="exciting_box l_pd">
               <img src="images/exciting_img-02.jpg" class="icon-small" alt="" />

               <p>this area must fill with a list that firm's how does it works simply

                  <br><br>
                  for listing those items there should be new css classes (e.g list icons...) this is frontends job if you are working on backend just ignore.
               </p>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="start-free-box">
   <div class="container">
      <div class="row">
         <div class="container">
            <div class="main-start-box">
               <div class="free-box-a clearfix">
                  <div class="col-md-6 col-sm-6">
                     <div class="left-a-f">
                        <h3>About Us.</h3>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                     <div class="right-a-f">
                        <p>this part should be a brief explanition of company and should get from db 
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection