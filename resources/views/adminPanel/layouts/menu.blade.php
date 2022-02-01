<body id="page-top">
    
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin Panel</div>
            </a>

            <!-- Divider -->
   

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link @if(Request::segment(2)=="user") in @else collapsed @endif" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-users"></i>
                    <span>Users</span>
                </a>
                <div id="collapseTwo" class="collapse @if(Request::segment(2)=="user") show @endif" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item @if(Request::segment(2)=="user" && !Request::segment(3)) active @endif" href="{{route('admin.user.index')}}">List Users</a>
                        <a class="collapse-item @if(Request::segment(2)=="user" && Request::segment(3)=="create") active @endif" href="{{route('admin.user.create')}}">Add User</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link @if(Request::segment(2)=="page") in @else collapsed @endif" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse @if(Request::segment(2)=="page") show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item @if(Request::segment(3) =="loginpage-update") active @endif" href="{{route('admin.page.loginpageUpdate')}}">Login</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Main Pages:</h6>
                        <a class="collapse-item @if(Request::segment(3) =="homepage-update") active @endif" href="{{route('admin.page.homepageUpdate')}}">Homepage</a>
                        <a class="collapse-item @if(Request::segment(3) =="howitworks-update") active @endif" href="{{route('admin.page.howItWorksUpdate')}}">How It Works</a>
                        <a class="collapse-item @if(Request::segment(3) =="contactus-update") active @endif" href="{{route('admin.page.contactUsUpdate')}}">Contact Us</a>
                        <a class="collapse-item @if(Request::segment(3) =="aboutus-update") active @endif" href="{{route('admin.page.aboutUsUpdate')}}">Legal Policies</a>
                        <a class="collapse-item @if(Request::segment(3) =="termsofuse-update") active @endif" href="{{route('admin.page.termsOfUseUpdate')}}">Terms of use</a>
                        <a class="collapse-item @if(Request::segment(3) =="privacypolicies-update") active @endif" href="{{route('admin.page.privacyPoliciesUpdate')}}">Privacy Policies</a>
                        
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item">
                <a class="nav-link @if(Request::segment(2)=="settings") in @else collapsed @endif" href="" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
                <div id="collapseThree" class="collapse @if(Request::segment(2)=="settings" || Request::segment(2)=="website-settings") show @endif" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item @if(Request::segment(2)=="settings" && Request::segment(3)) active @endif" href="{{route('admin.settings',[Auth::User()->id])}}">Profile</a>
                    <a class="collapse-item @if(Request::segment(2)=="website-settings" && !Request::segment(3)) active @endif" href="{{route('admin.siteSettings')}}">Website</a>
                    </div>
                </div>
            </li>
           
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <a href="{{route('index')}}" class="mr-2 d-none d-lg-inline " style="border-style: solid; padding:4px; background-color: #3A60D0; color: white;">Go to Website</a>
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">     
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::User()->username}}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{asset('back/')}}/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{route('admin.settings',[Auth::User()->id])}}">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
                </div>