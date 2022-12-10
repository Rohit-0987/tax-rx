<!-- Vertical Nav -->
<div class="hk-menu">
    <!-- Brand -->
    <div class="menu-header">
        <span>

            <a class="navbar-brand" href="index.html">
                <img class="brand-img img-fluid tax-rx-img" src="/added-assets/dist/img/TaxRx-01.png" alt="brand" />

            </a>
            <button class="btn btn-icon btn-rounded btn-flush-dark flush-soft-hover navbar-toggle">
                <span class="icon">
                    <span class="svg-icon fs-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-bar-to-left"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <line x1="10" y1="12" x2="20" y2="12"></line>
                            <line x1="10" y1="12" x2="14" y2="16"></line>
                            <line x1="10" y1="12" x2="14" y2="8"></line>
                            <line x1="4" y1="4" x2="4" y2="20"></line>
                        </svg>
                    </span>
                </span>
            </button>
        </span>
    </div>
    <!-- /Brand -->

    <!-- Main Menu -->
    <div data-simplebar class="nicescroll-bar">
        <div class="menu-content-wrap">
            <div class="menu-group">
                <ul class="navbar-nav flex-column">
                    <li class="nav-item active">
                        @if (session('status'))
                            <a class="nav-link" href="/">
                            @elseif(!session('status'))
                                <a class="nav-link" href="{{ url('/dashboard') }}">
                        @endif
                        <span class="nav-icon-wrap">
                            <span class="svg-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-template"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <rect x="4" y="4" width="16" height="4" rx="1" />
                                    <rect x="4" y="12" width="6" height="8" rx="1" />
                                    <line x1="14" y1="12" x2="20" y2="12" />
                                    <line x1="14" y1="16" x2="20" y2="16" />
                                    <line x1="14" y1="20" x2="20" y2="20" />
                                </svg>
                            </span>
                        </span>
                        <span class="nav-link-text">Dashboard</span>
                        <span class="badge badge-sm badge-soft-pink ms-auto">Hot</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="menu-gap"></div>
            <div class="menu-group">
                <div class="nav-header">
                    <span>Account</span>
                </div>
                <ul class="navbar-nav flex-column">
                    @if (session('usertype') == 'customer')
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse"
                                data-bs-target="#dash_customer">
                                <span class="nav-icon-wrap">
                                    <span class="svg-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-file-digit" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                            <rect x="9" y="12" width="3" height="5"
                                                rx="1" />
                                            <path
                                                d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                            <path d="M15 12v5" />
                                        </svg>
                                    </span>
                                </span>
                                <span class="nav-link-text">Companies</span>
                            </a>
                            <ul id="dash_customer" class="nav flex-column collapse  nav-children">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/add-customer') }}"><span
                                                    class="nav-link-text">Add Customer</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/CustomerView') }}"><span
                                                    class="nav-link-text">View Customer</span></a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse"
                                data-bs-target="#dash_invoice">
                                <span class="nav-icon-wrap">
                                    <span class="svg-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-file-digit" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                            <rect x="9" y="12" width="3" height="5"
                                                rx="1" />
                                            <path
                                                d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                            <path d="M15 12v5" />
                                        </svg>
                                    </span>
                                </span>
                                <span class="nav-link-text">Sales Invoice</span>
                            </a>
                            <ul id="dash_invoice" class="nav flex-column collapse  nav-children">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/CreateInvoice') }}"><span
                                                    class="nav-link-text">Sales Invoice</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ url('/ViewInvoice') }}{{ '$' }}"><span
                                                    class="nav-link-text">View Invoice</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse"
                                data-bs-target="#dash_purchase">
                                <span class="nav-icon-wrap">
                                    <span class="svg-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-file-digit" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                            <rect x="9" y="12" width="3" height="5"
                                                rx="1" />
                                            <path
                                                d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                            <path d="M15 12v5" />
                                        </svg>
                                    </span>
                                </span>
                                <span class="nav-link-text">Purchase Invoice</span>
                            </a>
                            <ul id="dash_purchase" class="nav flex-column collapse  nav-children">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse"
                                                data-bs-target="#dash_vendor">

                                                <span class="nav-link-text">Vendor</span>
                                            </a>
                                            <ul id="dash_vendor" class="nav flex-column collapse  nav-children">
                                                <li class="nav-item">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ url('/AddVendors') }}"><span
                                                                    class="nav-link-text"> Vendors</span></a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ url('/ViewVendors') }}"><span
                                                                    class="nav-link-text">View Vendors</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/PurchaseBill') }}"><span
                                            class="nav-link-text">Purchase Bills</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/ViewPurchaseBill') }}"><span
                                            class="nav-link-text">View Purchase Bills</span></a>
                                </li>
                            </ul>
                        </li>
                </ul>
                </li>
                <div class="menu-gap"></div>
                <div class="menu-group">
                    <div class="nav-header">
                        <span>Profile</span>
                    </div>
                    <ul class="navbar-nav flex-column">

                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse"
                                data-bs-target="#dash_profile">
                                <span class="nav-icon-wrap">
                                    <span class="svg-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-user-search" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <circle cx="12" cy="7" r="4" />
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h1" />
                                            <circle cx="16.5" cy="17.5" r="2.5" />
                                            <path d="M18.5 19.5l2.5 2.5" />
                                        </svg>
                                    </span>
                                </span>
                                <span class="nav-link-text position-relative">Profile
                                    <span
                                        class="badge badge-danger badge-indicator position-absolute top-0 start-100"></span>
                                </span>
                            </a>
                            <ul id="dash_profile" class="nav flex-column collapse  nav-children">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/profile') }}">
                                                <span class="nav-link-text">Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/edit-profile') }}">
                                                <span class="nav-link-text">Edit Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/sign-out') }}">
                                                <span class="nav-link-text">Log Out</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="menu-gap"></div>
            @elseif(session('usertype') == 'admin')
                <li class="nav-item">
                    <a class="nav-link" href="admin-customer-details">
                        <span class="nav-icon-wrap">
                            <span class="svg-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-template"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <rect x="4" y="4" width="16" height="4"
                                        rx="1" />
                                    <rect x="4" y="12" width="6" height="8"
                                        rx="1" />
                                    <line x1="14" y1="12" x2="20" y2="12" />
                                    <line x1="14" y1="16" x2="20" y2="16" />
                                    <line x1="14" y1="20" x2="20" y2="20" />
                                </svg>
                            </span>
                        </span>
                        <span class="nav-link-text">Customers</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse"
                        data-bs-target="#dash_invoice">
                        <span class="nav-icon-wrap">
                            <span class="svg-icon">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-file-digit" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                    <rect x="9" y="12" width="3" height="5"
                                        rx="1" />
                                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                    <path d="M15 12v5" />
                                </svg>
                            </span>
                        </span>
                        <span class="nav-link-text">Sales Invoice</span>
                    </a>
                    <ul id="dash_invoice" class="nav flex-column collapse  nav-children">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/ViewAdminInvoice') }}"><span
                                            class="nav-link-text">View Invoice</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);" data-bs-toggle="collapse"
                        data-bs-target="#dash_purchase">
                        <span class="nav-icon-wrap">
                            <span class="svg-icon">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-file-digit" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                    <rect x="9" y="12" width="3" height="5"
                                        rx="1" />
                                    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                    <path d="M15 12v5" />
                                </svg>
                            </span>
                        </span>
                        <span class="nav-link-text">Purchase Invoice</span>
                    </a>
                    <ul id="dash_purchase" class="nav flex-column collapse  nav-children">
                        <li class="nav-item">
                            <ul class="nav flex-column">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/ViewAdminPurchaseBill') }}"><span
                                            class="nav-link-text">View Purchase Bills</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <div class="menu-gap"></div>
                <div class="menu-group">
                    <div class="nav-header">
                        <span>Profile</span>
                    </div>
                    <a class="nav-link" href="{{ url('/sign-out') }}"><span>Log Out</span></a>
                </div>
                <div class="menu-gap"></div>
                @endif

                </ul>
            </div>



        </div>
    </div>
    <!-- /Main Menu -->
</div>
<div id="hk_menu_backdrop" class="hk-menu-backdrop"></div>
<!-- /Vertical Nav -->
