@extends('site.includes.layouts.main')

@section("meta")
	<title>FAQs for Medical Coding Services</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="type" content="Champ Ventures">
    <meta property="title" content="FAQs for Medical Coding Services">
    <meta name="keyword" content="MEDICAL BILLING SERVICES, MEDICAL BILLING SERVICES, MEDICAL BILLING SERVICESMEDICAL BILLING SERVICES, MEDICAL AUDITING SERVICES, PHYSICIAN CREDENTIALING SERVICES">
    <meta name="description" content="We offer a comprehensive range of medical coding services, including: Outpatient Coding, Office Visits Coding" itemprop="description"> 
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
                            <h1 class="display-4 text-dark mb-5">FAQs for Medical Coding Services</h1>
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
                <button class="accordion">What types of medical coding services do you offer?</button>
                <div class="panel services-content">
                    <div class="p-5">
                        <h5>We offer a comprehensive range of medical coding services, including:</h5>
                        <div>
                            <ul>
                                <li class="fs-5">Evaluation and Management (E/M) Coding</li>
                                <li class="fs-5">Outpatient Coding</li>
                                <li class="fs-5">Office Visits Coding</li>
                                <li class="fs-5">Emergency/Urgent Care Coding</li>
                                <li class="fs-5">Surgery Coding</li>
                                <li class="fs-5">Specialty-based Coding</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <button class="accordion">How do you ensure the accuracy of your coding services?</button>
                <div class="panel services-content">
                <p class="p-5 fs-5">Our certified medical coders follow stringent quality control procedures. They are well-versed in the latest coding standards and regularly undergo training to stay updated with changes in regulations and guidelines. We also conduct regular audits to ensure accuracy and compliance.</p>
                </div>

                <button class="accordion">How can accurate medical coding benefit my practice?</button>
                <div class="panel services-content">
                    <div class="p-5">
                        <h5>Accurate medical coding ensures:</h5>
                        <div>
                            <ul>
                                <li class="fs-5"><b>Compliance:</b> Adherence to regulatory standards, reducing the risk of audits and penalties.</li>
                                <li class="fs-5"><b>Revenue Optimization:</b> Accurate coding leads to appropriate reimbursement, maximizing revenue.</li>
                                <li class="fs-5"><b>Reduced Claim Denials:</b> Proper coding minimizes the risk of claim denials and rejections.</li>
                                <li class="fs-5"><b>Efficient Operations:</b>  Streamlined coding processes improve overall operational efficiency.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <button class="accordion">What specialties do you cover in your coding services?</button>
                <div class="panel services-content">
                    <div class="p-5">
                        <h5>We provide coding services across various specialties, including but not limited to:</h5>
                        <div>
                            <ul>
                                <li class="fs-5"><b>Primary Care</b></li>
                                <li class="fs-5"><b>Emergency Medicine</b></li>
                                <li class="fs-5"><b>Surgery</b></li>
                                <li class="fs-5"><b>Specialty Clinics (e.g., Cardiology, Orthopedics, Dermatology)</b></li>
                                <li class="fs-5"><b>Outpatient Services:</b> Our expertise in multiple specialties ensures that your practice receives accurate and compliant coding, regardless of your field.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <button class="accordion">How do you handle updates in coding standards and regulations?</button>
                <div class="panel services-content">
                  <p class="p-5 fs-5">Our team stays updated with the latest changes in coding standards and regulations through continuous education and training. We subscribe to industry updates and participate in relevant workshops and seminars. This proactive approach ensures that our coding practices are always current and compliant with the latest guidelines.</p>
                </div>
            </div>
        </section>
    </div>
{{-- End of Accordion --}}
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