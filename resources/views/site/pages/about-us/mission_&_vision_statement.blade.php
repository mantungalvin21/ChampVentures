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
    <div class="section1">
        <section id="hero" class="d-flex align-items-center text-light"
            style="height: 500px; background-image: url('/assets/img/medical_billing/bg_about.png');
             background-size: cover;  background-position: center; background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-lg-6">
                        <div class="text text-center">
                            <h1 class="display-4 text-dark mb-5">Mission & Vision Statement</h1>
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
                        <img class="img-fluid rounded align-self-end" src="/assets/img/mission.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="row g-4">
                        <h3>Mission Statement</h3>
                        <p class="text-dark" style="font-size: 18px;">At Champ Ventures Inc., our mission is to provide exceptional administrative and medical support services that enhance the efficiency and financial health of healthcare practices. We are dedicated to delivering tailored solutions that meet the unique needs of our clients, ensuring compliance, maximizing revenue, and allowing healthcare providers to focus on delivering quality care to their patients.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
       <!-- About Start -->
    <div class="container-xxl py-5 mt-5">
        <div class="container">
            <div class="row g-5 align-items-center flex-column-reverse flex-lg-row">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="row g-4">
                        <h3>Vision Statement</h3>
                        <p class="text-dark" style="font-size: 18px;">Our vision is to be the leading provider of comprehensive administrative and medical support services, recognized for our commitment to excellence, innovation, and client satisfaction. We aim to set the standard for quality and reliability in the industry, empowering healthcare providers to achieve their operational and financial goals with confidence.</p>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded align-self-start" src="/assets/img/vision.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection