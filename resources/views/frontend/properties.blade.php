@extends('layouts.front')
@section('content')

    <!-- Blog Area -->
    <div class="blog-area section-padding">
        <div class="container">
            <div class="haeding-area">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-8">
                        <div class="haeding-title-area">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <i class="icofont-simple-right"></i>
                                <li>Blog List</li>
                            </ul>
                            <h2>Blog Listing Page</h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-4">
                        <div class="sorting-options">
                            <a href="blog.html"><i class="icofont-brand-microsoft"></i></a>
                            <a href="blog-single-properties.html" class="active"><i class="icofont-listine-dots"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-left-side">
                        <div class="calcContainer">
                            <div class="calcSub">
                                <div class="calcHeading">
                                    <h3>Mortgage Calculator</h3>
                                </div>
                                <div>
                                    <form action="#" name="mortgage_calculator">
                                        <div class="input-area">
                                            <input type="text" class="calcInput" id="inCost" placeholder="Loan Amount" />
                                            <label>$</label>
                                        </div>
                                        <div class="input-area">
                                            <input type="text" class="calcInput" id="inDown" placeholder="Down Payment" />
                                            <label>$</label>
                                        </div>
                                        <div class="input-area">
                                            <input type="text" class="calcInput" id="inInterest" placeholder="Interest" />
                                            <label>%</label>
                                        </div>
                                        <div class="input-area">
                                            <input type="text" class="calcInput" id="inTerm" placeholder="Length of Loan (years)" />
                                        </div>
                                        <button type="button" class="calcButton" id="btnCalculate">Calculate</button>
                                    </form>
                                </div>
                              <p class="calcAnswer"><b>Monthly Payment :</b><span id="outMonthly">  Please enter the values</span></p>
                            </div>
                        </div>
                        <div class="recent-blogs">
                            <h3>Recent Proparties</h3>
                            <div class="single-recent-blog">
                                <a href=""><img src="{{asset('frontend/img/recent-1.png')}}" alt=""></a>
                                <div class="text">
                                    <a href="">Luxury Home Family</a>
                                    <h6>$140,000 </h6>
                                    <p>Est St, 77 - Central Park South, NYC</p>
                                </div>
                            </div>
                            <div class="single-recent-blog">
                                <a href=""><img src="{{asset('frontend/img/recent-1.png')}}" alt=""></a>
                                <div class="text">
                                    <a href="">Luxury Home Family</a>
                                    <h6>$140,000 </h6>
                                    <p>Est St, 77 - Central Park South, NYC</p>
                                </div>
                            </div>
                            <div class="single-recent-blog">
                                <a href=""><img src="{{asset('frontend/img/recent-1.png')}}" alt=""></a>
                                <div class="text">
                                    <a href="">Luxury Home Family</a>
                                    <h6>$140,000 </h6>
                                    <p>Est St, 77 - Central Park South, NYC</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="blog-menu-area">
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
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mix category-1">
                              <div class="single-blog sec-blog">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="single-blog.html"><img src="{{asset('frontend/img/blog-sec-1.png')}}" alt="banner"></a>
                                        <div class="love-react"><i class="icofont-ui-love"></i></div>
                                    </div>
                                    <div class="col-md-6">
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
                              </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mix category-2">
                              <div class="single-blog sec-blog">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="single-blog.html"><img src="{{asset('frontend/img/blog-sec-1.png')}}" alt="banner"></a>
                                        <div class="love-react"><i class="icofont-ui-love"></i></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text">
                                          <a class="title" href="single-blog.html">Lovelece Road Greenfield</a>
                                          <h6><i class="icofont-location-pin"></i>4213 Duff Avenue South Burlington, VT 05403</h6>
                                          <a class="pre-rent" href="#">Pre Rent</a>
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
                              </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mix category-3">
                              <div class="single-blog sec-blog">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="single-blog.html"><img src="{{asset('frontend/img/blog-sec-1.png')}}" alt="banner"></a>
                                        <div class="love-react"><i class="icofont-ui-love"></i></div>
                                    </div>
                                    <div class="col-md-6">
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
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

@endsection