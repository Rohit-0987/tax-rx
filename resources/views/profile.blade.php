<!DOCTYPE html>
<html>

<head>
    @include('links')
</head>

<body>
    <!-- Wrapper -->
    <div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="light" data-footer="simple">
        @include('vertical-nav')

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <div class="hk-pg-body">
                <div class="container-xxl">
                    <div class="profile-wrap">
                        <div class="profile-img-wrap">
                            <img class="img-fluid rounded-5" src="added-assets/dist/img/profile-bg.jpg"
                                alt="Image Description">
                        </div>
                        <div class="profile-intro">
                            <div class="card card-flush mw-400p bg-transparent">
                                <div class="card-body">
                                    <div class="avatar avatar-xxl avatar-rounded position-relative mb-2">
                                        <img src="added-assets/dist/img/avatar3.jpg" alt="user"
                                            class="avatar-img border border-4 border-white">
                                        <span
                                            class="badge badge-indicator badge-success  badge-indicator-xl position-bottom-end-overflow-1 me-1"></span>
                                    </div>
                                    <h4>{{ $user[0]->name }}
                                        <i class="bi-check-circle-fill fs-6 text-blue" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title=""
                                            data-bs-original-title="Top endorsed"></i>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <header class="profile-header">
                            <ul class="nav nav-line nav-tabs nav-icon nav-light h-100 d-md-flex d-none">
                                <li class="nav-item">
                                    <a class="d-flex align-items-center nav-link active h-100" data-bs-toggle="tab"
                                        href="#">
                                        <span class="nav-link-text">Profile</span>
                                    </a>
                                </li>
                            </ul>
                        </header>
                        <div class="row mt-7">
                            <div class="col-lg-6 mb-lg-0 mb-3">
                                <div class="card card-border mb-lg-4 mb-3">
                                    <div class="card-header card-header-action">
                                        <div class="media align-items-center">
                                            <div class="media-head me-2">
                                            </div>
                                            <div class="media-body">
                                                <div class="fw-medium text-dark">{{ $user[0]->name }}</div>
                                                <div class="fs-7">Contact Detail</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex text-center">
                                            <div class="flex-1 border-end">
                                                <div>
                                                    <span
                                                        class="d-block fs-4 text-dark mb-1">{{ $user_profile[0]->tradename }}</span>
                                                    <span class="d-block text-capitalize fs-7">Trade Name</span>
                                                </div>
                                            </div>
                                            <div class="flex-1 border-end">
                                                <div>
                                                    <span
                                                        class="d-block fs-4 text-dark mb-1">{{ $user_profile[0]->Gst_no }}</span>
                                                    <span class="d-block text-capitalize fs-7">Gst Number</span>
                                                </div>
                                            </div>
                                            <div class="flex-1">
                                                <div>
                                                    <span
                                                        class="d-block fs-4 text-dark mb-1">{{ $user_profile[0]->office_address }}</span>
                                                    <span class="d-block text-capitalize fs-7">Address</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item border-0"><span><i
                                                    class="bi bi-calendar-check-fill text-disabled me-2"></i><span
                                                    class="text-muted">State:</span></span><span
                                                class="ms-2">{{ $user_profile[0]->state }}</span></li>
                                        <li class="list-group-item border-0"><span><i
                                                    class="bi bi-briefcase-fill text-disabled me-2"></i><span
                                                    class="text-muted">Pin Code:</span></span><span
                                                class="ms-2">{{ $user_profile[0]->pin_code }}</span></li>
                                        <li class="list-group-item border-0"><span><i
                                                    class="bi bi-house-door-fill text-disabled me-2"></i><span
                                                    class="text-muted">Mobile Number:</span></span><span
                                                class="ms-2">{{ $user_profile[0]->number }}</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card card-border mb-lg-4 mb-3">
                                    <div class="card-header card-header-action">
                                        <div class="media align-items-center">

                                            <div class="media-body">
                                                <div class="fw-medium text-dark">{{ $user[0]->name }}</div>
                                                <div class="fs-7">Other Details</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex text-center">
                                            <div class="flex-1 border-end">
                                                <div>
                                                    <span
                                                        class="d-block fs-4 text-dark mb-1">{{ $user_profile[0]->pan_no }}</span>
                                                    <span class="d-block text-capitalize fs-7">Pan number</span>
                                                </div>
                                            </div>
                                            <div class="flex-1 border-end">
                                                <div>
                                                    <span
                                                        class="d-block fs-4 text-dark mb-1">{{ $user_profile[0]->AUTHORISED }}</span>
                                                    <span class="d-block text-capitalize fs-7">Authorised Person
                                                        Name</span>
                                                </div>
                                            </div>
                                            <div class="flex-1">
                                                <div>
                                                    <span
                                                        class="d-block fs-4 text-dark mb-1">{{ $user_profile[0]->bank_name }}</span>
                                                    <span class="d-block text-capitalize fs-7">Bank Name</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item border-0"><span><i
                                                    class="bi bi-calendar-check-fill text-disabled me-2"></i><span
                                                    class="text-muted">BANK IFSC CODE:</span></span><span
                                                class="ms-2">{{ $user_profile[0]->IFSC }}</span></li>
                                        <li class="list-group-item border-0"><span><i
                                                    class="bi bi-briefcase-fill text-disabled me-2"></i><span
                                                    class="text-muted">Bank Account:</span></span><span
                                                class="ms-2">{{ $user_profile[0]->BankAccount }}</span></li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /Page Body -->

            <!-- Page Footer -->
            <div class="hk-footer">
                <footer class="container-xxl footer">
                    <div class="row">
                        <div class="col-xl-8">
                            <p class="footer-text"><span class="copy-text">Jampack © 2022 All rights reserved.</span> <a
                                    href="#" class="" target="_blank">Privacy Policy</a><span
                                    class="footer-link-sep">|</span><a href="#" class=""
                                    target="_blank">T&C</a><span class="footer-link-sep">|</span><a href="#"
                                    class="" target="_blank">System
                                    Status</a></p>
                        </div>
                        <div class="col-xl-4">
                            <a href="#" class="footer-extr-link link-default"><span class="feather-icon"><i
                                        data-feather="external-link"></i></span><u>Send feedback to our help
                                    forum</u></a>
                        </div>
                    </div>
                </footer>
            </div>

            @include('footer')

        </div>
        <!-- /Main Content -->
    </div>
    <!-- Wrapper -->
    @include('script-links')
</body>

</html>
