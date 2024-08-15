@extends('site.includes.layouts.main')

@section("meta")
	<title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="type" content="Champ Ventures">
    <meta property="title" content="Home">
    <meta name="keyword" content="MEDICAL BILLING SERVICES, MEDICAL BILLING SERVICES, MEDICAL BILLING SERVICESMEDICAL BILLING SERVICES, MEDICAL AUDITING SERVICES, PHYSICIAN CREDENTIALING SERVICES">
    <meta name="description" content="You sought a career as a medical or mental health professional to assist people with their healing process" itemprop="description"> 
    <meta property="image" content="/assets/img/medical_billing/bg_contact.png">
@endsection

@section('content')
    <div class="section1">
        <section id="hero" class="d-flex align-items-center text-light"
            style="height: 500px; background-image: url('/assets/img/medical_billing/bg_contact.png');
             background-size: cover;  background-position: left; background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-lg-6">
                        <div class="text text-center">
                            <h1 class="display-4 text-dark mb-5">Contact Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

       <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                {{-- <div class="col-lg-4">
                    <div class="h-100 bg-services-card rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-map-marker-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Address</p>
                            <h5 class="mb-0">123 Street, New York, USA</h5>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-6">
                    <div class="h-100 bg-services-card rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Call Us Now</p>
                            <h5 class="mb-0">+ 678-471-4540</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="h-100 bg-services-card rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Mail Us Now</p>
                            <h5 class="mb-0">chando@champventuresinc.com</h5>
                        </div>
                    </div>
                </div>
                     <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-services-card rounded h-100 d-flex align-items-center p-5">
                        <form action="{{ route('send.email')}}" method="POST">
                            @csrf
                                @if(Session::has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>{{ Session::get('success') }}</strong> 
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif

                                 @if(Session::has('error'))
                                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>{{ Session::get('error') }}</strong> 
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                                      @error('name') <span class="text-danger">{{ $message }}</span>  @enderror
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                      @error('email') <span class="text-danger">{{ $message }}</span>  @enderror
                                </div>
                                <div class="col-12 col-sm-12">
                                    <select class="form-select border-0" name="subject" value="{{ old('subject') }}" style="height: 55px;">
                                        <option selected>Choose Services</option>
                                        <option value="BILLING SERVICES">BILLING SERVICES</option>
                                        <option value="CODING SERVICES">CODING SERVICES</option>
                                        <option value="CREDENTIALING SERVICES">CREDENTIALING SERVICES</option>
                                        <option value="AUDITING SERVICES">AUDITING SERVICES</option>
                                        <option value="ADMINISTRATIVE SERVICES">ADMINISTRATIVE SERVICES</option>
                                    </select>
                                    @error('subject') <span class="text-danger">{{ $message }}</span>  @enderror
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" name="message" value="{{ old('message') }}" rows="5" placeholder="Message"></textarea>
                                     @error('message') <span class="text-danger">{{ $message }}</span>  @enderror
                                </div>
                                <div class="col-12">
                                    <button  class="btn bg-gradient text-light w-100 py-3" type="submit">Book Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100" style="min-height: 400px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52953.65250758915!2d-84.04006250689078!3d33.951330336677096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f508ebdb5f57ab%3A0xc3db0f7dcd03069a!2sLawrenceville%2C%20GA%2C%20USA!5e0!3m2!1sen!2sph!4v1723549895801!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection