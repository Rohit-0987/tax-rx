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
                                        {{-- <td>
                                    <td><a href="{{url('/ViewVendors/delete/')}}{{$vendors->VendorId}}"><button class="btn btn-gradient-danger">Delete</button></a></td>
                                </td> --}}
                                        <td>
                                        <td><a href="{{ url('/EditVendor') }}{{ $vendors->VendorId }}"><button
                                                    class="btn btn-gradient-primary" type="button">Edit</button></a>
                                        </td>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
        <!-- /Main Content -->
    </div>
    <!-- Wrapper -->
    @include('script-links')
</body>

</html>
