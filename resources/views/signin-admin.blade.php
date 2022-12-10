<head>
    @include('links')
</head>

<body>
    <!-- Wrapper -->
    <div class="hk-wrapper hk-pg-auth" data-footer="simple">
        {{-- @include('top-navbar')
        @include('vertical-nav')
        @include('chat-popup') --}}

        <!-- Main Content -->
        <div class="hk-pg-wrapper py-0">
            <div class="hk-pg-body py-0">
                <!-- Container -->
                <div class="container-fluid">
                    <!-- Row -->
                    <div class="row auth-split">
                        <div class="col-xl-5 col-lg-6 col-md-7 position-relative mx-auto">
                            <div class="auth-content flex-column pt-8 pb-md-8 pb-13">
                                <div class="text-center mb-7">
                                    <a class="navbar-brand me-0" href="index.html">
                                        <img class="brand-img d-inline-block tax-rx-img"
                                            src="added-assets/dist/img/TaxRx-01.png" alt="brand">
                                    </a>
                                </div>
                                <form class="w-100" method="POST" action="signin-admin-check">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-7 col-sm-10 mx-auto">
                                            <div class="text-center mb-4">
                                                <h4>Sign in to your account Admin</h4>
                                                {{-- <p>There are many variations of passages of Lorem Ipsum available, in some form, by injected humour</p> --}}
                                            </div>
                                            @if (session('error'))
                                                <div class="alert alert-danger" role="alert">
                                                    {{ session('error') }}
                                                </div>
                                            @endif
                                            <div class="row gx-3">
                                                <div class="form-group col-lg-12">
                                                    <div class="form-label-group">
                                                        <label>User Name</label>
                                                    </div>
                                                    <input name="username" class="form-control"
                                                        placeholder="Enter username or email ID" value=""
                                                        type="text">
                                                </div>
                                                <div class="form-group col-lg-12">
                                                    <div class="form-label-group">
                                                        <label>Password</label>
                                                        <a href="#" class="fs-7 fw-medium">Forgot Password ?</a>
                                                    </div>
                                                    <div class="input-group password-check">
                                                        <span class="input-affix-wrapper affix-wth-text">
                                                            <input name="password" class="form-control"
                                                                placeholder="Enter your password" value=""
                                                                type="password">
                                                            <a href="#"
                                                                class="input-suffix text-primary text-uppercase fs-8 fw-medium">
                                                                <span>Show</span>
                                                                <span class="d-none">Hide</span>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <div class="form-check form-check-sm mb-3">
                                                    <input type="checkbox" class="form-check-input" id="logged_in"
                                                        checked>
                                                    <label class="form-check-label text-muted fs-7" for="logged_in">Keep
                                                        me logged in</label>
                                                </div>
                                            </div>
                                            <button type="submit"
                                                class="btn btn-primary btn-uppercase btn-block">Login</button>
                                            <p class="p-xs mt-2 text-center">Normal User? <a href="/"><u>Sign in
                                                        here</u></a></p>
                                            <a href="#" class="d-block extr-link text-center mt-4"><span
                                                    class="feather-icon"><i data-feather="external-link"></i></span><u
                                                    class="text-muted">Send feedback to our help forum</u></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Page Footer -->
                            <div class="hk-footer border-0">
                                <footer class="container-xxl footer">
                                    <div class="row">
                                        <div class="col-xl-8 text-center">
                                            <p class="footer-text pb-0"><span class="copy-text">Jampack © 2022 All
                                                    rights reserved.</span> <a href="#" class=""
                                                    target="_blank">Privacy Policy</a><span
                                                    class="footer-link-sep">|</span><a href="#" class=""
                                                    target="_blank">T&C</a><span class="footer-link-sep">|</span><a
                                                    href="#" class="" target="_blank">System Status</a></p>
                                        </div>
                                    </div>
                                </footer>
                            </div>
                            <!-- / Page Footer -->
                        </div>
                        <div
                            class="col-xl-7 col-lg-6 col-md-5 col-sm-10 d-md-block d-none position-relative bg-primary-light-5">
                            <div class="auth-content flex-column text-center py-8">
                                <div class="row">
                                    <div class="col-xxl-7 col-xl-8 col-lg-11 mx-auto">
                                        <h2 class="mb-4">Something about Physber</h2>
                                        <p>There are many variations of passages of Lorem Ipsum available, passages of
                                            Lorem Ipsum available, in some form, by injected.</p>

                                    </div>
                                </div>
                                <img src="added-assets/dist/img/macaroni-logged-out.png" class="img-fluid w-sm-50 mt-7"
                                    alt="login" />
                            </div>
                            <p class="p-xs credit-text opacity-55">All illustration are powered by <a
                                    href="https://icons8.com/ouch/" target="_blank" class="text-light"><u>Icons8</u></a>
                            </p>
                        </div>
                    </div>
                    <!-- /Row -->
                </div>
                <!-- /Container -->
            </div>
            <!-- /Page Body -->
            @include('footer')
        </div>
        <!-- /Main Content -->

    </div>
    <!-- Wrapper -->
    @include('script-links')
</body>

</html>
