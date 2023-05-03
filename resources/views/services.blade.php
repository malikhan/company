@extends('includes.main')
@section('content')

	<!-- ========== banner1-area start============= -->

    <div class="inner-banner">
        <img src="{{asset('/images/bg/inner-bannerdot.png')}}" class="inner-bannerdot" alt="image">
        <img src="{{asset('/images/bg/inner-bannerwave.png')}}" class="inner-bannerwave" alt="image">
        <a class="down-arrow-icon" href="#service">
            <svg viewBox="0 0 14 26" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8182 18.469L7.24862 25.7462L0.679032 18.469C0.272584 18.0188 0.592074 17.3 1.19862 17.3L6.74862 17.3L6.74862 1C6.74862 0.723857 6.97248 0.5 7.24862 0.5C7.52477 0.5 7.74862 0.723857 7.74862 1L7.74862 17.3L13.2986 17.3C13.9052 17.3 14.2247 18.0188 13.8182 18.469Z"/>
            </svg>
        </a>
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center text-center">
                <div class="col-md-6">
                    <h2 class="inner-banner-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">Our Services</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb gap-3">
                          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Our Services</li>
                        </ol>
                      </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- ===============  banner1-area end=============== -->

    <div class="service-section2 pt-120" id="service">
        <div class="container">
            <div class="row justify-content-center g-4">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="service-item1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="service-img">
                            <a href="service-details.html" class="service-details-btn"><img src="{{asset('/images/icons/arrow.svg')}}" alt="image"></a>
                            <img alt="image" src="{{asset('/images/bg/service11.png')}}">
                            <div class="overlay"></div>
                        </div>
                        <div class="service-content">
                            <div class="service-icon">
                                <img src="{{asset('/images/icons/webdev.svg')}}" alt="image">
                            </div>
                            <h4><a href="service-details.html">Website Devolopment
                                </a></h4>
                            <p class="para">Get the most of reduction in your team’s operating costs for the whole product</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="service-item1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="service-img">
                            <a href="service-details.html" class="service-details-btn"><img src="{{asset('/images/icons/arrow.svg')}}" alt="image"></a>
                            <img alt="image" src="{{asset('/images/bg/service12.png')}}">
                            <div class="overlay"></div>
                        </div>
                        <div class="service-content">
                            <div class="service-icon">
                                <img src="{{asset('/images/icons/brandsolution.svg')}}" alt="image">
                            </div>
                            <h4><a href="service-details.html">Branding Solution</a></h4>
                            <p class="para">Get the most of reduction in your team’s operating costs for the whole product</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="service-item1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <div class="service-img">
                            <a href="service-details.html" class="service-details-btn"><img src="{{asset('/images/icons/arrow.svg')}}" alt="image"></a>
                            <img alt="image" src="{{asset('/images/bg/service13.png')}}">
                            <div class="overlay"></div>
                        </div>
                        <div class="service-content">
                            <div class="service-icon">
                                <img src="{{asset('/images/icons/uiux.svg')}}" alt="image">
                            </div>
                            <h4><a href="service-details.html">Ui/Ux Design</a></h4>
                            <p class="para">Get the most of reduction in your team’s operating costs for the whole product</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="service-item1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <div class="service-img">
                            <a href="service-details.html" class="service-details-btn"><img src="{{asset('/images/icons/arrow.svg')}}" alt="image"></a>
                            <img alt="image" src="{{asset('/images/bg/service12.png')}}">
                            <div class="overlay"></div>
                        </div>
                        <div class="service-content">
                            <div class="service-icon">
                                <img src="{{asset('/images/icons/software-dev.svg')}}" alt="image">
                            </div>
                            <h4><a href="service-details.html">Software Development</a></h4>
                            <p class="para">Get the most of reduction in your team’s operating costs for the whole product</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="service-item1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="service-img">
                            <a href="service-details.html" class="service-details-btn"><img src="{{asset('/images/icons/arrow.svg')}}" alt="image"></a>
                            <img alt="image" src="{{asset('/images/bg/service11.png')}}">
                            <div class="overlay"></div>
                        </div>
                        <div class="service-content">
                            <div class="service-icon">
                                <img src="{{asset('/images/icons/video-animation.svg')}}" alt="image">
                            </div>
                            <h4><a href="service-details.html">Video Animation</a></h4>
                            <p class="para">Get the most of reduction in your team’s operating costs for the whole product</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="service-item1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <div class="service-img">
                            <a href="service-details.html" class="service-details-btn"><img src="{{asset('/images/icons/arrow.svg')}}" alt="image"></a>
                            <img alt="image" src="{{asset('/images/bg/service13.png')}}">
                            <div class="overlay"></div>
                        </div>
                        <div class="service-content">
                            <div class="service-icon">
                                <img src="{{asset('/images/icons/content-writing.svg')}}" alt="image">
                            </div>
                            <h4><a href="service-details.html">Content Writing</a></h4>
                            <p class="para">Get the most of reduction in your team’s operating costs for the whole product</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mar-tp-50">
                <div class="col-md-6 text-center">
                    <a href="{{ route('contact') }}" class="eg-btn btn--primary btn--lg">Get Started</a>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== portfolio-section start  =============== -->

    <div class="portfolio-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-title primary1">
                        <span>-Free Bonus-</span>
                        <h3>Why You Should Choose Us</h3>
                        <p class="para">Get the most of reduction in your team’s operating costs for the whole product which creates amazing   UI/UX experiences.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-4">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="service-item2 style-4 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                       <div class="service-content">
                           <span class="sn">01</span>
                           <h4><a href="service-details.html">Free Icon Plugin</a></h4>
                           <p class="para">Nullam ullamcorper condimentum urna eu accumsan.</p>
                       </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                   <div class="service-item2 style-4 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.4s">
                      <div class="service-content">
                          <span class="sn">02</span>
                          <h4><a href="service-details.html">Free 6 Month Support</a></h4>
                          <p class="para">Nullam ullamcorper condimentum urna eu accumsan.</p>
                      </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-10">
                   <div class="service-item2 style-4 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.6s">
                      <div class="service-content">
                          <span class="sn">03</span>
                          <h4><a href="service-details.html">Customer Strategy</a></h4>
                          <p class="para">Nullam ullamcorper condimentum urna eu accumsan.</p>
                      </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-10">
                   <div class="service-item2 style-4 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.8s">
                      <div class="service-content">
                          <span class="sn">04</span>
                          <h4><a href="service-details.html">Best Premimum Image</a></h4>
                          <p class="para">Nullam ullamcorper condimentum urna eu accumsan.</p>
                      </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-10">
                   <div class="service-item2 style-4 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="1s">
                      <div class="service-content">
                          <span>05</span>
                          <h4><a href="service-details.html">Most Advanced Features</a></h4>
                          <p class="para">Nullam ullamcorper condimentum urna eu accumsan.</p>
                      </div>
                   </div>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-10">
                   <div class="service-item2 style-4 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="1.2s">
                      <div class="service-content">
                          <span>06</span>
                          <h4><a href="service-details.html">Very Reasonable Price</a></h4>
                          <p class="para">Nullam ullamcorper condimentum urna eu accumsan.</p>
                      </div>
                   </div>
               </div>
            </div>
        </div>
    </div>

    <!-- =============== portfolio-section end  =============== -->

@endsection