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
                            <h1 class="display-4 text-dark mb-5">Company Values</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

        <!-- About Start -->
    <div class="container-fluid py-5 mt-5">
        <div class="container-fluid">
            <div class="row g-5 align-items-center flex-column-reverse flex-lg-row">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="/assets/img/carousel-1.jpg" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="/assets/img/carousel-2.jpg" alt="" style="margin-top: -25%;">
                    </div>
                </div>
                <div class="col-lg-8 wow fadeIn bg-services-card p-4" data-wow-delay="0.5s">
                    <div class="row g-4">
                        <p class="text-dark fs-4"><b>At Champ Ventures Inc.</b>, our core values guide our actions and shape our company culture. We are committed to:</p>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                    <i class="far fa-check-circle text-secondary"></i>
                                </div>
                                <div class="ms-4">
                                    <h5 class="text-dark mb-0">Leadership</h5>
                                    <p class="text-dark mb-2">Inspiring and empowering our team and clients to reach their full potential.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                    <i class="far fa-check-circle text-secondary"></i>
                                </div>
                                <div class="ms-4">
                                    <h5 class="text-dark mb-0">Teamwork</h5>
                                    <p class="text-dark mb-2">Collaborating effectively to achieve common goals and deliver exceptional results.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                    <i class="far fa-check-circle text-secondary"></i>
                                </div>
                                <div class="ms-4">
                                    <h5 class="text-dark mb-0">Fun</h5>
                                    <p class="text-dark mb-2">Fostering a positive and enjoyable work environment where happiness and well-being are prioritized.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                    <i class="far fa-check-circle text-secondary"></i>
                                </div>
                                <div class="ms-4">
                                    <h5 class="text-dark mb-0">Passion</h5>
                                    <p class="text-dark mb-2">Believing in the meaningful impact of our work and striving to make a difference every day.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                    <i class="far fa-check-circle text-secondary"></i>
                                </div>
                                <div class="ms-4">
                                    <h5 class="text-dark mb-0">Quality</h5>
                                    <p class="text-dark mb-2">Pursuing excellence in all we do, ensuring high standards of performance and service.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                    <i class="far fa-check-circle text-secondary"></i>
                                </div>
                                <div class="ms-4">
                                    <h5 class="text-dark mb-0">Trust</h5>
                                    <p class="text-dark mb-2">Building and maintaining strong, reliable partnerships with our clients and stakeholders.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                    <i class="far fa-check-circle text-secondary"></i>
                                </div>
                                <div class="ms-4">
                                    <h5 class="text-dark mb-0">Integrity</h5>
                                    <p class="text-dark mb-2">Upholding the highest ethical standards and doing what is right, even when no one is watching.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                    <i class="far fa-check-circle text-secondary"></i>
                                </div>
                                <div class="ms-4">
                                    <h5 class="text-dark mb-0">Honesty</h5>
                                    <p class="text-dark mb-2">Being transparent and truthful in all our interactions, always and forever.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                    <i class="far fa-check-circle text-secondary"></i>
                                </div>
                                <div class="ms-4">
                                    <h5 class="text-dark mb-0">Humility</h5>
                                    <p class="text-dark mb-2">Remaining open to feedback, continually learning, and striving for personal and professional growth.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

@endsection