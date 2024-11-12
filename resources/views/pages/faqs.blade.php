@extends('layouts.app')
@section('content')

<section class="bg-cover position-relative" style="background:url(assets/img/bg.jpg) no-repeat;" data-overlay="5">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-7 col-lg-9 col-md-12">

                <div class="fpc-capstion text-center my-4">
                    <div class="fpc-captions">
                        <h1 class="xl-heading text-light">Frequently Asked Questions</h1>
                        <p class="text-light">Have questions about booking a bus with us? We're here to help! Check out our FAQs for answers on how to book tickets, payment options, and more, specifically for your AKTC bus journeys.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="fpc-banner"></div>
</section>


<section>
    <div class="container">
        <div class="row align-items-start g-4">

            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="card p-4 rounded-4 border br-dashed text-center">
                    <div class="crds-icons d-inline-flex mx-auto mb-3 text-primary fs-2"><i class="fa-solid fa-briefcase"></i>
                    </div>
                    <div class="crds-desc">
                        <h5>Head Office</h5>
                        <p class="text-md lh-2 mb-0">#12 Obafemi Awolowo Way,<br>Lagos, Nigeria<br>info@busreservations.ng</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="card p-4 rounded-4 border br-dashed text-center">
                    <div class="crds-icons d-inline-flex mx-auto mb-3 text-primary fs-2"><i class="fa-solid fa-headset"></i>
                    </div>
                    <div class="crds-desc">
                        <h5>Customer Support</h5>
                        <p class="text-md lh-2 mb-0">Contact us via:<br>+234 123 456 7890<br>support@busreservations.ng</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="card p-4 rounded-4 border br-dashed text-center">
                    <div class="crds-icons d-inline-flex mx-auto mb-3 text-primary fs-2"><i class="fa-solid fa-envelope-open-text"></i></div>
                    <div class="crds-desc">
                        <h5>Branch Office</h5>
                        <p class="text-md lh-2 mb-0">#45 Enugu Road,<br>Enugu, Nigeria<br>branches@busreservations.ng</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="row align-items-start">
            <div class="col-xl-12 col-lg-12 col-md-12 mt-4">

                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item border">
                        <h2 class="accordion-header rounded-2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                How Do I Book a Bus Ticket with Us?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">To book a bus ticket, simply visit our website, select your desired route and travel date, and follow the prompts to complete your booking.</div>
                        </div>
                    </div>
                    <div class="accordion-item border rounded-2">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Can I Pay After Check-out?
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Currently, we require full payment at the time of booking. This ensures your seat is reserved for your trip.</div>
                        </div>
                    </div>
                    <div class="accordion-item border rounded-2">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Do You Operate in Oyo State?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Yes, we have routes that connect to various cities in Oyo State. Check our schedule for available trips.</div>
                        </div>
                    </div>
                    <div class="accordion-item border rounded-2">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                Can I Get Transportation for Group Walks?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Yes, we offer group transport services for events and gatherings. Please contact our support for more details.</div>
                        </div>
                    </div>
                    <div class="accordion-item border rounded-2">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                Are Extra Services Available?
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">Yes, we provide extra services such as meal options, luggage assistance, and travel insurance. Check our services section for more information.</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>


@endsection
