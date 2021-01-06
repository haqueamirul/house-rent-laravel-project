@extends('layouts.front')
@section('content')

    <section class="banner-area">
        <div class="single-main-item">
          <div class="text-area">
            <div class="text">
              <h2 class="wow fadeInDown">
                  @if(session()->get('lang')=='english')
                    {{ __('Find a home online now') }}
                  @else
                    {{ __('বাসা খুঁজুন এখন অনলাইনে') }}
                  @endif
              </h2>
            </div>
          </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!-- Search Cetagory Area -->
    <div class="search-area ">
      <div class="search-cetagory">
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Living Area">
            </div>
          </div>
          <div class="col-md-3">
          <div class="form-group">
            <select class="form-control" id="exampleFormControlSelect1">
              <option selected>Apartments Type</option>
              <option>Cetagory 1</option>
              <option>Cetagory 2</option>
              <option>Cetagory3</option>
              <option>Cetagory 4</option>
            </select>
          </div>
          </div>
          <div class="col-md-3">
          <div class="form-group">
            <label><i class="icofont-location-pin"></i></label>
            <input type="text" class="form-control" placeholder="Entry Location">
          </div>
          </div>
          <div class="col-md-2">
            <button type="submit">Search</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Search Cetagory Area -->

    <section class="category-menu">
      <div class="container-fluid">
        <div class="slick-carousel">

        @php
        	$category=DB::table('categories')->orderBy('id','asc')->get();
        @endphp

        @foreach($category as $row)

          <a href="#">
            <div class="slide-content">
              <img src="{{asset('frontend/img/office.png')}}" alt="Office">
              @if(session()->get('lang')=='english')
              	<h3>{{ $row->category_en }}</h3>
              @else
              	<h3>{{ $row->category_bn }}</h3>
              @endif
            </div>
          </a>

          @endforeach
         
        </div>
      </div>
    </section>

    <!-- Search Cetagory Area -->
    <section class="blog-menu-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="shorting-menu-area myDIV">
              <button class="filter active" data-filter="all">All</button>
              <button class="filter" data-filter=".category-1">For Rent</button>
              <button class="filter" data-filter=".category-2">For Sale</button>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="order-blog">
              <div class="form-group">
                <label for="exampleSelect1">Sort By:</label>
                <select class="form-control" id="exampleSelect1">
                  <option>Select Order</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div id="shorting" class="row popup-gallery"> 
          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mix category-1">
            <div class="single-blog">
              <div class="blog-img">
                <a href="single-blog.html"><img src="{{asset('frontend/img/banner-1.jpg')}}" alt="banner"></a>
                <div class="love-react"><i class="icofont-ui-love"></i></div>
              </div>
              <div class="text">
                <a class="title" href="single-blog.html">Lovelece Road Greenfield</a>
                <h6><i class="icofont-location-pin"></i>4213 Duff Avenue South Burlington, VT 05403</h6>
                <a class="pre-sale" href="#">Pre Sale</a>
                <div class="price-area">
                  <h4>$1,205,500 <span>/ monthly</span></h4>
                </div>
                <div class="flat-details-area">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                      <div class="flat-details">
                        <h5>Area</h5>
                        <p>1200 Sqft</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                      <div class="flat-details">
                        <h5>Rooms</h5>
                        <p>7</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                      <div class="flat-details">
                        <h5>Beds</h5>
                        <p>5</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                      <div class="flat-details">
                        <h5>Garage</h5>
                        <p>1</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mix category-2">
            <div class="single-blog">
              <div class="blog-img">
                <a href="single-blog.html"><img src="{{asset('frontend/img/banner-1.jpg')}}" alt="banner"></a>
                <div class="love-react"><i class="icofont-ui-love"></i></div>
              </div>
              <div class="text">
                <a class="title" href="single-blog.html">Lovelece Road Greenfield</a>
                <h6><i class="icofont-location-pin"></i>4213 Duff Avenue South Burlington, VT 05403</h6>
                <a class="pre-sale" href="#">Pre Sale</a>
                <div class="price-area">
                  <h4>$1,205,500 <span>/ monthly</span></h4>
                </div>
                <div class="flat-details-area">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                      <div class="flat-details">
                        <h5>Area</h5>
                        <p>1200 Sqft</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                      <div class="flat-details">
                        <h5>Rooms</h5>
                        <p>7</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                      <div class="flat-details">
                        <h5>Beds</h5>
                        <p>5</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                      <div class="flat-details">
                        <h5>Garage</h5>
                        <p>1</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mix category-3">
            <div class="single-blog">
              <div class="blog-img">
                <a href="single-blog.html"><img src="{{asset('frontend/img/banner-1.jpg')}}" alt="banner"></a>
                <div class="love-react"><i class="icofont-ui-love"></i></div>
              </div>
              <div class="text">
                <a class="title" href="single-blog.html">Lovelece Road Greenfield</a>
                <h6><i class="icofont-location-pin"></i>4213 Duff Avenue South Burlington, VT 05403</h6>
                <a class="pre-sale" href="#">Pre Sale</a>
                <div class="price-area">
                  <h4>$1,205,500 <span>/ monthly</span></h4>
                </div>
                <div class="flat-details-area">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                      <div class="flat-details">
                        <h5>Area</h5>
                        <p>1200 Sqft</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                      <div class="flat-details">
                        <h5>Rooms</h5>
                        <p>7</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                      <div class="flat-details">
                        <h5>Beds</h5>
                        <p>5</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                      <div class="flat-details">
                        <h5>Garage</h5>
                        <p>1</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mix category-1">
            <div class="single-blog">
              <div class="blog-img">
                <a href="single-blog.html"><img src="{{asset('frontend/img/banner-1.jpg')}}" alt="banner"></a>
                <div class="love-react"><i class="icofont-ui-love"></i></div>
              </div>
              <div class="text">
                <a class="title" href="single-blog.html">Lovelece Road Greenfield</a>
                <h6><i class="icofont-location-pin"></i>4213 Duff Avenue South Burlington, VT 05403</h6>
                <a class="pre-sale" href="#">Pre Sale</a>
                <div class="price-area">
                  <h4>$1,205,500 <span>/ monthly</span></h4>
                </div>
                <div class="flat-details-area">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                      <div class="flat-details">
                        <h5>Area</h5>
                        <p>1200 Sqft</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                      <div class="flat-details">
                        <h5>Rooms</h5>
                        <p>7</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                      <div class="flat-details">
                        <h5>Beds</h5>
                        <p>5</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                      <div class="flat-details">
                        <h5>Garage</h5>
                        <p>1</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mix category-2">
            <div class="single-blog">
              <div class="blog-img">
                <a href="single-blog.html"><img src="{{asset('frontend/img/banner-1.jpg')}}" alt="banner"></a>
                <div class="love-react"><i class="icofont-ui-love"></i></div>
              </div>
              <div class="text">
                <a class="title" href="single-blog.html">Lovelece Road Greenfield</a>
                <h6><i class="icofont-location-pin"></i>4213 Duff Avenue South Burlington, VT 05403</h6>
                <a class="pre-sale" href="#">Pre Sale</a>
                <div class="price-area">
                  <h4>$1,205,500 <span>/ monthly</span></h4>
                </div>
                <div class="flat-details-area">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                      <div class="flat-details">
                        <h5>Area</h5>
                        <p>1200 Sqft</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                      <div class="flat-details">
                        <h5>Rooms</h5>
                        <p>7</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                      <div class="flat-details">
                        <h5>Beds</h5>
                        <p>5</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                      <div class="flat-details">
                        <h5>Garage</h5>
                        <p>1</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mix category-3">
            <div class="single-blog">
              <div class="blog-img">
                <a href="single-blog.html"><img src="{{asset('frontend/img/banner-1.jpg')}}" alt="banner"></a>
                <div class="love-react"><i class="icofont-ui-love"></i></div>
              </div>
              <div class="text">
                <a class="title" href="single-blog.html">Lovelece Road Greenfield</a>
                <h6><i class="icofont-location-pin"></i>4213 Duff Avenue South Burlington, VT 05403</h6>
                <a class="pre-sale" href="#">Pre Sale</a>
                <div class="price-area">
                  <h4>$1,205,500 <span>/ monthly</span></h4>
                </div>
                <div class="flat-details-area">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                      <div class="flat-details">
                        <h5>Area</h5>
                        <p>1200 Sqft</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                      <div class="flat-details">
                        <h5>Rooms</h5>
                        <p>7</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                      <div class="flat-details">
                        <h5>Beds</h5>
                        <p>5</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-6">
                      <div class="flat-details">
                        <h5>Garage</h5>
                        <p>1</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-12 col-lg-12">
            <div id="app" class="blog-pagination">  
              <ul class="page">
                  <li class="page__btn text-left">previous</li>
                  <li class="page__numbers active"> 1</li>
                  <li class="page__numbers">2</li>
                  <li class="page__numbers">3</li>
                  <li class="page__dots">...</li>
                  <li class="page__numbers"> 10</li>
                  <li class="page__btn text-right"><a href="blog.html">Next</a></li>
              </ul>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <!-- Search Cetagory Area -->

    <section class="featured-area section-padding">
      <div class="container">
        <div class="section-title">
          <h2>Featured Property</h2>
        </div>
        <div class="slick-featured">
          <div>
            <div class="single-blog">
              <div class="blog-img">
                <a href="single-blog.html"><img src="{{asset('frontend/img/banner-1.jpg')}}" alt="banner"></a>
                <div class="love-react"><i class="icofont-ui-love"></i></div>
              </div>
              <div class="text">
                <a class="title" href="#">Lovelece Road Greenfield</a>
                <h6><i class="icofont-location-pin"></i>4213 Duff Avenue South Burlington, VT 05403</h6>
                <a class="pre-rent" href="#">Pre Rent</a>
                <div class="price-area">
                  <h4>$1,205,500 <span>/ monthly</span></h4>
                </div>
                <div class="flat-details-area">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Area</h5>
                        <p>1200 Sqft</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Rooms</h5>
                        <p>7</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Beds</h5>
                        <p>5</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Garage</h5>
                        <p>1</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="single-blog">
              <div class="blog-img">
                <a href="single-blog.html"><img src="{{asset('frontend/img/banner-1.jpg')}}" alt="banner"></a>
                <div class="love-react"><i class="icofont-ui-love"></i></div>
              </div>
              <div class="text">
                <a class="title" href="#">Lovelece Road Greenfield</a>
                <h6><i class="icofont-location-pin"></i>4213 Duff Avenue South Burlington, VT 05403</h6>
                <a class="pre-sale" href="#">Pre Sale</a>
                <div class="price-area">
                  <h4>$1,205,500 <span>/ monthly</span></h4>
                </div>
                <div class="flat-details-area">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Area</h5>
                        <p>1200 Sqft</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Rooms</h5>
                        <p>7</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Beds</h5>
                        <p>5</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Garage</h5>
                        <p>1</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="single-blog">
              <div class="blog-img">
                <a href="single-blog.html"><img src="{{asset('frontend/img/banner-1.jpg')}}" alt="banner"></a>
                <div class="love-react"><i class="icofont-ui-love"></i></div>
              </div>
              <div class="text">
                <a class="title" href="#">Lovelece Road Greenfield</a>
                <h6><i class="icofont-location-pin"></i>4213 Duff Avenue South Burlington, VT 05403</h6>
                <a class="pre-sale" href="#">Pre Sale</a>
                <div class="price-area">
                  <h4>$1,205,500 <span>/ monthly</span></h4>
                </div>
                <div class="flat-details-area">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Area</h5>
                        <p>1200 Sqft</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Rooms</h5>
                        <p>7</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Beds</h5>
                        <p>5</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Garage</h5>
                        <p>1</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="single-blog">
              <div class="blog-img">
                <a href="single-blog.html"><img src="{{asset('frontend/img/banner-1.jpg')}}" alt="banner"></a>
                <div class="love-react"><i class="icofont-ui-love"></i></div>
              </div>
              <div class="text">
                <a class="title" href="#">Lovelece Road Greenfield</a>
                <h6><i class="icofont-location-pin"></i>4213 Duff Avenue South Burlington, VT 05403</h6>
                <a class="pre-rent" href="#">Pre Rent</a>
                <div class="price-area">
                  <h4>$1,205,500 <span>/ monthly</span></h4>
                </div>
                <div class="flat-details-area">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Area</h5>
                        <p>1200 Sqft</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Rooms</h5>
                        <p>7</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Beds</h5>
                        <p>5</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Garage</h5>
                        <p>1</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="single-blog">
              <div class="blog-img">
                <a href="single-blog.html"><img src="{{asset('frontend/img/banner-1.jpg')}}" alt="banner"></a>
                <div class="love-react"><i class="icofont-ui-love"></i></div>
              </div>
              <div class="text">
                <a class="title" href="#">Lovelece Road Greenfield</a>
                <h6><i class="icofont-location-pin"></i>4213 Duff Avenue South Burlington, VT 05403</h6>
                <a class="pre-sale" href="#">Pre Sale</a>
                <div class="price-area">
                  <h4>$1,205,500 <span>/ monthly</span></h4>
                </div>
                <div class="flat-details-area">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Area</h5>
                        <p>1200 Sqft</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Rooms</h5>
                        <p>7</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Beds</h5>
                        <p>5</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Garage</h5>
                        <p>1</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="single-blog">
              <div class="blog-img">
                <a href="single-blog.html"><img src="{{asset('frontend/img/banner-1.jpg')}}" alt="banner"></a>
                <div class="love-react"><i class="icofont-ui-love"></i></div>
              </div>
              <div class="text">
                <a class="title" href="#">Lovelece Road Greenfield</a>
                <h6><i class="icofont-location-pin"></i>4213 Duff Avenue South Burlington, VT 05403</h6>
                <a class="pre-sale" href="#">Pre Sale</a>
                <div class="price-area">
                  <h4>$1,205,500 <span>/ monthly</span></h4>
                </div>
                <div class="flat-details-area">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Area</h5>
                        <p>1200 Sqft</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Rooms</h5>
                        <p>7</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Beds</h5>
                        <p>5</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Garage</h5>
                        <p>1</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="single-blog">
              <div class="blog-img">
                <a href="single-blog.html"><img src="{{asset('frontend/img/banner-1.jpg')}}" alt="banner"></a>
                <div class="love-react"><i class="icofont-ui-love"></i></div>
              </div>
              <div class="text">
                <a class="title" href="#">Lovelece Road Greenfield</a>
                <h6><i class="icofont-location-pin"></i>4213 Duff Avenue South Burlington, VT 05403</h6>
                <a class="pre-rent" href="#">Pre Rent</a>
                <div class="price-area">
                  <h4>$1,205,500 <span>/ monthly</span></h4>
                </div>
                <div class="flat-details-area">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Area</h5>
                        <p>1200 Sqft</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Rooms</h5>
                        <p>7</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Beds</h5>
                        <p>5</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Garage</h5>
                        <p>1</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="single-blog">
              <div class="blog-img">
                <a href="single-blog.html"><img src="{{asset('frontend/img/banner-1.jpg')}}" alt="banner"></a>
                <div class="love-react"><i class="icofont-ui-love"></i></div>
              </div>
              <div class="text">
                <a class="title" href="#">Lovelece Road Greenfield</a>
                <h6><i class="icofont-location-pin"></i>4213 Duff Avenue South Burlington, VT 05403</h6>
                <a class="pre-sale" href="#">Pre Sale</a>
                <div class="price-area">
                  <h4>$1,205,500 <span>/ monthly</span></h4>
                </div>
                <div class="flat-details-area">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Area</h5>
                        <p>1200 Sqft</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Rooms</h5>
                        <p>7</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Beds</h5>
                        <p>5</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Garage</h5>
                        <p>1</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="single-blog">
              <div class="blog-img">
                <a href="single-blog.html"><img src="{{asset('frontend/img/banner-1.jpg')}}" alt="banner"></a>
                <div class="love-react"><i class="icofont-ui-love"></i></div>
              </div>
              <div class="text">
                <a class="title" href="#">Lovelece Road Greenfield</a>
                <h6><i class="icofont-location-pin"></i>4213 Duff Avenue South Burlington, VT 05403</h6>
                <a class="pre-sale" href="#">Pre Sale</a>
                <div class="price-area">
                  <h4>$1,205,500 <span>/ monthly</span></h4>
                </div>
                <div class="flat-details-area">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Area</h5>
                        <p>1200 Sqft</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Rooms</h5>
                        <p>7</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Beds</h5>
                        <p>5</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Garage</h5>
                        <p>1</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="single-blog">
              <div class="blog-img">
                <a href="single-blog.html"><img src="{{asset('frontend/img/banner-1.jpg')}}" alt="banner"></a>
                <div class="love-react"><i class="icofont-ui-love"></i></div>
              </div>
              <div class="text">
                <a class="title" href="#">Lovelece Road Greenfield</a>
                <h6><i class="icofont-location-pin"></i>4213 Duff Avenue South Burlington, VT 05403</h6>
                <a class="pre-rent" href="#">Pre Rent</a>
                <div class="price-area">
                  <h4>$1,205,500 <span>/ monthly</span></h4>
                </div>
                <div class="flat-details-area">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Area</h5>
                        <p>1200 Sqft</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Rooms</h5>
                        <p>7</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Beds</h5>
                        <p>5</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Garage</h5>
                        <p>1</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="single-blog">
              <div class="blog-img">
                <a href="single-blog.html"><img src="{{asset('frontend/img/banner-1.jpg')}}" alt="banner"></a>
                <div class="love-react"><i class="icofont-ui-love"></i></div>
              </div>
              <div class="text">
                <a class="title" href="#">Lovelece Road Greenfield</a>
                <h6><i class="icofont-location-pin"></i>4213 Duff Avenue South Burlington, VT 05403</h6>
                <a class="pre-sale" href="#">Pre Sale</a>
                <div class="price-area">
                  <h4>$1,205,500 <span>/ monthly</span></h4>
                </div>
                <div class="flat-details-area">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Area</h5>
                        <p>1200 Sqft</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Rooms</h5>
                        <p>7</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Beds</h5>
                        <p>5</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Garage</h5>
                        <p>1</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="single-blog">
              <div class="blog-img">
                <a href="single-blog.html"><img src="{{asset('frontend/img/banner-1.jpg')}}" alt="banner"></a>
                <div class="love-react"><i class="icofont-ui-love"></i></div>
              </div>
              <div class="text">
                <a class="title" href="#">Lovelece Road Greenfield</a>
                <h6><i class="icofont-location-pin"></i>4213 Duff Avenue South Burlington, VT 05403</h6>
                <a class="pre-sale" href="#">Pre Sale</a>
                <div class="price-area">
                  <h4>$1,205,500 <span>/ monthly</span></h4>
                </div>
                <div class="flat-details-area">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Area</h5>
                        <p>1200 Sqft</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Rooms</h5>
                        <p>7</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Beds</h5>
                        <p>5</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Garage</h5>
                        <p>1</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="single-blog">
              <div class="blog-img">
                <a href="single-blog.html"><img src="{{asset('frontend/img/banner-1.jpg')}}" alt="banner"></a>
                <div class="love-react"><i class="icofont-ui-love"></i></div>
              </div>
              <div class="text">
                <a class="title" href="#">Lovelece Road Greenfield</a>
                <h6><i class="icofont-location-pin"></i>4213 Duff Avenue South Burlington, VT 05403</h6>
                <a class="pre-rent" href="#">Pre Rent</a>
                <div class="price-area">
                  <h4>$1,205,500 <span>/ monthly</span></h4>
                </div>
                <div class="flat-details-area">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Area</h5>
                        <p>1200 Sqft</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Rooms</h5>
                        <p>7</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Beds</h5>
                        <p>5</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Garage</h5>
                        <p>1</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="single-blog">
              <div class="blog-img">
                <a href="single-blog.html"><img src="{{asset('frontend/img/banner-1.jpg')}}" alt="banner"></a>
                <div class="love-react"><i class="icofont-ui-love"></i></div>
              </div>
              <div class="text">
                <a class="title" href="#">Lovelece Road Greenfield</a>
                <h6><i class="icofont-location-pin"></i>4213 Duff Avenue South Burlington, VT 05403</h6>
                <a class="pre-sale" href="#">Pre Sale</a>
                <div class="price-area">
                  <h4>$1,205,500 <span>/ monthly</span></h4>
                </div>
                <div class="flat-details-area">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Area</h5>
                        <p>1200 Sqft</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Rooms</h5>
                        <p>7</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Beds</h5>
                        <p>5</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Garage</h5>
                        <p>1</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="single-blog">
              <div class="blog-img">
                <a href="single-blog.html"><img src="{{asset('frontend/img/banner-1.jpg')}}" alt="banner"></a>
                <div class="love-react"><i class="icofont-ui-love"></i></div>
              </div>
              <div class="text">
                <a class="title" href="#">Lovelece Road Greenfield</a>
                <h6><i class="icofont-location-pin"></i>4213 Duff Avenue South Burlington, VT 05403</h6>
                <a class="pre-sale" href="#">Pre Sale</a>
                <div class="price-area">
                  <h4>$1,205,500 <span>/ monthly</span></h4>
                </div>
                <div class="flat-details-area">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Area</h5>
                        <p>1200 Sqft</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Rooms</h5>
                        <p>7</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Beds</h5>
                        <p>5</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Garage</h5>
                        <p>1</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="single-blog">
              <div class="blog-img">
                <a href="single-blog.html"><img src="{{asset('frontend/img/banner-1.jpg')}}" alt="banner"></a>
                <div class="love-react"><i class="icofont-ui-love"></i></div>
              </div>
              <div class="text">
                <a class="title" href="#">Lovelece Road Greenfield</a>
                <h6><i class="icofont-location-pin"></i>4213 Duff Avenue South Burlington, VT 05403</h6>
                <a class="pre-rent" href="#">Pre Rent</a>
                <div class="price-area">
                  <h4>$1,205,500 <span>/ monthly</span></h4>
                </div>
                <div class="flat-details-area">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Area</h5>
                        <p>1200 Sqft</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Rooms</h5>
                        <p>7</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Beds</h5>
                        <p>5</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Garage</h5>
                        <p>1</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="single-blog">
              <div class="blog-img">
                <a href="single-blog.html"><img src="{{asset('frontend/img/banner-1.jpg')}}" alt="banner"></a>
                <div class="love-react"><i class="icofont-ui-love"></i></div>
              </div>
              <div class="text">
                <a class="title" href="#">Lovelece Road Greenfield</a>
                <h6><i class="icofont-location-pin"></i>4213 Duff Avenue South Burlington, VT 05403</h6>
                <a class="pre-sale" href="#">Pre Sale</a>
                <div class="price-area">
                  <h4>$1,205,500 <span>/ monthly</span></h4>
                </div>
                <div class="flat-details-area">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Area</h5>
                        <p>1200 Sqft</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Rooms</h5>
                        <p>7</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Beds</h5>
                        <p>5</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Garage</h5>
                        <p>1</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="single-blog">
              <div class="blog-img">
                <a href="single-blog.html"><img src="{{asset('frontend/img/banner-1.jpg')}}" alt="banner"></a>
                <div class="love-react"><i class="icofont-ui-love"></i></div>
              </div>
              <div class="text">
                <a class="title" href="#">Lovelece Road Greenfield</a>
                <h6><i class="icofont-location-pin"></i>4213 Duff Avenue South Burlington, VT 05403</h6>
                <a class="pre-sale" href="#">Pre Sale</a>
                <div class="price-area">
                  <h4>$1,205,500 <span>/ monthly</span></h4>
                </div>
                <div class="flat-details-area">
                  <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Area</h5>
                        <p>1200 Sqft</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Rooms</h5>
                        <p>7</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Beds</h5>
                        <p>5</p>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                      <div class="flat-details">
                        <h5>Garage</h5>
                        <p>1</p>
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

@endsection