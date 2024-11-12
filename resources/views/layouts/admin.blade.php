
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Akwa Ibom Bus Reservation Company</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets_back/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets_back/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets_back/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets_back/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('assets_back/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('assets_back/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets_back/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets_back/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  @include('includes.admin.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('includes.admin.sidebar')
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>@yield('breadcrumb-title')</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">@yield('breadcrumb-title')</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      @yield('content')
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">NIEL</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets_back/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets_back/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets_back/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('assets_back/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('assets_back/vendor/quill/quill.js') }}"></script>
  <script src="{{ asset('assets_back/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('assets_back/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assets_back/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets_back/js/main.js') }}"></script>

</body>

</html>