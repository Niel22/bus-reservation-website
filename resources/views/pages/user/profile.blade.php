@extends('layouts.app')
@section('content')

@include('pages.user.nav')

<section class="pt-5 gray-simple position-relative">
    <div class="container">

        @include('pages.user.mobile')

        <div class="row align-items-start justify-content-between gx-xl-4">

            @include('pages.user.sidebar')

            <div class="col-xl-8 col-lg-8 col-md-12">

                <!-- Personal Information -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4><i class="fa-solid fa-file-invoice me-2"></i>Personal Information</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('profile.update') }}" method="post" class="row align-items-center justify-content-start">
                            @csrf
            
                            <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                                <div class="d-flex align-items-center">
                                    <label class="position-relative me-4" for="uploadfile-1" title="Replace this pic">
                                        <!-- Avatar placeholder -->
                                        <span class="avatar avatar-xl">
                                            <img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/img/team-2.jpg" alt="">
                                        </span>
                                    </label>
                                    <!-- Upload button -->
                                    <label class="btn btn-sm btn-light-primary px-4 fw-medium mb-0" for="uploadfile-1">Change</label>
                                    <input id="uploadfile-1" class="form-control d-none" type="file">
                                </div>
                            </div>
            
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" readonly class="form-control" value="{{ Auth::user()->name }}" required>
                                    
                                </div>
                            </div>
            
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Email ID</label>
                                    <input type="email" readonly class="form-control" value="{{ Auth::user()->email }}" required>
                                </div>
                            </div>
            
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Mobile</label>
                                    <input type="tel" name="mobile" class="form-control" value="{{ Auth::user()->user_details->mobile ?? "" }}" required>
                                    @error('mobile')
                                        <span class="text-sm text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
            
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Date of Birth</label>
                                    <input type="date" min="1900-01-01" max="{{ date('Y-m-d', strtotime('-18 years')) }}" name="dob" class="form-control" value="{{ Auth::user()->user_details->dob ?? "" }}" required>
                                    @error('dob')
                                        <span class="text-sm text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
            
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Gender</label>
                                    <select name="gender" class="form-control" required>
                                        <option>Select your gender</option>
                                        <option {{ Auth::user()->user_details != null && Auth::user()->user_details->gender == 'male' ? 'selected' : '' }} value="Male">Male</option>
                                        <option {{ Auth::user()->user_details != null && Auth::user()->user_details->gender == 'female' ? 'selected' : '' }} value="Female">Female</option>
                                    </select>
                                    @error('gender')
                                        <span class="text-sam text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
            
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">About Info</label>
                                    <textarea name="about" class="form-control ht-120" required>{{ Auth::user()->user_details->about ?? '' }}</textarea>
                                    @error('about')
                                        <span class="text-sm text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="form-group">
                                    <button class="btn btn-success" type="submit">Update Profile</button>
                                </div>
                            </div>

            
                        </form>
                    </div>
                </div>
            
            
                <div class="card">
                    <div class="card-header">
                        <h4><i class="fa-solid fa-lock me-2"></i>Update Password</h4>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center justify-content-start">
            
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Old Password</label>
                                    <input type="password" class="form-control" placeholder="*********" required>
                                </div>
                            </div>
            
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">New Password</label>
                                    <input type="password" class="form-control" placeholder="*********" required>
                                </div>
                            </div>
            
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" placeholder="*********" required>
                                </div>
                            </div>
            
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="text-end">
                                    <button class="btn btn-md btn-primary mb-0">Change Password</button>
                                </div>
                            </div>
            
                        </div>
                    </div>
                </div>
            
            </div>
            

        </div>
    </div>
</section>

@endsection
