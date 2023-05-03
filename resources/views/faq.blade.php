@extends('includes.main')
@section('content')
	
	<!-- ========== banner1-area start============= -->

    <div class="inner-banner">
        <img src="{{asset('/images/bg/inner-bannerdot.png')}}" class="inner-bannerdot" alt="image">
        <img src="{{asset('/images/bg/inner-bannerwave.png')}}" class="inner-bannerwave" alt="image">
        <a class="down-arrow-icon" href="#faq">
            <svg viewBox="0 0 14 26" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8182 18.469L7.24862 25.7462L0.679032 18.469C0.272584 18.0188 0.592074 17.3 1.19862 17.3L6.74862 17.3L6.74862 1C6.74862 0.723857 6.97248 0.5 7.24862 0.5C7.52477 0.5 7.74862 0.723857 7.74862 1L7.74862 17.3L13.2986 17.3C13.9052 17.3 14.2247 18.0188 13.8182 18.469Z"/>
            </svg>
        </a>
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center text-center">
                <div class="col-md-6">
                    <h2 class="inner-banner-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">FAQ</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb gap-3">
                          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                        </ol>
                      </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- ===============  banner1-area end=============== -->
     <!-- =============== faq-section start  =============== -->

     <div class="faq-section pt-120 pb-120" id="faq">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4">
                    <div class="sidebar-card wow fadeInLeft"  data-wow-duration="1.5s" data-wow-delay=".2s">
                        <h2>Discover Frequently Asked Questions?</h2>
                        <a href="{{ route('contact') }}" class="eg-btn btn--primary btn--lg">Work Together</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="faq-wrap wow fadeInRight pb-120"  data-wow-duration="1.5s" data-wow-delay=".2s">
						<div class="faq-item hover-btn"><span></span>
							<h5 id="heading10" class="accordion-button style-2 collapsed" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-controls="collapse10">
								01. Curious about how to build your own UX strategy? Here are five simple steps.
							</h5>
							<div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10">
								<div class="faq-body style-2">
								Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar imperdiet. Sed varius, diam vitae posuere semper, libero ex hendrerit nunc, ac sagittis eros metus ut diam. Donec a nibh in libero maximus vehicula. Etiam sit amet condimentum erat. Pellentesque ultrices sagittis turpis, quis tempus ante viverra et.Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar imperdiet. Sed varius, diam vitae posuere semper, tincidunt pulvinar imperdiet. Sed varius, diam vitae posuere semper.
								</div>
							</div>
						</div>
						<div class="faq-item hover-btn"><span></span>
							<h5  id="heading11" class="accordion-button style-2 collapsed" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-controls="collapse11">
								02. Where Could a Career in UX Take You? Agency vs. In-House vs. Freelance?
							</h5>
							<div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11">
								<div class="faq-body style-2">
								Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar imperdiet. Sed varius, diam vitae posuere semper, libero ex hendrerit nunc, ac sagittis eros metus ut diam. Donec a nibh in libero maximus vehicula. Etiam sit amet condimentum erat. Pellentesque ultrices sagittis turpis, quis tempus ante viverra et.Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar imperdiet. Sed varius, diam vitae posuere semper, tincidunt pulvinar imperdiet. Sed varius, diam vitae posuere semper.
								</div>
							</div>
						</div>
						<div class="faq-item hover-btn"><span></span>
							<h5 id="heading12" class="accordion-button style-2 collapsed" data-bs-toggle="collapse" data-bs-target="#collapse12"  aria-controls="collapse12">
								03. What Is a Problem Statement in UX? (And How To Write One?
							</h5>
							<div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12">
								<div class="faq-body style-2">
								Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar imperdiet. Sed varius, diam vitae posuere semper, libero ex hendrerit nunc, ac sagittis eros metus ut diam. Donec a nibh in libero maximus vehicula. Etiam sit amet condimentum erat. Pellentesque ultrices sagittis turpis, quis tempus ante viverra et.Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar imperdiet. Sed varius, diam vitae posuere semper, tincidunt pulvinar imperdiet. Sed varius, diam vitae posuere semper.
								</div>
							</div>
						</div>
						<div class="faq-item hover-btn"><span></span>
							<h5 id="heading13" class="accordion-button style-2 collapsed" data-bs-toggle="collapse" data-bs-target="#collapse13"  aria-controls="collapse13">
								04. There are several techniques UX designers employ to arrive at a succinct ?
							</h5>
							<div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13">
								<div class="faq-body style-2">
								Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar imperdiet. Sed varius, diam vitae posuere semper, libero ex hendrerit nunc, ac sagittis eros metus ut diam. Donec a nibh in libero maximus vehicula. Etiam sit amet condimentum erat. Pellentesque ultrices sagittis turpis, quis tempus ante viverra et.Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar imperdiet. Sed varius, diam vitae posuere semper, tincidunt pulvinar imperdiet. Sed varius, diam vitae posuere semper.
								</div>
							</div>
						</div>
                        <div class="faq-item hover-btn"><span></span>
							<h5 id="heading14" class="accordion-button style-2 collapsed" data-bs-toggle="collapse" data-bs-target="#collapse14"  aria-controls="collapse14">
								05.What are the obstacles users are facing? What are they trying to do?
							</h5>
							<div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14">
								<div class="faq-body style-2">
								Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar imperdiet. Sed varius, diam vitae posuere semper, libero ex hendrerit nunc, ac sagittis eros metus ut diam. Donec a nibh in libero maximus vehicula. Etiam sit amet condimentum erat. Pellentesque ultrices sagittis turpis, quis tempus ante viverra et.Morbi aliquam quis quam in luctus. Nullam tincidunt pulvinar imperdiet. Sed varius, diam vitae posuere semper, tincidunt pulvinar imperdiet. Sed varius, diam vitae posuere semper.
								</div>
							</div>
						</div>
					</div>
                    <div class="section-title primary4">
                        <span>-Your Question-</span>
                        <h3>Write A Question</h3>
                        <p class="para">Get the most of reduction in your team’s operating costs for the whole product which creates amazing   UI/UX experiences.</p>
                    </div>
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

    <!-- =============== faq-section end  =============== -->
@endsection