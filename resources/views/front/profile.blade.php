@extends('front.layouts.master')
@section('title')
@section('content')
 <div class="product-page-main">
    <div class="container">
       <div class="row">
        <div class="col-md-1 col-sm-4 "></div>
          <div class="col-md-2 col-sm-4 ">
             <div class="left-profile-box-m prod-page">
                <div class="panel-body">
                   <img src="{{asset('front/')}}/images/150x150.png" alt="#" />
                </div>
                <div class="pof-text">
                   <h3>{{Auth::User()->username}}</h3>
                </div>
                <a href="#">Visit store</a>
                <a href="#">Visit store</a>
                <a href="#">Visit store</a>
             </div>
          </div>
          <div class="col-md-8 col-sm-8">
            <div class="panel-body">

                <div class="description-box">
                   <div class="dex-a">
                      <h4>Description</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                         lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                         when an unknown printer took a galley of type and scrambled it to make a 
                         type specimen book..
                      </p>
                      <br>
                      <p>Small: H 25 cm / &Oslash; 12 cm</p>
                      <p>Large H 24 cm / &Oslash; 25 cm</p>
                   </div>
                   <div class="spe-a">
                      <h4>Specifications</h4>
                      <ul>
                         <li class="clearfix">
                            <div class="col-md-4">
                               <h5>Measurments</h5>
                            </div>
                            <div class="col-md-8">
                               <p>H25 cm / 0 12 cm and H 24 cm / 0 25 cm</p>
                            </div>
                         </li>
                         <li class="clearfix">
                            <div class="col-md-4">
                               <h5>Material</h5>
                            </div>
                            <div class="col-md-8">
                               <p>Material Name</p>
                            </div>
                         </li>
                         <li class="clearfix">
                            <div class="col-md-4">
                               <h5>Wire</h5>
                            </div>
                            <div class="col-md-8">
                               <p>Wire Name</p>
                            </div>
                         </li>
                         <li class="clearfix">
                            <div class="col-md-4">
                               <h5>Comdition</h5>
                            </div>
                            <div class="col-md-8">
                               <p>Brand new</p>
                            </div>
                         </li>
                         <li class="clearfix">
                            <div class="col-md-4">
                               <h5>SKU number</h5>
                            </div>
                            <div class="col-md-8">
                               <p>SKU number</p>
                            </div>
                         </li>
                         <li class="clearfix">
                            <div class="col-md-4">
                               <h5>Shipping</h5>
                            </div>
                            <div class="col-md-8">
                               <p>Shipping worldwide</p>
                            </div>
                         </li>
                         <li class="clearfix">
                            <div class="col-md-4">
                               <h5>Warranty</h5>
                            </div>
                            <div class="col-md-8">
                               <p>1 years</p>
                            </div>
                         </li>
                         <li class="clearfix">
                            <div class="col-md-4">
                               <h5>Delivery</h5>
                            </div>
                            <div class="col-md-8">
                               <p>Choose country</p>
                            </div>
                         </li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection