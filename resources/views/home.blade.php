@extends('layouts.user.header')

@section('content')
    <div class="page-content">
        <!-- Banner -->
        <section class="home-banner home-slider-first">
            <div id="Bannerslider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img-fluid" src="{{ asset('assets/users/images/banner/banner-01.jpg') }}" alt="..."/>
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-7 col-md-7 col-sm-8  col-8">
                                        <span class="shapewrapper-inner anim-1">EYE CARE SPECIALIST</span>
                                        <h1 class="anim-2">Service that'll make you <br/><strong>see us with new
                                                eyes</strong></h1>
                                        <div class="tagline anim-3 d-none d-sm-block">We Provides always our best
                                            services for our clients
                                        </div>
                                        <div class="d-none d-sm-block mt-4"><a href="#" class="btn anim-3">Call for
                                                inquiry </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="{{ asset('assets/users/images/banner/banner-02.jpg') }}" alt="...">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-7 col-md-7  col-sm-8 col-8">
                                        <span class="shapewrapper-inner anim-1">EYE CARE SPECIALIST</span>
                                        <h1 class="anim-2">Service that'll make you <br/><strong>see us with new
                                                eyes</strong></h1>
                                        <div class="tagline anim-3 d-none d-sm-block">We Provides always our best
                                            services for our clients
                                        </div>
                                        <div class="d-none d-sm-block mt-4"><a href="#" class="btn anim-3">Call for
                                                inquiry </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#Bannerslider" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#Bannerslider" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </section>
        <!-- Banner End -->

        <!-- Features -->
        <section class="intro-section bg-lightgrey">
            <div class="container">
                <div class="row no-gutters bg-white box-shadow-01">
                    <div class="col-md-3 iconbox-border">
                        <div class="iconbox iconbox-style-3">
                            <div class="iconbox-inner">
                                <div class="iconbox-icon skincolor">
                                    <i class="flaticon-icon flaticon-eye"></i>
                                </div>
                                <div class="iconbox-contents">
                                    <div class="iconbox-title">
                                        <h2>Eye care</h2>
                                    </div>
                                    <div class="iconbox-desc">
                                        <p>Enhancing Your Vision sit ametcon sec tetur adipisicing eiusmod tempor
                                            incididunt ut.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 iconbox-border">
                        <div class="iconbox iconbox-style-3">
                            <div class="iconbox-inner">
                                <div class="iconbox-icon skincolor">
                                    <i class="flaticon-icon flaticon-testing-glasses"></i>
                                </div>
                                <div class="iconbox-contents">
                                    <div class="iconbox-title">
                                        <h2>Childrens</h2>
                                    </div>
                                    <div class="iconbox-desc">
                                        <p>Caring Your Eyes is important sec tetur adipisicing elit, sed do
                                            important sec tetur adipisicing.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 iconbox-border">
                        <div class="iconbox iconbox-style-3">
                            <div class="iconbox-inner">
                                <div class="iconbox-icon skincolor">
                                    <i class="flaticon-icon flaticon-glasses"></i>
                                </div>
                                <div class="iconbox-contents">
                                    <div class="iconbox-title">
                                        <h2>Lasik</h2>
                                    </div>
                                    <div class="iconbox-desc">
                                        <p>Keep calm dolor sit ametcon sec tetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="iconbox iconbox-style-3">
                            <div class="iconbox-inner">
                                <div class="iconbox-icon skincolor">
                                    <i class="flaticon-icon flaticon-contact-lens-3"></i>
                                </div>
                                <div class="iconbox-contents">
                                    <div class="iconbox-title">
                                        <h2>Free Consult?</h2>
                                    </div>
                                    <div class="iconbox-desc">
                                        <p>Enhancing Your Vision ametcon sec tetur adipisicing looking sit ametcon
                                            adipisicing.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Features end -->

        <!-- Welcome -->
        <section class="bg-lightgrey welcome-company">
            <div class="container">
                <div class="row align-items-lg-center align-items-md-end">
                    <div class="col-md-12 col-lg-6">
                        <img src="{{ asset('assets/users/images/img-01-new.png') }}" class="img-fluid" alt=""/>
                    </div>
                    <div class="col-md-12 col-lg-6 mt-sm-30 pb-50">
                        <div class="section-title mt-md-50">
                            <h4 class="subheading skincolor">WELCOME TO OPHTHMOLOGIST</h4>
                            <h2>WE PRESERVE, ENHANCE, AND <strong>PROTECT YOUR VISION</strong></h2>
                        </div>
                        <p>You are nothing without your eyes, <a class="opt-underline-dotted" href="#">consectetur
                                adipisicing elit,</a> sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        <p><a class="opt-underline-dotted" href="#">Care your eyes,</a> sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua Ut enim.</p>
                        <div class="sing-owner d-flex">
                            <div class="sing">
                                <img src="{{ asset('assets/users/images/signature.png') }}" class="img-fluid" alt=""/>
                            </div>
                            <div class="owner-author">
                                <h4 class="owner-name">Mitchell Newman</h4>
                                <h6 class="owner-postion">Owner, Lead Optometrist</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Welcome end -->

        <!-- About Vision -->
        <section class="section-md">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 pr-4">
                        <div class="section-title with-lead">
                            <h4 class="subheading skincolor">YOUR VISION IS OUR VISION</h4>
                            <h2>NOT JUST CARE, BUT<strong> A <br/>BETTER CARE EXPERIENCE</strong></h2>
                            <div class="lead">Eyecare Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel
                                velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctornisi elit
                                consequat ipsum.
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="iconbox iconbox-style-2">
                                    <div class="iconbox-inner">
                                        <div class="iconbox-contents">
                                            <div class="iconbox-title">
                                                <h2>Qualified Doctors</h2>
                                            </div>
                                            <div class="iconbox-desc">
                                                <p>Enhancing Your Vision sit dolor sitametcon sec tetur adipisicing.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="iconbox iconbox-style-2">
                                    <div class="iconbox-inner">
                                        <div class="iconbox-contents">
                                            <div class="iconbox-title">
                                                <h2>Modern Equipment</h2>
                                            </div>
                                            <div class="iconbox-desc">
                                                <p>Wake Up with dolor sit ametcon sec tetur adipisicing elit,sed do.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="iconbox iconbox-style-2">
                                    <div class="iconbox-inner">
                                        <div class="iconbox-contents">
                                            <div class="iconbox-title">
                                                <h2>Emergency Help</h2>
                                            </div>
                                            <div class="iconbox-desc">
                                                <p>Get better looking sit ametcon sec tetur adipisicing elit,sed do.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="iconbox iconbox-style-2">
                                    <div class="iconbox-inner">
                                        <div class="iconbox-contents">
                                            <div class="iconbox-title">
                                                <h2>Individual Approach</h2>
                                            </div>
                                            <div class="iconbox-desc">
                                                <p>Enhancing Your Vision ametcon sec tetur adipisicing elit,sed do.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="link-btn">
                            <a class="skincolor" href="#">Read more<i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-md-30 text-md-center mb-lg-30">
                        <img src="{{ asset('assets/users/images/01.jpg') }}" class="img-fluid img-shadow" alt=""/>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Vision end -->

        <!-- Why Choose Us -->
        <section class="counter-section white-color">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="play-video align-items-center d-flex white-color">
                            <a href="https://www.youtube.com/watch?v=1fBQHunYvkE" data-rel="prettyPhoto"><i
                                    class="themifyicon ti-control-play"></i></a>
                            <h4>See our video</h4>
                        </div>
                        <div class="section-title section-title-white pt-4 mt-2">
                            <h4 class="subheading">WHY CHOOSE US</h4>
                            <h2>EYE CARE SERVICES FOR<strong> CHILDRENS AND ADULTS</strong></h2>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4 pt-3">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="db-fid inside db-fid-boxstyle-style2 db-fidbox-style-2">
                                    <div class="db-fld-contents">
                                        <div class="db-circle-outer" data-digit="80" data-fill="#fff" data-before=""
                                             data-before-type="sup" data-after="<sub>%</sub>" data-after-type="sub"
                                             data-size="145" data-emptyfill="#000301" data-thickness="7"
                                             data-gradient="">
                                            <div class="db-circle-w">
                                                <div class="db-circle"></div>
                                                <div class="db-circle-overlay">
                                                    <div class="db-circle-number"></div>
                                                </div>
                                            </div>
                                            <div class="db-fid-title-w">
                                                <h3 class="db-fid-title"><span>Expert Doctor</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="db-fid inside db-fid-boxstyle-style2 db-fidbox-style-2">
                                    <div class="db-fld-contents">
                                        <div class="db-circle-outer" data-digit="90" data-fill="#fff" data-before=""
                                             data-before-type="sup" data-after="<sub>%</sub>" data-after-type="sub"
                                             data-size="145" data-emptyfill="#000301" data-thickness="7"
                                             data-gradient="">
                                            <div class="db-circle-w">
                                                <div class="db-circle"></div>
                                                <div class="db-circle-overlay">
                                                    <div class="db-circle-number"></div>
                                                </div>
                                            </div>
                                            <div class="db-fid-title-w">
                                                <h3 class="db-fid-title"><span>Quality Work</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="db-fid inside db-fid-boxstyle-style2 db-fidbox-style-2">
                                    <div class="db-fld-contents">
                                        <div class="db-circle-outer" data-digit="70" data-fill="#fff" data-before=""
                                             data-before-type="sup" data-after="<sub>%</sub>" data-after-type="sub"
                                             data-size="145" data-emptyfill="#000301" data-thickness="7"
                                             data-gradient="">
                                            <div class="db-circle-w">
                                                <div class="db-circle"></div>
                                                <div class="db-circle-overlay">
                                                    <div class="db-circle-number"></div>
                                                </div>
                                            </div>
                                            <div class="db-fid-title-w">
                                                <h3 class="db-fid-title"><span>Dedicated Team</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Us end -->

        <!-- Our Service -->
        <section class="section-md">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-title text-center">
                            <h4 class="subheading skincolor">OUR SERVICES</h4>
                            <h2>A WIDE RANGE OF<strong><br/> OPTOMETRY SERVICES.</strong></h2>
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
                                        <a class="skincolor" href="#">Read more<i
                                                class="fa fa-arrow-circle-right"></i></a>
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
                                    <h3 class="service-box-title"><a href="service-detail.html">Surgical
                                            Procedures</a></h3>
                                    <div class="service-desc">
                                        <p>Enhancing Your Vision sit ametcon sec tetur adipisicing.</p>
                                    </div>
                                    <div class="link-btn">
                                        <a class="skincolor" href="#">Read more<i
                                                class="fa fa-arrow-circle-right"></i></a>
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
                                    <h3 class="service-box-title"><a href="service-detail.html">Transitions
                                            Lenses</a></h3>
                                    <div class="service-desc">
                                        <p>Caring Your Eyes is important sec tetur adipisicing.</p>
                                    </div>
                                    <div class="link-btn">
                                        <a class="skincolor" href="#">Read more<i
                                                class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Service end -->

        <!-- Appointment -->
        <section class="get-appointment">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h4 class="subheading skincolor">GET APPOINTMENT</h4>
                            <h2 class="white-color">GET THE RIGHT OPTOMETRIST<strong><br/> CARE BOOK WITH YOUR
                                    DOCTOR</strong></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-lightgrey appointment-from">
            <div class="container">
                <div class="row  box-shadow-02">
                    <div class="col-lg-4 appointment-image">
                    </div>
                    <div class="col-lg-8 appointment-inner">
                        <h3>Please call +18003838890 if urgent</h3>
                        <p>your personal case manager will ensure thate you receive the best possible care</p>
                        <div class="contact-form">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <input id="name" type="text" class="form-control" placeholder="Your Name"
                                               name="Your-Name">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input id="email" class="form-control" placeholder="Your Email" name="email"
                                               type="email" value="" aria-required="true">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input id="phone" type="text" class="form-control" placeholder="Your Phone"
                                               name="your-phone">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input id="subject" type="text" class="form-control" placeholder="subject"
                                               name="subject">
                                    </div>
                                    <div class="form-group col-lg-12">
                                            <textarea id="comment" class="form-control" placeholder="Message"
                                                      name="message" cols="45" rows="5" aria-required="true"></textarea>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <a href="#" class="btn">SEND MESSAGE</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Appointment end -->

        <!-- Counter -->
        <section class="bg-lightgrey section-smt">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="counter counter-style-1">
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
                    <div class="col-md-3">
                        <div class="counter counter-style-1">
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
                    <div class="col-md-3">
                        <div class="counter counter-style-1">
                            <div class="fld-contents">
                                <h4 class="counter-contents">
                                        <span data-appear-animation="animateDigits" data-from="0" data-to="368"
                                              data-interval="5" data-before="" data-before-style="" data-after=""
                                              data-after-style="">368</span>
                                </h4>
                                <h6 class="counter-title">
                                    <span>Diffrent Services</span>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter counter-style-1">
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
                </div>
            </div>
        </section>
        <!-- Counter end -->

        <!-- Post & Testimonial -->
        <section class="section-md bg-lightgrey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="our-blog pr-3 mr-4 mr-md-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-title">
                                        <h4 class="subheading skincolor">RECENT NEWS</h4>
                                        <h2>WHAT'S GOING ON<strong><br/> IN OUR BLOG?</strong></h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="blog-box blog-style-3 d-flex mb-4">
                                        <div class="blog-thumbnail">
                                            <img src="{{ asset('assets/users/images/blog/blog-02.jpg') }} " class="img-fluid" alt="">
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-entry-meta">
                                                <ul class="list-inline">
                                                    <li class="blog-category"><a class="url fn n"
                                                                                 href="#">Paediatric</a></li>
                                                    <li class="blog-date"><i class="optico-icon-clock"></i><a
                                                            href="#">February 18, 2018</a></li>
                                                </ul>
                                            </div>
                                            <h4 class="blog-box-title"><a href="blog-detail.html">That’s why it is
                                                    so important to see an ophthalmologist</a></h4>
                                            <div class="blog-desc">
                                                <p>Eyecare Sed ut perspiciatis unde omnis iste natus error
                                                    doloremque laudantium.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-box blog-style-3 d-flex mb-4">
                                        <div class="blog-thumbnail">
                                            <img src="{{ asset('assets/users/images/blog/blog-02.jpg') }}  " class="img-fluid" alt="">
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-entry-meta">
                                                <ul class="list-inline">
                                                    <li class="blog-category"><a class="url fn n"
                                                                                 href="#">Paediatric</a></li>
                                                    <li class="blog-date"><i class="optico-icon-clock"></i><a
                                                            href="#">January 21, 2018</a></li>
                                                </ul>
                                            </div>
                                            <h4 class="blog-box-title"><a href="blog-detail.html">Signs or risk
                                                    factors for eye disease</a></h4>
                                            <div class="blog-desc">
                                                <p>Eyecare Sed ut perspiciatis unde omnis iste natus error
                                                    doloremque laudantium.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 skin-bg-color testimonial-box mt-md-30">
                        <div class="section-title section-title-white white-color">
                            <h4 class="subheading">TESTIMONIALS</h4>
                            <h2>WHAT OUR<strong><br/> PATIENT’S TALKING ?</strong></h2>
                        </div>
                        <div class="slick-carousel dots-right mb-0" data-autoplay="true" data-dots="true"
                             data-arrows="false" data-slides="1" data-tslides="1" data-islides="1">
                            <!-- Slide1 -->
                            <div class="testimonialbox testimonialbox-style-2">
                                <div class="testimonialbox-content">
                                    <div class="testimonialbox-desc">
                                        <blockquote class="testimonialbox-text">Long established fact that a reader
                                            will be distracted by the readable content of a page when looking at
                                            it's layout. The point of using Lorem Ipsum
                                        </blockquote>
                                    </div>
                                    <div class="testimonialbox-wrap">
                                        <div class="testimonialbox-thumbnail">
                                            <img src="{{ asset('assets/users/images/testimonial/testimonial-01.jpg') }}" class="img-fluid"
                                                 alt="">
                                        </div>
                                        <div class="testimonialbox-author">
                                            <h3 class="author-name">Victoria Porter</h3>
                                            <span>CEO at Google INC</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide2 -->
                            <div class="testimonialbox testimonialbox-style-2">
                                <div class="testimonialbox-content">
                                    <div class="testimonialbox-desc">
                                        <blockquote class="testimonialbox-text">Long established fact that a reader
                                            will be distracted by the readable content of a page when looking at
                                            it's layout. The point of using Lorem Ipsum
                                        </blockquote>
                                    </div>
                                    <div class="testimonialbox-wrap">
                                        <div class="testimonialbox-thumbnail">
                                            <img src="{{ asset('assets/users/images/testimonial/testimonial-02.jpg') }}" class="img-fluid"
                                                 alt="">
                                        </div>
                                        <div class="testimonialbox-author">
                                            <h3 class="author-name">Maria Flynn</h3>
                                            <span>CEO at Google INC</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide3 -->
                            <div class="testimonialbox testimonialbox-style-2">
                                <div class="testimonialbox-content">
                                    <div class="testimonialbox-desc">
                                        <blockquote class="testimonialbox-text">Long established fact that a reader
                                            will be distracted by the readable content of a page when looking at
                                            it's layout. The point of using Lorem Ipsum
                                        </blockquote>
                                    </div>
                                    <div class="testimonialbox-wrap">
                                        <div class="testimonialbox-thumbnail">
                                            <img src="{{ asset('assets/users/images/testimonial/testimonial-03.jpg') }}" class="img-fluid"
                                                 alt="">
                                        </div>
                                        <div class="testimonialbox-author">
                                            <h3 class="author-name">Gina Kennedy</h3>
                                            <span>CEO at Google INC</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Post & Testimonial end -->

        <!-- Client -->
        <div class="client-style section-md">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slick-carousel dots-right" data-autoplay="true" data-dots="false"
                             data-arrows="false" data-slides="5" data-tslides="3" data-islides="1">
                            <div class="text-center " data-tooltip="Client 1">
                                <img class="logo-img" alt="Client 1" src="{{ asset('assets/users/images/client/client-01.png') }}"/>
                            </div>
                            <div class="text-center " data-tooltip="Client 2">
                                <img class="logo-img" alt="Client 2" src="{{ asset('assets/users/images/client/client-02.png') }}"/>
                            </div>
                            <div class="text-center " data-tooltip="Client 3">
                                <img class="logo-img" alt="Client 3" src="{{ asset('assets/users/images/client/client-03.png') }}"/>
                            </div>
                            <div class="text-center " data-tooltip="Client 4">
                                <img class="logo-img" alt="Client 4" src="{{ asset('assets/users/images/client/client-04.png') }}"/>
                            </div>
                            <div class="text-center " data-tooltip="Client 5">
                                <img class="logo-img" alt="Client 5" src="{{ asset('assets/users/images/client/client-05.png') }}"/>
                            </div>
                            <div class="text-center " data-tooltip="Client 6">
                                <img class="logo-img" alt="Client 6" src="{{ asset('assets/users/images/client/client-06.png') }}"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Client end -->
    </div>
@endsection
