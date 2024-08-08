@extends('site.includes.layouts.main')

@section("meta")
	<title>Overview Credentialing</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="type" content="Champ Ventures">
    <meta property="title" content="Overview Credentialing">
    <meta name="keyword" content="MEDICAL BILLING SERVICES, MEDICAL BILLING SERVICES, MEDICAL BILLING SERVICESMEDICAL BILLING SERVICES, MEDICAL AUDITING SERVICES, PHYSICIAN CREDENTIALING SERVICES">
    <meta name="description" content="Credentialing is a critical process for healthcare providers, ensuring that practitioners" itemprop="description"> 
    <meta property="image" content="/assets/img/medical_billing/bg_credentialing.png">
@endsection

@section('content')
    <div class="section1">
        <section id="hero" class="d-flex align-items-center text-light"
            style="height: 500px; background-image: url('/assets/img/medical_billing/bg_credentialing.png');
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
                        <img class="img-fluid rounded align-self-end" src="/assets/img/credentialing/hero1.jpg" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="/assets/img/credentialing/hero2.jpg" alt="" style="margin-top: -25%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p style="font-size: 20px !important;">Credentialing is a critical process for healthcare providers, ensuring that practitioners meet the necessary qualifications and standards to deliver care. <br><br> At Champ Ventures Inc., we offer comprehensive credentialing services to help your practice maintain compliance, streamline operations, and build trust with patients and insurance payors. <br><br> Our expert team manages every aspect of credentialing, allowing you to focus on patient care without the administrative burden.</p>
                    <a class="btn rounded-pill text-light py-3 px-5 mt-3 bg-gradient" href="/contact-us">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

@endsection