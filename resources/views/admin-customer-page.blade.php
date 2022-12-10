<!DOCTYPE html>
<html>
<head>
    @include('links')
</head>
<body>
    <!-- Wrapper -->
    <div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="light" data-footer="simple">
        {{-- @include('top-navbar') --}}
        @include('vertical-nav')
        {{-- @include('chat-popup') --}}

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
        <div class="invoice-body p-2">
            <div data-simplebar class="nicescroll-bar">
                <div class="invoice-list-view">
                    <table id="datable_1" class="table nowrap w-100 mb-5">
                        <thead>
                            <tr>
                                <th><span class="form-check mb-0">
                                    <input type="checkbox" class="form-check-input check-select-all" id="customCheck1">
                                    <label class="form-check-label" for="customCheck1"></label>
                                </span></th>
                                <th>#</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Emails</th>
                                <th>Trade Name</th>
                                <th>Passwords</th>
                                {{-- <th>Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                            <tr>
                                <td></td>
                                <td><a href="#" class="table-link-text link-high-em">{{$row->customer_users_id}}</a></td>
                                <td><a href="{{url('/CustomerView')}}{{$row->customer_users_id}}" class="table-link-text link-high-em">{{$row->name}}</a></td>
                                <td>
                                    <div class="text-dark">{{$row->username}}</div>
                                    {{-- <div class="fs-7">morgan@jampack.com</div> --}}
                                </td>
                                <td><span class="badge badge-light">{{$row->email}}</span></td>
                                <td>{{$row->tradename}}</td>
                                <td>{{$row->password}}</td>
                             <td><a
                                href="{{url('/CustomerView')}}{{$row->customer_users_id}}"><button
                                    class="btn btn-gradient-primary">View Customer</button></a></td>
                                    <td><a
                                        href="{{url('/ViewVendor')}}{{$row->customer_users_id}}"><button
                                            class="btn btn-gradient-primary">View Vendor</button></a></td>
                            </tr>
                            @endforeach
                          
                        </tbody>
                    </table>
                
                </div>
            
            </div>
        </div>
        @include('footer')
        </div>
        <!-- /Main Content -->
    </div>
    <!-- Wrapper -->
    @include('script-links')
</body>
</html>