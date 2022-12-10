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
                    <h1 class="pg-title">Create Purchase Bill</h1>
                </div>
                <div class="col-lg-10 col-sm-9 col-8">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab_block_1">
                            <form action="{{ url('/PurchaseBill') }}" method="post">
                                @csrf
                                <div class="row gx-3">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Vendor Name</label>
                                            <input class="form-control" type="text" value="" name="VendorName"
                                                placeholder="Enter a Vendor Name" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <button type="submit" style="margin-top:32px"
                                                class="btn btn-primary">Search</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <a href="{{ url('/AddVendors') }}">
                                                <button type="button" style="margin-top:32px"
                                                    class="btn btn-primary">Add Vendor</button></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            @if (!empty($vendor))
                <div class="invoice-body p-2">
                    <div data-simplebar class="nicescroll-bar">
                        <div class="invoice-list-view">
                            <table id="datable_1" class="table nowrap w-100 mb-5">
                                <thead>
                                    <tr>
                                        <th><span class="form-check mb-0">
                                                <input type="checkbox" class="form-check-input check-select-all"
                                                    id="customCheck1">
                                                <label class="form-check-label" for="customCheck1"></label>
                                            </span></th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>GST</th>
                                        <th>Pan</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Bank Name</th>
                                        <th>IFSC</th>
                                        <th>Account</th>
                                        <th> </th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vendor as $vendors)
                                        <tr>
                                            <td></td>
                                            <td>{{ $vendors->VendorName }}</td>
                                            <td>
                                                <div class="text-dark">{{ $vendors->VendorAddress }}</div>

                                            </td>
                                            <td>
                                                <div class="fs-7">{{ $vendors->GstNumber }}</div>
                                            </td>
                                            <td>
                                                <div class="fs-7">{{ $vendors->PanNumber }}</div>
                                            </td>
                                            <td>
                                                <div class="fs-7">{{ $vendors->Email }}</div>
                                            </td>
                                            <td>
                                                <div class="fs-7">{{ $vendors->MobileNumber }}</div>
                                            </td>
                                            <td>
                                                <div class="fs-7">{{ $vendors->BankName }}</div>
                                            </td>
                                            <td>
                                                <div class="fs-7">{{ $vendors->IFSC }}</div>
                                            </td>
                                            <td>
                                                <div class="fs-7">{{ $vendors->BankAccount }}</div>
                                            </td>
                                            <td>
                                            <td><a href="{{ url('/CreatePurchaseBill') }}{{ $vendors->VendorId }}"><button
                                                        class="btn btn-gradient-primary">Create Bill</button></a></td>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            @endif
        </div>
        <!-- /Page Body -->
    </div>

    @include('footer')


    </div>
    <!-- /Main Content -->
    </div>
    <!-- Wrapper -->
    @include('script-links')
</body>

</html>
