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
                            <li class="breadcrumb-item"><a href="#" class="text-primary">Flight</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Lagos To Abuja</li>
                        </ol>
                    </nav>
                </div>

                <!-- Flight Info -->
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="row">
                        <div class="col-xl-9 col-lg-8 col-md-12">
                            <div class="card border-0 mb-4">
                                <div class="card-body">
                                    <div class="crd-block d-md-flex align-items-start justify-content-start">
                                        <div class="crd-heaader-0 flex-shrink-0 mb-3 mb-md-0">
                                            <div class="square--70 rounded-2 bg-light-primary text-primary fs-3"><i
                                                    class="fa-solid fa-plane"></i></div>
                                        </div>
                                        <div class="crd-heaader-first ps-md-3">
                                            <div class="d-inline-flex align-items-center mb-1">
                                                <span class="label fw-medium bg-light-success text-success">Economy
                                                    Class</span>
                                            </div>
                                            <div class="d-block">
                                                <h4 class="mb-0">Lagos(LOS)<span class="text-muted-2 mx-3"><i
                                                            class="fa-solid fa-arrow-right-arrow-left"></i></span>Abuja(ABV)
                                                </h4>
                                                <div class="explotter-info">
                                                    <p class="detail ellipsis-container fw-semibold">
                                                        <span class="ellipsis-item__normal">15 Oct</span>
                                                        <span class="separate ellipsis-item__normal"></span>
                                                        <span class="ellipsis-item">Non-stop</span>
                                                        <span class="separate ellipsis-item__normal"></span>
                                                        <span class="ellipsis-item">1H 10Min</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Traveler Details -->
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <!-- Overview -->
                                <div class="card">
                                    <div class="card-header">
                                        <h6 class="fw-semibold mb-0">Traveler Details</h6>
                                    </div>

                                    <div class="card-body">

                                        <div class="full-width d-flex flex-column mb-2 position-relative">
                                            <div class="row align-items-start">
                                                <div class="col-xl-12 col-lg-12 col-md-12 mb-2">
                                                    <h5>Personal Information</h5>
                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Email Address</label>
                                                        <input type="email" class="form-control"
                                                            placeholder="Enter your email">
                                                    </div>
                                                </div>

                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Mobile number</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Enter your phone number">
                                                    </div>
                                                </div>

                                                <!-- Add Number of Seats -->
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Number of Seats</label>
                                                        <input type="number" class="form-control"
                                                            placeholder="Select number of seats" min="1"
                                                            max="10">
                                                    </div>
                                                </div>

                                                <div class="col-xl-12 col-lg-12 col-md-12">
                                                    <a class="btn btn-md full-width px-5 btn-primary fw-medium"
                                                        href="{{ route('routes.travellers_details') }}">Submit & Proceed to Payment</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Sidebar -->
                        <div class="col-xl-3 col-lg-4 col-md-12">
                            <div class="card mb-4 mt-lg-0 mt-4">
                                <div class="card-header">
                                    <h4>Price Summary</h4>
                                </div>
                                <div class="card-body py-2">
                                    <div class="price-summary">
                                        <ul class="list-group">
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center border-0 py-2 px-0">
                                                Base Fare
                                                <span class="fw-semibold text-dark">₦35,000</span>
                                            </li>
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center border-0 py-2 px-0">
                                                Discount
                                                <span class="fw-semibold text-success">-₦1,500</span>
                                            </li>
                                            <li
                                                class="list-group-item d-flex justify-content-between align-items-center border-0 py-2 px-0">
                                                Other Services
                                                <span class="fw-semibold text-dark">₦500</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-footer bg-white border-top py-3">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <p class="fw-semibold text-muted-2 mb-0">Total Price</p>
                                        <p class="fw-semibold text-primary mb-0">₦34,000</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card border rounded-3">
                                <div class="card-header">
                                    <h4>Coupons & Offers</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group position-relative">
                                        <input type="text" class="form-control" placeholder="Have a Coupon Code?"
                                            value="">
                                        <a href="#"
                                            class="position-absolute top-50 end-0 fw-semibold translate-middle text-primary disable">Apply</a>
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
