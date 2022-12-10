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
                                    <th>Invoice Number</th>
                                    <th>Invoice Date</th>
                                    <th>Due Date</th>
                                    <th>good/services</th>
                                    <th>taxablevalue</th>
                                    <th>HSN/SAC</th>
                                    <th>Quantity</th>
                                    <th>UQC</th>
                                    <th>Gst Rate</th>
                                    <th>IGST</th>
                                    <th>CGST</th>
                                    <th>SGST/UTGST</th>
                                    <th>Supply Type</th>
                                    <th>Paid</th>
                                    <th>Unpaid</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Invoice as $Invoices)
                                    <tr>
                                        <td></td>
                                        <td>{{ $Invoices->InvoiceNumber }}</td>
                                        <td>
                                            <div class="text-dark">{{ $Invoices->InvoiceDate }}</div>
                                        </td>
                                        <td>
                                            <div class="fs-7">{{ $Invoices->DueDate }}</div>
                                        </td>
                                        <td>
                                            <div class="fs-7">{{ $Invoices->goodservices }}</div>
                                        </td>
                                        <td>
                                            <div class="fs-7">{{ $Invoices->taxablevalue }}</div>
                                        </td>
                                        <td>
                                            <div class="fs-7">{{ $Invoices->HSNSAC }}</div>
                                        </td>
                                        <td>
                                            <div class="fs-7">{{ $Invoices->quantity }}</div>
                                        </td>
                                        <td>
                                            <div class="fs-7">{{ $Invoices->UQC }}</div>
                                        </td>
                                        <td>
                                            <div class="fs-7">{{ $Invoices->GstRate }}</div>
                                        </td>
                                        <td>
                                            <div class="fs-7">{{ $Invoices->IGST }}</div>
                                        </td>
                                        <td>
                                            <div class="fs-7">{{ $Invoices->CGST }}</div>
                                        </td>
                                        <td>
                                            <div class="fs-7">{{ $Invoices->SGSTUTGST }}</div>
                                        </td>
                                        <td>
                                            <div class="fs-7">{{ $Invoices->SupplyType }}</div>
                                        </td>
                                        <td>
                                            <div class="fs-7">{{ $Invoices->paid }}</div>
                                        </td>
                                        <td>
                                            <div class="fs-7">{{ $Invoices->Unpaid }}</div>
                                        </td>
                                        <td>
                                            <a href="{{ url('/ViewInvoice/delete/') }}{{ $Invoices->InvoiceId }}"><button
                                                    class="btn btn-gradient-danger">Delete</button></a>
                                        </td>
                                        {{-- <td>
                                    <td><a href="{{url('/')}}{{$customers->CustomerId}}"><button class="btn btn-primary" type="button">Edit</button></a></td>
                                </td> --}}
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
