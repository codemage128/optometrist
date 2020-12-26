<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Optometrist</title>
    <meta name="robots" content="noindex, follow"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/users/images/favicon.ico') }} ">

    <!-- CSS
        ============================================ -->

    <link rel="stylesheet" href="{{ asset('assets/users/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/users/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/users/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/users/css/optico-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/users/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/users/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/users/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/users/css/prettyPhoto.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/users/css/twentytwenty.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/users/css/shortcode.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/users/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/users/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/users/css/responsive.css') }}">
</head>
<body>
<div class="page-wrapper">
    <header class="site-header header-style-1">
        <div class="pre-header">
            <div class="container">
                <div class="d-flex justify-content-between  align-items-center">
                    <div class="pre-header-left">
                        <ul class="top-contact">
                            <li><i class="optico-icon-location-pin"></i>7501 Carrlton Cuevas Rd, Gulfport, MS, 395503
                            </li>
                        </ul>
                    </div>
                    <div class="pre-header-right">
                        <ul class="top-contact d-inline">
                            <li><i class="optico-icon-clock"></i>Mon - Sat 8.00 - 18.00</li>
                        </ul>
                        <ul class="social-icons d-inline">
                            <li><a target="_blank" href="#" data-tooltip="Facebook"><i class="optico-icon-facebook"></i></a>
                            </li>
                            <li><a target="_blank" href="#" data-tooltip="Twitter"><i
                                        class="optico-icon-twitter"></i></a></li>
                            <li><a target="_blank" href="#" data-tooltip="Flickr"><i class="optico-icon-flickr"></i></a>
                            </li>
                            <li><a target="_blank" href="#" data-tooltip="LinkedIn"><i class="optico-icon-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-header-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex align-items-center">
                            <div class="site-branding flex-grow-1">
                                <a href="{{ route('index') }}">
                                    <img class="logo-img" alt="optico"
                                         src="{{ asset('assets/users/images/logo-dark.png') }}">
                                </a>
                            </div>
                            <div class="site-navigation ml-auto">
                                <nav class="main-menu navbar-expand-xl navbar-light">
                                    <div class="navbar-header">
                                        <!-- Togg le Button -->
                                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                                data-target="#navbarSupportedContent"
                                                aria-controls="navbarSupportedContent" aria-expanded="false"
                                                aria-label="Toggle navigation">
                                            <span class="fa fa-bars"></span>
                                        </button>
                                    </div>
                                    <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li class="{{ Request::is('/') ? 'active' : '' }}"><a
                                                    href="{{ route('index') }}">Home</a>
                                            </li>
                                            <li class="dropdown {{ Request::is('contact') ? 'active' : '' }}">
                                                <a href="{{ route('contact') }}">Blogs</a>
                                                <ul>
                                                    <li><a href="{{ route('about') }}">Optometry</a></li>
                                                    <li><a href="{{ route('treatments') }} ">Opticianry</a></li>
                                                </ul>
                                            </li>
                                            <li class="{{ Request::is('contact') ? 'active' : '' }}">
                                                <a href="{{ route('contact') }}">Courses</a>
                                            </li>
                                            <li class="dropdown {{ Request::is('about') || Request::is('treatments') || Request::is('our-doctors') || Request::is('doctor-single') ? 'active' : '' }}">
                                                <a href="{{ route('about') }}">Services</a>
                                                <ul>
                                                    <li><a href="{{ route('about') }}">About</a></li>
                                                    <li><a href="{{ route('treatments') }} ">Study Tips</a></li>
                                                    <li><a href="{{ route('treatments') }} ">Visual Acuity Chart</a></li>
                                                    <li><a href="{{ route('treatments') }} ">Treatments</a></li>
                                                    <li><a href="{{ route('our-doctors') }}">Our Doctors</a></li>
                                                    <li><a href="{{ route('doctor-single') }} ">Doctor Single</a></li>
                                                </ul>
                                            </li>
                                            <li class="{{ Request::is('contact') ? 'active' : '' }}">
                                                <a href="{{ route('contact') }}">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-right-box d-flex align-items-center">
                                <a href="#" class="search-btn"><i class="optico-icon-search-1"></i></a>
                                <div class="header-button">
                                    <a href="#" class="btn btn-outline">APPOINTMENT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')
    <footer class="footer site-footer">
        <div class="footer-top skin-bg-color">
            <div class="container">
                <div class="row d-flex white-color align-items-center">
                    <div class="col-lg-8">
                        <div class="iconbox iconbox-style-6">
                            <div class="iconbox-inner d-flex">
                                <div class="iconbox-icon">
                                    <i class="themifyicon ti-headphone-alt"></i>
                                </div>
                                <div class="iconbox-contents">
                                    <div class="iconbox-title">
                                        <h2>If you Have Any Questions Schedule an Appointment <strong>With Our Doctor OR
                                                Call Us On (010)123-456-7890</strong>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-md-30 text-lg-right">
                        <a href="#" class="btn btn-dark">Make an Appointment</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="footerlogo mb-4">
                        <img class="" src="{{ asset('assets/users/images/logo-dark.png') }}" alt="">
                    </div>
                    <p class="mb-0">
                        The Lost Contacts offers courses on various aspects of eye care, helpful resources and reference
                        material for students, clinical tips and pearls, practice-building ideas, etc.
                        All the content found on The Lost Contacts is publicly available educational material and 100%
                        free to access.
                    <div class="social-links-wrapper">
                        <ul class="social-icons">
                            <li><a href="#" class="tooltip-top" data-toggle="tooltip" data-placement="top"
                                   data-tooltip="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="tooltip-top" data-toggle="tooltip" data-placement="top"
                                   data-tooltip="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="tooltip-top" data-toggle="tooltip" data-placement="top"
                                   data-tooltip="Flickr"><i class="fa fa-flickr"></i></a></li>
                            <li><a href="#" class="tooltip-top" data-toggle="tooltip" data-placement="top"
                                   data-tooltip="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 mt-sm-30">
                    <h6 class="footer-widget-title">Usefull Links</h6>
                    <ul class="list-unstyled footer-link-list">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Treatments</a></li>
                        <li><a href="#">Our Doctors</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 mt-md-30">
                    <h6 class="footer-widget-title">Our Services</h6>
                    <ul class="list-unstyled footer-link-list">
                        <li><a href="#">Study Tips</a></li>
                        <li><a href="#">Download</a></li>
                        <li><a href="#">Courses</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 address-box mt-md-30">
                    <h6 class="footer-widget-title">Get In Touch</h6>
                    <div class="d-flex">
                        <i class="optico-icon-location-pin"></i>
                        <p><strong>OPTICO EYE HOSPITAL</strong>
                            <br/>Lorance 542B, Tailstoi Town 5248 MT, Wordwide Country</p>
                    </div>
                    <div class="d-flex">
                        <i class="optico-icon-mobile"></i>
                        <p>(+01) 123 456 7890</p>
                    </div>
                    <div class="d-flex">
                        <i class="optico-icon-comment-1"></i>
                        <p>info@example.com</p>
                    </div>
                    <div class="d-flex">
                        <i class="optico-icon-clock"></i>
                        <p>Mon to Sat - 9:00am to 6:00pm</p>
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright © 2020 <a href="index.html">Optico</a>. All rights reserved.
                    </div>
                    <div class="col-sm-6 text-lg-right text-md-right text-sm-left">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#">About Us</a></li>
                            <li class="list-inline-item"><a href="#">Services</a></li>
                            <li class="list-inline-item"><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>

<div class="ts-search-overlay">
    <div class="ts-icon-close"></div>
    <div class="ts-search-outer">
        <div class="ts-search-logo"><img alt="optico" src="{{ asset('assets/users/images/logo-white.png') }}"/></div>
        <form class="ts-site-searchform">
            <input type="search" class="form-control field searchform-s" name="s"
                   placeholder="Type Word Then Press Enter">
            <button type="submit"><span class="optico-icon-search"></span></button>
        </form>
    </div>
</div>
<!-- Search Box End Here -->

<!-- JS
    ============================================ -->

<script src="{{ asset('assets/users/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/users/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/users/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/users/js/jquery-waypoints.js')}}"></script>
<script src="{{ asset('assets/users/js/jquery.appear.js') }}"></script>
<script src="{{ asset('assets/users/js/numinate.min.js') }}"></script>
<script src="{{ asset('assets/users/js/slick.min.js') }}"></script>
<script src="{{ asset('assets/users/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('assets/users/js/circle-progress.js') }}"></script>
<script src="{{ asset('assets/users/js/jquery.event.move.js') }}"></script>
<script src="{{ asset('assets/users/js/jquery.twentytwenty.js') }}"></script>
<script src="{{ asset('assets/users/js/scripts.js') }}"></script>
</body>
</html>
