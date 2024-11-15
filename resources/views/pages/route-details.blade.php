@extends('layouts.app')
@section('content')
    <section class="pt-3 gray-simple">
        <div class="container">
            <div class="row">

                <!-- Breadcrumb -->
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="text-primary">Home</a></li>
                            <li class="breadcrumb-item"><a href="#" class="text-primary">Bus</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $route->terminal->name }} To {{ $route->destination }}</li>
                        </ol>
                    </nav>
                </div>

                <!-- Flight Info -->
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-12">
                            <div class="card border-0 mb-4">
                                <div class="card-body">
                                    <div class="crd-block d-md-flex align-items-start justify-content-start">
                                        <div class="crd-heaader-0 flex-shrink-0 mb-3 mb-md-0">
                                            <div class="square--70 rounded-2 bg-light-primary text-primary fs-3"><i class="fa-solid fa-bus"></i></div>
                                        </div>
                                        <div class="crd-heaader-first ps-md-3">
                                            <div class="d-inline-flex align-items-center mb-1">
                                                <span class="label fw-medium bg-light-success text-success">Economy
                                                    Class</span>
                                            </div>
                                            <div class="d-block">
                                                <h4 class="mb-0">{{ $route->terminal->name }}<span class="text-muted-2 mx-3"><i
                                                            class="fa-solid fa-arrow-right-arrow-left"></i></span>{{ $route->destination }}
                                                </h4>
                                                <div class="explotter-info">
                                                    <p class="detail ellipsis-container fw-semibold">
                                                        <span class="ellipsis-item__normal">{{ \Carbon\Carbon::parse($route->departure)->format('d M') }}</span>
                                                        <span class="separate ellipsis-item__normal"></span>
                                                        <span class="ellipsis-item">Non-stop</span>
                                                        <span class="separate ellipsis-item__normal"></span>
                                                        <span class="ellipsis-item">{{ $route->duration }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Traveler Details -->
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="div-title d-flex align-items-center mb-3">
                                    <h4>Passenger Details</h4>
                                </div>
                                <div class="row align-items-start">
                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                        <!-- Passenger 01 -->
                                        <div class="card mb-3">
                                            <div class="card-header">
                                                <h4>Fill in the required field below</h4>
                                            </div>
                                            <form method="post" action="{{ route('routes.book') }}" class="card-body">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Full Name</label>
                                                            <input name="full_name" value="{{ Auth::user()->name ?? "" }}" type="text" class="form-control" placeholder="Full Name">
                                                        </div>
                                                        @error('full_name')
                                                            <span class="text-sm text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">ID Card Number</label>
                                                            <input name="id_no" type="text" class="form-control" placeholder="ID Card or Passport Number">
                                                        </div>
                                                        @error('id_no')
                                                            <span class="text-sm text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">No. of Seat</label>
                                                            <input name="seats" type="number" name="" class="form-control" placeholder="e.g 2">
                                                        </div>
                                                        @error('seats')
                                                            <span class="text-sm text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Contact Number</label>
                                                            <input name="contact" value="{{ Auth::user()->user_details->mobile ?? "" }}" type="text" class="form-control" placeholder="Phone Number">
                                                        </div>
                                                        @error('contact')
                                                            <span class="text-sm text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Address</label>
                                                            <input name="address" type="text" class="form-control" placeholder="Phone Number">
                                                        </div>
                                                        @error('address')
                                                            <span class="text-sm text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">State</label>
                                                            <input name="state" type="text" class="form-control" placeholder="Phone Number">
                                                        </div>
                                                        @error('state')
                                                            <span class="text-sm text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Country</label>
                                                            <input name="country" value="Nigeria" readonly type="text" class="form-control" placeholder="Phone Number">
                                                        </div>
                                                        @error('country')
                                                            <span class="text-sm text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <input type="hidden" readonly name="terminal" value="{{ $route->terminal->name }}" class="form-control" placeholder="Phone Number">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <input type="hidden" readonly name="destination" value="{{ $route->destination }}" class="form-control" placeholder="Phone Number">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <input type="hidden" readonly name="price" value="{{ $route->price + 500 }}" class="form-control" placeholder="Phone Number">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                                        <div class="form-group">
                                                            <input type="hidden" readonly name="t_seats" value="{{ $route->seats }}" class="form-control" placeholder="Phone Number">
                                                        </div>
                                                    </div>

                                                    <div class="bott-block">
                                                        <button class="btn fw-medium btn-primary full-width" type="submit">Book Ticket</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                
                                    </div>
                
                                </div>
                            </div>

                        </div>

                        @php
                        $value = $route->duration;
                        
                        $parts = explode(' ', $value);
                        
                        $hour = (int) preg_replace('/\D/', '', $parts[0]);
                        $min = (int) preg_replace('/\D/', '', $parts[1]);
                        
                        $departure = \Carbon\Carbon::parse($route->departure);
                        $arrival = $departure->copy()->addHours($hour)->addMinutes($min);
                        
                        @endphp
                        <!-- Sidebar -->
                        <div class="col-xl-4 col-lg-4 col-md-12">
                                <div class="side-block card rounded-2 p-3">
                                    <h5 class="fw-semibold fs-6">Trip Summary</h5>
                                    <div class="mid-block rounded-2 border br-dashed p-2 mb-3">
                                        <div class="row align-items-center justify-content-between g-2 mb-4">
                                            <div class="col-6">
                                                <div class="gray rounded-2 p-2">
                                                    <span class="d-block text-muted-3 text-sm fw-medium text-uppercase mb-2">Departure</span>
                                                    <p class="text-dark fw-semibold lh-base text-md mb-0">{{
                                                        \Carbon\Carbon::parse($route->departure)->format('d M, Y') }}</p>
                                                    <span class="text-dark text-md">{{
                                                        \Carbon\Carbon::parse($route->departure)->format('h:i
                                                        A') }}</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="gray rounded-2 p-2">
                                                    <span class="d-block text-muted-3 text-sm fw-medium text-uppercase mb-2">Arrival</span>
                                                    <p class="text-dark fw-semibold lh-base text-md mb-0">{{ $arrival->format('d M, Y') }}</p>
                                                    <span class="text-dark text-md">{{ $arrival->format('h:i
                                                                    A') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center justify-content-between mb-4">
                                            <div class="col-12">
                                                <p class="text-muted-2 text-sm text-uppercase fw-medium mb-1">Total Travel Time:</p>
                                                <div class="d-flex align-items-center">
                                                    <div class="square--30 circle text-seegreen bg-light-seegreen"><i class="fa-regular fa-clock"></i></div>
                                                    <span class="text-dark fw-semibold ms-2">{{ $route->duration }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center justify-content-between">
                                            <div class="col-12">
                                                <div class="d-flex align-items-center flex-column">
                                                    <p class="mb-0"><a href="{{ route('routes') }}" class="fw-medium text-primary">Change Bus</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="bott-block d-block mb-3">
                                        <h5 class="fw-semibold fs-6">Price Summary</h5>
                                        <ul class="list-group list-group-borderless">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <span class="fw-medium mb-0">Ticket Price</span>
                                                <span class="fw-semibold">₦{{ number_format($route->price) }}</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <span class="fw-medium mb-0">Service Fee</span>
                                                <span class="fw-semibold">₦500</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <span class="fw-medium text-success mb-0">Total Price</span>
                                                <span class="fw-semibold text-success">₦{{ number_format($route->price + 500) }}</span>
                                            </li>
                                        </ul>
                                    </div>
        
                                    
                                </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
