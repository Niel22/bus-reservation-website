@extends('layouts.app')
@section('content')

<section class="bg-cover position-relative" style="background:url(assets/img/bg.jpg)no-repeat;" data-overlay="5">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-7 col-lg-9 col-md-12">

                <div class="fpc-capstion text-center my-4">
                    <div class="fpc-captions">
                        <h1 class="xl-heading text-light">Get in Touch with AKTC</h1>
                        <p class="text-light">Have questions or need assistance with your travel plans? We're here to help! Reach out to AKTC for reliable bus services across Nigeria. Safe, comfortable, and on-time travels, every time.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="gray-simple">
    <div class="container">

        <div class="row align-items-center justify-content-between g-4">

            <div class="col-xl-7 col-lg-7 col-md-12">
                <div class="contactForm">
                    <form>
                        <div class="row align-items-center">

                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="touch-block d-flex flex-column mb-4">
                                    <h2>Drop Us a Message</h2>
                                    <p>Have a question or need help? Fill out the form below and we will respond as soon as possible.</p>
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Your Name</label>
                                    <input type="text" class="form-control" placeholder="Enter your name">
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Email Address</label>
                                    <input type="email" class="form-control" placeholder="Enter your email">
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" placeholder="Enter your phone number">
                                </div>
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Subject</label>
                                    <input type="text" class="form-control" placeholder="Subject of your message">
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Your Message</label>
                                    <textarea class="form-control ht-120" placeholder="Type your message here..."></textarea>
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="form-group mb-0">
                                    <button type="button" class="btn fw-medium btn-primary">Send Message<i class="fa-solid fa-paper-plane ms-2"></i></button>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card p-4 rounded-4 border br-dashed text-center mb-4">
                    <div class="crds-icons d-inline-flex mx-auto mb-3 text-primary fs-2"><i class="fa-solid fa-briefcase"></i>
                    </div>
                    <div class="crds-desc">
                        <h5>Email Us</h5>
                        <p class="text-md lh-2 mb-0">info@aktcnigeria.com<br>support@aktcnigeria.com</p>
                    </div>
                </div>

                <div class="card p-4 rounded-4 border br-dashed text-center">
                    <div class="crds-icons d-inline-flex mx-auto mb-3 text-primary fs-2"><i class="fa-solid fa-headset"></i>
                    </div>
                    <div class="crds-desc">
                        <h5>Call Us</h5>
                        <p class="text-md lh-2 mb-0">0803 123 4567<br>0805 678 9101</p>
                    </div>
                </div>
            </div>

        </div>


        <div class="row mt-5">
            <div class="col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2027490.2014165132!2d4.511564319401912!3d7.01612728957603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1042b3632bd447a7%3A0xe721476cb5e3a2a1!2sAkwa%20Ibom%20Transport%20Company%20Ltd.%20(AKTC)%2C%20Ikot%20Ekpene!5e0!3m2!1sen!2sng!4v1728836893974!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </div>
</section>

@endsection
