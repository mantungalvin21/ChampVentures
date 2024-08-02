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
            style="height: 500px; background-image: url('/assets/img/medical_billing/bg_2.png');
             background-size: cover;  background-position: center; background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-lg-6">
                        <div class="text text-center">
                            <h1 class="display-4 text-dark mb-5">Medical Billing Services</h1>
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
                        <img class="img-fluid rounded w-75 align-self-end" src="/assets/img/medical_billing/billing1.jpg" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="/assets/img/medical_billing/billing2.jpg" alt="" style="margin-top: -25%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h3 class="mb-5">Overview</h3>
                    <p style="font-size: 20px !important;">We understand that efficient billing processes are crucial to the financial health and success of your medical practice. <br><br> Our comprehensive billing services are designed to optimize your revenue cycle management, ensuring that claims are processed accurately and promptly. <br><br>  We take care of the intricate and time-consuming aspects of billing so that you can focus on what you do best: providing exceptional care to your patients. </p>
                    <a class="btn rounded-pill text-light py-3 px-5 mt-3 bg-gradient" href="/contact-us">Contact Us</a>
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
                    <h3 class="mb-5">Introduction to Our Billing Services</h3>
                    <p style="font-size: 20px !important;">In the ever-evolving landscape of healthcare, accurate and timely billing is essential to maintaining the financial stability of your practice. Errors in coding or delays in claims submission can lead to significant revenue losses and administrative burdens. That's where Champ Ventures Inc. steps in. Our team of experienced professionals is dedicated to providing a seamless and efficient billing process that minimizes errors, reduces claim denials, and accelerates payments. </p>
                    <p style="font-size: 20px !important;" class="mt-4">Our billing services cover every aspect of the revenue cycle, from initial coding and claims submission to payment posting and denial management. We utilize advanced technologies and adhere to industry best practices to ensure that your billing operations are both compliant and efficient. By partnering with us, you can expect increased revenue, improved cash flow, and enhanced operational efficiency.</p>
                    <a class="btn rounded-pill text-light py-3 px-5 mt-3 bg-gradient" href="/contact-us">Contact Us</a>
                </div>
                 <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="/assets/img/medical_billing/billing3.jpg" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="/assets/img/medical_billing/billing4.jpg" alt="" style="margin-top: -25%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

     <!-- Feature Start -->
    <div id="#whychoose" class="container overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <h3 class="text-center mb-5 mt-5">Detailed Billing Services</h3>
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 p-5 py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h2 class="text-dark mb-4">1. Medical Record Coding/Scrubbing of Claims</h2>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                      <i class="far fa-check-circle text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Purpose: </h5>
                                        <p class="text-dark mb-2">To ensure the highest level of accuracy in your medical claims and increase the likelihood of successful first-pass submissions.</p>
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
                                            <li class="text-dark mt-3"><b>Review for Accuracy:</b> Our team of certified medical coders meticulously reviews your medical records to ensure that all claims are accurately coded according to the latest coding standards.</li>
                                            <li class="text-dark mt-3"><b>Addition of Modifiers:</b> We add appropriate modifiers to claims to clarify specific circumstances and ensure accurate processing.</li>
                                            <li class="text-dark mt-3"><b>Compliance Check:</b> We perform thorough compliance checks to ensure that all claims meet the necessary regulatory requirements.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="/assets/img/medical_billing/billing5.jpg" style="object-fit: cover;" alt="">
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
                        <img class="position-absolute img-fluid w-100 h-100" src="/assets/img/medical_billing/billing6.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 p-5 py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h2 class="text-dark mb-4">2. Claims Submission</h2>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                      <i class="far fa-check-circle text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Purpose: </h5>
                                        <p class="text-dark mb-2">To ensure that all claims are submitted promptly and processed efficiently by insurance payors.</p>
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
                                            <li class="text-dark mt-3"><b>Electronic Submission:</b>  We submit claims electronically to expedite the process and reduce the chances of errors.</li>
                                            <li class="text-dark mt-3"><b>Paper Submission:</b> For payors that require paper claims, we handle the manual submission process to ensure timely processing.</li>
                                            <li class="text-dark mt-3"><b>Tracking and Monitoring:</b> We track all submitted claims to confirm receipt and monitor their status, providing regular updates on their progress.</li>
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
                        <h2 class="text-dark mb-4">3. Timely Posting of Payments</h2>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                      <i class="far fa-check-circle text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Purpose: </h5>
                                        <p class="text-dark mb-2">To maintain accurate and up-to-date patient account statuses and ensure financial transparency.</p>
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
                                            <li class="text-dark mt-3"><b>Payment Posting: </b> Our team promptly posts payments to patient accounts as soon as they are received from insurance companies or patients, ensuring that account balances are accurately reflected.</li>
                                            <li class="text-dark mt-3"><b>Account Reconciliation:</b> We regularly reconcile accounts to verify that all payments are correctly applied, preventing discrepancies and ensuring accurate financial records.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="/assets/img/medical_billing/billing7.jpg" style="object-fit: cover;" alt="">
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
                        <img class="position-absolute img-fluid w-100 h-100" src="/assets/img/medical_billing/billing8.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 p-5 py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h2 class="text-dark mb-4">4. Review and Re-Submission of Denials and Rejections</h2>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                      <i class="far fa-check-circle text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Purpose: </h5>
                                        <p class="text-dark mb-2">To resolve outstanding claims and maximize revenue by addressing and correcting denied or rejected claims.</p>
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
                                            <li class="text-dark mt-3"><b>Denial Management:</b> We review all denied and rejected claims to identify the reasons for denials and develop a plan for correction.</li>
                                            <li class="text-dark mt-3"><b>Correction and Re-Submission:</b> Our team corrects any errors or missing information and re-submits the claims for processing, ensuring that they meet all necessary requirements.</li>
                                            <li class="text-dark mt-3"><b>Follow-Up:</b> We follow up with insurance payors to ensure that corrected claims are processed promptly and resolved efficiently.</li>
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
                        <h2 class="text-dark mb-4">5. Monthly Patient Invoice Processing</h2>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                      <i class="far fa-check-circle text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Purpose: </h5>
                                        <p class="text-dark mb-2">To keep patients informed about their financial obligations and ensure timely payment of outstanding balances.</p>
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
                                            <li class="text-dark mt-3"><b>Invoice Generation:</b> We generate detailed invoices for patients, listing all services provided, payments received, and any outstanding balances.</li>
                                            <li class="text-dark mt-3"><b>Invoice Distribution: </b> Invoices are sent to patients on a monthly basis, either electronically or via mail, depending on their preference.</li>
                                            <li class="text-dark mt-3"><b>Patient Support:</b> We provide support to patients with any billing inquiries, ensuring they understand their invoices and payment options.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="/assets/img/medical_billing/billing9.jpg" style="object-fit: cover;" alt="">
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
                        <img class="position-absolute img-fluid w-100 h-100" src="/assets/img/medical_billing/billing10.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 p-5 py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h2 class="text-dark mb-4">6. Monthly Financial Reports</h2>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                      <i class="far fa-check-circle text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Purpose: </h5>
                                        <p class="text-dark mb-2">To provide a clear and comprehensive overview of your practice’s financial health and identify areas for improvement.</p>
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
                                            <li class="text-dark mt-3"><b>Report Generation: </b> We compile detailed financial reports each month, covering all aspects of your revenue cycle, including charges, payments, adjustments, and outstanding balances.</li>
                                            <li class="text-dark mt-3"><b>Analysis:</b> Our team analyzes the financial data to identify trends, strengths, and areas for improvement.</li>
                                            <li class="text-dark mt-3"><b>Recommendations:</b> We provide actionable insights and recommendations to help you optimize your practice’s financial performance.</li>
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
                        <div class="row g-4">
                            <h3 class="my-5">Benefits of Our Billing Services</h3>
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                      <i class="far fa-check-circle text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Increased Revenue:</h5>
                                        <p class="text-dark mb-2">Our thorough coding and prompt claims submission processes help maximize your practice’s revenue.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                      <i class="far fa-check-circle text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Reduced Denials:</h5>
                                        <p class="text-dark mb-2">By proactively reviewing and correcting claims, we significantly reduce the number of denials and rejections, ensuring faster payment.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                      <i class="far fa-check-circle text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Improved Cash Flow:</h5>
                                        <p class="text-dark mb-2">Timely posting of payments and efficient invoice processing contribute to a steady and predictable cash flow.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                      <i class="far fa-check-circle text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Enhanced Compliance:</h5>
                                        <p class="text-dark mb-2">Our expertise in coding and billing ensures that your practice adheres to industry standards and regulations, reducing the risk of compliance issues.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                      <i class="far fa-check-circle text-secondary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="text-dark mb-0">Detailed Financial Insights:</h5>
                                        <p class="text-dark mb-2"> Monthly financial reports provide you with a clear understanding of your practice’s financial health, helping you make informed decisions.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-1007" src="/assets/img/medical_billing/billing11.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

       <!-- About Start -->
    <div class="container-xxl py-5 mt-5">
        <div class="container">
            <div class="row g-5 align-items-center flex-column-reverse flex-lg-row">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="/assets/img/medical_billing/billing12.jpg" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="/assets/img/medical_billing/billing13.jpg" alt="" style="margin-top: -25%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="row g-4">
                        <h3 class="my-5">Why Choose Champ Ventures Inc.?</h3>
                        <div class="col-12">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                    <i class="far fa-check-circle text-secondary"></i>
                                </div>
                                <div class="ms-4">
                                    <h5 class="text-dark mb-0">Expertise: </h5>
                                    <p class="text-dark mb-2">Our team of professionals brings extensive experience in medical billing, coding, and revenue cycle management.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                    <i class="far fa-check-circle text-secondary"></i>
                                </div>
                                <div class="ms-4">
                                    <h5 class="text-dark mb-0">Personalized Service: </h5>
                                    <p class="text-dark mb-2"> We tailor our billing services to meet the unique needs of your practice, providing customized solutions that enhance your operations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light" style="width: 45px; height: 45px;">
                                    <i class="far fa-check-circle text-secondary"></i>
                                </div>
                                <div class="ms-4">
                                    <h5 class="text-dark mb-0">Commitment to Excellence:</h5>
                                    <p class="text-dark mb-2">We are dedicated to delivering high-quality services that improve the efficiency and financial health of your practice.</p>
                                </div>
                            </div>
                        </div>
                        <p class="text-dark" style="font-size: 18px;">By choosing Champ Ventures Inc. for your billing needs, you can trust that your revenue cycle is in expert hands, allowing you to focus on delivering excellent care to your patients.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    {{-- Accordion --}}
    <div class="container py-5">
        <h3 class="text-center my-5">FAQs for Medical Billing</h3>
        <section class="section-padding">
            <div class="container my-5">     
                <button class="accordion">What is included in your billing services?</button>
                <div class="panel services-content">
                    <div class="p-5">
                        <h5>Our billing services at Champ Ventures Inc. include comprehensive support throughout the entire revenue cycle management process. This includes:</h5>
                        <div>
                            <ul>
                                <li class="fs-5">Medical Record Coding/Scrubbing of Claims: Ensuring claims are accurately coded and compliant.</li>
                                <li class="fs-5">Claims Submission: Submitting claims electronically or via paper, as required.</li>
                                <li class="fs-5">Timely Posting of Payments: Posting payments to maintain accurate patient account statuses.</li>
                                <li class="fs-5">Review and Re-Submission of Denials and Rejections: Managing and resolving denied or rejected claims.</li>
                                <li class="fs-5">Monthly Patient Invoice Processing: Generating and distributing patient invoices.</li>
                                <li class="fs-5">Monthly Financial Reports: Providing detailed reports on your practice’s financial health.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <button class="accordion">How do you ensure the accuracy of medical coding?</button>
                <div class="panel services-content">
                <p class="p-5 fs-5">We employ certified medical coders who meticulously review medical records for accuracy. They add appropriate modifiers and perform thorough compliance checks to ensure that all claims are correctly coded according to the latest standards and regulatory requirements.</p>
                </div>

                <button class="accordion">How does the claims submission process work?</button>
                <div class="panel services-content">
                    <div class="p-5">
                        <h5>We handle both electronic and paper claims submission:</h5>
                        <div>
                            <ul>
                                <li class="fs-5"><b>Electronic Submission:</b> We submit claims electronically to expedite processing and reduce errors.</li>
                                <li class="fs-5"><b>Paper Submission:</b> For payors requiring paper claims, we manage the manual submission process. We also track all claims to confirm receipt and monitor their status, providing regular updates.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <button class="accordion">What happens if a claim is denied or rejected?</button>
                <div class="panel services-content">
                 <p class="p-5 fs-5">Our team reviews all denied or rejected claims to identify the reasons for denial. We then correct any errors or missing information and re-submit the claims for processing. We also follow up with insurance payors to ensure timely resolution of these claims.</p>
                </div>

                <button class="accordion">How do you handle payment posting?</button>
                <div class="panel services-content">
                  <p class="p-5 fs-5">We promptly post payments to patient accounts as soon as they are received from insurance companies or patients. Our team ensures that account balances are accurately reflected and regularly reconciles accounts to verify that all payments are correctly applied.</p>
                </div>

                <button class="accordion">What kind of financial reports do you provide?</button>
                <div class="panel services-content">
                  <p class="p-5 fs-5">We compile detailed monthly financial reports covering all aspects of your revenue cycle, including charges, payments, adjustments, and outstanding balances. These reports provide a clear overview of your practice’s financial health and include analysis and recommendations for improvement.</p>
                </div>

                <button class="accordion">How often do you process patient invoices?</button>
                <div class="panel services-content">
                  <p class="p-5 fs-5">We generate and distribute patient invoices on a monthly basis. These invoices detail all services provided, payments received, and any outstanding balances. We offer both electronic and paper invoice distribution, depending on patient preferences.</p>
                </div>

                <button class="accordion">What support do you provide for patients with billing inquiries?</button>
                <div class="panel services-content">
                  <p class="p-5 fs-5">We provide comprehensive support to patients with billing inquiries. Our team is available to help patients understand their invoices, payment options, and any financial obligations. We aim to ensure a positive and transparent experience for all patients.</p>
                </div>

                <button class="accordion">How do your billing services benefit my practice?</button>
                <div class="panel services-content">
                   <div class="p-5">
                        <h5>Our billing services offer several benefits, including:</h5>
                        <div>
                            <ul>
                                <li class="fs-5"><b>Increased Revenue: </b>Maximizing revenue through accurate coding and prompt claims submission.</li>
                                <li class="fs-5"><b>Reduced Denials:</b> Minimizing claim denials and rejections through proactive review and correction.</li>
                                <li class="fs-5"><b>Improved Cash Flow:</b> Ensuring steady cash flow with timely payment posting and efficient invoice processing.</li>
                                <li class="fs-5"><b>Enhanced Compliance:</b> Maintaining compliance with industry standards and regulations.</li>
                                <li class="fs-5"><b>Detailed Financial Insights:</b> Providing clear financial reports to help you make informed decisions.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    {{-- End of Accordion --}}

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
@push('styles')
<style>
  .accordion {
  background-color: #ffffff;
  color: #482200 !important;
  cursor: pointer !important;
  padding: 18px;
  width: 100%;
  border: 1px solid #b8a97f !important;
  margin-top: 10px;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  border-radius: 30px;
  font-size: 20px;
}

.active, .accordion:hover {
  background-color: #b8a97f !important;
  color: rgb(255, 255, 255) !important;
}

.accordion:after {
  content: '\002B';
  /* color: #777; */
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  color: rgb(94, 93, 93);
  padding: 0 40px;
  background-color: #f8f7f2;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
    border-radius: 60px;
}
    </style>
@endpush

@push('scripts')
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
@endpush