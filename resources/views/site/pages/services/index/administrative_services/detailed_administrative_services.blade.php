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
            style="height: 500px; background-image: url('/assets/img/medical_billing/bg_administrative.png');
             background-size: cover;  background-position: left; background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-lg-6">
                        <div class="text text-center">
                            <h1 class="display-4 text-dark mb-5">Detailed Administrative Services.</h1>
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
                        <h2 class="text-dark mb-4">1. Patient Registration</h2>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                      <i class="far fa-check-circle text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Purpose: </h5>
                                        <p class="text-dark mb-2">To ensure a seamless and accurate onboarding process for new patients.</p>
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
                                            <li class="text-dark mt-3"><b>Data Collection:</b> Gathering all necessary patient information through electronic or paper forms.</li>
                                            <li class="text-dark mt-3"><b>Verification:</b> Ensuring the accuracy of the collected data by cross-referencing with patient records and insurance information.</li>
                                            <li class="text-dark mt-3"><b>System Entry:</b> Inputting the verified information into the practice’s electronic health record (EHR) system to create a new patient file.</li>
                                            <li class="text-dark mt-3"><b>Patient Communication:</b> Providing patients with all necessary information about their appointments, practice policies, and required documentation.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="/assets/img/administrative/hero5.jpg" style="object-fit: cover;" alt="">
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
                        <img class="position-absolute img-fluid w-100 h-100" src="/assets/img/administrative/hero6.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 p-5 py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h2 class="text-dark mb-4">2. Benefit Verification</h2>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                      <i class="far fa-check-circle text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Purpose: </h5>
                                        <p class="text-dark mb-2">To confirm patient insurance coverage and eligibility for services.</p>
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
                                            <li class="text-dark mt-3"><b>Insurance Information Collection:</b> Gathering insurance details from patients during registration or appointment scheduling.</li>
                                            <li class="text-dark mt-3"><b>Verification:</b> Contacting insurance providers to verify coverage, eligibility, and benefits for specific services.</li>
                                            <li class="text-dark mt-3"><b>Documentation:</b> Recording verified information in the patient’s file and updating the EHR system.</li>
                                            <li class="text-dark mt-3"><b>Patient Notification:</b> Informing patients of their coverage status, co-pays, deductibles, and any out-of-pocket expenses.</li>
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
                        <h2 class="text-dark mb-4">3. Precertification</h2>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                      <i class="far fa-check-circle text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Purpose: </h5>
                                        <p class="text-dark mb-2">To obtain necessary approvals from insurance providers before treatment to avoid delays.</p>
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
                                            <li class="text-dark mt-3"><b>Requirement Identification: </b> Identifying which services or procedures require precertification based on insurance policies.</li>
                                            <li class="text-dark mt-3"><b>Submission:</b> Preparing and submitting the required documentation to the insurance provider for approval.</li>
                                            <li class="text-dark mt-3"><b>Follow-Up:</b> Tracking the status of the precertification request and following up with the insurance provider as needed.</li>
                                            <li class="text-dark mt-3"><b>Approval Documentation:</b> Recording the approval details in the patient’s file and informing the healthcare provider and patient of the authorization.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="/assets/img/administrative/hero7.jpg" style="object-fit: cover;" alt="">
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
                        <img class="position-absolute img-fluid w-100 h-100" src="/assets/img/administrative/hero8.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 p-5 py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h2 class="text-dark mb-4">4. Prior Authorization</h2>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                      <i class="far fa-check-circle text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Purpose: </h5>
                                        <p class="text-dark mb-2">To manage prior authorizations required by insurance providers to ensure compliance and reduce claim denials.</p>
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
                                            <li class="text-dark mt-3"><b>Authorization Requirement Check:</b> Reviewing patient insurance plans to determine if prior authorization is needed for specific services.</li>
                                            <li class="text-dark mt-3"><b>Documentation Preparation:</b> Compiling all necessary medical documentation and evidence to support the authorization request.</li>
                                            <li class="text-dark mt-3"><b>Request Submission:</b> Submitting the prior authorization request to the insurance provider.</li>
                                            <li class="text-dark mt-3"><b>Monitoring and Follow-Up:</b> Monitoring the status of the request and following up with the insurance provider to ensure timely approval.</li>
                                            <li class="text-dark mt-3"><b>Communication:</b> Updating the healthcare provider and patient on the authorization status and any additional requirements.</li>
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
                        <h2 class="text-dark mb-4">5. Project Management</h2>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                      <i class="far fa-check-circle text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Purpose: </h5>
                                        <p class="text-dark mb-2">To oversee and manage administrative projects to ensure they are completed on time and within budget.</p>
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
                                            <li class="text-dark mt-3"><b>Project Planning:</b> Defining the scope, objectives, and timeline for administrative projects.</li>
                                            <li class="text-dark mt-3"><b>Resource Allocation:</b> Assigning the necessary resources and personnel to the project.</li>
                                            <li class="text-dark mt-3"><b>Execution and Monitoring:</b> Implementing the project plan and monitoring progress to ensure it stays on track.</li>
                                            <li class="text-dark mt-3"><b>Reporting:</b> Providing regular updates and reports on the project’s status to stakeholders.</li>
                                            <li class="text-dark mt-3"><b>Completion and Evaluation:</b> Ensuring the project is completed on time and conducting a post-project evaluation to identify areas for improvement.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="/assets/img/administrative/hero9.jpg" style="object-fit: cover;" alt="">
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