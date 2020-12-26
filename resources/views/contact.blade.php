@extends('layouts.user.header')

@section('content')
    <div class="page-content">

        <!-- Inner Banner -->
        <section class="inner-banner">
            <div class="titlebar-main">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <h1 class="inner-page-title">CONTACT US</h1>
                        </div>
                        <div class="col-lg-6 col-md-12 text-lg-right">
                            <nav aria-label="breadcrumb" class="breadcrumb-section d-flex justify-content-center  justify-content-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Optico</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner end -->

        <!-- Contact -->
        <section class="section-mdt bg-lightgrey">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12">
                        <div class="section-title text-center">
                            <h4 class="subheading skincolor">GET IN TOUCH</h4>
                            <h2>WE ARE OPEN TO ALL <strong>SUGGESTIONS<br/> FROM OUR AUDIENCE.</strong></h2>
                            <p>Come and visit our quarters or simply send us an email anytime you want consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="iconbox iconbox-style-7">
                            <div class="iconbox-inner d-flex">
                                <div class="iconbox-icon skincolor">
                                    <i class="optico-icon optico-icon-headphone-alt"></i>
                                </div>
                                <div class="iconbox-inner">
                                    <div class="iconbox-contents">
                                        <div class="iconbox-title">
                                            <h2>Phone Number</h2>
                                        </div>
                                        <div class="iconbox-desc">
                                            <p>Phone 01: + 1800 562 2487</p>
                                            <p>Phone 02: + 3215 546 8975</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-sm-30">
                        <div class="iconbox iconbox-style-7">
                            <div class="iconbox-inner d-flex">
                                <div class="iconbox-icon skincolor">
                                    <i class="optico-icon optico-icon-location-pin"></i>
                                </div>
                                <div class="iconbox-inner">
                                    <div class="iconbox-contents">
                                        <div class="iconbox-title">
                                            <h2>Our Address</h2>
                                        </div>
                                        <div class="iconbox-desc">
                                            <p>351 Montreal Ave, Staten
                                                <br/>Island, NY 10306</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-sm-30">
                        <div class="iconbox iconbox-style-7">
                            <div class="iconbox-inner d-flex">
                                <div class="iconbox-icon skincolor">
                                    <i class="optico-icon optico-icon-mail"></i>
                                </div>
                                <div class="iconbox-inner">
                                    <div class="iconbox-contents">
                                        <div class="iconbox-title">
                                            <h2>Email Address</h2>
                                        </div>
                                        <div class="iconbox-desc">
                                            <p>info-example@optico.com</p>
                                            <p>support@optico.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- appointment -->
                <div class="row  box-shadow-02 bg-white contact-appointment">
                    <div class="col-lg-4 appointment-image">
                    </div>
                    <div class="col-lg-8 appointment-inner">
                        <h3>Please call +18003838890 if urgent</h3>
                        <p>your personal case manager will ensure thate you receive the best possible care</p>
                        <div class="contact-form">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-lg-6">
                                        <input id="name" type="text" class="form-control" placeholder="Your Name" name="Your-Name">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input id="email" class="form-control" placeholder="Your Email" name="email" type="email" value="" aria-required="true">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input id="phone" type="text" class="form-control" placeholder="Your Phone" name="your-phone">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input id="subject" type="text" class="form-control" placeholder="subject" name="subject">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <textarea id="comment" class="form-control" placeholder="Message" name="message" cols="45" rows="5" aria-required="true"></textarea>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <a href="#" class="btn">SEND MESSAGE</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- appointment end -->
            </div>
        </section>
        <!-- Contact End -->
        <!-- Map -->
        <section>
            <div class="map-box overflow-hidden">
                <div class="container-fluid p-0">
                    <div class="row no-gutters">
                        <div class="col-md-12">
                            <div class="contact-map">
                                <iframe src="https://maps.google.com/maps?q=codeless%20technol&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Map end -->
    </div>
@endsection

