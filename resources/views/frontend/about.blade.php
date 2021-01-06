@extends('layouts.front')
@section('content')

    <!-- Inner Banner Area -->
    <div class="inner-banner-area">
        <div class="container">
            <div class="inner-text">
                <h1>About Us</h1>
            </div>
        </div>
    </div>
    <!-- Inner Banner Area -->

    <!-- About Us Area -->
    <div class="about-us-area section-padding">
        <div class="container">
            <div class="bg-white rounded shadow">
                <!-- Lined tabs-->
                <ul id="myTab2" role="tablist" class="nav nav-tabs nav-pills with-arrow lined flex-column flex-sm-row text-center">
                    <li class="nav-item flex-sm-fill">
                        <a id="home2-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="home2" aria-selected="true"
                        class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0 active">Story</a>
                    </li>
                    <li class="nav-item flex-sm-fill">
                        <a id="profile2-tab" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile2"
                        aria-selected="false" class="nav-link text-uppercase font-weight-bold mr-sm-3 rounded-0">Our Mission</a>
                    </li>
                    <li class="nav-item flex-sm-fill">
                        <a id="contact2-tab" data-toggle="tab" href="#contact2" role="tab" aria-controls="contact2"
                        aria-selected="false" class="nav-link text-uppercase font-weight-bold rounded-0">Leadership</a>
                    </li>
                </ul>
                <div id="myTab2Content" class="tab-content">
                    <div id="home2" role="tabpanel" aria-labelledby="home-tab" class="tab-pane fade show active">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="image-area">
                                    <img src="{{asset('frontend/img/banner-2.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tab-text">
                                    <h3>What's our story?</h3>
                                    <strong class="leade font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. </strong>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamcolaboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="profile2" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="image-area">
                                    <img src="{{asset('frontend/img/banner-3.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tab-text">
                                    <h3>What's our Mission?</h3>
                                    <strong class="leade font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. </strong>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamcolaboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="contact2" role="tabpanel" aria-labelledby="contact-tab" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="image-area">
                                    <img src="{{asset('frontend/img/banner-4.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tab-text">
                                    <h3>What's our Leadership?</h3>
                                    <strong class="leade font-italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. </strong>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamcolaboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End lined tabs -->
            </div>
        </div>
    </div>
    <!-- End About Us Area -->

    <!-- Team Area -->
    <section class="team-area section-padding-two">
        <div class="container">
            <div class="section-title">
                <span class="wow fadeInDown">Team Member</span>
                <h2 class="wow fadeInUp">Meet Professionals</h2>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-team">
                        <img src="{{asset('frontend/img/team-1.jpg')}}" alt="img">
                        <div class="text">
                            <h3>Emma William</h3>
                            <p>Graphic Designer</p>
                            <ul>
                                <li><a href=""><i class="icofont-facebook"></i></a></li>
                                <li><a href=""><i class="icofont-twitter"></i></a></li>
                                <li><a href=""><i class="icofont-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-team">
                        <img src="{{asset('frontend/img/team-2.jpg')}}" alt="img">
                        <div class="text">
                            <h3>Michelle Jason</h3>
                            <p>Graphic Designer</p>
                            <ul>
                                <li><a href=""><i class="icofont-facebook"></i></a></li>
                                <li><a href=""><i class="icofont-twitter"></i></a></li>
                                <li><a href=""><i class="icofont-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="single-team">
                        <img src="{{asset('frontend/img/team-3.jpg')}}" alt="img">
                        <div class="text">
                            <h3>Emma William</h3>
                            <p>Graphic Designer</p>
                            <ul>
                                <li><a href=""><i class="icofont-facebook"></i></a></li>
                                <li><a href=""><i class="icofont-twitter"></i></a></li>
                                <li><a href=""><i class="icofont-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Team Area -->

@endsection