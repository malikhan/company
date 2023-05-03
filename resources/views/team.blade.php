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
                    <h2 class="inner-banner-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">Our Team Member</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb gap-3">
                          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Our Team</li>
                        </ol>
                      </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- ===============  banner1-area end=============== -->

    <!-- =============== team-section start  =============== -->
    <div class="team-section2 pt-120 pb-120 position-relative overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-title primary1">
                        <span>-Our Team-</span>
                        <h3>Our Creative Minds</h3>
                        <p class="para">Get the most of reduction in your team’s operating costs for the whole product which creates amazing   UI/UX experiences.</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center g-4">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-team2 style-4 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <div class="team-image">
                            <img src="{{asset('/images/bg/team21.png')}}" alt="image">
                            <div class="social-area gap-3">
                                <ul class="social-links d-flex justify-content-center align-items-center flex-row gap-3">
                                    <li><a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a></li>
                                   <li><a href="https://www.twitter.com/"><i class='bx bxl-twitter'></i></a></li>
                                   <li><a href="https://www.pinterest.com/"><i class='bx bxl-pinterest-alt'></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4 class="name">Marvin McKinney</h4>
                            <p class="designation">Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-team2 style-4 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="team-image">
                            <img src="{{asset('/images/bg/team22.png')}}" alt="image">
                            <div class="social-area gap-3">
                                <ul class="social-links d-flex justify-content-center align-items-center flex-row gap-3">
                                    <li><a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a></li>
                                   <li><a href="https://www.twitter.com/"><i class='bx bxl-twitter'></i></a></li>
                                   <li><a href="https://www.pinterest.com/"><i class='bx bxl-pinterest-alt'></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4 class="name">Cameron Williamson</h4>
                            <p class="designation">Web Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-team2 style-4 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        <div class="team-image">
                            <img src="{{asset('/images/bg/team23.png')}}" alt="image">
                            <div class="social-area gap-3">
                                <ul class="social-links d-flex justify-content-center align-items-center flex-row gap-3">
                                    <li><a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a></li>
                                   <li><a href="https://www.twitter.com/"><i class='bx bxl-twitter'></i></a></li>
                                   <li><a href="https://www.pinterest.com/"><i class='bx bxl-pinterest-alt'></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4 class="name">Brooklyn Simmons</h4>
                            <p class="designation">Ui/Ux Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-team2 style-4 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.8s">
                        <div class="team-image">
                            <img src="{{asset('/images/bg/team24.png')}}" alt="image">
                            <div class="social-area gap-3">
                                <ul class="social-links d-flex justify-content-center align-items-center flex-row gap-3">
                                    <li><a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a></li>
                                   <li><a href="https://www.twitter.com/"><i class='bx bxl-twitter'></i></a></li>
                                   <li><a href="https://www.pinterest.com/"><i class='bx bxl-pinterest-alt'></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4 class="name">Arlene McCoy</h4>
                            <p class="designation">Graphic Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-team2 style-4 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="1s">
                        <div class="team-image">
                            <img src="{{asset('/images/bg/team25.png')}}" alt="image">
                            <div class="social-area gap-3">
                                <ul class="social-links d-flex justify-content-center align-items-center flex-row gap-3">
                                    <li><a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a></li>
                                   <li><a href="https://www.twitter.com/"><i class='bx bxl-twitter'></i></a></li>
                                   <li><a href="https://www.pinterest.com/"><i class='bx bxl-pinterest-alt'></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4 class="name">Savannah Nguyen</h4>
                            <p class="designation">Programmer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-team2 style-4 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="1.2s">
                        <div class="team-image">
                            <img src="{{asset('/images/bg/team26.png')}}" alt="image">
                            <div class="social-area gap-3">
                                <ul class="social-links d-flex justify-content-center align-items-center flex-row gap-3">
                                    <li><a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a></li>
                                   <li><a href="https://www.twitter.com/"><i class='bx bxl-twitter'></i></a></li>
                                   <li><a href="https://www.pinterest.com/"><i class='bx bxl-pinterest-alt'></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4 class="name">Lincoln Anthony</h4>
                            <p class="designation">Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-team2 style-4 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="1.2s">
                        <div class="team-image">
                            <img src="{{asset('/images/bg/team27.png')}}" alt="image">
                            <div class="social-area gap-3">
                                <ul class="social-links d-flex justify-content-center align-items-center flex-row gap-3">
                                    <li><a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a></li>
                                   <li><a href="https://www.twitter.com/"><i class='bx bxl-twitter'></i></a></li>
                                   <li><a href="https://www.pinterest.com/"><i class='bx bxl-pinterest-alt'></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4 class="name"><a href="team.html">Jenny Wilson</a></h4>
                            <p class="designation">Graphic Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-team2 style-4 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="1.2s">
                        <div class="team-image">
                            <img src="{{asset('/images/bg/team28.png')}}" alt="image">
                            <div class="social-area gap-3">
                                <ul class="social-links d-flex justify-content-center align-items-center flex-row gap-3">
                                    <li><a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a></li>
                                   <li><a href="https://www.twitter.com/"><i class='bx bxl-twitter'></i></a></li>
                                   <li><a href="https://www.pinterest.com/"><i class='bx bxl-pinterest-alt'></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4 class="name"><a href="team.html">Robert Fox</a></h4>
                            <p class="designation">Web Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                    <div class="single-team2 style-4 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="1.2s">
                        <div class="team-image">
                            <img src="{{asset('/images/bg/team29.png')}}" alt="image">
                            <div class="social-area gap-3">
                                <ul class="social-links d-flex justify-content-center align-items-center flex-row gap-3">
                                    <li><a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a></li>
                                    <li><a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a></li>
                                   <li><a href="https://www.twitter.com/"><i class='bx bxl-twitter'></i></a></li>
                                   <li><a href="https://www.pinterest.com/"><i class='bx bxl-pinterest-alt'></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4 class="name">Arlene McCoy</h4>
                            <p class="designation">Graphic Designer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- =============== team-section end  =============== -->

@endsection