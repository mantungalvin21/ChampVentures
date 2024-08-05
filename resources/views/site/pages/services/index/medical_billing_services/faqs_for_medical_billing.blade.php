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
                            <h1 class="display-4 text-dark mb-5">FAQs for Medical Billing Services</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    {{-- Accordion --}}
    <div class="container py-5">
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