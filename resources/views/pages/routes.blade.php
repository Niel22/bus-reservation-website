@extends('layouts.app')
@section('content')
<div class="py-5 bg-primary position-relative">
    <div class="container">

        <!-- Search Form -->
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="search-wrap position-relative">
                    <div class="row align-items-end gy-3 gx-md-3 gx-sm-2">

                        <div class="col-xl-8 col-lg-7 col-md-12">
                            <div class="row gy-3 gx-md-3 gx-sm-2">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 position-relative">
                                    <div class="form-group hdd-arrow mb-0">
                                        <label class="text-light text-uppercase opacity-75">Leaving From</label>
                                        <select class="leaving form-control fw-bold select2-hidden-accessible"
                                            data-select2-id="select2-data-1-cx08" tabindex="-1" aria-hidden="true">
                                            <option value="" data-select2-id="select2-data-3-rb0s">Select</option>
                                            @foreach($terminals as $terminal)
                                            <option value="{{ $terminal->id }}">{{ $terminal->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group hdd-arrow mb-0">
                                        <label class="text-light text-uppercase opacity-75">Going To</label>
                                        <select class="goingto form-control fw-bold select2-hidden-accessible"
                                            data-select2-id="select2-data-4-pjav" tabindex="-1" aria-hidden="true">
                                            <option value="" data-select2-id="select2-data-6-tfsw">Select</option>
                                            <option value="" data-select2-id="select2-data-6-tfsw">Select</option>
                                            <option value="abia">Abia</option>
                                            <option value="adamawa">Adamawa</option>
                                            <option value="akwa_ibom">Akwa Ibom</option>
                                            <option value="anambra">Anambra</option>
                                            <option value="bauchi">Bauchi</option>
                                            <option value="bayelsa">Bayelsa</option>
                                            <option value="benue">Benue</option>
                                            <option value="borno">Borno</option>
                                            <option value="cross_river">Cross River</option>
                                            <option value="delta">Delta</option>
                                            <option value="ebonyi">Ebonyi</option>
                                            <option value="edo">Edo</option>
                                            <option value="ekiti">Ekiti</option>
                                            <option value="enugu">Enugu</option>
                                            <option value="gombe">Gombe</option>
                                            <option value="imo">Imo</option>
                                            <option value="jigawa">Jigawa</option>
                                            <option value="kaduna">Kaduna</option>
                                            <option value="kano">Kano</option>
                                            <option value="katsina">Katsina</option>
                                            <option value="kebbi">Kebbi</option>
                                            <option value="kogi">Kogi</option>
                                            <option value="kwara">Kwara</option>
                                            <option value="lagos">Lagos</option>
                                            <option value="nasarawa">Nasarawa</option>
                                            <option value="niger">Niger</option>
                                            <option value="ogun">Ogun</option>
                                            <option value="ondo">Ondo</option>
                                            <option value="osun">Osun</option>
                                            <option value="oyo">Oyo</option>
                                            <option value="plateau">Plateau</option>
                                            <option value="rivers">Rivers</option>
                                            <option value="sokoto">Sokoto</option>
                                            <option value="taraba">Taraba</option>
                                            <option value="yobe">Yobe</option>
                                            <option value="zamfara">Zamfara</option>

                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-12">
                            <div class="row align-items-end gy-3 gx-md-3 gx-sm-2">
                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                    <div class="form-group mb-0">
                                        <label class="text-light text-uppercase opacity-75">Journey Date</label>
                                        <input type="text" class="form-control fw-bold" placeholder="Date of departure"
                                            id="checkinout" readonly="readonly">
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                    <div class="form-group mb-0">
                                        <button type="button"
                                            class="btn btn-whites text-primary full-width fw-medium"><i
                                                class="fa-solid fa-magnifying-glass me-2"></i>Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- </row> -->

    </div>
</div>

<section class="gray-simple">
    <div class="container">
        <div class="row justify-content-between gy-4 gx-xl-4 gx-lg-3 gx-md-3 gx-4">

            <!-- Sidebar Filter Options -->
            <div class="col-xl-3 col-lg-4 col-md-12">
                <div class="filter-searchBar bg-white rounded-3">
                    <div class="filter-searchBar-head border-bottom">
                        <div class="searchBar-headerBody d-flex align-items-start justify-content-between px-3 py-3">
                            <div class="searchBar-headerfirst">
                                <h6 class="fw-bold fs-5 m-0">Filters</h6>
                                <p class="text-md text-muted m-0">Showing Available Buses</p>
                            </div>
                            <div class="searchBar-headerlast text-end">
                                <a href="#" class="text-md fw-medium text-primary active">Clear All</a>
                            </div>
                        </div>
                    </div>

                    <div class="filter-searchBar-body">


                        <!-- Price Range -->
                        <div class="searchBar-single px-3 py-3 border-bottom">
                            <div class="searchBar-single-title d-flex mb-3">
                                <h6 class="sidebar-subTitle fs-6 fw-medium m-0">Price Range</h6>
                            </div>
                            <div class="searchBar-single-wrap">
                                <input type="range" class="form-range" min="0" max="500" step="10" id="priceRange">
                                <div class="d-flex justify-content-between">
                                    <span>₦0</span>
                                    <span>₦500</span>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>


            <!-- All Flight Lists -->
            <div class="col-xl-9 col-lg-8 col-md-12">

                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <h5 class="fw-bold fs-6 mb-lg-0 mb-3">Showing {{ $routes->count() }} Search Results</h5>
                    </div>

                </div>

                <div class="row align-items-center g-4 mt-2">

                    <!-- Single Flight -->
                    @foreach($routes as $route)
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="flights-accordion">
                            <div class="flights-list-item bg-white rounded-3 p-3">
                                <div class="row gy-4 align-items-center justify-content-between">

                                    <div class="col">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="d-flex align-items-center mb-2">
                                                    <span
                                                        class="label bg-light-primary text-primary me-2">Departure</span>
                                                    <span class="text-muted text-sm">{{
                                                        \Carbon\Carbon::parse($route->departure)->format('d M, Y')
                                                        }}</span>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <div class="row gx-lg-5 gx-3 gy-4 align-items-center">

                                                    @php
                                                    $value = $route->duration;

                                                    $parts = explode(' ', $value);

                                                    $hour = (int) preg_replace('/\D/', '', $parts[0]);
                                                    $min = (int) preg_replace('/\D/', '', $parts[1]);

                                                    $departure = \Carbon\Carbon::parse($route->departure);
                                                    $arrival = $departure->copy()->addHours($hour)->addMinutes($min);

                                                    @endphp
                                                    <div class="col">
                                                        <div class="row gx-3 align-items-center">
                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">{{
                                                                    \Carbon\Carbon::parse($route->departure)->format('h:i
                                                                    A') }}</div>
                                                                <div class="text-muted text-sm fw-medium">{{
                                                                    $route->terminal->name }}</div>
                                                            </div>

                                                            <div class="col text-center">
                                                                <div class="flightLine departure">
                                                                    <div></div>
                                                                    <div></div>
                                                                </div>
                                                                <div class="text-muted text-sm fw-medium mt-3">Direct
                                                                </div>
                                                            </div>

                                                            <div class="col-auto">
                                                                <div class="text-dark fw-bold">{{ $arrival->format('h:i
                                                                    A') }}</div>
                                                                <div class="text-muted text-sm fw-medium">{{
                                                                    $route->destination }}</div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-auto">
                                                        <div class="text-dark fw-medium">{{ $route->duration }}</div>
                                                        <div class="text-muted text-sm fw-medium">Direct</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-auto">
                                        <div class="d-flex items-center h-100">
                                            <div>
                                                <div class="text-start text-md-end">
                                                    <div class="text-dark fs-3 fw-bold lh-base">₦{{
                                                        number_format($route->price) }}</div>
                                                    <div class="text-muted text-sm mb-2">Non-Refundable</div>
                                                </div>

                                                <div class="flight-button-wrap">
                                                    <a href="{{ route('routes.details', $route->id) }}"
                                                        class="btn btn-primary btn-md fw-medium full-width">
                                                        Select Bus<i class="fa-solid fa-arrow-trend-up ms-2"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>

            </div>

        </div>
    </div>
</section>
@endsection