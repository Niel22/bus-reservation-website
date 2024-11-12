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
                <div class="card mb-4">
                    <div class="card-header">
                        <h4><i class="fa-solid fa-file-invoice-dollar me-2"></i>Billing History</h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Transaction ID</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Amout</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>01</th>
                                    <td>BK32154</td>
                                    <td>10 Sep 2023</td>
                                    <td><span class="badge bg-light-success text-success fw-medium text-uppercase">Paid</span></td>
                                    <td><span class="text-md fw-medium text-dark">$240</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            

        </div>
    </div>
</section>

@endsection
