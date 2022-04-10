<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/images/icon.png">

    <!-- Google font (font-family: 'Montserrat', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
    <!-- Google font (font-family: 'Open Sans', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700" rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('themes/tag/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/tag/assets/css/plugins.css')}}">

    <!-- Style Css -->
    <link rel="stylesheet" href="{{asset('themes/tag/assets/css/style.css')}}">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{asset('themes/tag/assets/css/custom.css')}}">

    @yield('styles')
    <style>
p{
    color:#000 !important;
}
        </style>
</head>

<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!-- Add your site or application content here -->

    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">

        <!-- Header -->
        <header class="header">

            <!-- Header Top Area -->
            <div class="header-toparea">
                <div class="container">
                    <div class="row justify-content-betwween">
                        <div class="col-lg-6">
                            <ul class="header-topcontact">
                                <li><i class="zmdi zmdi-phone"></i> PHONE : <a href="#">{{$setting[0]->phone1}}</a></li>
								<li><i class="zmdi zmdi-email"></i> E-MAIL : <a href="#">{{$setting[0]->email1}}</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="header-toplinks">
                                <li><a href="#">GET A QUOTE</a></li>
                                <li><a href="#">NEED AN AGENT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Header Top Area -->

            <!-- Header Bottom Area -->
            <div class="header-bottomarea">
                <div class="container">
                    <div class="header-bottom">

                        <!-- Header Logo -->
                        <a href="{{route('home')}}" class="header-logo">
                            <img src="{{asset('logo/'.$setting[0]->logo)}}" width="130px" height="95px" alt="header image">
                        </a>
                        <!--// Header Logo -->

                        <!-- Main Navigation -->
                        <nav class="in-navigation">
                            <ul>
								
								<li><a href="{{route('home')}}">Home</a></li>
								<li><a href="{{route('pages',['slug'=>'about-us'])}}">About US</a></li>
                                <li><a href="{{route('pages',['slug'=>'insurance-scheme'])}}">Insurance Scheme</a></li>
								<li><a href="{{route('contactus')}}">CONTACT</a></li>
                                <li><a href="{{route('career')}}">Career </a></li>
                                <li><a href="{{route('claims')}}">Claims </a></li>
                                
                                <li class="in-dropdown"><a href="#">Media</a>
									<ul>
                                    <li><a href="{{route('news')}}">News </a></li>
										<li><a href="{{route('pages',['slug'=>'photos'])}}">Photo Gallery</a></li>
										<li><a href="{{route('pages',['slug'=>'programs'])}}">Programs</a></li>
                                        <li><a href="{{route('pages',['slug'=>'seminars'])}}">Seminars</a></li>
                                        <li><a href="{{route('pages',['slug'=>'faq'])}}">FAQ</a></li>
                                        <li><a href="{{route('terms')}}">Terms and Conditions</a></li>

									</ul>
								</li>
							</ul>
                        </nav>
                        <!--// Main Navigation -->

                       

                    </div>
                </div>
            </div>
            <!--// Header Bottom Area -->

            <!-- Mobile Menu -->
            <div class="mobile-menu-wrapper clearfix">
                <div class="container">
                    <div class="mobile-menu"></div>
                </div>
            </div>
            <!--// Mobile Menu -->

        </header>
        <!--// Header -->

        <!-- Hero Slider Area -->
      @yield('top')
        <!--// Hero Slider Area -->

        <!-- Page Conttent -->
        <main class="page-content">

     @yield('content')
        </main>
        <!--// Page Conttent -->

        <!-- Footer -->
        <footer class="footer">

            <!-- Footer Contact Area -->
            <div class="footer-contact-area">
                <div class="container">
                    <div class="footer-contact">
                        <div class="row">
                            <div class="col">
                                <div class="footer-contact-block">
                                    <span class="footer-contact-icon">
                                        <i class="zmdi zmdi-phone"></i>
                                    </span>
                                    <p><a href="#">{{$setting[0]->phone1}}</a><br><a href="#">{{$setting[0]->phone2}}</a> <a href="#">{{$setting[0]->phone3}}</a><a href="#">{{$setting[0]->phone4}}</a></p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="footer-contact-block">
                                    <span class="footer-contact-icon">
                                        <i class="zmdi zmdi-home"></i>
                                    </span>
                                    <p>{{$setting[0]->address}}</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="footer-contact-block">
                                    <span class="footer-contact-icon">
                                        <i class="zmdi zmdi-email"></i>
                                    </span>
                                    <p><a href="#">{{$setting[0]->email1}}</a><br><a href="#">{{$setting[0]->email2}}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Footer Contact Area -->
            <!-- Footer Inner -->
            <div class="footer-inner">

                <!-- Footer Widgets Area -->
             
                <!--// Footer Widgets Area -->

                <!-- Footer Copyright Area -->
                <div class="footer-copyright-area">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-12">
                                <p class="copyright-text">Copyright 2022 &copy; <a href="#">LICMIA </a>, All Right
                                    Reserved</p>
                            </div>
                            <div class="col-lg-6 col-12">
                                <ul class="copyright-links">
                                <li><a href="{{route('home')}}">Home</a></li>
								<li><a href="{{route('pages',['slug'=>'about-us'])}}">About US</a></li>
                                <li><a href="{{route('pages',['slug'=>'insurance-scheme'])}}">Insurance Scheme</a></li>
                                <li><a href="{{route('career')}}">Career </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--// Footer Copyright Area -->
            </div>
            <!--// Footer Inner -->

        </footer>
        <!--// Footer -->

    </div>
    <!--// Wrapper -->

    <!-- Js Files -->
    <script src="{{asset('themes/tag/assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    <script src="{{asset('themes/tag/assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('themes/tag/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('themes/tag/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('themes/tag/assets/js/plugins.js')}}"></script>
    <script src="{{asset('themes/tag/assets/js/main.js')}}"></script>
    @yield('scripts')

</body>


</html>