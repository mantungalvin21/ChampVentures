@extends('site.includes.layouts.main')

@section("meta")
	<title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="type" content="Synergy Tax & Finance">
    <meta property="title" content="Home">
    <meta name="keyword" content="Financial, Accounting Services, Payroll, Bookkeeping, Tax Planning & Preparation">
    <meta name="description" content="We specialize in providing comprehensive accounting solutions tailored to meet your unique business needs." itemprop="description"> 
    <meta property="image" content="/dist/images/header1.jpg">
@endsection

@section('content')
   <!-- Header Start -->
    <div class="container-fluid header p-0 mb-5" style="background: #e1dcc7;">
        <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-dark mb-5">Focus on your patients... <br> We'll focus on your paperwork!</h1>
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="border-start border-light ps-4">
                            <h1 class="text-dark mb-1">Peace of Mind is here.</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="/assets/img/carousel-1.jpg" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">MEDICAL BILLING SERVICES</h1>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="/assets/img/carousel-2.jpg" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">MEDICAL CODING SERVICES</h1>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="/assets/img/carousel-3.jpg" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">PHYSICIAN CREDENTIALING SERVICES</h1>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="/assets/img/carousel-4.jpg" alt="">
                        <div class="owl-carousel-text">
                            <h1 class="display-1 text-white mb-0">MEDICAL AUDITING SERVICES – <br> Medical Professional Fee (Pro-Fee)</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

        <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center flex-column-reverse flex-lg-row">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="/assets/img/carousel-1.jpg" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="/assets/img/carousel-2.jpg" alt="" style="margin-top: -25%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p style="font-size: 20px !important;">You sought a career as a medical or mental health professional to assist people with their healing process, not to be inundated with administrative to ensure the longevity and success of your practice. </p>
                    <p style="font-size: 20px !important;" class="mb-4">This is where Champ Ventures, Inc. comes in. We handle administrative process so you can focus on your patients: a win-win situation. We offer a variety of services for you to choose from. We believe all practices are not made equal and so we customize our services to fit the needs of our clients. </p>
                    <a class="btn rounded-pill text-light py-3 px-5 mt-3 bg-gradient" href="/contact-us">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

       <!-- Service Start -->
    <div class="container-xxl py-5" id="services">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h3>Our Services</h3>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-services-card rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-solid fa-file-medical fs-4 text-secondary"></i>
                            
                        </div>
                        <h4 class="mb-3">MEDICAL BILLING SERVICES</h4>
                        <p class="mb-4">We understand that efficient billing processes are crucial to the financial health and success of your medical practice.</p>
                        <a class="btn" href="/services/billing_services"><i class="fa fa-plus text-secondary me-3"></i>Learn More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-services-card rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-solid fa-laptop-medical fs-4 text-secondary"></i>
                        </div>
                        <h4 class="mb-3">MEDICAL CODING SERVICES</h4>
                        <p class="mb-4">In the complex world of healthcare, accurate medical coding is essential for compliance, reimbursement, and overall operational efficiency. Champ Ventures Inc.</p>
                        <a class="btn" href="/services/coding_services"><i class="fa fa-plus text-secondary me-3"></i>Learn More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-services-card rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-solid fa-notes-medical fs-4 text-secondary"></i>
                        </div>
                        <h4 class="mb-3">PHYSICIAN CREDENTIALING SERVICES</h4>
                        <p class="mb-4">Credentialing is a critical process for healthcare providers, ensuring that practitioners meet the necessary qualifications and standards to deliver care.</p>
                        <a class="btn" href="/services/physician_credentialing_services"><i class="fa fa-plus text-secondary me-3"></i>Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-services-card rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-solid fa-calculator" fs-4 text-secondary"></i>
                            
                        </div>
                        <h4 class="mb-3">MEDICAL AUDITING SERVICES</h4>
                        <p class="mb-4">Effective medical auditing is essential for ensuring compliance, optimizing revenue, and maintaining the integrity of a medical practice.</p>
                        <a class="btn" href="/services/auditing_services"><i class="fa fa-plus text-secondary me-3"></i>Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-services-card rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-solid fa-user-md" fs-4 text-secondary"></i>
                        </div>
                        <h4 class="mb-3">MEDICAL ADMINISTRATIVE SERVICES</h4>
                        <p class="mb-4">In the fast-paced world of healthcare, efficient administrative services are crucial for the smooth operation of any medical practice.</p>
                        <a class="btn" href="/services/administrative_services"><i class="fa fa-plus text-secondary me-3"></i>Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

        <!-- Feature Start -->
    <div id="#whychoose" class="container-fluid overflow-hidden my-5 px-lg-0" style="background: #e1dcc7;">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h2 class="text-dark mb-4">Why Choose Champ Ventures Inc.?</h2>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                       <i class="fa fa-solid fa-user-tie text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Experienced Team:</h5>
                                        <p class="text-dark mb-2">Our team of professionals brings extensive experience and expertise to every aspect of our services.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-solid fa-user-check text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Client-Centric Approach:</h5>
                                        <p class="text-dark mb-2">We prioritize your needs and tailor our services to meet your specific requirements.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-solid fa-file-signature text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Comprehensive Services:</h5>
                                        <p class="text-dark mb-2">From administrative support to complex billing and coding, we offer a full spectrum of services to support your practice.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 55px; height: 55px;">
                                        <i class="fa fa-solid fa-thumbs-up text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Quality Assurance:</h5>
                                        <p class="text-dark mb-2">We adhere to the highest standards of quality and compliance to ensure your practice operates smoothly and efficiently.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="/assets/img/carousel-4.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

        <!-- About Start -->
    <div class="container-xxl py-5" style="padding-top: 100px !important;">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h2 class="mb-4">Our History</h2>
                    <p style="font-size: 20px !important;">Champ Ventures, Inc was established 2008 out of the need to provide “End to End” Administrative and Revenue Cycle Management assistance to organizations that are conscious of their bottom line but in need of support to achieve growth.</p>
                    <p style="font-size: 20px !important;" class="mb-4"> Our years of experience coupled with qualified and passionate staffing has been instrumental in achieving our “one-stop shop” model and guaranteeing our success.</p>
                    <h4>Our Guarantee:</h4>
                    <p style="font-size: 20px !important;"><i class="far fa-check-circle text-secondary me-3"></i>Premium quality services for the price</p>
                    <p style="font-size: 20px !important;"><i class="far fa-check-circle text-secondary me-3"></i>Streamlined workflow - fast and efficient turn around time</p>
                    <p style="font-size: 20px !important;"><i class="far fa-check-circle text-secondary me-3"></i>Effective communication and provider(s) involvement</p>
                    <p style="font-size: 20px !important;"><i class="far fa-check-circle text-secondary me-3"></i>Overall reduction in overhead cost and increase in cashflow</p>
                    <a class="btn rounded-pill text-light py-3 px-5 mt-3 bg-gradient" href="/contact-us">Contact Us</a>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="/assets/img/carousel-1.jpg" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="/assets/img/carousel-2.jpg" alt="" style="margin-top: -25%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

       <!-- Appointment Start -->
    <div class="container-xxl py-5" style="padding-top: 100px !important;">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-4">Make An Appointment.</h1>
                    <p class="mb-4">At Champ Ventures, we are dedicated to supporting Medical Services and answering any questions you may have. Whether you need assistance with our services, want to discuss potential partnerships, or have general inquiries, we're here to help.</p>
                    <div class="bg-services-card rounded d-flex align-items-center p-5 mb-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-secondary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Call Us Now</p>
                            <h5 class="mb-0"> + 678-471-4540</h5>
                        </div>
                    </div>
                    <div class="bg-services-card rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-envelope-open text-secondary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Mail Us Now</p>
                            <h5 class="mb-0">champventuresinc@yahoo.com</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-services-card rounded h-100 d-flex align-items-center p-5">
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Choose Services</option>
                                        <option value="1">BILLING SERVICES</option>
                                        <option value="2">CODING SERVICES</option>
                                        <option value="3">CREDENTIALING SERVICES</option>
                                        <option value="3">AUDITING SERVICES</option>
                                        <option value="3">ADMINISTRATIVE SERVICES</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Choose Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Choose Date" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" rows="5" placeholder="Describe your problem"></textarea>
                                </div>
                                <div class="col-12">
                                    <button  class="btn bg-gradient text-light w-100 py-3" type="submit">Book Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
@endsection