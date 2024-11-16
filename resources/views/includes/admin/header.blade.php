<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/img/logo-icon.png') }}" style="width: 20px; height: 20px" class="logo" alt="">
        <h3 class="ml-3">AKTC</h3>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">




        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="{{ url()->current() }}" data-bs-toggle="dropdown">
            <img src="{{ asset('assets/img/team-2.jpg') }}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block ps-2">{{ Auth::user()->name }}</span>
          </a><!-- End Profile Iamge Icon -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header>