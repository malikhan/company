@extends('includes.main')
@section('content')

	<!-- ========== banner1-area start============= -->

    <div class="inner-banner">
        <img src="assets/images/bg/inner-bannerdot.png" class="inner-bannerdot" alt="image">
        <img src="assets/images/bg/inner-bannerwave.png" class="inner-bannerwave" alt="image">
        <a class="down-arrow-icon" href="#faq">
            <svg viewBox="0 0 14 26" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8182 18.469L7.24862 25.7462L0.679032 18.469C0.272584 18.0188 0.592074 17.3 1.19862 17.3L6.74862 17.3L6.74862 1C6.74862 0.723857 6.97248 0.5 7.24862 0.5C7.52477 0.5 7.74862 0.723857 7.74862 1L7.74862 17.3L13.2986 17.3C13.9052 17.3 14.2247 18.0188 13.8182 18.469Z"/>
            </svg>
        </a>
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center text-center">
                <div class="col-md-6">
                    <h2 class="inner-banner-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">Contact Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb gap-3">
                          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                      </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- ===============  banner1-area end=============== -->

     


     <!-- =============== form-section start  =============== -->

     <div class="form-section pt-120 pb-120" id="faq">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="section-title primary4">
                        <span>-Get in Touch-</span>
                        <h3>Let’s Get in Touch</h3>
                        <p class="para">Get the most of reduction in your team’s operating costs for the whole product which creates amazing   UI/UX experiences.</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
               <div class="col-lg-8">
                <form>
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="form-inner">
                                <input type="text" name="fname" placeholder="Your Name: *">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-inner">
                                <input type="text" name="fname" placeholder="Your E-mail:">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-inner">
                                <input type="text" name="fname" placeholder="Phone Number:">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-inner">
                                <input type="text" name="fname" placeholder="Subject:">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-inner">
                                <textarea name="message" cols="30" rows="6" placeholder="Write A Question "></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 text-center">
                            <input type="submit" value="Send Now" class="eg-btn btn--submit">
                        </div>
                    </div>
                </form>
               </div>
            </div>
        </div>
    </div>

    <!-- =============== form-section end  =============== -->

@endsection