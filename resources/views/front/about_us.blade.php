@extends('front.layouts.master')
@section('title')
About Us
@endsection
@section('content')
<div class="section-white">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
<<<<<<< HEAD
             <h2>ABOUT TİTLE should get db</h2>
             <p> this containter should have multiple paragprahes  </p>
             <p>p1 should get db</p>
             <p>p2 should get db</p>
          </div>
          <div class="col-lg-8 col-lg-offset-2 wow fadeIn" style="margin-bottom:15px;" data-wow-delay="0.2s">
             <img class="img-responsive" src="front/images/lag-60.png" alt="" />
          </div>
          <div class="col-lg-8 col-lg-offset-2">
             <p>Chamb is the brainchild of Bayram Filikci. Danish born with Turkish descent, like the famously business savvy Ottomans of old, Bayram has a flair for creativity and business growth hacking. And along with Chamb’s team, we all count ourselves as passionate entrepreneurs who live for the sole purpose of finding solutions to your problems.</p>
             <p>After gaining much experience in building business from scratch and nurturing them to fruition, the team set its sights on creating a gateway that could help fledgling companies establish new relationships that will propel them forward to unrivalled riches.</p>
          </div>
          <div class="col-lg-8 col-lg-offset-2 wow fadeIn" style="margin-bottom:15px;" data-wow-delay="0.2s">
             <img src="front/images/lag-61.png" alt="" />
          </div>
          
          
          </div>
=======
            {!!$aboutUs->content!!}
         </div>
>>>>>>> 08db578047695617b0a0c761e0301f5eee564ac3
       </div>
    </div>
 </div>
@endsection