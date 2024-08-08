@extends('site.includes.layouts.main')

@section("meta")
	<title>Overview</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="type" content="Champ Ventures">
    <meta property="title" content="Overview">
    <meta name="keyword" content="MEDICAL BILLING SERVICES, MEDICAL BILLING SERVICES, MEDICAL BILLING SERVICESMEDICAL BILLING SERVICES, MEDICAL AUDITING SERVICES, PHYSICIAN CREDENTIALING SERVICES">
    <meta name="description" content="In the complex world of healthcare, accurate medical coding is essential for compliance," itemprop="description"> 
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
                            <h1 class="display-4 text-dark mb-5">Overview</h1>
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
                        <img class="img-fluid rounded align-self-end" src="/assets/img/medical_coding/coding1.jpg" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="/assets/img/medical_coding/coding2.jpg" alt="" style="margin-top: -25%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p style="font-size: 20px !important;">In the complex world of healthcare, accurate medical coding is essential for compliance, reimbursement, and overall operational efficiency. <br><br> Champ Ventures Inc. offers comprehensive coding services designed to meet the diverse needs of your medical practice. <br><br> Our team of certified coders is dedicated to ensuring that your practice adheres to industry standards while maximizing reimbursement opportunities.</p>
                    <a class="btn rounded-pill text-light py-3 px-5 mt-3 bg-gradient" href="/contact-us">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection