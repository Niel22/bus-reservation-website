<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Akwa Ibom Bus Reservation Company</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <!-- All Plugins -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animation.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dropzone.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flatpickr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flickity.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/magnifypopup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/rangeSlider.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/prism.css') }}" rel="stylesheet">

    <!-- Fontawesome & Bootstrap Icons CSS -->
    <link href="{{ asset('assets/css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div id="preloader">
        <div class="preloader"><span></span><span></span></div>
    </div>

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">

        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->
        <!-- Start Navigation -->
        @include('includes.header')
        <!-- End Navigation -->
        <div class="clearfix"></div>
        <!-- ============================================================== -->
        <!-- Top header  -->
        <!-- ============================================================== -->


        @yield('content')

        <!-- ============================ Footer Start ================================== -->
    <footer class="footer skin-dark-footer">
        <div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-4">
                        <div class="footer-widget">
                            <div class="d-flex align-items-start flex-column mb-3">
                                <div class="d-inline-block d-flex">
                                    <img src="{{ asset('assets/img/logo-icon.png') }}" class="logo" style="width: 30px;" alt=""><h3 class="text-white ml-3">AKTC</h3>
                                </div>
                            </div>
                            <div class="footer-add pe-xl-3">
                                <p>Your journey begins with us. Experience comfort and convenience.</p>
                            </div>
                            <div class="foot-socials">
                                <ul>
                                    <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="JavaScript:Void(0);"><i class="fa-brands fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4">
                        <div class="footer-widget">
                            <h4 class="widget-title">Quick Links</h4>
                            <ul class="footer-menu">
                                <li><a href="{{ route('routes') }}">Book a Ticket</a></li>
                                <li><a href="{{ route('my_bookings') }}">Manage Booking</a></li>
                                <li><a href="{{ route('contact') }}">Customer Support</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4">
                        <div class="footer-widget">
                            <h4 class="widget-title">Company Info</h4>
                            <ul class="footer-menu">
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Payment Methods</h4>
                            <div class="pmt-wrap">
                                <img src="{{ asset('assets/img/payment.png') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom border-top">
            <div class="container">
                <div class="row align-items-center justify-content-between">

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <p class="mb-0">© 2023 AKTC. Design by NIEL.</p>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <ul class="p-0 d-flex justify-content-start justify-content-md-end text-start text-md-end m-0">
                            <li><a href="#">Terms of Service</a></li>
                            <li class="ms-3"><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <!-- ============================ Footer End ================================== -->

        <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i
                class="fa-solid fa-sort-up"></i></a>


    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->


    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/rangeslider.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/prism.js') }}"></script>

    <script src="{{ asset('assets/js/addadult.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    @stack('script')
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->

</body>



</html>
