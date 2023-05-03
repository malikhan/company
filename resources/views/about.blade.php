@extends('includes.main')
@section('content')
	<!-- ========== banner1-area start============= -->

    <div class="inner-banner">
        <img src="{{asset('/images/bg/inner-bannerdot.png')}}" class="inner-bannerdot" alt="image">
        <img src="{{asset('/images/bg/inner-bannerwave.png')}}" class="inner-bannerwave" alt="image">
        <a class="down-arrow-icon" href="#about">
            <svg viewBox="0 0 14 26" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8182 18.469L7.24862 25.7462L0.679032 18.469C0.272584 18.0188 0.592074 17.3 1.19862 17.3L6.74862 17.3L6.74862 1C6.74862 0.723857 6.97248 0.5 7.24862 0.5C7.52477 0.5 7.74862 0.723857 7.74862 1L7.74862 17.3L13.2986 17.3C13.9052 17.3 14.2247 18.0188 13.8182 18.469Z"/>
            </svg>
        </a>
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center text-center">
                <div class="col-md-6">
                    <h2 class="inner-banner-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">About Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb gap-3">
                          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                      </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- ===============  banner1-area end=============== -->

    <!-- =============== About-section start  =============== -->

    <div class="about1-section pt-120 pb-120" id="about">
        <img src="{{asset('/images/bg/section-bg1.png')}}" class="img-fluid section-bg1" alt="">
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
                        <p class="para">Since the advent of the Internet and e-commerce, a growing number of consumers are buying their travel requirements online. In many cases, they bypass the travel agent and purchase directly from the airline, hotel chain, etc.Most travel agents, especially large ones, have two departments. Some agencies, i.e.Bricks and mortar travel agents were once common in every high street. They existed next door to grocers, department stores, and clothes shops., tourism or business travel.</p>
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

    <!-- =============== testimonial-section start  =============== -->
    
    <div class="testimonial-section pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
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
                <div class="slider-arrows text-center d-lg-flex d-none  justify-content-between">
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

    <!-- =============== testimonial-section end  =============== -->

    <!-- =============== activities-section start  =============== -->

    <div class="activities-section pt-80 pb-80">
        <img src="{{asset('/images/bg/water-mark1.png')}}" alt="image" class="img-fluid water-mark1">
        <img src="{{asset('/images/bg/water-mark2.png')}}" alt="image" class="img-fluid water-mark2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
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
                                <div class="counter-single text-center d-flex flex-row wow animate fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                    <div class="coundown d-flex flex-column">
                                        <h2 class="odometer" data-odometer-final="450">&nbsp;</h2>
                                        <a href="#">Happy Customer</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-10 col-10">
                                <div class="counter-single text-center d-flex flex-row wow animate fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.4s">
                                    
                                    <div class="coundown d-flex flex-column">
                                        <h2 class="odometer" data-odometer-final="500">&nbsp;</h2>
                                        <a href="#">Project Completed</a>
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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
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

    <!-- =============== Sponsor-section start  =============== -->

    <div class="sponsor-section pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 d-flex justify-content-lg-start justify-content-center">
                    <div class="section-title primary5 text-start mb-0">
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
    
@endsection