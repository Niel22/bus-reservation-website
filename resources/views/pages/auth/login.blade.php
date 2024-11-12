
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Akwa Ibom Bus Reservation Company</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">

    <!-- All Plugins -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animation.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dropzone.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flatpickr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flickity.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/magnifypopup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/rangeSlider.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/prism.css') }}" rel="stylesheet">

    <!-- Fontawesome & Bootstrap Icons CSS -->
    <link href="{{ asset('assets/css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  </head>

<body>
	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<div id="preloader">
		<div class="preloader"><span></span><span></span></div>
	</div>

	<!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">

		<!-- ============================== Login Section ================== -->
		<section class="py-5">
			<div class="container">

				<div class="row justify-content-center align-items-center m-auto">
					<div class="col-12">
						<div class="bg-mode shadow rounded-3 overflow-hidden">
							<div class="row g-0">
								<!-- Vector Image -->
								<div class="col-lg-6 d-flex align-items-center order-2 order-lg-1">
									<div class="p-3 p-lg-5">
										<img src="{{ asset('assets/img/login.svg') }}" class="img-fluid" alt="">
									</div>
									<!-- Divider -->
									<div class="vr opacity-1 d-none d-lg-block"></div>
								</div>

								<!-- Information -->
								<div class="col-lg-6 order-1">
									<div class="p-3 p-sm-4 p-md-5">
										<!-- Logo -->
										<a href="index.html">
											<img class="img-fluid mb-4" src="{{ asset('assets/img/logo-icon.png') }}" width="70" alt="logo">
										</a>
										<!-- Title -->
										<h1 class="mb-2 fs-2">Welcome Back</h1>
										<p class="mb-0">Are you new here?<a href="{{ route('auth.register') }}" class="fw-medium text-primary"> Create an
												account</a></p>
                                            <a href="{{ route('index') }}" class="btn btn-primary btn-sm">Back to home</a>

										<!-- Form START -->
										<form action="{{ route('auth.store') }}" method="post" class="mt-4 text-start">
											@csrf
											<div class="form py-4">
												<div class="form-floating mb-4">
													<input type="email" name="email" class="form-control" placeholder="name@example.com" required="">
													<label>Email</label>
													@error('email')
														<span class="text-sm text-danger">{{ $message }}</span>
													@enderror
												</div>
												<div class="form-floating mb-4">
													<input type="password" name="password" class="form-control" id="password-field" name="password" placeholder="Password"  required="">
													<label>Password</label>
													<span
														class="toggle-password position-absolute top-50 end-0 translate-middle-y me-3 fa-regular fa-eye"></span>
													@error('password')
														<span class="text-sm text-danger">{{ $message }}</span>
													@enderror
												</div>

												<div class="form-group">
													<button type="submit" class="btn btn-primary full-width font--bold btn-lg">Log In</button>
												</div>

												<div class="modal-flex-item d-flex align-items-center justify-content-between mb-3">
													<div class="modal-flex-first">
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="checkbox" id="savepassword" value="option1">
															<label class="form-check-label" for="savepassword">Save Password</label>
														</div>
													</div>
													<div class="modal-flex-last">
														<a href="JavaScript:Void(0);" class="text-primary fw-medium">Forget Password?</a>
													</div>
												</div>
											</div>

										</form>
										<!-- Form END -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>
		<!-- ============================== Login Section End ================== -->

	</div>
	<!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->


	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/js/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/flickity.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/rangeslider.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/prism.js') }}"></script>

	<script src="{{ asset('assets/js/custom.js') }}"></script>
	<!-- ============================================================== -->
	<!-- This page plugins -->
	<!-- ============================================================== -->

</body>


</html>
