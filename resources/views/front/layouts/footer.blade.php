<footer>
   <div class="main-footer">
      <div class="container">
         <div class="row">
            <div class="footer-link-box clearfix">
               <div class="col-md-10">
                  <div class="left-f-box">
                     <div class="col-sm-2">
                        <h2>COMPANY INFO</h2>
                        <ul>
                           <li><a href="{{route('contactUs')}}">Contact us</a></li>
                           <li><a href="{{route('aboutUs')}}">About Us</a></li>
                           <li><a href="{{route('privacyPolicies')}}">Privacy Policy</a></li>
                           <li><a href="{{route('termsOfUse')}}">Terms of use</a></li>   
                        </ul>
                     </div>
                     <div class="col-sm-4">
                        <h5 style="color: white;">We work with these payment methods</h5><br> 
                        <img src="{{asset('uploads/payment.png')}}" alt="">
                     </div>     
                  </div>
               </div>    
               <div class="col-md-2">
                  <div class="right-f-box">
                     <h2>SOCIAL LINKS</h2>                       
                     <a href="{{$setting->instagram_url}}" target="_blank"><i class="fab fa-instagram fa-2x" style="color: whitesmoke; margin-right:3%"></i></a>
                     <a href="{{$setting->facebook_url}}" target="_blank"><i class="fab fa-facebook fa-2x"style="color: whitesmoke; margin-right:3%"></i></a>
                     <a href="{{$setting->twitter_url}}" target="_blank"><i class="fab fa-twitter fa-2x"style="color: whitesmoke; margin-right:3%"></i></a>
                     <a href="{{$setting->linkedin_url}}" target="_blank"><i class="fab fa-linkedin fa-2x"style="color: whitesmoke; margin-right:3%"></i></a>
                  </div>
               </div>
            </div>
         </div>        
         <div class="row">
            <div class="col-md-12" style="text-align: center">
               <p style="color: rgba(241, 172, 45, 0.726); font-size:12px;">{{$setting->license}}</p>
            </div>
         </div>       
      </div>
   </div>

   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Ready to Live?</h5>
            </div>
            <div class="modal-body">
               Select "Logout" below if you are ready to end your current session.
            </div>
            <div class="modal-footer">
               <form id="myForm" action="{{route('logout.post')}}" method="POST">
                  @csrf
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Logout</button>
               </form>
            </div>
         </div>
      </div>
   </div>

</footer>
<!--main js-->
<script src="{{asset('front')}}/js/jquery-1.12.4.min.js"></script>
<!--bootstrap js-->
<script src="{{asset('front')}}/js/bootstrap.min.js"></script>
<script src="{{asset('front')}}/js/bootstrap-select.min.js"></script>
<script src="{{asset('front')}}/js/slick.min.js"></script>
<script src="{{asset('front')}}/js/wow.min.js"></script>
<!--custom js-->
<script src="{{asset('front')}}/js/custom.js"></script>
<!--resume js-->

<script>
   $("input[type='image']").click(function() {
      $("input[id='my_file']").click();
   });
</script>
<script>
   const phoneInputField = document.querySelector("#phone");
   const phoneInput = window.intlTelInput(phoneInputField, {
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });
</script>
<script src="{{asset('front')}}/js/resume.js"></script>
<script src="{{asset('front')}}/js/bootstrap.bundle.min.js"></script>
@yield('js')
</body>

</html>