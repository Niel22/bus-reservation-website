@extends('layouts.app')
@section('content')

<section class="pt-4 gray-simple position-relative">
    <div class="container">

        <div class="row align-items-start">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="div-title d-flex align-items-center mb-3">
                    <h4>Passenger Details</h4>
                </div>
                <div class="row align-items-start">
                    <div class="col-xl-8 col-lg-8 col-md-12">
                        <!-- Passenger 01 -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <h4>Passenger 01</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Date of Birth</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">ID Card/Passport Number</label>
                                            <input type="text" class="form-control" placeholder="ID Card or Passport Number">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Seat Selection</label>
                                            <select class="form-control">
                                                <option value="">Select Seat</option>
                                                <option value="1A">1A</option>
                                                <option value="1B">1B</option>
                                                <option value="2A">2A</option>
                                                <!-- Add more seats as required -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Contact Number</label>
                                            <input type="text" class="form-control" placeholder="Phone Number">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="side-block card rounded-2 p-3">
                            <h5 class="fw-semibold fs-6">Trip Summary</h5>
                            <div class="mid-block rounded-2 border br-dashed p-2 mb-3">
                                <div class="row align-items-center justify-content-between g-2 mb-4">
                                    <div class="col-6">
                                        <div class="gray rounded-2 p-2">
                                            <span class="d-block text-muted-3 text-sm fw-medium text-uppercase mb-2">Departure</span>
                                            <p class="text-dark fw-semibold lh-base text-md mb-0">27 Aug 2023</p>
                                            <span class="text-dark text-md">10:30 AM</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="gray rounded-2 p-2">
                                            <span class="d-block text-muted-3 text-sm fw-medium text-uppercase mb-2">Arrival</span>
                                            <p class="text-dark fw-semibold lh-base text-md mb-0">27 Aug 2023</p>
                                            <span class="text-dark text-md">5:30 PM</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center justify-content-between mb-4">
                                    <div class="col-12">
                                        <p class="text-muted-2 text-sm text-uppercase fw-medium mb-1">Total Travel Time:</p>
                                        <div class="d-flex align-items-center">
                                            <div class="square--30 circle text-seegreen bg-light-seegreen"><i class="fa-regular fa-clock"></i></div>
                                            <span class="text-dark fw-semibold ms-2">7 Hours</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-12">
                                        <p class="text-muted-2 text-sm text-uppercase fw-medium mb-1">Bus Type</p>
                                        <div class="d-flex align-items-center flex-column">
                                            <p class="mb-0">Luxury Bus with Air Conditioning. <a href="#" class="fw-medium text-primary">Change Bus</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bott-block d-block mb-3">
                                <h5 class="fw-semibold fs-6">Price Summary</h5>
                                <ul class="list-group list-group-borderless">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="fw-medium mb-0">Ticket Price</span>
                                        <span class="fw-semibold">₦15,000</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="fw-medium mb-0">Service Fee</span>
                                        <span class="fw-semibold">₦500</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="fw-medium text-success mb-0">Total Price</span>
                                        <span class="fw-semibold text-success">₦15,500</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="bott-block">
                                <button class="btn fw-medium btn-primary full-width" type="button">Book Ticket</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="text-center d-flex align-items-center justify-content-center mt-4">
                    <a href="{{ route('routes.payment') }}" class="btn btn-md btn-primary fw-semibold mx-2">Proceed to Payment<i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
