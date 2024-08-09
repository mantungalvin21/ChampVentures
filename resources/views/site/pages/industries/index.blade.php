@extends('site.includes.layouts.main')

@section("meta")
	<title>Industries</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="type" content="Champ Ventures">
    <meta property="title" content="Industries">
    <meta name="keyword" content="MEDICAL BILLING SERVICES, MEDICAL BILLING SERVICES, MEDICAL BILLING SERVICESMEDICAL BILLING SERVICES, MEDICAL AUDITING SERVICES, PHYSICIAN CREDENTIALING SERVICES">
    <meta name="description" content="Here are the top specialties in which we help healthcare physicians across.." itemprop="description"> 
    <meta property="image" content="/assets/img/industries/header1.png">
@endsection

@section('content')
    <div class="section1">
        <section id="hero" class="d-flex align-items-center text-light"
            style="height: 500px; background-image: url('/assets/img/industries/header1.png');
             background-size: cover;  background-position: left; background-repeat: no-repeat;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7"></div>
                    <div class="col-lg-5">
                        <div class="text">
                            <h1 class="display-4 text-dark mb-5">Industries</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="container text-center my-5">
             <h3 class="text-dark">Here are the top specialties in which we help healthcare physicians across the United States address their Medical Billing and Credentialing challenges.</h3>
    </div>

    <!-- About Start -->
    {{-- <div class="container-xxl py-5 mt-5">
        <div class="container">
            <div class="row g-5 align-items-center flex-column-reverse flex-lg-row">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded align-self-end" src="/assets/img/industries/hero1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-8 wow fadeIn" data-wow-delay="0.5s">
                    <h4>Enhance Your Medical Billing Efficiency with Specialized Gastroenterology Billing Services.</h4>
                    <p class="mt-5">At Champ Ventures, we specialize in providing comprehensive tailored to the unique needs of gastroenterology practices. Our goal is to streamline your billing process, reduce administrative burdens, and maximize your revenue, allowing you to focus on delivering exceptional patient care. </p>
                    <a class="btn rounded-pill text-light py-3 px-5 mt-3 bg-gradient" href="/contact-us">View More</a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- About End -->

       <!-- Service Start -->
    <div class="container-xxl py-5" id="services">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1>Our Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-services-card rounded h-100 p-5 text-center">
                        <img class="img-fluid rounded align-self-end" src="/assets/img/industries/hero1.png" alt="">
                        <h4 class="mb-3 mt-4">Gastroenterology</h4>
                        <p class="mb-4">Enhance Your Medical Billing Efficiency with Specialized Gastroenterology Billing Services.</p>
                        {{-- <a class="btn" href="/industries/gastroenterology"><i class="fa fa-plus text-secondary me-3"></i>Learn More</a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-services-card rounded h-100 p-5 text-center">
                        <img class="img-fluid rounded align-self-end" src="/assets/img/industries/hero2.png" alt="">
                        <h4 class="mb-3 mt-4">Physical Therapy</h4>
                        <p class="mb-4">Our efficient process ensures professional, reliable, and accurate Physical Therapy Billing Services.</p>
                        {{-- <a class="btn" href="/industries/physical_therapy"><i class="fa fa-plus text-secondary me-3"></i>Learn More</a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-services-card rounded h-100 p-5 text-center">
                        <img class="img-fluid rounded align-self-end" src="/assets/img/industries/hero3.png" alt="">
                        <h4 class="mb-3 mt-4">Pediatric Medical</h4>
                        <p class="mb-4">At Champ Ventures, we are dedicated to ensuring you receive the maximum reimbursement for your pediatric healthcare services. </p>
                        {{-- <a class="btn" href="/industries/pediatric_medical"><i class="fa fa-plus text-secondary me-3"></i>Learn More</a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-services-card rounded h-100 p-5 text-center">
                        <img class="img-fluid rounded align-self-end" src="/assets/img/industries/hero4.png" alt="">
                        <h4 class="mb-3 mt-4">Pain Management</h4>
                        <p class="mb-4">Optimize your revenue cycle and boost operational efficiency with our specialized reimbursement services for pain management healthcare providers.</p>
                        {{-- <a class="btn" href="/industries/pain_management"><i class="fa fa-plus text-secondary me-3"></i>Learn More</a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-services-card rounded h-100 p-5 text-center">
                        <img class="img-fluid rounded align-self-end" src="/assets/img/industries/hero5.png" alt="">
                        <h4 class="mb-3 mt-4">Internal Medicine</h4>
                        <p class="mb-4">Optimize your internal medicine practice’s finances with our Integrated Medical Billing Solutions.</p>
                        {{-- <a class="btn" href="/industries/internal_medicine"><i class="fa fa-plus text-secondary me-3"></i>Learn More</a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-services-card rounded h-100 p-5 text-center">
                        <img class="img-fluid rounded align-self-end" src="/assets/img/industries/hero6.png" alt="">
                        <h4 class="mb-3 mt-4">Plastic Surgery</h4>
                        <p class="mb-4">Enhance billing efficiency and ensure compliance with our expert plastic surgery medical billing solutions.</p>
                        {{-- <a class="btn" href="/industries/plastic_surgery"><i class="fa fa-plus text-secondary me-3"></i>Learn More</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection