@extends('layouts.user.header')

@section('content')
    <div class="page-content">

        <!-- Inner Banner -->
        <section class="inner-banner">
            <div class="titlebar-main">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <h1 class="inner-page-title">ABOUT</h1>
                        </div>
                        <div class="col-lg-6 col-md-12 text-lg-right">
                            <nav aria-label="breadcrumb"
                                 class="breadcrumb-section d-flex justify-content-center  justify-content-lg-end">
                                
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner end -->

        <!-- progress -->
        <section class="section-smt">
            <div class="container">
                <div class="row expert-service align-items-lg-center align-items-md-end">
                    <div class="col-md-12 col-lg-6">
                        <img src="{{ asset('assets/users/images/img-03.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-12 col-lg-6 pr-4 pr-md-0 mt-md-50 mb-md-50">
                        <div class="section-title section-title-white">
                            <h4 class="subheading">OUR EXPERTS</h4>
                            <h2>WE ARE SERVING<strong> EXPERT <br>EYE SPECIALISTS</strong></h2>
                            <p class="pt-3">Better vision for a great life consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt.</p>
                        </div>
                        <div class="skill skill-medium">
                            <div class="skill-bar progress-animated" data-percent="90" data-delay="0" data-type="%"
                                 style="width: 90%;">
                                <div class="skill-title">REFRACTIVE SURGERY</div>
                                <span class="progress-type animated fadeIn">%</span><span
                                    class="progress-number animated fadeIn">90</span></div>
                        </div>
                        <div class="skill skill-medium">
                            <div class="skill-bar progress-animated" data-percent="80" data-delay="0" data-type="%"
                                 style="width: 80%;">
                                <div class="skill-title">CATARACT SURGERY</div>
                                <span class="progress-type animated fadeIn">%</span><span
                                    class="progress-number animated fadeIn">80</span></div>
                        </div>
                        <div class="skill skill-medium">
                            <div class="skill-bar progress-animated" data-percent="70" data-delay="0" data-type="%"
                                 style="width: 70%;">
                                <div class="skill-title">GLAUCOMA</div>
                                <span class="progress-type animated fadeIn">%</span><span
                                    class="progress-number animated fadeIn">70</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- progress end -->

        <!-- service -->
        <section class="section-md bg-lightgrey">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-title text-center">
                            <h4 class="subheading skincolor">OUR SERVICES</h4>
                            <h2>A WIDE RANGE OF<strong><br> OPTOMETRY SERVICES.</strong></h2>
                        </div>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="service-box service-style-1">
                            <div class="service-thumbnail">
                                <div class="service-thumbnail-inner">
                                    <img src="{{ asset('assets/users/images/services/service-01.jpg') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="service-content">
                                <div class="service-inner">
                                    <h3 class="service-box-title"><a href="service-detail.html">Paeditaric
                                            Ophthalmology</a></h3>
                                    <div class="service-desc">
                                        <p>If you got eyes sit ametcon sec tetur adipisicing.</p>
                                    </div>
                                    <div class="link-btn">
                                        <a class="skincolor" href="#">Read more<i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="service-box service-style-1">
                            <div class="service-thumbnail">
                                <div class="service-thumbnail-inner">
                                    <img src="{{ asset('assets/users/images/services/service-02.jpg') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="service-content">
                                <div class="service-inner">
                                    <h3 class="service-box-title"><a href="service-detail.html">Surgical Procedures</a>
                                    </h3>
                                    <div class="service-desc">
                                        <p>Enhancing Your Vision sit ametcon sec tetur adipisicing.</p>
                                    </div>
                                    <div class="link-btn">
                                        <a class="skincolor" href="#">Read more<i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="service-box service-style-1">
                            <div class="service-thumbnail">
                                <div class="service-thumbnail-inner">
                                    <img src="{{ asset('assets/users/images/services/service-03.jpg') }}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="service-content">
                                <div class="service-inner">
                                    <h3 class="service-box-title"><a href="service-detail.html">Transitions Lenses</a>
                                    </h3>
                                    <div class="service-desc">
                                        <p>Caring Your Eyes is important sec tetur adipisicing.</p>
                                    </div>
                                    <div class="link-btn">
                                        <a class="skincolor" href="#">Read more<i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service end -->

        <!-- Appointment -->
        <section class="section-md skin-bg-color"
                 style="background: url('{{ asset('assets/users/images/bg/bg-06.jpg') }}') no-repeat center center; background-size: cover;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <div class="section-title white-color text-center">
                            <h4 class="subheading">GET APPOINTMENT</h4>
                            <h2>We Are A Group Of Professional And <strong><br/>Experienced Optometry.</strong> Get a
                                Consultation Right Now! <strong>Call: 800 326 9160</strong></h2>
                        </div>
                    </div>
                </div>
                <div class="text-center mb-4">
                    <a href="#" class="btn">Appointment</a>
                </div>
            </div>
        </section>
        <!-- Appointment end -->

        <!-- Our Service -->
        <section class="section-md bg-lightgrey">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-title text-center">
                            <h4 class="subheading skincolor">WHY PEOPLE TRUST US</h4>
                            <h2>WE PRESERVE, ENHANCE, <strong><br/>AND PROTECT YOUR VISION</strong></h2>
                        </div>
                    </div>
                </div>
                <div class="row pt-3 mb-4">
                    <div class="col-md-4">
                        <div class="iconbox iconbox-style-1">
                            <div class="iconbox-inner">
                                <div class="iconbox-icon skincolor">
                                    <i class="flaticon-icon flaticon-boy"></i>
                                </div>
                                <div class="iconbox-contents">
                                    <div class="iconbox-title">
                                        <h2>Leading Specialists</h2>
                                    </div>
                                    <div class="iconbox-desc">
                                        <p>Our team are ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="iconbox iconbox-style-1">
                            <div class="iconbox-inner">
                                <div class="iconbox-icon skincolor">
                                    <i class="flaticon-icon flaticon-glasses"></i>
                                </div>
                                <div class="iconbox-contents">
                                    <div class="iconbox-title">
                                        <h2>Best Treatment</h2>
                                    </div>
                                    <div class="iconbox-desc">
                                        <p>For A Clearer Tomorrow dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="iconbox iconbox-style-1">
                            <div class="iconbox-inner">
                                <div class="iconbox-icon skincolor">
                                    <i class="flaticon-icon flaticon-eye-2"></i>
                                </div>
                                <div class="iconbox-contents">
                                    <div class="iconbox-title">
                                        <h2>Careful Surgery</h2>
                                    </div>
                                    <div class="iconbox-desc">
                                        <p>Our team are ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Service end -->

        <!-- counter -->
        <section class="section-md bg-darkgrey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="counter counter-style-2">
                            <div class="fld-contents">
                                <h4 class="counter-contents">
                                    <span data-appear-animation="animateDigits" data-from="0" data-to="168"
                                          data-interval="5" data-before="" data-before-style="" data-after=""
                                          data-after-style="">168</span>
                                </h4>
                                <h6 class="counter-title">
                                    <span>year of experiencs</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 pt-sm-20">
                        <div class="counter counter-style-2">
                            <div class="fld-contents">
                                <h4 class="counter-contents">
                                    <span data-appear-animation="animateDigits" data-from="0" data-to="12"
                                          data-interval="5" data-before="" data-before-style="" data-after=""
                                          data-after-style="">12</span>
                                </h4>
                                <h6 class="counter-title">
                                    <span>awad by GOV</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 pt-md-20">
                        <div class="counter counter-style-2">
                            <div class="fld-contents">
                                <h4 class="counter-contents">
                                    <span data-appear-animation="animateDigits" data-from="0" data-to="1000"
                                          data-interval="5" data-before="" data-before-style="" data-after=""
                                          data-after-style="">1000</span>
                                </h4>
                                <h6 class="counter-title">
                                    <span>Happy Patients</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 pt-md-20">
                        <div class="counter counter-style-2">
                            <div class="fld-contents">
                                <h4 class="counter-contents">
                                    <span data-appear-animation="animateDigits" data-from="0" data-to="168"
                                          data-interval="5" data-before="" data-before-style="" data-after=""
                                          data-after-style="">168</span>
                                </h4>
                                <h6 class="counter-title">
                                    <span>year of experiencs</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- counter end -->

        <!-- team -->
        <section class="section-md bg-lightgrey">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="section-title text-center">
                            <h4 class="subheading skincolor">MEET OUR TEAM</h4>
                            <h2>THE MOST QUALIFIED, <strong>SKILLFUL<br/>AND PROFESSIONAL STAFF.</strong></h2>
                            <p>We offers a complete range of eye care services including Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="teambox align-items-center teambox-style-3 d-flex">
                            <div class="teambox-thumbnail">
                                <img src="{{ asset('assets/users/images/team/08.jpg') }}" class="img-fluid animation" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="teambox-content">
                                    <div class="team-title">
                                        <h4><a href="team-single.html">Anna Winds</a></h4>
                                    </div>
                                    <div class="team-position skincolor">Optegra eye</div>
                                    <div class="blog-desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry.</p>
                                    </div>
                                    <span class="team-email">
                                            <i class="skincolor labtechco-icon-mail-alt"></i><a
                                            href="#">team@optico.com</a>
                                        </span>
                                    <div class="team-member-social-links">
                                        <ul class="team-social-links">
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-md-30">
                        <div class="teambox align-items-center teambox-style-3 d-flex">
                            <div class="teambox-thumbnail">
                                <img src="{{ asset('assets/users/images/team/07.jpg') }}" class="img-fluid animation" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="teambox-content">
                                    <div class="team-title">
                                        <h4><a href="team-single.html">Elizabeth Blackwell</a></h4>
                                    </div>
                                    <div class="team-position skincolor">lens replacement</div>
                                    <div class="blog-desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                            industry.</p>
                                    </div>
                                    <span class="team-email">
                                            <i class="skincolor labtechco-icon-mail-alt"></i><a
                                            href="#">team@optico.com</a>
                                        </span>
                                    <div class="team-member-social-links">
                                        <ul class="team-social-links">
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team end -->
    </div>
@endsection
