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
                    <h1 class="pg-title">View Purchase Bill</h1>
                </div>
                <div class="col-lg-10 col-sm-9 col-8">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab_block_1">
                            <form action="{{ url('/ViewAdminPurchaseBillSubmit') }}" method="post">
                                @csrf
                                <div class="row gx-3">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Select Companies</label>
                                            <input class="form-control" type="text" value="" name="CompanyName"
                                                placeholder="Enter a Company Name" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <button type="submit" style="margin-top:32px"
                                                class="btn btn btn-gradient-success btn-rounded">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            @if (!empty($Company))
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
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>TradeName</th>
                                        <th>Email</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Company as $Companies)
                                        <tr>
                                            <td></td>
                                            <td>
                                                <div class="text-dark">{{ $Companies->name }}</div>

                                            </td>
                                            <td>
                                                <div class="fs-7">{{ $Companies->username }}</div>
                                            </td>
                                            <td>
                                                <div class="fs-7">{{ $Companies->password }}</div>
                                            </td>
                                            <td>
                                                <div class="fs-7">{{ $Companies->tradename }}</div>
                                            </td>
                                            <td>
                                                <div class="fs-7">{{ $Companies->email }}</div>
                                            </td>

                                            <td><a
                                                    href="{{ url('/ViewPurchaseBill') }}{{ $Companies->customer_users_id }}"><button
                                                        class="btn btn-gradient-primary">View Invoice</button></a></td>
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
