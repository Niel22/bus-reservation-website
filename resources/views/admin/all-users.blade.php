@extends('layouts.admin')
@section('breadcrumb-title', 'All Users')
@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between p-3">
                        <h4 class="">All Users</h4>
                    </div>

                    <!-- Default Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Phone No.</th>
                                <th scope="col">Date Joined</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($all_users as $index => $user)
                            @if($user->name != 'Administrator')
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->user_details->gender ?? "Not Available" }}</td>
                                <td>{{ $user->user_details->mobile ?? "Not Available" }}</td>
                                <td>{{ $user->created_at->format('d M Y') }}</td>
                            </tr>
                            @endif
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