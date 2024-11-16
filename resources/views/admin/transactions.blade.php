@extends('layouts.admin')
@section('breadcrumb-title', 'All Transactions')
@section('content')
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between p-3">
                        <h4 class="">All Transactions</h4>
                    </div>

                    <!-- Default Table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">User Name</th>
                                <th scope="col">User Email</th>
                                <th scope="col">Transaction ID</th>
                                <th scope="col">Status</th>
                                <th scope="col">Price</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transactions as $index => $transaction)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $transaction->user->name }}</td>
                                <td>{{ $transaction->user->email }}</td>
                                <td>{{ $transaction->transaction_id }}</td>
                                <td><label class="badge bg-success text-capitalize">{{ $transaction->status }}</label></td>
                                <td>₦{{ number_format($transaction->price) }}</td>
                                <td>{{ $transaction->created_at->format('d M Y') }}</td>
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