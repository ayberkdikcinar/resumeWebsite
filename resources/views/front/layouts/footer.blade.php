<footer>
   <div class="main-footer">
      <div class="container">
         <div class="row">
            <div class="footer-link-box clearfix">
               <div class="col-md-8 col-sm-6">
                  <div class="left-f-box">
                     <div class="col-sm-4">
                        <h2>COMPANY INFO</h2>
                        <ul>
                           <li><a href="{{route('aboutUs')}}">About Us</a></li>
                           <li><a href="{{route('privacyPolicies')}}">Privacy Policy</a></li>
                           <li><a href="{{route('termsOfUse')}}">Terms of use</a></li>
                           <li><a href="{{route('contactUs')}}">Contact us</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="left-f-box">
                     <div>
                        <h2>SOCIAL LINKS</h2>                       
                        <a href="{{route('aboutUs')}}"><i class="fa fa-facebook-square"></i></a>
                           <a href="{{route('privacyPolicies')}}"><i class="fa fa-facebook"></i></a>
                           <a href="{{route('termsOfUse')}}"><i class="fa fa-facebook"></i></a>
                           <a href="{{route('contactUs')}}"><i class="fa fa-facebook"></i></a>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="copyright">
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <p><img width="80" src="{{asset('')}}{{$setting->logo_url}}" alt="#" style="margin-top: -5px;" /> {{$setting->license}}</p>
            </div>
            <div class="col-md-4">
               <ul class="list-inline socials">
                  <li>
                     <a href="">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                     </a>
                  </li>
                  <li>
                     <a href="">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                     </a>
                  </li>
                  <li>
                     <a href="">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                     </a>
                  </li>
               </ul>
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