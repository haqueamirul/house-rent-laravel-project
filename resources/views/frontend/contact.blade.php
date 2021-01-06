@extends('layouts.front')
@section('content')

    <!-- Inner Banner Area -->
    <div class="inner-banner-area">
        <div class="container">
            <div class="inner-text">
                <h1>Contact Page</h1>
            </div>
        </div>
    </div>
    <!-- Inner Banner Area -->

    <!--contact-html-start-->
    <div class="contact-us section-padding">
        <div class="container">
            <div class="contact-info">
                <div class="row">
                    <div class="col-lg-5 col-md-12">
                        <div class="single-info-text">
                            <span class="wow fadeInDown">CONTACT US WITH EASE</span>
                            <h2 class="wow fadeInUp">Get in touch</h2>
                            <p class="wow fadeInUp">Visit our agency or simply send us an email anytime you want. If you have any questions, please feel free to contact us.</p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="single-info-area">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="single-info wow fadeInLeft">
                                        <img src="{{asset('frontend/img/contact.png')}}" alt="contact">
                                        <h4>Address</h4>
                                        <p>Bloomsbury Square, <br>
                                            London WC1B 4EA</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="single-info wow fadeInUp">
                                        <img src="{{asset('frontend/img/contact2.png')}}" alt="contact">
                                        <h4>Call us</h4>
                                        <p>000 2222 333 </p>
                                        <p></p>444 2222 555</p>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="single-info wow fadeInRight">
                                        <img src="{{asset('frontend/img/contact3.png')}}" alt="contact">
                                        <h4>Email us</h4>
                                        <p>info@avantage.co.uk <br>
                                        office@avantage.co.uk</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                    <form id="contactForm">
                        <div class="row"> 
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group wow fadeInUp">
                                    <input type="text" class="form-control" required data-error="Please enter your first name" name="First name" placeholder="First Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group wow fadeInUp">
                                    <input type="text" class="form-control" required data-error="Please enter your first name" name="First name" placeholder="Last Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12"> 
                                <div class="form-group wow fadeInUp">
                                    <input type="email" class="form-control" required data-error="Please enter your email" name="email" placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12"> 
                                <div class="form-group wow fadeInUp">
                                    <input type="tel" class="form-control" required data-error="Your Phone Number (optional)" name="phone" placeholder="Your Phone Number (optional)">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group wow fadeInUp">
                                    <textarea class="form-controls" required data-error="Write your message" rows="5" placeholder="Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-btn wow fadeInUp">
                            <button type="submit" class="cont-btn">Send Message</button>
                            <div id="msgSubmit" class="h3 text-left hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                <div class="map wow fadeInUp">
                    <iframe src="https://www.google.com/maps/embed?" height="450" width="100%" style="border:0;" allowfullscreen=""></iframe>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!--contact-html-end-->

@endsection