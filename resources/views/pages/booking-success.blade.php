@extends('layouts.app')
@section('content')
    <section class="py-4 gray-simple position-relative">
        <div class="container">

            <div class="row align-items-start">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card mb-3">
                        <div class="card-body px-xl-5 px-lg-4 py-lg-5 py-4 px-2">

                            <div class="d-flex align-items-center justify-content-center mb-3">
                                <div class="square--80 circle text-light bg-success"><i
                                        class="fa-solid fa-check-double fs-1"></i>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center flex-column text-center mb-5">
                                <h3 class="mb-0">Your booking was successful!</h3>
                                <p class="text-md mb-0">Booking details sent to: <span
                                        class="text-primary">{{ $transaction->user->email }}</span></p>
                            </div>
                            <div class="d-flex align-items-center justify-content-center flex-column mb-4">
                                <div class="border br-dashed full-width rounded-2 p-3 pt-0">
                                    <ul class="row align-items-center justify-content-start g-3 m-0 p-0">
                                        <li class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                                            <div class="d-block">
                                                <p class="text-dark fw-medium lh-2 mb-0">Booking Reference</p>
                                                <p class="text-muted mb-0 lh-2 text-uppercase">#{{ $transaction->transaction_id }}</p>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                                            <div class="d-block">
                                                <p class="text-dark fw-medium lh-2 mb-0">Date</p>
                                                <p class="text-muted mb-0 lh-2">{{ $transaction->created_at->format('d M Y h:i A') }}</p>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                                            <div class="d-block">
                                                <p class="text-dark fw-medium lh-2 mb-0">Total Amount</p>
                                                <p class="text-muted mb-0 lh-2">₦{{ number_format($transaction->price) }}</p>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                                            <div class="d-block">
                                                <p class="text-dark fw-medium lh-2 mb-0">Payment Mode</p>
                                                <p class="text-muted mb-0 lh-2">Card</p>
                                            </div>
                                        </li>
                                        @php
                                            $names = explode(' ', $transaction->user->name);

                                            $first = $names[0] ?? "";
                                            $last = $names[1] ?? " ";
                                        @endphp
                                        <li class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                                            <div class="d-block">
                                                <p class="text-dark fw-medium lh-2 mb-0">First Name</p>
                                                <p class="text-muted mb-0 lh-2">{{ $first }}</p>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                                            <div class="d-block">
                                                <p class="text-dark fw-medium lh-2 mb-0">Last Name</p>
                                                <p class="text-muted mb-0 lh-2">{{ $last }}</p>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                                            <div class="d-block">
                                                <p class="text-dark fw-medium lh-2 mb-0">Phone</p>
                                                <p class="text-muted mb-0 lh-2">{{ $transaction->user->user_details->mobile ?? ""}}</p>
                                            </div>
                                        </li>
                                        <li class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-6">
                                            <div class="d-block">
                                                <p class="text-dark fw-medium lh-2 mb-0">Email</p>
                                                <p class="text-muted mb-0 lh-2">{{ $transaction->user->email }}</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="text-center d-flex align-items-center justify-content-center">
                                <a href="{{ route('routes') }}" class="btn btn-md btn-light-seegreen fw-semibold mx-2">Book
                                    Another Trip</a>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#invoice"
                                    class="btn btn-md btn-light-primary fw-semibold mx-2">View Invoice</a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>


    <div class="modal modal-lg fade" id="invoice" tabindex="-1" aria-labelledby="invoicemodal" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered invoice-pop-form" role="document">
            <div class="modal-content" id="invoicemodal">
                <div class="modal-header">
                    <h4 class="modal-title fs-6">Download Your Bus Ticket Invoice</h4>
                    <a href="#" class="text-muted fs-4" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fa-solid fa-square-xmark"></i></a>
                </div>
                <div class="modal-body" id="printableArea">
                    <div class="invoiceblock-wrap p-3">
                        <!-- Header -->
                        <div class="invoice-header d-flex align-items-center justify-content-between mb-4">
                            <div class="inv-fliop01 d-flex align-items-center justify-content-start">
                                <div class="inv-fliop01">
                                    <div class="square--60 circle bg-light-primary text-primary"><i
                                            class="fa-solid fa-bus fs-2"></i></div>
                                </div>
                                <div class="inv-fliop01 ps-3">
                                    <span class="text-uppercase d-block fw-semibold text-md text-dark lh-2 mb-0">Reciept
                                        </span>
                                    <span class="text-sm text-muted lh-2"><i class="fa-regular fa-calendar me-1"></i>Issued
                                        Date: {{ $transaction->created_at->format('d M Y') }}</span>
                                </div>
                            </div>
                            <div class="inv-fliop02"><span class="label text-success bg-light-success">Paid</span></div>
                        </div>

                        <!-- Invoice Body -->
                        <div class="invoice-body">

                            <!-- Invoice Top Body -->
                            <div class="invoice-bodytop">
                                <div class="row align-items-start justify-content-between">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="invoice-desc mb-2">
                                            <h6>From</h6>
                                            <p class="text-md lh-2 mb-0">Akwa Ibom Transportation Company<br>Nigeria</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-5 col-md-6">
                                        <div class="invoice-desc mb-2">
                                            <h6>To</h6>
                                            <p class="text-md lh-2 mb-0">{{ $transaction->user->name }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Invoice Mid Body -->
                            <div class="invoice-bodymid py-2">
                                <ul class="gray rounded-3 p-3 m-0">
                                    
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-1">
                                        <span class="fw-medium text-sm text-muted-2 mb-0">Reference ID:</span>
                                        <span class="fw-semibold text-muted-2 text-md text-uppercase">#{{ $transaction->transaction_id }}</span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 py-1">
                                        <span class="fw-medium text-sm text-muted-2 mb-0">Pay by:</span>
                                        <span class="fw-semibold text-muted-2 text-md">{{ $transaction->created_at->format('d M Y') }}</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Invoice Bottom Body -->
                            <div class="invoice-bodybott py-2 mb-2">
                                <div class="table-responsive border rounded-2">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Item</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Seats</th>
                                                <th scope="col">Total Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">Bus Seat ({{ $details->terminal }} to {{ $details->destination }})</th>
                                                <td>₦{{ number_format(($transaction->price - 500)/ $details->seats) }}</td>
                                                <td>{{ $details->seats }}</td>
                                                <td>₦{{ number_format($transaction->price - 500) }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Service Charge</th>
                                                <td>₦500</td>
                                                <td>-</td>
                                                <td>₦500</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Total</th>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>₦{{ number_format($transaction->price) }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="invoice-bodyaction">
                                <div class="d-flex text-end justify-content-end align-items-center">
                                    <a href="#" class="btn btn-sm btn-light-success fw-medium me-2" onclick="printInvoice()">Download
                                        Invoice</a>
                                    <a href="#" class="btn btn-sm btn-light-primary fw-medium me-2"
                                        onclick="printInvoice()">Print Invoice</a>
                               </div>
                                @push('script')
                                <script>
                                    function printInvoice() {
                                        var printContents = document.getElementById('printableArea').innerHTML;
                                        var originalContents = document.body.innerHTML;
                                
                                        // Replace the entire document body with the modal content
                                        document.body.innerHTML = printContents;
                                
                                        // Trigger print
                                        window.print();
                                
                                        // Restore the original content after printing
                                        document.body.innerHTML = originalContents;
                                        window.location.reload(); // Reload to reset JavaScript bindings if necessary
                                    }
                                </script>
                                @endpush

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
