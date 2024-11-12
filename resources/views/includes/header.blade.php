<div class="header header-dark theme">
    <div class="container">
        <nav id="navigation" class="navigation navigation-landscape">
            <div class="nav-header">
                <a class="nav-brand static-show d-flex align-content-center" href="{{ route('index') }}"><img src="{{ asset('assets/img/logo-icon.png') }}"
                        class="logo" style="width: 30px;" alt=""><h3 class="text-white ml-3">AKTC</h3></a>
                <a class="nav-brand mob-show" href="{{ route('index') }}"><img src="{{ asset('assets/img/logo-icon.png') }}" style="width: 20px; height: 20px" class="logo"
                        alt=""><h3 class="ml-3">AKTC</h3></a>
                <div class="nav-toggle"></div>
                <div class="mobile_nav">
                    <ul>
                        <li>
                            <a href="{{ route('login') }}" class="bg-light-primary text-primary rounded"><i class="fa-regular fa-circle-user fs-6"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nav-menus-wrapper" style="transition-property: none;">
                <ul class="nav-menu">
                    <li><a href="{{ route('index') }}">Home<span class="submenu-indicator"></span></a></li>
                    <li><a href="{{ route('routes') }}">Routes</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="{{ route('faqs') }}">FAQs</a></li>
                </ul>

                <ul class="nav-menu nav-menu-social align-to-right">
                    @guest
                    <li class="list-buttons light">
                        <a href="{{ route('login') }}"><i class="fa-regular fa-circle-user fs-6 me-2"></i>Sign In / Register</a>
                    </li>
                    @endguest

                    @auth
                    <li>
                        <div class="btn-group account-drop">
                            <button type="button" class="btn btn-order-by-filt" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <img src="assets/img/team-2.jpg" class="img-fluid" alt="">
                            </button>
                            <div class="dropdown-menu pull-right animated flipInX">
                                <div class="drp_menu_headr">
                                    <h4>Hi, {{ Auth::user()->name }}</h4>
                                    <div class="drp_menu_headr-right"><button type="button" onclick="document.getElementById('logout').submit()" class="btn btn-md fw-medium btn-whites text-dark">Logout</button></div>
                                    <form action="{{ route('auth.logout') }}" method="post" id="logout">
                                        @csrf
                                    </form>
                                </div>
                                <ul>
                                    <li><a href="{{ route('profile') }}"><i class="fa-regular fa-id-card me-2"></i>My Profile<span
                                                class="notti_coun style-1">4</span></a></li>
                                    <li><a href="{{ route('my_bookings') }}"><i class="fa-solid fa-ticket me-2"></i>My Booking</a></li>
                                    <li><a href="{{ route('my_payments') }}"><i class="fa-solid fa-wallet me-2"></i>Payment Details</a></li>
                                    <li><a href="javascript:void(0)" onclick="document.getElementById('logout').submit()"><i class="fa-solid fa-power-off me-2"></i>Sign Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    @endauth
                </ul>
            </div>

        </nav>
    </div>
</div>
