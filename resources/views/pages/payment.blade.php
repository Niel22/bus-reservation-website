@extends('layouts.app')
@section('content')

<section class="pt-4 gray-simple position-relative">
    <div class="container">


        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="div-title d-flex align-items-center mb-3">
                    <h4>Billing Details</h4>
                </div>
                <div class="row align-items-center">

                    <div class="col-xl-4 col-lg-4 col-md-12 m-auto">
                        <div class="side-block card rounded-2 p-3">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h5 class="fw-semibold fs-6 mb-0">Payment Summary</h5>
                            </div>
                            <div class="mid-block mb-2">
                                <div class="paymntCardsoption-groups">
                                    <div class="single-paymntCardsoption d-block position-relative mb-2">
                                        <div class="paymnt-line active d-flex align-items-center justify-content-start">
                                            <div class="position-relative text-center">
                                                <div class="form-check lg mb-0">
                                                    <input class="form-check-input" type="radio" name="payment" id="visa" checked="">
                                                    <label class="form-check-label" for="visa"></label>
                                                </div>
                                            </div>
                                            <div class="paymnt-line-caps d-flex align-items-center justify-content-start">
                                                <div class="paymnt-caps-icons d-inline-flex">
                                                    <i class="fa-brands fa-cc-visa text-seegreen fs-1"></i>
                                                </div>
                                                <div class="paymnt-caps-details ps-2">
                                                    <span class="text-uppercase d-block fw-semibold text-md text-dark lh-2 mb-0">Visa****7542</span>
                                                    <span class="text-sm text-muted lh-2">Expired on 10/25</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-paymntCardsoption d-block position-relative mb-2">
                                        <div class="paymnt-line d-flex align-items-center justify-content-start">
                                            <div class="position-relative text-center">
                                                <div class="form-check lg mb-0">
                                                    <input class="form-check-input" type="radio" name="payment" id="master">
                                                    <label class="form-check-label" for="master"></label>
                                                </div>
                                            </div>
                                            <div class="paymnt-line-caps d-flex align-items-center justify-content-start">
                                                <div class="paymnt-caps-icons d-inline-flex">
                                                    <i class="fa-brands fa-cc-mastercard text-danger fs-1"></i>
                                                </div>
                                                <div class="paymnt-caps-details ps-2">
                                                    <span class="text-uppercase d-block fw-semibold text-md text-dark lh-2 mb-0">Master****8956</span>
                                                    <span class="text-sm text-muted lh-2">Expired on 10/24</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="summary-block d-block mb-3">
                                <h5 class="fw-semibold fs-6">Summary</h5>
                                <ul class="list-group list-group-borderless">
                                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-1">
                                        <span class="fw-medium text-sm text-muted mb-0">Payment:</span>
                                        <span class="fw-semibold text-md">₦45,000</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-1">
                                        <span class="fw-medium text-sm text-muted mb-0">Transaction Fee</span>
                                        <span class="fw-semibold text-md">₦500</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-1">
                                        <span class="fw-medium text-sm text-muted mb-0">Total Price</span>
                                        <span class="fw-semibold text-success text-md">₦45,500</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="bott-block mb-3">
                                <div class="d-flex align-items-center justify-content-center py-2 px-3 rounded-2 bg-light-success mb-2">
                                    <div class="d-inline-flex text-success fs-2"><i class="fa-solid fa-shield-heart"></i></div>
                                    <div class="d-inline-flex flex-column ps-2">
                                        <span class="d-block text-md text-dark fw-semibold lh-2">Money-back guarantee</span>
                                        <span class="d-block text-sm text-muted-2 lh-2">Your payment is secure</span>
                                    </div>
                                </div>
                                <button class="btn fw-medium btn-primary full-width" type="button">Pay Now ₦45,500</button>
                            </div>
                            <div class="autopay-block-block">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="fluy-autpay">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" id="autopay">
                                            <label class="form-check-label ms-1" for="autopay">Auto Pay</label>
                                        </div>
                                    </div>
                                    <div class="fluy-bkr"><a href="#" class="fw-semibold text-md text-dark">Add New Card</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="text-center d-flex align-items-center justify-content-center mt-4">
                    <a href="{{ route('routes.travellers_details') }}" class="btn btn-md btn-dark fw-semibold mx-2"><i class="fa-solid fa-arrow-left me-2"></i>Previous</a>
                    <a href="{{ route('routes.booking_success') }}" class="btn btn-md btn-primary fw-semibold mx-2">Submit &amp; Confirm<i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
