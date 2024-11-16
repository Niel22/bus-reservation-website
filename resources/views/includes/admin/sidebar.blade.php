<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.bus-terminal') }}">
          <i class="bi bi-building"></i>
          <span>Bus Terminals</span>
        </a>
      </li>
      <!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.routes') }}">
          <i class="bi bi-signpost-split"></i>
          <span>Routes</span>
        </a>
      </li>
      <!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.bookings') }}">
          <i class="bi bi-calendar-check"></i>
          <span>Bookings</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.transactions') }}">
          <i class="bi bi-card-list"></i>
          <span>Transaction</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link" href="{{  route('admin.all_users') }}">
          <i class="bi bi-person-lines-fill"></i>
          <span>All Registered Users</span>
        </a>
      </li><!-- End Login Page Nav -->



    </ul>

  </aside>