@extends('site.includes.layouts.main')

@section("meta")
	<title>Introduction to Our Coding Services</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="type" content="Champ Ventures">
    <meta property="title" content="Introduction to Our Coding Services">
    <meta name="keyword" content="MEDICAL BILLING SERVICES, MEDICAL BILLING SERVICES, MEDICAL BILLING SERVICESMEDICAL BILLING SERVICES, MEDICAL AUDITING SERVICES, PHYSICIAN CREDENTIALING SERVICES">
    <meta name="description" content="Our coding services are tailored to meet the unique needs of various medical specialties." itemprop="description"> 
    <meta property="image" content="/assets/img/medical_billing/bg_coding.png">
@endsection

@section('content')
    <div class="section1">
        <section id="hero" class="d-flex align-items-center text-light"
            style="height: 500px; background-image: url('/assets/img/medical_billing/bg_coding.png');
             background-size: cover;  background-position: left; background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-lg-6">
                        <div class="text text-center">
                            <h1 class="display-4 text-dark mb-5">Introduction to Our Coding Services</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

        <!-- About Start -->
    <div class="container-xxl py-5 mt-5">
        <div class="container">
            <div class="row g-5 align-items-center flex-column-reverse flex-lg-row">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded align-self-end" src="/assets/img/medical_coding/coding3.jpg" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="/assets/img/medical_coding/coding4.jpg" alt="" style="margin-top: -25%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p style="font-size: 20px !important;">Medical coding is the backbone of the healthcare revenue cycle. Accurate coding not only ensures that your practice receives appropriate reimbursement but also maintains compliance with regulatory requirements. Incorrect or incomplete coding can lead to claim denials, reduced payments, and potential legal issues. At Champ Ventures Inc., we understand the critical role that precise coding plays in the success of your practice.</p>
                    <p style="font-size: 20px !important;" class="mt-4">Our coding services are tailored to meet the unique needs of various medical specialties. Whether you require coding for routine office visits or complex surgical procedures, our experienced coders provide meticulous attention to detail and in-depth knowledge of the latest coding standards. We stay up-to-date with changes in coding guidelines, ensuring that your practice remains compliant and profitable.</p>
                    <a class="btn rounded-pill text-light py-3 px-5 mt-3 bg-gradient" href="/contact-us">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection