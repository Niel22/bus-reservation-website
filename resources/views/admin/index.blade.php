@extends('layouts.admin')
@section('breadcrumb-title', 'Dashboard')
@section('content')
<div class="row">

    <!-- Left side columns -->
    <div class="col-lg-8">
      <div class="row">
    
        <!-- Terminals Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card" style="background-color: #f0f8ff;">
    
            <div class="card-body">
              <h5 class="card-title">Total Terminals</h5>
    
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color: #17a2b8;">
                  <i class="bi bi-building"></i>
                </div>
                <div class="ps-3">
                  <h6>{{ $terminal }}</h6>
                </div>
              </div>
            </div>
    
          </div>
        </div><!-- End Terminals Card -->
    
        <!-- Routes Card -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card revenue-card" style="background-color: #fdfd96;">
    
            <div class="card-body">
              <h5 class="card-title">Total Routes</h5>
    
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color: #ffcc00;">
                  <i class="bi bi-signpost-split"></i>
                </div>
                <div class="ps-3">
                  <h6>{{ $route}}</h6>
                </div>
              </div>
            </div>
    
          </div>
        </div><!-- End Routes Card -->
    
        <!-- Bookings Card -->
        <div class="col-xxl-4 col-xl-12">
          <div class="card info-card customers-card" style="background-color: #e6f7ff;">
    
            <div class="card-body">
              <h5 class="card-title">Total Bookings</h5>
    
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color: #66ccff;">
                  <i class="bi bi-calendar-check"></i>
                </div>
                <div class="ps-3">
                  <h6>{{ $booking}}</h6>
                </div>
              </div>
    
            </div>
          </div>
        </div><!-- End Bookings Card -->
    
        <!-- Transactions Card -->
        <div class="col-xxl-4 col-xl-12">
          <div class="card info-card customers-card" style="background-color: #ffe6e6;">
    
            <div class="card-body">
              <h5 class="card-title">Total Transaction</h5>
    
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color: #e60000;">
                  <i class="bi bi-card-list"></i>
                </div>
                <div class="ps-3">
                  <h6>{{ $transaction}}</h6>
                </div>
              </div>
    
            </div>
          </div>
        </div><!-- End Transactions Card -->
    
        <!-- Users Card -->
        <div class="col-xxl-4 col-xl-12">
          <div class="card info-card customers-card" style="background-color: #e8f9e8;">
    
            <div class="card-body">
              <h5 class="card-title">Total Users</h5>
    
              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center" style="background-color: #28a745;">
                  <i class="bi bi-person-lines-fill"></i>
                </div>
                <div class="ps-3">
                  <h6>{{ $users}}</h6>
                </div>
              </div>
    
            </div>
          </div>
        </div><!-- End Users Card -->
    
      </div>
    </div><!-- End Left side columns -->
    


  </div>
  @endsection