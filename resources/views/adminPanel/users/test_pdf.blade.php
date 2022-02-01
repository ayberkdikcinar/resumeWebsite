<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>@yield('title','RESUME')</title>
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
    <link rel="stylesheet" href="{{asset('front')}}/css/orbit.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{asset('front')}}/css/slick.min.css">
    <!--responsive css-->
    <link rel="stylesheet" href="{{asset('front')}}/css/responsive.css">
    <!--phone selection-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    @yield('css')

</head>

<body>
   
    <div class="wrapper mt-lg-5" id="testDiv">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <img src="{{asset('')}}{{Auth::User()->photo_url}}" class="profile-picture" />
                <h1 class="name" style="text-transform: uppercase; font-size:150%"><br>{{$user->name}} <br>{{$user->surname}}</h1>
                <h3 class="tagline">{{$user->current_position}}</h3>
            </div>
            <!--//profile-container-->

            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fas fa-envelope"></i><a href="mailto: yourname@email.com"> {{$user->email}}</a></li>
                    <li class="phone"><i class="fas fa-phone"></i><a href="tel:{{$user->phone}}"> {{$user->phone}}</a></li>
                </ul>
            </div>
            <!--//contact-container-->
            <div class="education-container container-block">
                <h2 class="container-block-title">Education</h2>
                @foreach ($user->educations->sortByDesc('from_time') as $education)
                <div class="item">
                    <h4 class="degree">{{$education->education_level}}</h4>
                    <h5 class="meta">{{$education->school}}</h5>
                    <div class="time">{{$education->from_time}} - {{$education->to_time}}</div>
                </div>
                @endforeach
            </div>
            <!--//education-container-->

            <div class="languages-container container-block">
                <h2 class="container-block-title">Languages</h2>
                <ul class="list-unstyled interests-list">
                    @foreach ($user->languages as $language)
                    <li>
                        {{$language->name}} <span class="lang-desc">{{$language->proficiency}}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!--//sidebar-wrapper-->

        <div class="main-wrapper">

            <section class="section summary-section">
                <h2 class="section-title">
                    <span class="material-icons">account_circle</span> ABOUT ME
                </h2>
                <div class="summary">
                    <p>{{$user->about}}</p>
                </div>
                <!--//summary-->
            </section>
            <!--//section-->

            <section class="section experiences-section">
                <h2 class="section-title"><span class="material-icons">work</span> Experiences</h2>
                @foreach ($user->experiences->sortByDesc('from_time') as $experience)
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">{{$experience->position}}</h3>
                            <div class="time">{{$experience->from_time}} - {{$experience->to_time}}</div>
                        </div>
                        <!--//upper-row-->
                        <div class="company">{{$experience->company_name}}</div>
                    </div>
                    <!--//meta-->
                    <div class="details">
                        <p>{{$experience->description}}</p>
                    </div>
                    <!--//details-->
                </div>
                <!--//item-->
                @endforeach
            </section>
            <!--//section-->


            <!--//section-->
            <section class="section experiences-section">
                <h2 class="section-title"><span class="material-icons">assignment</span> Courses</h2>
                @foreach ($user->courses->sortByDesc('from_time') as $course)
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title">{{$course->name}}</h3>
                            <div class="time">{{$course->from_time}} - {{$course->to_time}}</div>
                        </div>
                        <!--//upper-row-->
                        <div class="company">{{$course->provider}}</div>
                    </div>
                    <!--//meta-->
                    <div class="details">
                        <p>{{$course->description}}</p>
                    </div>
                    <!--//details-->
                </div>
                <!--//item-->
                @endforeach
            </section>

            <section class="section projects-section">
                <h2 class="section-title"><span class="material-icons">rocket</span> Skills</h2>
                @foreach ($user->skills->sortBy('type') as $skill)
                <!--//intro-->
                <div class="item">
                    <span class="project-title" style="float: left; width:45%;">{{$skill->name}}</span>
                    <span class="material-icons">
                        arrow_forward_ios
                    </span>
                    <span class="project-tagline" style="float:right; width:20%;"> {{$skill->type}} </span>
                </div>
                <!--//item-->
                @endforeach
            </section>
        </div>
        <!--//main-body-->
    </div>
    
</body>
<!-- Bootstrap core JavaScript-->
<script src="{{asset('back/')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('back/')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('back/')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('back/')}}/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="{{asset('back/')}}/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset('back/')}}/js/demo/chart-area-demo.js"></script>
<script src="{{asset('back/')}}/js/demo/chart-pie-demo.js"></script>
<script src="{{asset('back/')}}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('back/')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset('back/')}}/js/demo/datatables-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>


@toastr_js
@toastr_render
@yield('js')

</html>
