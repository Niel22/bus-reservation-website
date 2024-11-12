<div class="col-xl-4 col-lg-4 col-md-12">
    <div class="card rounded-2 me-xl-5 mb-4">
        <div class="card-top bg-primary position-relative">
            <div class="position-absolute end-0 top-0 mt-4 me-3">
                <a href="login.html" class="square--40 circle bg-light-dark text-light">
                    <i class="fa-solid fa-right-from-bracket"></i>
                </a>
            </div>
            <div class="py-5 px-3">
                <div class="crd-thumbimg text-center">
                    <div class="p-2 d-flex align-items-center justify-content-center brd">
                        <img src="assets/img/team-2.jpg" class="img-fluid circle" width="120" alt="User Profile">
                    </div>
                </div>
                <div class="crd-capser text-center">
                    <h5 class="mb-0 text-light fw-semibold">{{ Auth::user()->name }}</h5>
                    <span class="text-light opacity-75 fw-medium text-md">
                        <i class="fa-solid fa-location-dot me-2"></i>Nigeria
                    </span>
                </div>
            </div>
        </div>

        <div class="card-middle px-4 py-5">
            <div class="crdapproval-groups">
                <div class="crdapproval-single d-flex align-items-center justify-content-start mb-4">
                    <div class="crdapproval-item">
                        <div class="square--50 circle bg-light-success text-success">
                            <i class="fa-solid fa-envelope-circle-check fs-5"></i>
                        </div>
                    </div>
                    <div class="crdapproval-caps ps-2">
                        <p class="fw-semibold text-dark lh-2 mb-0">Email Verified</p>
                        <p class="text-md text-muted lh-1 mb-0">{{ Auth::user()->created_at->format('d M, Y') }}</p>
                    </div>
                </div>

                <div class="crdapproval-single d-flex align-items-center justify-content-start mb-4">
                    <div class="crdapproval-item">
                        @php
                            $color = Auth::user()->user_details != null ? "success" : "warning";
                        @endphp
                        <div class="square--50 circle bg-light-{{ $color }} text-{{ $color }}">
                            <i class="fa-solid fa-phone-volume fs-5"></i>
                        </div>
                    </div>
                    <div class="crdapproval-caps ps-2">
                        <p class="fw-semibold text-dark lh-2 mb-0">Mobile Number Verified</p>
                        <p class="text-md text-muted lh-1 mb-0">12 Aug 2022</p>
                    </div>
                </div>

                <div class="crdapproval-single d-flex align-items-center justify-content-start">
                    <div class="crdapproval-item">
                        <div class="square--50 circle bg-light-{{ $color }} text-{{ $color }}">
                            <i class="fa-solid fa-file-invoice fs-5"></i>
                        </div>
                    </div>
                    <div class="crdapproval-caps ps-2">
                        <p class="fw-semibold text-dark lh-2 mb-0">Complete Basic Info</p>
                        <p class="text-md text-muted lh-1 mb-0">Not Verified</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-middle mt-5 mb-4 px-4">
            @if(Auth::user()->user_details == null)
            <div class="revs-wraps mb-3">
                <div class="revs-wraps-flex d-flex align-items-center justify-content-between mb-1">
                    <span class="text-dark fw-semibold text-md">Profile Completion</span>
                    <span class="text-dark fw-semibold text-md">25%</span>
                </div>
                <div class="progress" role="progressbar" aria-label="Profile Completion" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 7px">
                    <div class="progress-bar bg-success" style="width: 25%"></div>
                </div>
            </div>
            @else
            <div class="revs-wraps mb-3">
                <div class="revs-wraps-flex d-flex align-items-center justify-content-between mb-1">
                    <span class="text-dark fw-semibold text-md">Profile Completion</span>
                    <span class="text-dark fw-semibold text-md">100%</span>
                </div>
                <div class="progress" role="progressbar" aria-label="Profile Completion" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="height: 7px">
                    <div class="progress-bar bg-success" style="width: 100%"></div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
