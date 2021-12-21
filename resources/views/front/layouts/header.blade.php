<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>@yield('title','Default Title')</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--enable mobile device-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      <link rel="stylesheet" href="{{asset('front')}}/css/font-awesome.min.css">
      <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
      <!--bootstrap css-->
      <link rel="stylesheet" href="{{asset('front')}}/css/bootstrap.min.css">
      <!--animate css-->
      <link rel="stylesheet" href="{{asset('front')}}/css/animate-wow.css">
      <!--main css-->
      <link rel="stylesheet" href="{{asset('front')}}/css/style.css">
      <link rel="stylesheet" href="{{asset('front')}}/css/bootstrap-select.min.css">
      <link rel="stylesheet" href="{{asset('front')}}/css/slick.min.css">
      <!--responsive css-->
      <link rel="stylesheet" href="{{asset('front')}}/css/responsive.css">
      @yield('css')
   </head>
   <body>
      <header id="header" class="top-head">
         <!-- Static navbar -->
         <nav class="navbar navbar-default">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6 col-sm-12"style="float:none;margin:auto;">
                     <div class="navbar-header">
                        <button type="button" id="top-menu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"> 
                        <span class="sr-only">Toggle navigation</span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        <span class="icon-bar"></span> 
                        </button>
                        <a href="{{route('index')}}" class="navbar-brand"><img src="/front/images/logo.png" alt="" /></a>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                     <div class="right-nav">
                        <div class="nav-b hidden-xs">
                           <div class="nav-box">
                              <ul>
                                 <li><a href="{{route('howItWorks')}}">How it works</a></li>
                                 <li><a href="{{route('aboutUs')}}">Chamb for Business</a></li>
                                 <li><a href="{{route('contactUs')}}">Contact Us</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  @auth
                  <div class="col-md-2 col-sm-12">
                     <div class="right-nav">
                        <div class="login-sr">
                           <div class="login-signup">
                              <ul> 
                                 <li>   
                                    <div class="dropdown">                        
                                       <a aria-haspopup="true" aria-expanded="false">
                                          <span class="mr-2 d-none d-lg-inline text-gray-600 large">{{Auth::User()->username}}</span>
                                          <img width="30" height="40" class="" src="{{asset('back/')}}/img/undraw_profile.svg">    
                                       </a>
                                       <div class="dropdown-content">
                                         <a class="dropdown-item" href="{{route('profile')}}">
                                             <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Profile
                                          </a>
                                          <a href="#" data-toggle="modal" data-target="#exampleModal">
                                             <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400" data-toggle="modal" data-target="#exampleModal"></i>
                                                Logout 
                                          </a>    
                                       </div>
                                     </div>
                                 </li>
                              </ul>     
                           </div>
                        </div>
                     </div>
                  </div> 
                  @endauth
                  @guest    
                  <div class="col-md-2 col-sm-12">
                     <div class="right-nav">
                        <div class="login-sr">
                           <div class="login-signup">
                              <ul>
                                 <li><a class="custom-b" href="{{route('login')}}">Login</a></li>
                                 
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  @endguest
               </div>
            </div>
            <!--/.container-fluid --> 
         </nav>
      </header>