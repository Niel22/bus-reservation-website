@extends('layouts.app')
@section('content')

@include('pages.user.nav')

<section class="pt-5 gray-simple position-relative">
    <div class="container">

        @include('pages.user.mobile')

        <div class="row align-items-start justify-content-between gx-xl-4">

            @include('pages.user.sidebar')

            <div class="col-xl-8 col-lg-8 col-md-12">

                <!-- Personal Information -->
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fa-solid fa-ticket me-2"></i>My Bookings</h4>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center justify-content-start">
                            <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                                <ul class="row align-items-center justify-content-between p-0 gx-3 gy-2">
                                    <li class="col-md-3 col-6">
                                        <input type="checkbox" class="btn-check" id="allbkk" checked="">
                                        <label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width" for="allbkk">All
                                            Booking (24)</label>
                                    </li>
                                    <li class="col-md-3 col-6">
                                        <input type="checkbox" class="btn-check" id="processing">
                                        <label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width" for="processing">Processing (02)</label>
                                    </li>
                                    <li class="col-md-3 col-6">
                                        <input type="checkbox" class="btn-check" id="cancelled">
                                        <label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width" for="cancelled">Cancelled (04)</label>
                                    </li>
                                    <li class="col-md-3 col-6">
                                        <input type="checkbox" class="btn-check" id="completed">
                                        <label class="btn btn-sm btn-secondary rounded-1 fw-medium px-4 full-width" for="completed">Completed (10)</label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-start">
                            <div class="col-xl-12 col-lg-12 col-md-12">

                                <!-- Single Item -->
                                <div class="card border br-dashed mb-4">
                                    <!-- Card header -->
                                    <div class="card-header nds-block border-bottom flex-column flex-md-row justify-content-between align-items-center">
                                        <!-- Icon and Title -->
                                        <div class="d-flex align-items-center">
                                            <div class="square--50 circle bg-light-purple text-purple flex-shrink-0"><i class="fa-solid fa-plane"></i></div>
                                            <!-- Title -->
                                            <div class="ms-2">
                                                <h6 class="card-title text-dark fs-5 mb-1">Lagos To Abuja</h6>
                                                <ul class="nav nav-divider small">
                                                    <li class="nav-item text-muted">Booking ID: BKR98765</li>
                                                    <li class="nav-item ms-2"><span class="label bg-light-success text-success">Economy Class</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                
                                        <!-- Button -->
                                        <div class="mt-2 mt-md-0">
                                            <a href="#" class="btn btn-md btn-light-seegreen fw-medium mb-0">Manage Booking</a>
                                        </div>
                                    </div>
                                
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-sm-6 col-md-4">
                                                <span>Departure Time</span>
                                                <h6 class="mb-0">Fri 12 Aug 14:00 WAT</h6>
                                            </div>
                                
                                            <div class="col-sm-6 col-md-4">
                                                <span>Arrival Time</span>
                                                <h6 class="mb-0">Fri 12 Aug 16:00 WAT</h6>
                                            </div>
                                
                                            <div class="col-md-4">
                                                <span>Booked By</span>
                                                <h6 class="mb-0">Chijioke Obi</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            

        </div>
    </div>
</section>

@endsection
