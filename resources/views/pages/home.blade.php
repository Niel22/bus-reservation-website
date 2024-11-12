@extends('layouts.app')
@section('content')
    <!-- ============================ Hero Banner  Start================================== -->
    <div class="image-cover hero-header bg-white" style="background:url(assets/img/banner-3.jpg) no-repeat;" data-overlay="5">
        <div class="container">

            <!-- Search Form -->
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12">
                    <div class="position-relative text-center mb-5">
                        <h1>Travel Across Nigeria <span class="position-relative z-4">with<span
                                class="position-absolute top-50 start-50 translate-middle d-none d-md-block mt-4">
                                <i class="fa-solid fa-bus fa-lg fill-white opacity-7"></i>
                            </span></span> Us</h1>
                        <p class="fs-5 fw-light">Book your bus tickets easily and conveniently. Experience comfortable travel with our reliable bus services connecting all major cities in Nigeria.</p>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="search-wrap bg-white rounded-3 p-3">

                                <form action="{{ route('routes') }}" class="row gx-lg-2 g-3">

                                    <div class="col-xl-5 col-lg-5 col-md-12">
                                        <div class="row gy-3 gx-lg-2 gx-3">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
                                                <div class="form-group hdd-arrow mb-0">
                                                    <select class="leaving form-control fw-bold">
                                                        <option value="">Select Departure City</option>
                                                        <option value="lagos">Lagos</option>
                                                        <option value="abuja">Abuja</option>
                                                        <option value="portharcourt">Port Harcourt</option>
                                                        <option value="ibadan">Ibadan</option>
                                                        <option value="benin">Benin City</option>
                                                        <option value="kaduna">Kaduna</option>
                                                        <option value="enugu">Enugu</option>
                                                        <option value="ilorin">Ilorin</option>
                                                    </select>
                                                </div>
                                                <div class="btn-flip-icon mt-md-0">
                                                    <button class="p-0 m-0 text-primary"><i
                                                            class="fa-solid fa-right-left"></i></button>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                <div class="form-groupp hdd-arrow mb-0">
                                                    <select class="goingto form-control fw-bold">
                                                        <option value="">Select Arrival City</option>
                                                        <option value="lagos">Lagos</option>
                                                        <option value="abuja">Abuja</option>
                                                        <option value="portharcourt">Port Harcourt</option>
                                                        <option value="ibadan">Ibadan</option>
                                                        <option value="benin">Benin City</option>
                                                        <option value="kaduna">Kaduna</option>
                                                        <option value="enugu">Enugu</option>
                                                        <option value="ilorin">Ilorin</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-12">
                                        <div class="row gy-3 gx-lg-2 gx-3">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-group mb-0">
                                                    <input class="form-control fw-bold choosedate" type="text" placeholder="Departure Date.." readonly="readonly">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2 col-lg-2 col-md-12">
                                        <div class="form-groupp hdd-arrow mb-0">
                                            <select class="occupant form-control fw-bold">
                                                <option value="">Select Seats</option>
                                                <option value="1">01 Seat</option>
                                                <option value="2">02 Seats</option>
                                                <option value="3">03 Seats</option>
                                                <option value="4">04 Seats</option>
                                                <option value="5">05 Seats</option>
                                                <option value="6">06 Seats</option>
                                                <option value="7">07 Seats</option>
                                                <option value="8">08 Seats</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-1 col-lg-1 col-md-12">
                                        <div class="form-group mb-0">
                                            <button type="button" class="btn btn-primary full-width fw-medium"><i class="fa-solid fa-magnifying-glass fs-5"></i> Search</button>
                                        </div>
                                    </div>

                                </form>
                    </div>
                </div>
            </div>
            <!-- </row> -->

        </div>
    </div>

    <!-- ============================ Hero Banner End ================================== -->





    <!-- ============================ Locations Design Start ================================== -->
    <section class="gray-simple">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
                    <div class="secHeading-wrap text-center mb-5">
                        <h2>Popular Bus Terminals in Nigeria</h2>
                        <p>Explore the cities we serve and their available routes!</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center justify-content-center g-xl-4 g-lg-4 g-3">
                <!-- Uyo -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
                        <div class="destination-card-wraps position-relative">
                            <div class="destination-card-thumbs">
                                <div class="destinations-pics">
                                    <a href="#"><img src="assets/img/city/ct-7.png" class="img-fluid" alt="Uyo"></a>
                                </div>
                            </div>
                            <div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
                                <div class="exploterr-text">
                                    <h3 class="text-light fw-bold mb-1">Uyo</h3>
                                    <p class="detail ellipsis-container text-light">
                                        <span class="ellipsis-item__normal">Destinations:</span>
                                        <span class="ellipsis-item">10 Available Routes</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lagos -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
                        <div class="destination-card-wraps position-relative">
                            <div class="destination-card-thumbs">
                                <div class="destinations-pics">
                                    <a href="#"><img src="assets/img/city/ct-6.png" class="img-fluid" alt="Lagos"></a>
                                </div>
                            </div>
                            <div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
                                <div class="exploterr-text">
                                    <h3 class="text-light fw-bold mb-1">Lagos</h3>
                                    <p class="detail ellipsis-container text-light">
                                        <span class="ellipsis-item__normal">Destinations:</span>
                                        <span class="ellipsis-item">15 Available Routes</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Abuja -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
                        <div class="destination-card-wraps position-relative">
                            <div class="destination-card-thumbs">
                                <div class="destinations-pics">
                                    <a href="#"><img src="assets/img/city/ct-4.png" class="img-fluid" alt="Abuja"></a>
                                </div>
                            </div>
                            <div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
                                <div class="exploterr-text">
                                    <h3 class="text-light fw-bold mb-1">Abuja</h3>
                                    <p class="detail ellipsis-container text-light">
                                        <span class="ellipsis-item__normal">Destinations:</span>
                                        <span class="ellipsis-item">12 Available Routes</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Port Harcourt -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="card destination-card border-0 rounded-3 overflow-hidden m-0">
                        <div class="destination-card-wraps position-relative">
                            <div class="destination-card-thumbs">
                                <div class="destinations-pics">
                                    <a href="#"><img src="assets/img/city/ct-1.png" class="img-fluid" alt="Port Harcourt"></a>
                                </div>
                            </div>
                            <div class="destination-card-description position-absolute start-0 bottom-0 ps-4 pb-4 z-2">
                                <div class="exploterr-text">
                                    <h3 class="text-light fw-bold mb-1">Port Harcourt</h3>
                                    <p class="detail ellipsis-container text-light">
                                        <span class="ellipsis-item__normal">Destinations:</span>
                                        <span class="ellipsis-item">8 Available Routes</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================ Locations Design Start ================================== -->

    <!-- ============================ Popular Venues Start ================================== -->
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
                    <div class="secHeading-wrap text-center mb-5">
                        <h2>Popular Bus Routes</h2>
                        <p>Explore the most traveled bus routes across Nigerian cities.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center gy-4 gx-xl-3 gx-3">

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="pop-touritem">
                        <div class="card rounded-3 border m-0">
                            <div class="flight-thumb-wrapper">
                                <div class="popFlights-item-overHidden">
                                    <img src="assets/img/attr/attr-1.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="touritem-middle position-relative p-3">
                                <div class="touritem-flexxer">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h4 class="city fs-6 m-0 fw-bold">
                                            <span>Uyo</span> to <span>Calabar</span>
                                        </h4>
                                    </div>
                                    <div class="detail ellipsis-container mt-2">
                                        <p class="m-0 text-md">Enjoy a comfortable ride from Uyo to Calabar.</p>
                                    </div>
                                    <div class="flight-footer">
                                        <h5 class="fs-5 low-price m-0"><span class="tag-span">Seats:</span> <span class="price">45</span></h5>
                                        <div class="rates">
                                            <div class="rat-reviews">
                                                <span>Terminal Phone: 0123456789</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-wrapes d-flex align-items-center mt-3">
                                    <a class="btn btn-md btn-light-primary fw-medium rounded full-width me-2" href="{{ route('routes.details') }}">Request Booking<i class="fa-solid fa-arrow-trend-up ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="pop-touritem">
                        <div class="card rounded-3 border m-0">
                            <div class="flight-thumb-wrapper">
                                <div class="popFlights-item-overHidden">
                                    <img src="assets/img/attr/attr-1.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="touritem-middle position-relative p-3">
                                <div class="touritem-flexxer">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h4 class="city fs-6 m-0 fw-bold">
                                            <span>Lagos</span> to <span>Ibadan</span>
                                        </h4>
                                    </div>
                                    <div class="detail ellipsis-container mt-2">
                                        <p class="m-0 text-md">Convenient transport from Lagos to Ibadan.</p>
                                    </div>
                                    <div class="flight-footer">
                                        <h5 class="fs-5 low-price m-0"><span class="tag-span">Seats:</span> <span class="price">50</span></h5>
                                        <div class="rates">
                                            <div class="rat-reviews">
                                                <span>Terminal Phone: 0987654321</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-wrapes d-flex align-items-center mt-3">
                                    <a class="btn btn-md btn-light-primary fw-medium rounded full-width me-2" href="{{ route('routes.details') }}">Request Booking<i class="fa-solid fa-arrow-trend-up ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="pop-touritem">
                        <div class="card rounded-3 border m-0">
                            <div class="flight-thumb-wrapper">
                                <div class="popFlights-item-overHidden">
                                    <img src="assets/img/attr/attr-1.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="touritem-middle position-relative p-3">
                                <div class="touritem-flexxer">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h4 class="city fs-6 m-0 fw-bold">
                                            <span>Abuja</span> to <span>Port Harcourt</span>
                                        </h4>
                                    </div>
                                    <div class="detail ellipsis-container mt-2">
                                        <p class="m-0 text-md">Travel safely from Abuja to Port Harcourt.</p>
                                    </div>
                                    <div class="flight-footer">
                                        <h5 class="fs-5 low-price m-0"><span class="tag-span">Seats:</span> <span class="price">40</span></h5>
                                        <div class="rates">
                                            <div class="rat-reviews">
                                                <span>Terminal Phone: 1234567890</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-wrapes d-flex align-items-center mt-3">
                                    <a class="btn btn-md btn-light-primary fw-medium rounded full-width me-2" href="{{ route('routes.details') }}">Request Booking<i class="fa-solid fa-arrow-trend-up ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="pop-touritem">
                        <div class="card rounded-3 border m-0">
                            <div class="flight-thumb-wrapper">
                                <div class="popFlights-item-overHidden">
                                    <img src="assets/img/attr/attr-1.jpg" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="touritem-middle position-relative p-3">
                                <div class="touritem-flexxer">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h4 class="city fs-6 m-0 fw-bold">
                                            <span>Benin City</span> to <span>Warri</span>
                                        </h4>
                                    </div>
                                    <div class="detail ellipsis-container mt-2">
                                        <p class="m-0 text-md">A smooth ride from Benin City to Warri.</p>
                                    </div>
                                    <div class="flight-footer">
                                        <h5 class="fs-5 low-price m-0"><span class="tag-span">Seats:</span> <span class="price">35</span></h5>
                                        <div class="rates">
                                            <div class="rat-reviews">
                                                <span>Terminal Phone: 2345678901</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-wrapes d-flex align-items-center mt-3">
                                    <a class="btn btn-md btn-light-primary fw-medium rounded full-width me-2" href="{{ route('routes.details') }}">Request Booking<i class="fa-solid fa-arrow-trend-up ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================ Popular Venues Start ================================== -->




    <!-- ============================ Our Reviews Start ================================== -->
    <section class="gray-simple bg-cover" style="background:url(assets/img/reviewbg.png)no-repeat;">
        <div class="container">

            <div class="row align-items-center justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-11 col-sm-12">
                    <div class="secHeading-wrap text-center mb-5">
                        <h2>What Our Customers Are Saying</h2>
                        <p>Hear from our satisfied customers across Nigeria.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center justify-content-center g-xl-4 g-lg-4 g-md-4 g-3">

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="card border rounded-3">
                        <div class="card-body">
                            <div class="position-absolute top-0 end-0 mt-3 me-3">
                                <span class="square--40 circle text-primary bg-light-primary">
                                    <i class="fa-solid fa-quote-right"></i>
                                </span>
                            </div>
                            <div class="d-flex align-items-center flex-thumbes">
                                <div class="revws-pic">
                                    <img src="assets/img/team-2.jpg" class="img-fluid rounded-2" width="80" alt="">
                                </div>
                                <div class="revws-caps ps-3">
                                    <h6 class="fw-bold fs-6 m-0">Ayo Olatunde</h6>
                                    <p class="text-muted-2 text-md m-0">Lagos, Nigeria</p>
                                    <div class="d-flex align-items-center justify-content-start">
                                        <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                                        <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                                        <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                                        <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="revws-desc mt-3">
                                <p class="m-0 text-md">“I absolutely love this service! It has made my life so much easier and stress-free.”</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="card border rounded-3">
                        <div class="card-body">
                            <div class="position-absolute top-0 end-0 mt-3 me-3">
                                <span class="square--40 circle text-primary bg-light-primary">
                                    <i class="fa-solid fa-quote-right"></i>
                                </span>
                            </div>
                            <div class="d-flex align-items-center flex-thumbes">
                                <div class="revws-pic">
                                    <img src="assets/img/team-2.jpg" class="img-fluid rounded-2" width="80" alt="">
                                </div>
                                <div class="revws-caps ps-3">
                                    <h6 class="fw-bold fs-6 m-0">Tunde Adesola</h6>
                                    <p class="text-muted-2 text-md m-0">Abuja, Nigeria</p>
                                    <div class="d-flex align-items-center justify-content-start">
                                        <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                                        <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                                        <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                                        <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="revws-desc mt-3">
                                <p class="m-0 text-md">“This platform has truly exceeded my expectations! I highly recommend it to everyone.”</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="card border rounded-3">
                        <div class="card-body">
                            <div class="position-absolute top-0 end-0 mt-3 me-3">
                                <span class="square--40 circle text-primary bg-light-primary">
                                    <i class="fa-solid fa-quote-right"></i>
                                </span>
                            </div>
                            <div class="d-flex align-items-center flex-thumbes">
                                <div class="revws-pic">
                                    <img src="assets/img/team-2.jpg" class="img-fluid rounded-2" width="80" alt="">
                                </div>
                                <div class="revws-caps ps-3">
                                    <h6 class="fw-bold fs-6 m-0">Chioma Okafor</h6>
                                    <p class="text-muted-2 text-md m-0">Port Harcourt, Nigeria</p>
                                    <div class="d-flex align-items-center justify-content-start">
                                        <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                                        <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                                        <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                                        <span class="me-1 text-xs text-warning"><i class="fa-solid fa-star"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="revws-desc mt-3">
                                <p class="m-0 text-md">“The customer service is exceptional! They truly care about their customers.”</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================ Our Reviews End ================================== -->


    <!-- ============================ Our Experience End ================================== -->
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-between">

                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div class="position-relative">
                        <img src="assets/img/img-2.png" class="img-fluid rounded-3 position-relative z-1" alt="">
                        <div class="position-absolute bottom-0 start-0 z-index-1 mb-4 ms-2">
                            <div class="bg-body d-flex d-inline-block rounded-3 position-relative p-3 z-2 shadow-wrap">

                                <!-- Avatar group -->
                                <div class="me-4">
                                    <h6 class="fw-normal">Client</h6>
                                    <!-- Avatar group -->
                                    <ul class="avatar-group mb-0">
                                        <li class="avatar avatar-md">
                                            <img class="avatar-img circle" src="assets/img/team-2.jpg" alt="avatar">
                                        </li>
                                        <li class="avatar avatar-md">
                                            <div class="avatar-img circle bg-primary">
                                                <span
                                                    class="text-white position-absolute top-50 start-50 translate-middle small">1K+</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Rating -->
                                <div>
                                    <h6 class="fw-normal mb-3">Rating</h6>
                                    <h6 class="m-0">4.5<i class="fa-solid fa-star text-warning ms-1"></i>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5 col-lg-6 col-md-6">
                    <div class="bestExperience-block">
                        <p class="fw-medium text-primary text-md text-uppercase mb-0">Memories</p>
                        <h2 class="fw-bold lh-base">Our Unforgettable Travel Experiences and Services for You!</h2>
                        <p class="fw-light fs-6">At our bus reservation company, we believe that every journey matters.
                        Our commitment to providing comfortable and reliable travel experiences makes us a trusted choice
                        for passengers across the country. Whether it's a short trip or a long-distance adventure,
                        our real-time booking system and customer-centric approach ensure you have the best experience on the road.</p>
                        <div class="d-inline-flex mt-4">
                            <div class="d-inline-flex flex-column justify-content-center align-items-center py-3 px-3 rounded gray-simple me-3">
                                <h6 class="fw-bold fs-3 m-0">15</h6>
                                <p class="m-0 text-sm text-muted-2">Years of Experience</p>
                            </div>
                            <div class="d-inline-flex flex-column justify-content-center align-items-center py-3 px-3 rounded gray-simple me-3">
                                <h6 class="fw-bold fs-3 m-0">200+</h6>
                                <p class="m-0 text-sm text-muted-2">Routes Available</p>
                            </div>
                            <div class="d-inline-flex flex-column justify-content-center align-items-center py-3 px-3 rounded gray-simple">
                                <h6 class="fw-bold fs-3 m-0">50K</h6>
                                <p class="m-0 text-sm text-muted-2">Happy Travelers</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============================ Our Experience End ================================== -->




    <!-- ============================ Call To Action Start ================================== -->
    <div class="position-relative bg-cover py-5 bg-primary" style="background:url(assets/img/bg.jpg) no-repeat;" data-overlay="5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="calltoAction-wraps position-relative py-5 px-4">
                        <div class="ht-40"></div>
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-8 col-lg-9 col-md-10 col-sm-11 text-center">

                                <div class="calltoAction-title mb-5">
                                    <h4 class="text-light fs-2 fw-bold lh-base m-0">Subscribe & Get<br>Exclusive Offers with OurBus.com
                                    </h4>
                                </div>
                                <div class="newsletter-forms mt-md-0 mt-4">
                                    <form>
                                        <div class="row align-items-center justify-content-between bg-white rounded-3 p-2 gx-0">

                                            <div class="col-xl-9 col-lg-8 col-md-8">
                                                <div class="form-group m-0">
                                                    <input type="email" class="form-control bold ps-1 border-0" placeholder="Enter Your Email for Updates!">
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-4 col-md-4">
                                                <div class="form-group m-0">
                                                    <button type="button" class="btn btn-primary fw-medium full-width">Subscribe <i class="fa-solid fa-arrow-trend-up ms-2"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="ht-40"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================ Call To Action Start ================================== -->



@endsection
