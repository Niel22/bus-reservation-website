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
                            <div class="col-xl-12 col-lg-12 col-md-12">

                                <!-- Single Item -->
                                @foreach(Auth::user()->booking as $booking)
                                <div class="card border br-dashed mb-4">
                                    <!-- Card header -->
                                    <div class="card-header nds-block border-bottom flex-column flex-md-row justify-content-between align-items-center">
                                        <!-- Icon and Title -->
                                        <div class="d-flex align-items-center">
                                            <div class="square--50 circle bg-light-purple text-purple flex-shrink-0"><i class="fa-solid fa-bus"></i></i></div>
                                            <!-- Title -->
                                            <div class="ms-2">
                                                <h6 class="card-title text-dark fs-5 mb-1">{{ $booking->terminal }} To {{ $booking->destination }}</h6>
                                                <ul class="nav nav-divider small">
                                                    <li class="nav-item text-muted text-uppercase">Booking ID: {{ $booking->booking_id }}</li>
                                                    <li class="nav-item ms-2"><span class="label bg-light-success text-success">Economy Class</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                
                                    </div>
                                    
                                    @php
                                    $value = $booking->duration;
                                    
                                    $parts = explode(' ', $value);
                                    
                                    $hour = (int) preg_replace('/\D/', '', $parts[0]);
                                    $min = (int) preg_replace('/\D/', '', $parts[1]);
                                    
                                    $departure = \Carbon\Carbon::parse($booking->departure);
                                    $arrival = $departure->copy()->addHours($hour)->addMinutes($min);
                                    
                                    @endphp
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-sm-6 col-md-4">
                                                <span>Departure Time</span>
                                                <h6 class="mb-0">{{ $departure->format('D d M h:i A') }}</h6>
                                            </div>
                                
                                            <div class="col-sm-6 col-md-4">
                                                <span>Arrival Time</span>
                                                <h6 class="mb-0">{{ $arrival->format('D d M h:i A') }}</h6>
                                            </div>
                                
                                            <div class="col-md-4">
                                                <span>Booked By</span>
                                                <h6 class="mb-0">{{ $booking->user->name }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            

        </div>
    </div>
</section>

@endsection
