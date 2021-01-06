<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/img/icon.ico')}}">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/icofont.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/meanmenu.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">

        <title>
          @if(session()->get('lang')=='english')
              {{ __('Basabhara - Find a home online now') }}
          @else
            {{ __('বাসাভাড়া - বাসা খুঁজুন এখন অনলাইনে') }}
          @endif
        </title>
    </head>
    <body>

    <!-- Loader -->
    <div class="loader-box"> 
      <div class="cell">
        <div class="pl pl-butterfly"></div>
        <div class="pl-name">{{ __('Butterfly') }}</div>
      </div>
    </div>
    <!-- End Loader -->
  
    <!-- Top Header Area -->
		<div class="top-header">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-12 col-sm-6">
              <div class="contact-info"> 
                <ul>
                  <li class="single-info">
                    <i class="icofont-smart-phone"></i>
                    <div class="contact-text">
                      <p>
                        @if(session()->get('lang')=='english')
                            {{ __('+880 1778 539887') }}
                        @else
                            {{ __('+৮৮০ ১৭৭৮৫৩৯৮৮৭') }}
                        @endif
                      </p>
                    </div>
                  </li>
                  <li class="single-info">
                    <i class="icofont-email"></i>
                      <div class="contact-text">
                          <p>{{ __('info@basabhara.com') }}</p>
                      </div>
                    </li>
                </ul>
              </div> 
          </div>
          <div class="col-md-6 col-12 col-sm-6">
            <div class="top-right">
              <dropdown>
                  <!-- <input id="toggle2" type="checkbox"/> -->
                  @if(session()->get('lang')=="english")
                  <label><a href="{{route('lang.bangla')}}"> Bangla </a></label>
                  @else
                  <label><a href="{{route('lang.english')}}"> English </a></label>
                  @endif

              </dropdown>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Top Header Area -->

    <!-- Main Menu Area -->
		<div class="main-menu-area">
			<div class="container">
				<div class="row">
					<div class="logo-area col-lg-2 col-md-3 col-sm-12">
						<a href="{{URL::to('/')}}">
							<img src="{{asset('frontend/img/logo.png')}}" alt="Logo" />
						</a>
             <ul id="postadd" class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link create-btn" href="">
                @if(session()->get('lang')=='english')
                    {{ __('Add Your Property') }}
                @else
                  {{ __('বিজ্ঞাপন পোষ্ট করুন') }}
                @endif
              </a>
            </li>
          </ul>
					</div>
         
					<div class="col-lg-10 col-md-9">
						<div class="main-menu navbar-collapse">
							<ul class="navbar-nav mr-auto">
								<!-- <li class="nav-item">
									<a class="nav-link active" href="index.html">Home</a>
								</li> -->
								<li class="nav-item">
									<a class="nav-link" href="{{route('about.page')}}">
                    @if(session()->get('lang')=='english')
                        {{ __('About Us') }}
                    @else
                      {{ __('আমাদের সম্পর্কে') }}
                    @endif
                  </a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="{{route('allproperties')}}">
                    @if(session()->get('lang')=='english')
                        {{ __('All Properties') }}
                    @else
                      {{ __('সকল ভাড়াসমূহ ') }}
                    @endif
                  </a>
								</li>
								  
								<li class="nav-item">
									<a class="nav-link" href="{{route('contact-us')}}">
                    @if(session()->get('lang')=='english')
                        {{ __('Contact Us') }}
                    @else
                      {{ __('যোগাযোগ করুন') }}
                    @endif
                  </a>
								</li>

                <span class="logiinn">
                    <li class="nav-item design">
                      <a class="nav-link" href="{{ route('login') }}" style="font-weight: 700;">
                        @if(session()->get('lang')=='english')
                            {{ __('login') }}
                        @else
                          {{ __('লগইন ') }}
                        @endif
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}" style="font-weight: 700;">
                        @if(session()->get('lang')=='english')
                            {{ __('Register') }}
                        @else
                          {{ __('রেজিস্টার ') }}
                        @endif
                      </a>
                    </li> 
                </span>

								<li class="nav-item">
									<a class="nav-link create-btn" href="{{route('guest-user')}}">
                    @if(session()->get('lang')=='english')
                        {{ __('Add Your Property') }}
                    @else
                      {{ __('বিজ্ঞাপন পোষ্ট করুন') }}
                    @endif
                  </a>
								</li>
							</ul>         
						</div>
					</div>
				</div>
			</div>
		</div>
    <!-- End Main Menu Area -->
    
    <!-- Banner Area -->
    @yield('content')
      
    <!-- Footer Area -->
    <section class="footer section-padding-two">
      <div class="container">
          <div class="main_footer_area">
              <div class="row">
                  <div class="col-lg-4 col-md-6">
                      <div class="single-footer">
                          <h4>
                            @if(session()->get('lang')=='english')
                                {{ __('About Us') }}
                            @else
                              {{ __('আমাদের সম্পর্কে') }}
                            @endif
                          </h4>
                          <div class="single-text">
                            @if(session()->get('lang')=='english')
                                {{ __('At basabhara.com you can advertise your favorite house rent, flat rent, bachelor house rent, family house rent, sublet house rent, room rent, room mate, girls hostel, office or bank rental ads completely free and you can find whatever you like. Can take.') }}
                            @else
                              <p>
                                  {{ __('basabhara.com এ আপনি আপনার পছন্দের বাসা ভাড়া, ফ্ল্যাট ভাড়া, ব্যাচেলর বাসা ভাড়া, ফ্যামিলি বাসা ভাড়া, সাবলেট বাসা ভাড়া, রুম ভাড়া, রুম মেট, মেয়েদের হোস্টেল, অফিস বা ব্যাংক ভাড়ার বিজ্ঞাপন সম্পুর্ণ ফ্রি তে দিতে পারবেন এবং আপনি আপনার পছন্দ মতো খুজে নিতে পারবেন।') }}
                              </p>
                            @endif
                              <div class="address-area">
                                <h6><i class="icofont-location-arrow"></i> 
                                  @if(session()->get('lang')=='english')
                                      {{ __('Sylhet, Bangladesh') }}
                                  @else
                                    {{ __('সিলেট, বাংলাদেশ') }}
                                  @endif
                                </h6>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                      <div class="single-footer">
                          <h4>
                            @if(session()->get('lang')=='english')
                                {{ __('Useful Links') }}
                            @else
                              {{ __('প্রয়োজনীয় লিঙ্কগুলি') }}
                            @endif
                          </h4>
                          <div class="row">
                            <div class="col-md-6 col-6 col-sm-6">
                              <div class="single-text f_reatures">
                                  <ul>
                                      <li><a href="">About Us</a></li>
                                      <li><a href="">Terms & Conditions</a></li>
                                      <li><a href="">User Guide</a></li>
                                      <li><a href="">Support Center</a></li>
                                      <li><a href="">Contact Us</a></li>
                                  </ul>
                              </div>
                            </div>
                            <div class="col-md-6 col-6 col-sm-6">
                              <div class="single-text f_reatures">
                                  <ul>
                                      <li><a href="">Help</a></li>
                                      <li><a href="">Blog</a></li>
                                      <li><a href="">Our Team</a></li>
                                      <li><a href="">Support Center</a></li>
                                  </ul>
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                      <div class="single-footer">
                          <h4>
                            @if(session()->get('lang')=='english')
                                {{ __('Latest Properties') }}
                            @else
                              {{ __('সর্বশেষ বিজ্ঞাপন') }}
                            @endif
                          </h4>
                          <div class="single-text f_reatures">
                            <div class="single-footer-blog">
                              <a href=""><img src="{{asset('frontend/img/blog-one.png')}}" alt="blog"></a>
                              <div class="text">
                                <a href="">Lorem, ipsum dolor sit amet</a>
                                <h6>$ 1,20,00</h6>
                              </div>
                            </div>
                            <div class="single-footer-blog">
                              <a href=""><img src="{{asset('frontend/img/blog-one.png')}}" alt="blog"></a>
                              <div class="text">
                                <a href="">Lorem, ipsum dolor sit</a>
                                <h6>$ 1,20,00</h6>
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
    <!-- End Footer Area -->

    <!-- Coppyright Area -->
    <div class="main-coppyright">
      <div class="container">
          <div class="row">
              <div class="col-md-6 col-sm-6">
                  <div class="copyright-text">
                      <p class="wow zoomIn" data-wow-duration="1s">Copyright 2020. All Rights Reserved</p>
                  </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="socail_f_widget">
                  <a href="#!" ><i class="icofont-facebook"></i></a>
                  <a href="#!" ><i class="icofont-google-plus"></i></a>
                  <a href="#!" ><i class="icofont-twitter"></i></a>
                  <a href="#!" ><i class="icofont-vimeo"></i></a>
                  <a href="#!" ><i class="icofont-linkedin"></i></a>
              </div>
              </div>
          </div>
      </div>
    </div>
    <!-- End Coppyright Area -->
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('frontend/js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('frontend/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.meanmenu.min.js')}}"></script>
    <script src="{{asset('frontend/js/wow.min.js')}}"></script>
    <script src="{{asset('frontend/js/slick.min.js')}}"></script>
    <script src="{{asset('frontend/js/mixitup.min.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
  </body>
</html>