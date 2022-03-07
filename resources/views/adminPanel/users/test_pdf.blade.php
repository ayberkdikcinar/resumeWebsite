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
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>


@yield('css')   



<div width="100%"id="doc2" class="yui-t7">
    <div width="100%"id="inner">

        <div width="100%"id="hd">
            <div width="100%"class="yui-gc">
                <div width="100%"class="yui-u first">
                    <h1>{{$user->name}} {{$user->surname}}</h1>
                    <h2>{{$user->current_position}}</h2>
                </div>

                <div width="100%"class="yui-u">
                    <div width="100%"class="contact-info">
                        <h3>CONTACT</h3><br>
                        <h3><a href="mailto:{{$user->email}}">{{$user->email}}</a></h3>
                        <h3>{{$user->phone}}</h3>
                    </div>
                    <!--// .contact-info -->
                </div>
            </div>
            <!--// .yui-gc -->
        </div>
        <!--// hd -->

        <div width="100%"id="bd">
            <div width="100%"id="yui-main">
                <div width="100%"class="yui-b">

                    <div width="100%"class="yui-gf">
                        <div width="100%"class="yui-u first">
                            <h2>About Me</h2>
                        </div>
                        <div width="100%"class="yui-u">
                            <p class="enlarge">
                                {{$user->about}}
                            </p>
                        </div>
                    </div>
                    <!--// .yui-gf -->


                    <div width="100%"class="yui-gf">

                        <div width="100%"class="yui-u first">
                            <h2>Experience</h2>
                        </div>
                        <!--// .yui-u -->

                        <div width="100%"class="yui-u">
                            @foreach ($user->experiences->sortByDesc('from_time') as $experience)
                            <div width="100%"class="job">
                                <h2>{{$experience->company_name}}</h2>
                                <h3>{{$experience->position}}</h3>
                                <h4>{{$experience->from_time}} - {{$experience->to_time}}</h4>
                                <p>{{$experience->description}}</p>
                            </div>
                            @endforeach
                        </div>
                        <!--// .yui-u -->
                    </div>
                    <!--// .yui-gf -->



                    <!--// .yui-gf -->

                    <div width="100%"class="yui-gf">

                        <div width="100%"class="yui-u first">
                            <h2>Education</h2>
                        </div>
                        <!--// .yui-u -->

                        <div width="100%"class="yui-u">
                            @foreach ($user->educations->sortByDesc('from_time') as $education)
                            <div width="100%"class="job">
                                <h2>{{$education->school}}</h2>
                                <h3>{{$education->education_level}}</h3>
                                <h4>{{$education->from_time}} - {{$education->to_time}}</h4>
                            </div>
                            @endforeach



                        </div>
                        <!--// .yui-u -->
                    </div>
                    <!--// .yui-gf -->

                    <!--// .yui-gf -->

                    <div width="100%"class="yui-gf">

                        <div width="100%"class="yui-u first">
                            <h2>Courses</h2>
                        </div>
                        <!--// .yui-u -->

                        <div width="100%"class="yui-u">
                            @foreach ($user->courses->sortByDesc('from_time') as $course)
                            <div width="100%"class="job">
                                <h2>{{$course->name}}</h2>
                                <h3>{{$course->provider}}</h3>
                                <h4>{{$course->from_time}} - {{$course->to_time}}</h4>
                                <p>{{$course->description}}</p>
                            </div>
                            @endforeach
                        </div>
                        <!--// .yui-u -->
                    </div>
                    <!--// .yui-gf -->



                    <!--//sidebar-wrapper-->
                    <div width="100%"class="yui-gf">

                        <div width="100%"class="yui-u first">
                            <h2>Skills</h2>
                        </div>
                        <!--// .yui-u -->

                        <div width="100%"class="yui-u">
                            @foreach ($user->skills->sortBy('type') as $skill)
                            <div width="100%"class="job">
                                <h2>{{$skill->name}}</h2>
                                <h4>{{$skill->type}}</h4>
                            </div>
                            @endforeach
                        </div>
                        <!--// .yui-u -->
                    </div>
                    <!--// .yui-gf -->
                    <!--//sidebar-wrapper-->
                    <div width="100%"class="yui-gf">

                        <div width="100%"class="yui-u first">
                            <h2>Languages</h2>
                        </div>
                        <!--// .yui-u -->

                        <div width="100%"class="yui-u">
                            @foreach ($user->languages as $language)
                            <div width="100%"class="job">
                                <h2>{{$language->name}}</h2>
                                <h4>{{$language->proficiency}}</h4>
                            </div>
                            @endforeach
                        </div>
                        <!--// .yui-u -->
                    </div>
                    <!--// .yui-gf -->

                </div>
                <!--// .yui-b -->
            </div>
            <!--// yui-main -->
        </div>
        <!--// bd -->

        <div width="100%"id="ft">
            <p>{{$user->name}} {{$user->surname}} &mdash; <a href="mailto:{{$user->email}}">{{$user->email}}</a> &mdash; {{$user->phone}}</p>
        </div>
        <!--// footer -->

    </div><!-- // inner -->


</div>
<!--// doc -->


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
