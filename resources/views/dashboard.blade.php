@extends('includes.main')
@section('content')
	
    <!-- ========== banner1-area start============= -->

    <div class="banner-section1">
        <ul class="banner-social gap-5">
            <li><a href="https://www.twitter.com/">Twitter</a></li>
            <li><a href="https://www.facebook.com/">Facebook</a></li>
            <li><a href="https://www.instagram.com/">Instagram</a></li>
        </ul>
        <img src="{{asset('/images/bg/banner-rain.png')}}" class="banner-rain" alt="images">
        <img src="{{asset('/images/bg/banner-spring1.png')}}" class="banner-spring1" alt="images">
        <img src="{{asset('/images/bg/banner-spring2.png')}}" class="banner-spring2" alt="images">
        <img src="{{asset('/images/bg/banner-spring3.png')}}" class="banner-spring3" alt="images">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner-content wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <span>Wellcome to Our Agency</span>
                        <h1>Smart Ideas for your Brand are Here</h1>
                        <p>Create a strong online presence: Develop a strong online presence for your web development company through social media, online advertising, and content marketing.</p>
                        <div class="button-group gap-5">
                            <a href="{{ route('projects') }}" class="eg-btn btn--primary btn--lg">Discover More</a>
                            <div class="btn-with-vdo d-flex align-items-center gap-4">
                                <div class="video-play">
                                    <a href="https://www.youtube.com/watch?v=u31qwQUeGuM" class="popup-youtube video-icon"><i class="bx bx-play"></i></a>
                                </div>
                                <a href="https://www.youtube.com/watch?v=u31qwQUeGuM" class="video-btn popup-youtube">How it works</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 position-relative">
                    <div class="solar-vector-area wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.2s">
                         <img src="{{asset('/images/bg/banner1-vector.png')}}" class="img-fluid banner1-v1" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===============  banner1-area end=============== -->

    <!-- =============== About-section start  =============== -->

    <div class="about1-section pt-120 pb-120">
        <img src="{{asset('/images/bg/section-bg1.png')}}" class="img-fluid section-bg1" alt="image">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="about1-content wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <span>-About Our Company-</span>
                        <h3>We are committed to providing our customers with exceptional.</h3>
                        <p class="para">Lorem Ipsum is simply dummy text of free available in market the way printing and typesetting industry has been the industry's standard dummy text ever.</p>
                        <ul class="about-list">
                            <li>Price of additional materials or parts (if needed)</li>
                            <li>Transportation cost for carrying new materials/parts</li>
                            <li>Interpreting services is our specialty</li>
                        </ul>
                        <a href="{{ route('about') }}" class="eg-btn btn--primary btn--lg">KNOW MORE</a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="about-images wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="row g-0">
                            <div class="col-6">
                                <img src="{{asset('/images/bg/about11.png')}}" class="about11 img-fluid" alt="image">
                                <div class="experience-tag">
                                    <div class="tag-inner">
                                        <img src="{{asset('/images/icons/medal-icon.svg')}}" alt="image">
                                    <h5>10+ Years Experience</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 position-relative">
                                <img src="{{asset('/images/bg/about12.png')}}" class="about12 img-fluid" alt="image">
                                <img src="{{asset('/images/bg/about13.png')}}" class="about13 img-fluid" alt="image">
                                <img src="{{asset('/images/icons/sun-icon.svg')}}" class="sun-icon" alt="image">
                                <img src="{{asset('/images/icons/about-dot.svg')}}" class="about-dot" alt="image">
                                <img src="{{asset('/images/icons/about-triangle.svg')}}" class="about-triangle" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== About-section end  =============== -->

    <!-- =============== Service-section start  =============== -->

    <div class="service-section pt-80 pb-80">
        <img src="{{asset('/images/bg/water-mark1.png')}}" alt="image" class="img-fluid water-mark1">
        <img src="{{asset('/images/bg/water-mark2.png')}}" alt="image" class="img-fluid water-mark2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-title primary4">
                        <span>-What We Offer-</span>
                        <h3>Our Best Solution</h3>
                        <p class="para">Get the most of reduction in your team’s operating costs for the whole product which creates amazing   UI/UX experiences.</p>
                    </div>
                </div>
            </div>
            <div class="row position-relative justify-content-center">
                <div class="swiper service-slider1 swiper-fix">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
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
                        <div class="swiper-slide">
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
                        <div class="swiper-slide">
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
                        <div class="swiper-slide">
                            <div class="service-item1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.8s">
                                <div class="service-img">
                                    <a href="service-details.html" class="service-details-btn"><img src="{{asset('/images/icons/arrow.svg')}}" alt="image"></a>
                                    <img alt="image" src="{{asset('/images/bg/service12.png')}}">
                                    <div class="overlay"></div>
                                </div>
                                <div class="service-content">
                                    <div class="service-icon">
                                        <img src="{{asset('/images/icons/webdev.svg')}}" alt="image">
                                    </div>
                                    <h4><a href="service-details.html">Grphics Design
                                        </a></h4>
                                    <p class="para">Get the most of reduction in your team’s operating costs for the whole product</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-arrows text-center d-xl-flex d-none  justify-content-between">
                    <div class="service-prev1 swiper-prev-arrow" tabindex="0" role="button" aria-label="Previous slide"> 
                        <svg width="46" height="46" viewBox="0 0 46 46" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="23" cy="23" r="22.25"  stroke-width="1.5"/>
                            <path d="M20 27.573V23V18.427C20 18.2574 19.8022 18.1648 19.672 18.2734L14 23L19.672 27.7266C19.8022 27.8352 20 27.7426 20 27.573Z"/>
                            <path d="M32 23.5C32.2761 23.5 32.5 23.2761 32.5 23C32.5 22.7239 32.2761 22.5 32 22.5V23.5ZM19.672 27.7266L19.9921 27.3425V27.3425L19.672 27.7266ZM14 23L13.6799 22.6159L13.219 23L13.6799 23.3841L14 23ZM19.672 18.2734L19.3519 17.8893L19.3519 17.8893L19.672 18.2734ZM32 22.5H20V23.5H32V22.5ZM19.5 23V27.573H20.5V23H19.5ZM19.9921 27.3425L14.3201 22.6159L13.6799 23.3841L19.3519 28.1107L19.9921 27.3425ZM14.3201 23.3841L19.9921 18.6575L19.3519 17.8893L13.6799 22.6159L14.3201 23.3841ZM19.5 18.427V23H20.5V18.427H19.5ZM19.9921 18.6575C19.7967 18.8203 19.5 18.6814 19.5 18.427H20.5C20.5 17.8335 19.8078 17.5093 19.3519 17.8893L19.9921 18.6575ZM19.5 27.573C19.5 27.3186 19.7967 27.1797 19.9921 27.3425L19.3519 28.1107C19.8078 28.4907 20.5 28.1665 20.5 27.573H19.5Z"/>
                        </svg>
                     </div>
                    <div class="service-next1 swiper-next-arrow" tabindex="0" role="button" aria-label="Next slide"> 
                        <svg width="46" height="46" viewBox="0 0 46 46" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="23" cy="23" r="23"/>
                            <path d="M26 18.427V23V27.573C26 27.7426 26.1978 27.8352 26.328 27.7266L32 23L26.328 18.2734C26.1978 18.1648 26 18.2574 26 18.427Z"/>
                            <path d="M14 22.5C13.7239 22.5 13.5 22.7239 13.5 23C13.5 23.2761 13.7239 23.5 14 23.5V22.5ZM26.328 18.2734L26.0079 18.6575V18.6575L26.328 18.2734ZM32 23L32.3201 23.3841L32.781 23L32.3201 22.6159L32 23ZM26.328 27.7266L26.6481 28.1107L26.6481 28.1107L26.328 27.7266ZM14 23.5H26V22.5H14V23.5ZM26.5 23V18.427H25.5V23H26.5ZM26.0079 18.6575L31.6799 23.3841L32.3201 22.6159L26.6481 17.8893L26.0079 18.6575ZM31.6799 22.6159L26.0079 27.3425L26.6481 28.1107L32.3201 23.3841L31.6799 22.6159ZM26.5 27.573V23H25.5V27.573H26.5ZM26.0079 27.3425C26.2033 27.1797 26.5 27.3186 26.5 27.573H25.5C25.5 28.1665 26.1922 28.4907 26.6481 28.1107L26.0079 27.3425ZM26.5 18.427C26.5 18.6814 26.2033 18.8203 26.0079 18.6575L26.6481 17.8893C26.1922 17.5093 25.5 17.8335 25.5 18.427H26.5Z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== Service-section end  =============== -->

     <!-- =============== portfolio-section start  =============== -->

     <div class="portfolio-section pt-120 pb-120">
        <img src="{{asset('/images/bg/section-bg1.png')}}" alt="image" class="img-fluid section-bg-top">
        <img src="{{asset('/images/bg/section-bg-bttm.png')}}" alt="image" class="img-fluid section-bg-bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-title primary5">
                        <span>-Portfolio-</span>
                        <h3>Best Work Showcase</h3>
                        <p class="para">Get the most of reduction in your team’s operating costs for the whole product which creates amazing   UI/UX experiences.</p>
                    </div>
                </div>
            </div>
            <div class="row position-relative justify-content-center">
                <div class="swiper portfolio-slider1 swiper-fix">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="portfolio-item1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                <div class="portfolio-img">
                                    <img alt="image" src="{{asset('/images/bg/portfolio11.png')}}">
                                </div>
                                <div class="portfolio-content">
                                    <span>App Design</span>
                                    <h4><a href="project-details.html">Pocket-Sized Notebooks Hold</a></h4>
                                    <a href="project-details.html" class="text-btn">Live Preview<svg width="18" height="10" viewBox="0 0 18 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.1818 1.38021V5V8.61979C11.1818 8.78083 11.3624 8.87583 11.4951 8.7846L17 5L11.4951 1.2154C11.3624 1.12417 11.1818 1.21917 11.1818 1.38021Z"/>
                                        <path d="M1 4.5C0.723858 4.5 0.5 4.72386 0.5 5C0.5 5.27614 0.723858 5.5 1 5.5V4.5ZM11.4951 1.2154L11.2119 1.62742L11.2119 1.62742L11.4951 1.2154ZM17 5L17.2833 5.41202L17.8826 5L17.2833 4.58798L17 5ZM11.4951 8.7846L11.2119 8.37258L11.2119 8.37258L11.4951 8.7846ZM1 5.5H11.1818V4.5H1V5.5ZM11.6818 5V1.38021H10.6818V5H11.6818ZM11.2119 1.62742L16.7167 5.41202L17.2833 4.58798L11.7784 0.803376L11.2119 1.62742ZM16.7167 4.58798L11.2119 8.37258L11.7784 9.19662L17.2833 5.41202L16.7167 4.58798ZM11.6818 8.61979V5H10.6818V8.61979H11.6818ZM11.2119 8.37258C11.4109 8.23573 11.6818 8.37824 11.6818 8.61979H10.6818C10.6818 9.18342 11.3139 9.51593 11.7784 9.19662L11.2119 8.37258ZM11.6818 1.38021C11.6818 1.62176 11.4109 1.76427 11.2119 1.62742L11.7784 0.803377C11.3139 0.484066 10.6818 0.81658 10.6818 1.38021H11.6818Z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="portfolio-item1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.4s">
                                <div class="portfolio-img">
                                    <img alt="image" src="{{asset('/images/bg/portfolio12.png')}}">
                                </div>
                                <div class="portfolio-content">
                                    <span>Mockup</span>
                                    <h4><a href="project-details.html">A4 Size Flyer Mockup Design</a></h4>
                                    <a href="project-details.html" class="text-btn">Live Preview<svg width="18" height="10" viewBox="0 0 18 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.1818 1.38021V5V8.61979C11.1818 8.78083 11.3624 8.87583 11.4951 8.7846L17 5L11.4951 1.2154C11.3624 1.12417 11.1818 1.21917 11.1818 1.38021Z"/>
                                        <path d="M1 4.5C0.723858 4.5 0.5 4.72386 0.5 5C0.5 5.27614 0.723858 5.5 1 5.5V4.5ZM11.4951 1.2154L11.2119 1.62742L11.2119 1.62742L11.4951 1.2154ZM17 5L17.2833 5.41202L17.8826 5L17.2833 4.58798L17 5ZM11.4951 8.7846L11.2119 8.37258L11.2119 8.37258L11.4951 8.7846ZM1 5.5H11.1818V4.5H1V5.5ZM11.6818 5V1.38021H10.6818V5H11.6818ZM11.2119 1.62742L16.7167 5.41202L17.2833 4.58798L11.7784 0.803376L11.2119 1.62742ZM16.7167 4.58798L11.2119 8.37258L11.7784 9.19662L17.2833 5.41202L16.7167 4.58798ZM11.6818 8.61979V5H10.6818V8.61979H11.6818ZM11.2119 8.37258C11.4109 8.23573 11.6818 8.37824 11.6818 8.61979H10.6818C10.6818 9.18342 11.3139 9.51593 11.7784 9.19662L11.2119 8.37258ZM11.6818 1.38021C11.6818 1.62176 11.4109 1.76427 11.2119 1.62742L11.7784 0.803377C11.3139 0.484066 10.6818 0.81658 10.6818 1.38021H11.6818Z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="portfolio-item1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.6s">
                                <div class="portfolio-img">
                                    <img alt="image" src="{{asset('/images/bg/portfolio13.png')}}">
                                </div>
                                <div class="portfolio-content">
                                    <span>Ui Illustration</span>
                                    <h4><a href="project-details.html">Ui/Ux Illustration Design..</a></h4>
                                    <a href="project-details.html" class="text-btn">Live Preview<svg width="18" height="10" viewBox="0 0 18 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.1818 1.38021V5V8.61979C11.1818 8.78083 11.3624 8.87583 11.4951 8.7846L17 5L11.4951 1.2154C11.3624 1.12417 11.1818 1.21917 11.1818 1.38021Z"/>
                                        <path d="M1 4.5C0.723858 4.5 0.5 4.72386 0.5 5C0.5 5.27614 0.723858 5.5 1 5.5V4.5ZM11.4951 1.2154L11.2119 1.62742L11.2119 1.62742L11.4951 1.2154ZM17 5L17.2833 5.41202L17.8826 5L17.2833 4.58798L17 5ZM11.4951 8.7846L11.2119 8.37258L11.2119 8.37258L11.4951 8.7846ZM1 5.5H11.1818V4.5H1V5.5ZM11.6818 5V1.38021H10.6818V5H11.6818ZM11.2119 1.62742L16.7167 5.41202L17.2833 4.58798L11.7784 0.803376L11.2119 1.62742ZM16.7167 4.58798L11.2119 8.37258L11.7784 9.19662L17.2833 5.41202L16.7167 4.58798ZM11.6818 8.61979V5H10.6818V8.61979H11.6818ZM11.2119 8.37258C11.4109 8.23573 11.6818 8.37824 11.6818 8.61979H10.6818C10.6818 9.18342 11.3139 9.51593 11.7784 9.19662L11.2119 8.37258ZM11.6818 1.38021C11.6818 1.62176 11.4109 1.76427 11.2119 1.62742L11.7784 0.803377C11.3139 0.484066 10.6818 0.81658 10.6818 1.38021H11.6818Z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="portfolio-item1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.8s">
                                <div class="portfolio-img">
                                    <img alt="image" src="{{asset('/images/bg/portfolio12.png')}}">
                                </div>
                                <div class="portfolio-content">
                                    <span>App Design</span>
                                    <h4><a href="project-details.html">Pocket-Sized Notebooks Hold</a></h4>
                                    <a href="project-details.html" class="text-btn">Live Preview<svg width="18" height="10" viewBox="0 0 18 10" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.1818 1.38021V5V8.61979C11.1818 8.78083 11.3624 8.87583 11.4951 8.7846L17 5L11.4951 1.2154C11.3624 1.12417 11.1818 1.21917 11.1818 1.38021Z"/>
                                        <path d="M1 4.5C0.723858 4.5 0.5 4.72386 0.5 5C0.5 5.27614 0.723858 5.5 1 5.5V4.5ZM11.4951 1.2154L11.2119 1.62742L11.2119 1.62742L11.4951 1.2154ZM17 5L17.2833 5.41202L17.8826 5L17.2833 4.58798L17 5ZM11.4951 8.7846L11.2119 8.37258L11.2119 8.37258L11.4951 8.7846ZM1 5.5H11.1818V4.5H1V5.5ZM11.6818 5V1.38021H10.6818V5H11.6818ZM11.2119 1.62742L16.7167 5.41202L17.2833 4.58798L11.7784 0.803376L11.2119 1.62742ZM16.7167 4.58798L11.2119 8.37258L11.7784 9.19662L17.2833 5.41202L16.7167 4.58798ZM11.6818 8.61979V5H10.6818V8.61979H11.6818ZM11.2119 8.37258C11.4109 8.23573 11.6818 8.37824 11.6818 8.61979H10.6818C10.6818 9.18342 11.3139 9.51593 11.7784 9.19662L11.2119 8.37258ZM11.6818 1.38021C11.6818 1.62176 11.4109 1.76427 11.2119 1.62742L11.7784 0.803377C11.3139 0.484066 10.6818 0.81658 10.6818 1.38021H11.6818Z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-bottom d-flex justify-content-between align-items-center">
                    <div class="swiper-pagination style-3 d-block"></div>
                </div>
                <!-- <div class="slider-arrows text-center d-xl-flex d-none  justify-content-between">
                    <div class="portfolio-prev1 swiper-prev-arrow" tabindex="0" role="button" aria-label="Previous slide"> 
                        <svg width="46" height="46" viewBox="0 0 46 46" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="23" cy="23" r="22.25"  stroke-width="1.5"/>
                            <path d="M20 27.573V23V18.427C20 18.2574 19.8022 18.1648 19.672 18.2734L14 23L19.672 27.7266C19.8022 27.8352 20 27.7426 20 27.573Z"/>
                            <path d="M32 23.5C32.2761 23.5 32.5 23.2761 32.5 23C32.5 22.7239 32.2761 22.5 32 22.5V23.5ZM19.672 27.7266L19.9921 27.3425V27.3425L19.672 27.7266ZM14 23L13.6799 22.6159L13.219 23L13.6799 23.3841L14 23ZM19.672 18.2734L19.3519 17.8893L19.3519 17.8893L19.672 18.2734ZM32 22.5H20V23.5H32V22.5ZM19.5 23V27.573H20.5V23H19.5ZM19.9921 27.3425L14.3201 22.6159L13.6799 23.3841L19.3519 28.1107L19.9921 27.3425ZM14.3201 23.3841L19.9921 18.6575L19.3519 17.8893L13.6799 22.6159L14.3201 23.3841ZM19.5 18.427V23H20.5V18.427H19.5ZM19.9921 18.6575C19.7967 18.8203 19.5 18.6814 19.5 18.427H20.5C20.5 17.8335 19.8078 17.5093 19.3519 17.8893L19.9921 18.6575ZM19.5 27.573C19.5 27.3186 19.7967 27.1797 19.9921 27.3425L19.3519 28.1107C19.8078 28.4907 20.5 28.1665 20.5 27.573H19.5Z"/>
                        </svg>
                     </div>
                    <div class="portfolio-next1 swiper-next-arrow" tabindex="0" role="button" aria-label="Next slide"> 
                        <svg width="46" height="46" viewBox="0 0 46 46" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="23" cy="23" r="23"/>
                            <path d="M26 18.427V23V27.573C26 27.7426 26.1978 27.8352 26.328 27.7266L32 23L26.328 18.2734C26.1978 18.1648 26 18.2574 26 18.427Z"/>
                            <path d="M14 22.5C13.7239 22.5 13.5 22.7239 13.5 23C13.5 23.2761 13.7239 23.5 14 23.5V22.5ZM26.328 18.2734L26.0079 18.6575V18.6575L26.328 18.2734ZM32 23L32.3201 23.3841L32.781 23L32.3201 22.6159L32 23ZM26.328 27.7266L26.6481 28.1107L26.6481 28.1107L26.328 27.7266ZM14 23.5H26V22.5H14V23.5ZM26.5 23V18.427H25.5V23H26.5ZM26.0079 18.6575L31.6799 23.3841L32.3201 22.6159L26.6481 17.8893L26.0079 18.6575ZM31.6799 22.6159L26.0079 27.3425L26.6481 28.1107L32.3201 23.3841L31.6799 22.6159ZM26.5 27.573V23H25.5V27.573H26.5ZM26.0079 27.3425C26.2033 27.1797 26.5 27.3186 26.5 27.573H25.5C25.5 28.1665 26.1922 28.4907 26.6481 28.1107L26.0079 27.3425ZM26.5 18.427C26.5 18.6814 26.2033 18.8203 26.0079 18.6575L26.6481 17.8893C26.1922 17.5093 25.5 17.8335 25.5 18.427H26.5Z"/>
                        </svg>
                    </div>
                </div> -->
            </div>
            
        </div>
    </div>

    <!-- =============== portfolio-section end  =============== -->

    <!-- =============== activities-section start  =============== -->

    <div class="activities-section pt-80 pb-80">
        <img src="{{asset('/images/bg/water-mark1.png')}}" alt="image" class="img-fluid water-mark1">
        <img src="{{asset('/images/bg/water-mark2.png')}}" alt="image" class="img-fluid water-mark2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-title primary3">
                        <span>-Our Video-</span>
                        <h3>Our Company Activities</h3>
                        <p class="para">Get the most of reduction in your team’s operating costs for the whole product which creates amazing   UI/UX experiences.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="activities-area">
                    <div class="company-vdo position-relative wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="video-play style-2">
                            <a href="https://www.youtube.com/watch?v=u31qwQUeGuM" class="popup-youtube video-icon"><i class="bx bx-play"></i></a>
                        </div>
                    </div>
                    <div class="company-counter wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="row g-4 d-flex justify-content-center">
                            <div class="col-lg-3 col-md-6 col-sm-10 col-10">
                                <div class="counter-single text-center d-flex flex-row wow animate fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.6s">
                                    <div class="coundown d-flex flex-column">
                                        <h2 class="odometer" data-odometer-final="550">&nbsp;</h2>
                                        <a href="#">Team member</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-10 col-10">
                                <div class="counter-single text-center d-flex flex-row wow animate fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.6s">
                                    <div class="coundown d-flex flex-column">
                                        <h2 class="odometer" data-odometer-final="330">&nbsp;</h2>
                                        <a href="#">Team member</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-10 col-10">
                                <div class="counter-single text-center d-flex flex-row wow animate fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.6s">
                                    <div class="coundown d-flex flex-column">
                                        <h2 class="odometer" data-odometer-final="150">&nbsp;</h2>
                                        <a href="#">Team member</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-10 col-10">
                                <div class="counter-single text-center d-flex flex-row wow animate fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.8s">
                                    <div class="coundown d-flex flex-column">
                                        <h2 class="odometer" data-odometer-final="130">&nbsp;</h2>
                                        <a href="#">Awards Winner</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== activities-section end  =============== -->

    <!-- =============== team-section start  =============== -->
   <div class="team-section pt-120 pb-120">
        <img src="{{asset('/images/bg/section-bg1.png')}}" alt="image" class="img-fluid water-mark1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-title primary2">
                        <span>-Our Team-</span>
                        <h3>Our Creative Minds</h3>
                        <p class="para">Get the most of reduction in your team’s operating costs for the whole product which creates amazing   UI/UX experiences.</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center g-4">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-team1 hover-border1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="team-image">
                            <img src="{{asset('/images/bg/team11.png')}}" alt="image">
                            <div class="social-area gap-3">
                                <div class="social-plus"><i class='bx bx-plus'></i></div>
                                <ul class="social-links d-flex justify-content-center align-items-center flex-column gap-3">
                                    <li><a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a></li>
                                   <li><a href="https://www.twitter.com/"><i class='bx bxl-twitter'></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4 class="name">Esther Howard</h4>
                            <p class="designation">CEO/Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-team1 hover-border1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="team-image">
                            <img src="{{asset('/images/bg/team12.png')}}" alt="image">
                            <div class="social-area gap-3">
                                <div class="social-plus"><i class='bx bx-plus'></i></div>
                                <ul class="social-links d-flex justify-content-center align-items-center flex-column gap-3">
                                    <li><a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a></li>
                                   <li><a href="https://www.twitter.com/"><i class='bx bxl-twitter'></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4 class="name">Cameron Williamson</h4>
                            <p class="designation">Web Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-team1 hover-border1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <div class="team-image">
                            <img src="{{asset('/images/bg/team13.png')}}" alt="image">
                            <div class="social-area gap-3">
                                <div class="social-plus"><i class='bx bx-plus'></i></div>
                                <ul class="social-links d-flex justify-content-center align-items-center flex-column gap-3">
                                    <li><a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a></li>
                                   <li><a href="https://www.twitter.com/"><i class='bx bxl-twitter'></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4 class="name">Brooklyn Simmons Sr</h4>
                            <p class="designation">Ui/Ux Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-team1 hover-border1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <div class="team-image">
                            <img src="{{asset('/images/bg/team14.png')}}" alt="image">
                            <div class="social-area gap-3">
                                <div class="social-plus"><i class='bx bx-plus'></i></div>
                                <ul class="social-links d-flex justify-content-center align-items-center flex-column gap-3">
                                    <li><a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a></li>
                                   <li><a href="https://www.twitter.com/"><i class='bx bxl-twitter'></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4 class="name">Lincoln Anthony</h4>
                            <p class="designation">Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =============== team-section end  =============== -->

    <!-- =============== testimonial-section start  =============== -->
    
    <div class="testimonial-section pb-120">
        <img src="{{asset('/images/bg/section-bg-bttm.png')}}" class="section-bg-bottom" alt="image">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-title primary5">
                        <span>-Testimonial-</span>
                        <h3>What They’re Saying</h3>
                        <p class="para">Get the most of reduction in your team’s operating costs for the whole product which creates amazing   UI/UX experiences.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center position-relative">
                <div class="swiper testimonial-slider1 swiper-fix">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-single hover-border1 wow fadeInDown"  data-wow-duration="1.5s" data-wow-delay=".2s">
                                <img alt="image" src="{{asset('/images/icons/quote-icon.svg')}}" class="quote-icon">
                                <div class="testi-img">
                                    <img alt="image" src="{{asset('/images/bg/testi11.png')}}" >
                                </div>
                                <div class="testi-content">
                                    <div class="testi-designation">
                                        <h5>Ronald Richards</h5>
                                        <p>Co Founder</p>
                                    </div>
                                    <p>The Pacific Grove Chamber of Commerce would like to thank eLab
                                        Communications and Mr. Will Elkadi for all the efforts and suggestions that
                                        assisted. </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-single hover-border1 wow fadeInDown"  data-wow-duration="1.5s" data-wow-delay=".4s">
                                <img alt="image" src="{{asset('/images/icons/quote-icon.svg')}}" class="quote-icon">
                                <div class="testi-img">
                                    <img alt="image" src="{{asset('/images/bg/testi12.png')}}" >
                                </div>
                                <div class="testi-content">
                                    <div class="testi-designation">
                                        <h5>Marvin McKinney</h5>
                                        <p>Founder</p>
                                    </div>
                                    <p>The Pacific Grove Chamber of Commerce would like to thank eLab
                                        Communications and Mr. Will Elkadi for all the efforts and suggestions that
                                        assisted. </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-single hover-border1 wow fadeInDown"  data-wow-duration="1.5s" data-wow-delay=".4s">
                                <img alt="image" src="{{asset('/images/icons/quote-icon.svg')}}" class="quote-icon">
                                <div class="testi-img">
                                    <img alt="image" src="{{asset('/images/bg/testi11.png')}}" >
                                </div>
                                <div class="testi-content">
                                    <div class="testi-designation">
                                        <h5>Johan Martin R</h5>
                                        <p>Manager</p>
                                    </div>
                                    <p>The Pacific Grove Chamber of Commerce would like to thank eLab
                                        Communications and Mr. Will Elkadi for all the efforts and suggestions that
                                        assisted. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-arrows text-center d-xl-flex d-none  justify-content-between">
                    <div class="testi-prev1 swiper-prev-arrow" tabindex="0" role="button" aria-label="Previous slide"> 
                        <svg width="46" height="46" viewBox="0 0 46 46" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="23" cy="23" r="22.25"  stroke-width="1.5"/>
                            <path d="M20 27.573V23V18.427C20 18.2574 19.8022 18.1648 19.672 18.2734L14 23L19.672 27.7266C19.8022 27.8352 20 27.7426 20 27.573Z"/>
                            <path d="M32 23.5C32.2761 23.5 32.5 23.2761 32.5 23C32.5 22.7239 32.2761 22.5 32 22.5V23.5ZM19.672 27.7266L19.9921 27.3425V27.3425L19.672 27.7266ZM14 23L13.6799 22.6159L13.219 23L13.6799 23.3841L14 23ZM19.672 18.2734L19.3519 17.8893L19.3519 17.8893L19.672 18.2734ZM32 22.5H20V23.5H32V22.5ZM19.5 23V27.573H20.5V23H19.5ZM19.9921 27.3425L14.3201 22.6159L13.6799 23.3841L19.3519 28.1107L19.9921 27.3425ZM14.3201 23.3841L19.9921 18.6575L19.3519 17.8893L13.6799 22.6159L14.3201 23.3841ZM19.5 18.427V23H20.5V18.427H19.5ZM19.9921 18.6575C19.7967 18.8203 19.5 18.6814 19.5 18.427H20.5C20.5 17.8335 19.8078 17.5093 19.3519 17.8893L19.9921 18.6575ZM19.5 27.573C19.5 27.3186 19.7967 27.1797 19.9921 27.3425L19.3519 28.1107C19.8078 28.4907 20.5 28.1665 20.5 27.573H19.5Z"/>
                        </svg>
                     </div>
                    <div class="testi-next1 swiper-next-arrow" tabindex="0" role="button" aria-label="Next slide"> 
                        <svg width="46" height="46" viewBox="0 0 46 46" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="23" cy="23" r="23"/>
                            <path d="M26 18.427V23V27.573C26 27.7426 26.1978 27.8352 26.328 27.7266L32 23L26.328 18.2734C26.1978 18.1648 26 18.2574 26 18.427Z"/>
                            <path d="M14 22.5C13.7239 22.5 13.5 22.7239 13.5 23C13.5 23.2761 13.7239 23.5 14 23.5V22.5ZM26.328 18.2734L26.0079 18.6575V18.6575L26.328 18.2734ZM32 23L32.3201 23.3841L32.781 23L32.3201 22.6159L32 23ZM26.328 27.7266L26.6481 28.1107L26.6481 28.1107L26.328 27.7266ZM14 23.5H26V22.5H14V23.5ZM26.5 23V18.427H25.5V23H26.5ZM26.0079 18.6575L31.6799 23.3841L32.3201 22.6159L26.6481 17.8893L26.0079 18.6575ZM31.6799 22.6159L26.0079 27.3425L26.6481 28.1107L32.3201 23.3841L31.6799 22.6159ZM26.5 27.573V23H25.5V27.573H26.5ZM26.0079 27.3425C26.2033 27.1797 26.5 27.3186 26.5 27.573H25.5C25.5 28.1665 26.1922 28.4907 26.6481 28.1107L26.0079 27.3425ZM26.5 18.427C26.5 18.6814 26.2033 18.8203 26.0079 18.6575L26.6481 17.8893C26.1922 17.5093 25.5 17.8335 25.5 18.427H26.5Z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== team-section end  =============== -->

    <!-- =============== Service-section start  =============== -->

    <div class="blog-section pt-80 pb-80">
        <img src="{{asset('/images/bg/water-mark1.png')}}" alt="image" class="img-fluid water-mark1">
        <img src="{{asset('/images/bg/water-mark2.png')}}" alt="image" class="img-fluid water-mark2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-title primary1">
                        <span>-Our News-</span>
                        <h3>Learn Something From Blog</h3>
                        <p class="para">Get the most of reduction in your team’s operating costs for the whole product which creates amazing   UI/UX experiences.</p>
                    </div>
                </div>
            </div>
            <div class="row position-relative justify-content-center g-4">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="sigle-blog-1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="blog-image">
                            <img src="{{asset('/images/blog/blog11.png')}}" class="img-fluid" alt="image">
                        </div>
                        <div class="blog-content hover-border1">
                            <span>Ui/Ux Design</span>
                            <h4><a href="blog-details.html">How to Create a Useful & Excellent Optimized Section</a></h4>
                            <div class="blog-meta">
                                <div class="author-img">
                                    <img src="{{asset('/images/blog/blog-author1.png')}}" alt="image">
                                </div>
                                <div class="designation">
                                    <h5>Johan Martin Stw</h5>
                                    <div class="date">Februay 24, 2022<span>8 min Read</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="sigle-blog-1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="blog-image">
                            <img src="{{asset('/images/blog/blog12.png')}}" class="img-fluid" alt="image">
                        </div>
                        <div class="blog-content hover-border1">
                            <span>Web Develpment</span>
                            <h4><a href="blog-details.html">Overcoming Blockers: How to Build Your Red Tape Toolkit</a></h4>
                            <div class="blog-meta">
                                <div class="author-img">
                                    <img src="{{asset('/images/blog/blog-author2.png')}}" alt="image">
                                </div>
                                <div class="designation">
                                    <h5>Cameron Williamson</h5>
                                    <div class="date">Februay 28, 2022<span>28 min Read</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="sigle-blog-1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <div class="blog-image">
                            <img src="{{asset('/images/blog/blog13.png')}}" class="img-fluid" alt="image">
                        </div>
                        <div class="blog-content hover-border1">
                            <span>Ui/Ux Design</span>
                            <h4><a href="blog-details.html">A lifestyle you always being the focal point is innately.</a></h4>
                            <div class="blog-meta">
                                <div class="author-img">
                                    <img src="{{asset('/images/blog/blog-author3.png')}}" alt="image">
                                </div>
                                <div class="designation">
                                    <h5>Sara Watson</h5>
                                    <div class="date">March 24, 2022<span>18 min Read</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== Service-section end  =============== -->

    <!-- =============== Sponsor-section start  =============== -->

    <div class="sponsor-section pt-80 pb-80">
        <div class="container">
            <div class="row align-items-center justify-content-lg-start justify-content-center">
                <div class="col-md-6 text-lg-start text-center">
                    <div class="section-title primary5 text-lg-start text-center mb-0">
                        <span>-Our Partners-</span>
                        <h3 class="mb-0">People Who Trust Us</h3>
                    </div>
                </div>
                <div class="col-md-6 d-lg-flex justify-content-end d-none">
                    <div class="slider-arrows2 text-center d-flex gap-4">
                        <div class="sponsor-prev1 swiper-prev-arrow" tabindex="0" role="button" aria-label="Previous slide"> 
                            <svg width="46" height="46" viewBox="0 0 46 46" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="23" cy="23" r="22.25"  stroke-width="1.5"/>
                                <path d="M20 27.573V23V18.427C20 18.2574 19.8022 18.1648 19.672 18.2734L14 23L19.672 27.7266C19.8022 27.8352 20 27.7426 20 27.573Z"/>
                                <path d="M32 23.5C32.2761 23.5 32.5 23.2761 32.5 23C32.5 22.7239 32.2761 22.5 32 22.5V23.5ZM19.672 27.7266L19.9921 27.3425V27.3425L19.672 27.7266ZM14 23L13.6799 22.6159L13.219 23L13.6799 23.3841L14 23ZM19.672 18.2734L19.3519 17.8893L19.3519 17.8893L19.672 18.2734ZM32 22.5H20V23.5H32V22.5ZM19.5 23V27.573H20.5V23H19.5ZM19.9921 27.3425L14.3201 22.6159L13.6799 23.3841L19.3519 28.1107L19.9921 27.3425ZM14.3201 23.3841L19.9921 18.6575L19.3519 17.8893L13.6799 22.6159L14.3201 23.3841ZM19.5 18.427V23H20.5V18.427H19.5ZM19.9921 18.6575C19.7967 18.8203 19.5 18.6814 19.5 18.427H20.5C20.5 17.8335 19.8078 17.5093 19.3519 17.8893L19.9921 18.6575ZM19.5 27.573C19.5 27.3186 19.7967 27.1797 19.9921 27.3425L19.3519 28.1107C19.8078 28.4907 20.5 28.1665 20.5 27.573H19.5Z"/>
                            </svg>
                         </div>
                        <div class="sponsor-next1 swiper-next-arrow" tabindex="0" role="button" aria-label="Next slide"> 
                            <svg width="46" height="46" viewBox="0 0 46 46" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="23" cy="23" r="23"/>
                                <path d="M26 18.427V23V27.573C26 27.7426 26.1978 27.8352 26.328 27.7266L32 23L26.328 18.2734C26.1978 18.1648 26 18.2574 26 18.427Z"/>
                                <path d="M14 22.5C13.7239 22.5 13.5 22.7239 13.5 23C13.5 23.2761 13.7239 23.5 14 23.5V22.5ZM26.328 18.2734L26.0079 18.6575V18.6575L26.328 18.2734ZM32 23L32.3201 23.3841L32.781 23L32.3201 22.6159L32 23ZM26.328 27.7266L26.6481 28.1107L26.6481 28.1107L26.328 27.7266ZM14 23.5H26V22.5H14V23.5ZM26.5 23V18.427H25.5V23H26.5ZM26.0079 18.6575L31.6799 23.3841L32.3201 22.6159L26.6481 17.8893L26.0079 18.6575ZM31.6799 22.6159L26.0079 27.3425L26.6481 28.1107L32.3201 23.3841L31.6799 22.6159ZM26.5 27.573V23H25.5V27.573H26.5ZM26.0079 27.3425C26.2033 27.1797 26.5 27.3186 26.5 27.573H25.5C25.5 28.1665 26.1922 28.4907 26.6481 28.1107L26.0079 27.3425ZM26.5 18.427C26.5 18.6814 26.2033 18.8203 26.0079 18.6575L26.6481 17.8893C26.1922 17.5093 25.5 17.8335 25.5 18.427H26.5Z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center position-relative mt-60">
                <div class="swiper sponsor-slider swiper-fix wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="#" class="single-sponsor ">
                                <img src="{{asset('/images/bg/sponsor1.png')}}" alt="image">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="single-sponsor ">
                                <img src="{{asset('/images/bg/sponsor2.png')}}" alt="image">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="single-sponsor ">
                                <img src="{{asset('/images/bg/sponsor3.png')}}" alt="image">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="single-sponsor ">
                                <img src="{{asset('/images/bg/sponsor5.png')}}" alt="image">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="single-sponsor ">
                                <img src="{{asset('/images/bg/sponsor6.png')}}" alt="image">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="single-sponsor ">
                                <img src="{{asset('/images/bg/sponsor4.png')}}" alt="image">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="single-sponsor ">
                                <img src="{{asset('/images/bg/sponsor3.png')}}" alt="image">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="single-sponsor ">
                                <img src="{{asset('/images/bg/sponsor5.png')}}" alt="image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== Sponsor-section end  =============== -->

    <!-- =============== Footer-action-section start =============== -->

@endsection
