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
            <div class="container-xxl">
                <!-- Page Header -->
                <div class="hk-pg-header pt-7 pb-4">
                    <h1 class="pg-title">Edit Profile</h1>
                    <p>The Avatar component is used to represent a user, and displays the profile picture, initials or
                        fallback icon.</p>
                </div>
                <!-- /Page Header -->

                <!-- Page Body -->
                <!-- <div class="hk-pg-body">
     <div class="row edit-profile-wrap">
      <div class="col-lg-2 col-sm-3 col-4">
       <div class="nav-profile mt-4">
        <div class="nav-header">
         <span>Account</span>
        </div>
        <ul class="nav nav-light nav-vertical nav-tabs">
         <li class="nav-item">
          <a data-bs-toggle="tab" href="#tab_block_1" class="nav-link active">
           <span class="nav-link-text">Public Profile</span>
          </a>
         </li>
         <li class="nav-item">
          <a data-bs-toggle="tab" href="#tab_block_2" class="nav-link">
           <span class="nav-link-text">Account Settings</span>
          </a>
         </li>
         <li class="nav-item">
          <a data-bs-toggle="tab" href="#tab_block_3" class="nav-link">
           <span class="nav-link-text">Privacy Settings</span>
          </a>
         </li>
         <li class="nav-item">
          <a data-bs-toggle="tab" href="#tab_block_4" class="nav-link">
           <span class="nav-link-text">Login & Security</span>
          </a>
         </li>
         <li class="nav-item">
          <a href="#" class="nav-link">
           <span class="nav-link-text">Notifications</span>
          </a>
         </li>
         <li class="nav-item">
          <a data-scroll="" href="#" class="nav-link">
           <span class="nav-link-text">Connections</span>
          </a>
         </li>
         <li class="nav-item">
          <a data-scroll="" href="#" class="nav-link">
           <span class="nav-link-text">Billing Info</span>
          </a>
         </li>
        </ul>
       </div>
      </div> -->
                <div class="col-lg-10 col-sm-9 col-8">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab_block_1">
                            <form action="{{ url('/edit-profile') }}" method="post">
                                @csrf
                                <div class="row gx-3">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="media align-items-center">
                                                <div class="media-head me-5">
                                                    <div class="avatar avatar-rounded avatar-xxl">
                                                        <img src="added-assets/dist/img/avatar3.jpg" alt="user"
                                                            class="avatar-img">
                                                    </div>
                                                </div>
                                                <div class="media-body">
                                                    <div class="btn btn-soft-primary btn-file mb-1">
                                                        Upload Photo
                                                        <input type="file" class="upload">
                                                    </div>
                                                    <div class="form-text text-muted">
                                                        For better preview recommended size is 450px x 450px. Max size
                                                        5mb.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="title title-xs title-wth-divider text-primary text-uppercase my-4">
                                    <span>Personal Info</span></div>
                                <div class="row gx-3">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Trade Name</label>
                                            <input class="form-control" type="text" value="" name="trade_name"
                                                placeholder="Enter a trade name" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">GST No</label>
                                            <input class="form-control" type="text" value="" name="gst"
                                                placeholder="Enter a gst number" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row gx-3">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Address</label>
                                            <input class="form-control" type="text" value="" name="Address"
                                                placeholder="Enter an Address" />
                                        </div>
                                    </div>
                                    <!-- <div class="col-sm-6">
            <div class="form-group">
             <label class="form-label">GST No</label>
             <input class="form-control" type="text" value="" name="gst" placeholder="Enter a gst number"/>
            </div>
           </div> -->
                                </div>

                                <div class="row gx-3">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">State</label>
                                            <input class="form-control" type="text" name="state" value=""
                                                placeholder="Enter a state name" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Pin code</label>
                                            <input class="form-control" type="text" value=""
                                                name="pin_code" placeholder="Enter a pin code" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row gx-3">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Mobile number</label>
                                            <input class="form-control" type="text" value="" name="mobile"
                                                placeholder="Enter a mobile number" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Pan Number</label>
                                            <input class="form-control" type="text" value="" name="pan"
                                                placeholder="Enter a PAN Number" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row gx-3">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">AUTHORISED SIGNATURE PERSON NAME</label>
                                            <input class="form-control" type="text" value=""
                                                name="authorised"
                                                placeholder="Enter AUTHORISED SIGNATURE PERSON NAME" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Bank name</label>
                                            <input class="form-control" type="text" value=""
                                                name="bank_name" placeholder="Enter a Bank name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row gx-3">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Bank IFSC Code</label>
                                            <input class="form-control" type="text" value=""
                                                name="bank_ifsc" placeholder="Enter Bank IFSC Code" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Bank Account</label>
                                            <input class="form-control" type="text" value=""
                                                name="bank_account" placeholder="Enter a Bank Account Number" />
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mt-5">Save Changes</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="tab_block_2">
                            <div class="title-lg fs-4"><span>Account Settings</span></div>
                            <p class="mb-4">The Avatar component is used to represent a user, and displays the
                                profile picture, initials or fallback icon.</p>
                            <form>
                                <div class="row gx-3">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Username</label>
                                            <input class="form-control" type="text" value="Kate" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row gx-3">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input class="form-control" type="text" value="Lane no 1, Newyork" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row gx-3">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">URL</label>
                                            <input class="form-control" type="text" value="hencework.com" />
                                        </div>
                                    </div>
                                </div>
                                <div class="title title-xs title-wth-divider text-primary text-uppercase my-4">
                                    <span>Tracking Code</span></div>
                                <div class="row gx-3">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Google Analytics tracking code</label>
                                            <input class="form-control" type="text" value="UA-1387652-1" />
                                            <small class="form-text text-muted">
                                                Track shot and profile views in your Google analytics account, eg.
                                                UA-0000000-0
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="title title-xs title-wth-divider text-primary text-uppercase my-4">
                                    <span>Account Changes</span></div>
                                <div class="row gx-3">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <a href="#" class="h5 d-block mb-0">Delete Account</a>
                                            <small class="form-text text-muted">
                                                Delete account and all your data
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-end">
                                        <div class="form-group">
                                            <button type="button" class="btn btn-danger">Close account</button>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary mt-5">Save Changes</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="tab_block_3">
                            <div class="title-lg fs-4 mb-4"><span>Privacy Settings</span></div>
                            <form>
                                <div class="row gx-3">
                                    <div class="col-sm-12">
                                        <div class="form-check form-check-lg">
                                            <input type="checkbox" class="form-check-input" id="customChecks1">
                                            <label class="form-check-label mt-0" for="customChecks1">let others find
                                                me by email address</label>
                                            <small class="form-text text-muted d-block">People who have your email
                                                address will be able to connect you by Jampack</small>
                                        </div>
                                        <div class="separator"></div>
                                        <div class="form-check form-check-lg">
                                            <input type="checkbox" class="form-check-input" id="customChecks2">
                                            <label class="form-check-label mt-0" for="customChecks2">Keep my phone
                                                number private</label>
                                            <small class="form-text text-muted d-block">No one can find you by your
                                                phone number. Your phone number will not be shared with your contact
                                                anymore.</small>
                                        </div>
                                        <div class="separator"></div>
                                        <div class="form-check form-check-lg">
                                            <input type="checkbox" class="form-check-input" id="customChecks3">
                                            <label class="form-check-label mt-0" for="customChecks3">All Keep my
                                                location sharing on</label>
                                            <small class="form-text text-muted d-block">Jmapack webapp shares your
                                                location wherever you go</small>
                                        </div>
                                        <div class="separator"></div>
                                        <div class="form-check form-check-lg">
                                            <input type="checkbox" class="form-check-input" id="customChecks4">
                                            <label class="form-check-label mt-0" for="customChecks4">Share data
                                                through select partnerships</label>
                                            <small class="form-text text-muted d-block">Lorem ipsum dolor sit amet,
                                                consectetur adipiscing elit. Pellentesque condimentum mauris volutpat
                                                enim ornare iaculis. Curabitur euismod rutrum lorem id lobortis. Cras ut
                                                ex dui. Nulla sed blandit tortor. In quam diam, efficitur sit amet
                                                pulvinar eget, consequat placerat arcu.</small>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary mt-5">Save Changes</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="tab_block_4">
                            <div class="title-lg fs-4"><span>Login & Security</span></div>
                            <p class="mb-4">The Avatar component is used to represent a user, and displays the
                                profile picture, initials or fallback icon.</p>
                            <form>
                                <div class="title title-xs title-wth-divider text-primary text-uppercase my-4">
                                    <span>Password Settings</span></div>
                                <div class="row gx-3">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Password</label>
                                            <input class="form-control" type="password" value="Katervewe" />
                                            <button type="button" class="btn btn-primary mt-3">Changes
                                                password</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="title title-xs title-wth-divider text-primary text-uppercase my-4">
                                    <span>Additional Security</span></div>
                                <div class="row gx-3">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label ">2-Step Verification (2FA)</label>
                                            <small class="form-text text-muted d-block">
                                                2-step verification drastically reduces the chances of having the
                                                personal information in your Google account stolen by someone else. Why?
                                                Because hackers would have to not only get your password and your
                                                username, they'd have to get a hold of your phone. A <a href="#"
                                                    class="text-primary">6-digit</a> code may be sent to a number
                                                you’ve previously provided. Codes can be sent in a text message (SMS) or
                                                through a voice call, which depends on the setting you chose. To verify
                                                it’s you, enter the code on the sign-in screen.
                                            </small>
                                            <button type="button" class="btn btn-primary mt-3">Add
                                                Authentication</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Body -->
    </div>

    <!-- Page Footer -->
    <div class="hk-footer">
        <footer class="container-xxl footer">
            <div class="row">
                <div class="col-xl-8">
                    <p class="footer-text"><span class="copy-text">Jampack © 2022 All rights reserved.</span> <a
                            href="#" class="" target="_blank">Privacy Policy</a><span
                            class="footer-link-sep">|</span><a href="#" class=""
                            target="_blank">T&C</a><span class="footer-link-sep">|</span><a href="#"
                            class="" target="_blank">System Status</a></p>
                </div>
                <div class="col-xl-4">
                    <a href="#" class="footer-extr-link link-default"><span class="feather-icon"><i
                                data-feather="external-link"></i></span><u>Send feedback to our help forum</u></a>
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
