<!DOCTYPE html>
<html lang="en">
<head>
@yield("meta")
    <!-- Favicon -->
    <link href="/assets/img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/assets/css/style.css" rel="stylesheet">
@stack("styles")
</head>
<body style="background-color: #f8f7f23f;">

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    
    <!-- ======= Header ======= -->
    <header>
        @include("site.includes.menus.site.menu")
    </header>

    {{-- MAIN --}}
    <main id="main">
        @yield("content")
    </main>

    <!-- Footer Start -->
    <div class="container-fluid text-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s" style="background: #e1dcc7;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-dark mb-4">Address</h5>
                    {{-- <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p> --}}
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i> + 678-471-4540</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>champventuresinc@yahoo.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-dark btn-social rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-dark btn-social rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-dark btn-social rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-dark btn-social rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-dark mb-4">Services</h5>
                    <a class="btn btn-link text-dark" href="">BILLING SERVICES</a>
                    <a class="btn btn-link text-dark" href="">CODING SERVICES</a>
                    <a class="btn btn-link text-dark" href="">CREDENTIALING SERVICES</a>
                    <a class="btn btn-link text-dark" href="">AUDITING SERVICES</a>
                    <a class="btn btn-link text-dark" href="">ADMINISTRATIVE SERVICES</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-dark mb-4">Industries</h5>
                    <a class="btn btn-link text-dark" href="">About Us</a>
                    <a class="btn btn-link text-dark" href="">Contact Us</a>
                    <a class="btn btn-link text-dark" href="">Our Services</a>
                    <a class="btn btn-link text-dark" href="">Terms & Condition</a>
                    <a class="btn btn-link text-dark" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-dark mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Champ Ventures</a>, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
     <!-- Back to Top -->
    <a href="#" class="btn btn-lg text-light bg-gradient btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


   <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/lib/wow/wow.min.js"></script>
    <script src="/assets/lib/easing/easing.min.js"></script>
    <script src="/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="/assets/lib/counterup/counterup.min.js"></script>
    <script src="/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/assets/lib/tempusdominus/js/moment.min.js"></script>
    <script src="/assets/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="/assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="/assets/js/main.js"></script>
    @stack("scripts")
</body>
</html>