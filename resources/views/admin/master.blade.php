<!doctype html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Nijar - Responsive Bootstrap Admin Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.png">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="{{asset('admin/assets/style.css')}}">
    @yield('styles')

</head>

<body>
    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
    <div class="ecaps-page-wrapper">
        <!-- Sidemenu Area -->
        <div class="ecaps-sidemenu-area">
            <!-- Desktop Logo -->
            <div class="ecaps-logo">
                <a href="index.html"><img class="desktop-logo" src="img/core-img/logo.png" alt="Desktop Logo"> <img class="small-logo" src="img/core-img/small-logo.png" alt="Mobile Logo"></a>
            </div>

            <!-- Side Nav -->
            <div class="ecaps-sidenav" id="ecapsSideNav">
                <!-- Side Menu Area -->
                <div class="side-menu-area">
                    <!-- Sidebar Menu -->
                    <nav>
                        <ul class="sidebar-menu" data-widget="tree">
                            <li class="active"><a href="index.html"><i class='bx bx-home-heart'></i><span>Dashboard</span></a></li>
                           
                            
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="bx bx-file"></i><span>Pages</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                <li><a href="{{route('newpage')}}">Add Page</a></li>
                                    <li><a href="{{route('allpages')}}">All Pages</a></li>
                                   
                                </ul>
                            </li>
                           
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class='bx bx-bar-chart-square'></i><span>Posts</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="{{route('newpost')}}">Add Post</a></li>
                                    <li><a href="{{route('posts')}}">All Post</a></li>
                                    <li><a href="{{route('catefories')}}">Categories</a></li>
                                  
                                </ul>
                            </li>
                           
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="bx bx-user-circle"></i><span>Users</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="forget-password.html">Forget Password</a></li>
                                    <li><a href="lock-screen.html">Lock Screen</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="bx bxs-eraser"></i><span>Sliders</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="basic-form.html">Add Slider</a></li>
                                    <li><a href="advanced-elements.html">Sliders</a></li>
                                    
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="bx bx-list-ul"></i><span>Tables</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="basic-table.html">Basic Table</a></li>
                                    <li><a href="filter-table.html">Filter Table</a></li>
                                    <li><a href="data-table.html">Data Table</a></li>
                                    <li><a href="edit-table.html">Edit Table</a></li>
                                </ul>
                            </li>
                            <li><a href="video.html"><i class='bx bx-video'></i><span>Video</span></a></li>
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="bx bx-aperture"></i><span>Icons</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="matarial-icons.html">Materialize Icons</a></li>
                                    <li><a href="font-awesome.html">Font-Awsome Icons</a></li>
                                    <li><a href="pe-7-stroke.html">Pe-7 Stroke Icons</a></li>
                                    <li><a href="themify-icons.html">Themify Icons</a></li>
                                    <li><a href="elegant-icons.html">Elegant Icons</a></li>
                                    <li><a href="et-line-icons.html">Et-line Icons</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="bx bx-map"></i><span>Maps</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="vector-map.html">Vector Map</a></li>
                                    <li><a href="google-map.html">Google Map</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="bx bx-share-alt"></i> <span>Multilevel</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="#">Level One</a></li>
                                    <li class="treeview">
                                        <a href="#">Level One <i class="fa fa-angle-right"></i></a>
                                        <ul class="treeview-menu">
                                            <li><a href="#">Level Two</a></li>
                                            <li><a href="#">Level Two</a></li>
                                            <li><a href="#">Level Two</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Level One</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div class="ecaps-page-content">
            <!-- Top Header Area -->
            <header class="top-header-area d-flex align-items-center justify-content-between">
                <div class="left-side-content-area d-flex align-items-center">
                    <!-- Mobile Logo -->
                    <div class="mobile-logo mr-3 mr-sm-4">
                        <a href="index.html"><img src="img/core-img/small-logo.png" alt="Mobile Logo"></a>
                    </div>

                    <!-- Triggers -->
                    <div class="ecaps-triggers mr-1 mr-sm-3">
                        <div class="menu-collasped" id="menuCollasped">
                            <i class='bx bx-menu'></i>
                        </div>
                        <div class="mobile-menu-open" id="mobileMenuOpen">
                            <i class='bx bx-menu'></i>
                        </div>
                    </div>

                    <!-- Left Side Nav -->
                    <ul class="left-side-navbar d-flex align-items-center">
                        <li class="hide-phone app-search">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="bx bx-search-alt"></span>
                        </li>
                    </ul>
                </div>

                <div class="right-side-navbar d-flex align-items-center justify-content-end">
                    <!-- Mobile Trigger -->
                    <div class="right-side-trigger" id="rightSideTrigger">
                        <i class='bx bx-menu-alt-right'></i>
                    </div>

                    <!-- Top Bar Nav -->
                    <ul class="right-side-content d-flex align-items-center">
                        <li class="nav-item dropdown">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flag-thumb-cu"><img src="img/core-img/l1.jpg" alt=""></span></button>
                            <div class="dropdown-menu language-dropdown dropdown-menu-right">
                                <a href="#" class="dropdown-item mb-15"><img src="img/core-img/l5.jpg" alt="Image"> <span>USA</span></a>
                                <a href="#" class="dropdown-item mb-15"><img src="img/core-img/l2.jpg" alt="Image"> <span>German</span></a>
                                <a href="#" class="dropdown-item mb-15"><img src="img/core-img/l3.jpg" alt="Image"> <span>Italian</span></a>
                                <a href="#" class="dropdown-item"><img src="img/core-img/l4.jpg" alt="Image"> <span>Russian</span></a>
                            </div>
                        </li>

                        <!-- Full Screen Mode -->
                        <li class="full-screen-mode ml-1">
                            <a href="javascript:" id="fullScreenMode"><i class='bx bx-exit-fullscreen'></i></a>
                        </li>

                        <li class="nav-item dropdown">
                            <div class="dropdown d-none d-lg-inline-block ml-1 show">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-customize"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                    <div class="px-lg-2">
                                        <div class="row no-gutters">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="img/shop-img/18.jpg" alt="image">
                                                    <span>Motriza</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="img/shop-img/19.jpg" alt="image">
                                                    <span>Jisladtd</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="img/shop-img/20.jpg" alt="image">
                                                    <span>Dribbble</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row no-gutters">
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="img/shop-img/13.png" alt="image">
                                                    <span>GitHub</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="img/shop-img/14.png" alt="image">
                                                    <span>Google</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="#">
                                                    <img src="img/shop-img/17.jpg" alt="image">
                                                    <span>Dribbble</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class='bx bx-bell bx-tada'></i> <span class="active-status"></span></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- Top Notifications Area -->
                                <div class="top-notifications-area">
                                    <!-- Heading -->
                                    <div class="notifications-heading">
                                        <div class="heading-title">
                                            <h6>Notifications</h6>
                                        </div>
                                        <span>07 New</span>
                                    </div>

                                    <div class="notifications-box" id="notificationsBox">
                                        <a href="#" class="dropdown-item">
                                            <i class='bx bx-shopping-bag'></i>
                                            <div>
                                                <span>Your order is placed</span>
                                                <p class="mb-0 font-12">Consectetur adipisicing elit. Ipsa, porro!</p>
                                            </div>
                                        </a>

                                        <a href="#" class="dropdown-item">
                                            <img src="img/member-img/mail-1.jpg" alt="">
                                            <div>
                                                <span>Haslina Obeta</span>
                                                <p class="mb-0 font-12">Consectetur adipisicing elit. Ipsa, porro!</p>
                                            </div>
                                        </a>

                                        <a href="#" class="dropdown-item">
                                            <i class='bx bx-atom bg-success'></i>
                                            <div>
                                                <span>Your order is Dollar</span>
                                                <p class="mb-0 font-12">Consectetur adipisicing elit. Ipsa, porro!</p>
                                            </div>
                                        </a>

                                        <a href="#" class="dropdown-item">
                                            <img src="img/member-img/mail-3.jpg" alt="">
                                            <div>
                                                <span>Your order is placed</span>
                                                <p class="mb-0 font-12">Consectetur adipisicing elit. Ipsa, porro!</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/member-img/contact-2.jpg" alt=""></button>
                            <div class="dropdown-menu profile dropdown-menu-right">
                                <!-- User Profile Area -->
                                <div class="user-profile-area">
                                    <a href="#" class="dropdown-item"><i class="bx bx-user font-15" aria-hidden="true"></i> My profile</a>
                                    <a href="#" class="dropdown-item"><i class="bx bx-wallet font-15" aria-hidden="true"></i> My wallet</a>
                                    <a href="#" class="dropdown-item"><i class="bx bx-wrench font-15" aria-hidden="true"></i> settings</a>
                                    <a href="#" class="dropdown-item"><i class="bx bx-power-off font-15" aria-hidden="true"></i> Sign-out</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </header>

            <!-- Main Content Area -->
            <div class="main-content">
                
<div class="dashboard-area">
                    <div class="container-fluid">
               @yield('content')
               </div>
                </div>
                <!-- Footer Area -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Footer Area -->
                            <footer class="footer-area d-sm-flex justify-content-center align-items-center justify-content-between">
                                <!-- Copywrite Text -->
                                <div class="copywrite-text">
                                    <p class="font-13">Created by @<a href="#">Theme-zome.</a></p>
                                </div>
                                <div class="fotter-icon text-center">
                                    <p class="mb-0 font-13">2020 @ Nijar. </p>
                                </div>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======================================
    ********* Page Wrapper Area End ***********
    ======================================= -->

    <!-- Must needed plugins to the run this Template -->
    <script src="{{asset('admin/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/bundle.js')}}"></script>
    <script src="{{asset('admin/assets/js/default-assets/setting.js')}}"></script>
    <script src="{{asset('admin/assets/js/default-assets/fullscreen.js')}}"></script>

    <!-- Active JS -->
    <script src="{{asset('admin/assets/js/default-assets/active.js')}}"></script>

    <!-- These plugins only need for the run this page -->
    <script src="{{asset('admin/assets/js/default-assets/dashboard-active.js')}}"></script>
    @yield('scripts')

</body>


</html>