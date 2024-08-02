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
            style="height: 500px; background-image: url('/assets/img/medical_billing/bg_credentialing.png');
             background-size: cover;  background-position: left; background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-lg-6">
                        <div class="text text-center">
                            <h1 class="display-4 text-dark mb-5">Detailed Credentialing Services</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Feature Start -->
    <div id="#whychoose" class="container overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 p-5 py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h2 class="text-dark mb-4">1. Provider Enrollment</h2>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                      <i class="far fa-check-circle text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Purpose: </h5>
                                        <p class="text-dark mb-2">To ensure that healthcare providers are credentialed with insurance payors and healthcare facilities.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                        <i class="far fa-check-circle text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Process:</h5>
                                        <ul>
                                            <li class="text-dark mt-3"><b>Documentation Preparation:</b> We assist in gathering and preparing all necessary documentation required for provider enrollment.</li>
                                            <li class="text-dark mt-3"><b>Application Submission:</b> Our team submits the complete enrollment applications to insurance payors and healthcare facilities.</li>
                                            <li class="text-dark mt-3"><b>Follow-Up:</b> We follow up on submitted applications to ensure timely processing and address any additional requests or requirements from payors.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="/assets/img/credentialing/hero5.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
     <!-- Feature Start -->
    <div id="#whychoose" class="container-fluid overflow-hidden my-5 px-lg-0 bg-services-card">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="/assets/img/credentialing/hero6.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 p-5 py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h2 class="text-dark mb-4">2. Re-Credentialing</h2>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                      <i class="far fa-check-circle text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Purpose: </h5>
                                        <p class="text-dark mb-2">To maintain the credentials of healthcare providers and ensure they remain in good standing with insurance companies and healthcare facilities.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                        <i class="far fa-check-circle text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Process:</h5>
                                        <ul>
                                            <li class="text-dark mt-3"><b>Credential Review:</b> We review existing credentials and identify upcoming renewal deadlines.</li>
                                            <li class="text-dark mt-3"><b>Documentation Update:</b> Our team updates all necessary documentation, including licenses, certifications, and professional qualifications.</li>
                                            <li class="text-dark mt-3"><b>Application Submission:</b> We submit re-credentialing applications to the appropriate payors and facilities, ensuring timely renewal of credentials.</li>
                                            <li class="text-dark mt-3"><b>Compliance Check:</b> We verify that all credentials meet current regulatory and institutional requirements.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
      <!-- Feature Start -->
    <div id="#whychoose" class="container overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 p-5 py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h2 class="text-dark mb-4">3. Primary Source Verification</h2>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                      <i class="far fa-check-circle text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Purpose: </h5>
                                        <p class="text-dark mb-2">To verify the qualifications and credentials of healthcare providers through primary sources, ensuring authenticity and compliance.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                        <i class="far fa-check-circle text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Process:</h5>
                                        <ul>
                                            <li class="text-dark mt-3"><b>Verification Requests:</b> We request verification directly from primary sources, such as educational institutions, licensing boards, and certification bodies.</li>
                                            <li class="text-dark mt-3"><b>Documentation Collection:</b> Our team collects and compiles all verification documents, ensuring they are accurate and up-to-date.</li>
                                            <li class="text-dark mt-3"><b>Compliance Assurance:</b> We ensure that all verification processes comply with regulatory standards, providing a reliable and trustworthy credentialing process.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="/assets/img/credentialing/hero7.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
    <!-- Feature Start -->
    <div id="#whychoose" class="container-fluid overflow-hidden my-5 px-lg-0 bg-services-card">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="/assets/img/credentialing/hero8.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 p-5 py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h2 class="text-dark mb-4">4. Credentialing Compliance</h2>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                      <i class="far fa-check-circle text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Purpose: </h5>
                                        <p class="text-dark mb-2">To ensure that all credentialing processes comply with industry regulations and standards, minimizing the risk of non-compliance.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                        <i class="far fa-check-circle text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Process:</h5>
                                        <ul>
                                            <li class="text-dark mt-3"><b>Regulatory Review:</b> Our team stays up-to-date with the latest regulatory requirements and industry standards for credentialing.</li>
                                            <li class="text-dark mt-3"><b>Policy Implementation:</b> We implement credentialing policies and procedures that align with regulatory standards and best practices.</li>
                                            <li class="text-dark mt-3"><b>Ongoing Monitoring:</b> We continuously monitor credentialing processes to ensure ongoing compliance and address any issues promptly.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

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
                                    <textarea class="form-control border-0" rows="5" placeholder="I am interested in*"></textarea>
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