@extends('layouts.admin')
@section('breadcrumb-title', 'All Bookings')
@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between p-3">
                        <h4 class="">All Bookings</h4>
                    </div>

                    <!-- Default Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">User Name</th>
                                <th scope="col">User Contact</th>
                                <th scope="col">User Email</th>
                                <th scope="col">Route</th>
                                <th scope="col">No Of Seat</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bookings as $index => $booking)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $booking->user->name }}</td>
                                <td>{{ $booking->user->user_details->mobile ?? "" }}</td>
                                <td>{{ $booking->user->email ?? "" }}</td>
                                <td>{{ $booking->terminal}} to {{ $booking->destination }}</td>
                                <td>{{ $booking->seats }}</td>
                                <td>{{ $booking->created_at->format('d M Y') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Default Table Example -->
                </div>
            </div>

        </div>

    </div>
</section>
@endsection