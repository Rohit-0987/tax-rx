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
                    <h1 class="pg-title">Add Customer</h1>
                </div>
                <div class="col-lg-10 col-sm-9 col-8">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab_block_1">
                            <form action="{{url('/add-customer')}}" method="post">
                                @csrf
                                <div class="title title-xs title-wth-divider text-primary text-uppercase my-4">
                                    <span>Customer Info</span>
                                </div>
                                @if (session('status'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('status') }}
                                </div>
                                @endif
                                <div class="row gx-3">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Customer Name</label>
                                            <input class="form-control" type="text" value="" name="CustomerName"
                                                placeholder="Enter a Customer Name" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Customer Address</label>
                                            <input class="form-control" type="text" value="" name="CustomerAddress"
                                                placeholder="Enter a Customer Address" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row gx-3">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">GST Number</label>
                                            <input class="form-control" type="text" value="" name="GstNumber"
                                                placeholder="Enter an Customer GST number" />
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
                                            <label class="form-label">Pan Number</label>
                                            <input class="form-control" type="text" name="PanNumber" value=""
                                                placeholder="Enter a Pan Number" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Email Id</label>
                                            <input class="form-control" type="text" value="" name="Email"
                                                placeholder="Enter an Email" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row gx-3">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Mobile number</label>
                                            <input class="form-control" type="text" value="" name="MobileNumber"
                                                placeholder="Enter a Mobile Number" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Bank name</label>
                                            <input class="form-control" type="text" value="" name="BankName"
                                                placeholder="Enter a Bank name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row gx-3">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Bank IFSC Code</label>
                                            <input class="form-control" type="text" value="" name="IFSC"
                                                placeholder="Enter Bank IFSC Code" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Bank Account</label>
                                            <input class="form-control" type="text" value="" name="BankAccount"
                                                placeholder="Enter a Bank Account Number" />
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-5">Save Changes</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Body -->
    </div>

    <!-- Page Footer -->
    @include('footer')


    </div>
    <!-- /Main Content -->
    </div>
    <!-- Wrapper -->
    @include('script-links')
</body>

</html>