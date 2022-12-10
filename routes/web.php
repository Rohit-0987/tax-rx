<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginAuth;
use App\Http\Controllers\Admin;
use App\Http\Controllers\userprofile;
use App\Http\Controllers\AddCustomer;
use App\Http\Controllers\CustomerView;
use App\Http\Controllers\EditCustomer;
use App\Http\Controllers\CreateInvoice;
use App\Http\Controllers\CreateCustomerInvoice;
use App\Http\Controllers\PurchaseBill;
use App\Http\Controllers\Vendors;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login-customer');
});

Route::view('/signup-customer', 'signup-customer');

Route::post('/signup-customer-check', [LoginAuth::class, "signupCustomerCheck"]);

Route::view('/dashboard', 'dashboard');
Route::view('/signin-admin', 'signin-admin');
Route::post('/signin-admin-check', [LoginAuth::class, "signinAdminCheck"]);
Route::get('/sign-out', [LoginAuth::class, "signOut"]);
Route::get('/profile', [userprofile::class, "profile"]);
Route::post('/login-customer-check', [LoginAuth::class, "loginCustomerCheck"]);
Route::get('/edit-profile', [LoginAuth::class, "editprofile"]);
Route::post('/edit-profile', [LoginAuth::class, "editprofilesubmit"]);
Route::get('/admin-customer-details', [Admin::class, "customerView"]);
Route::view('/admin-customer-page', 'admin-customer-page');
Route::get('/add-customer', [AddCustomer::class, "AddCustomer"]);
Route::post('/add-customer', [AddCustomer::class, "AddCustomerSubmit"]);
// Route::view('/CustomerView','CustomerView');
Route::get('/CustomerView', [CustomerView::class, "CustomerViewData"]);
Route::get('/CustomerView/delete/{id}', [CustomerView::class, 'delete']);
Route::get('/edit-customer{id}', [EditCustomer::class, 'edit']);
Route::post('/edit-customer{id}', [EditCustomer::class, 'EditCustomer']);
Route::get('/CreateInvoice', [CreateInvoice::class, 'CreateInvoice']);
Route::post('/CreateInvoice', [CreateInvoice::class, 'CreateInvoiceSubmit']);


Route::get('/ViewAdminInvoice', [CreateCustomerInvoice::class, 'ViewAdminInvoice']);
Route::post('/ViewAdminInvoiceSubmit', [CreateCustomerInvoice::class, 'ViewAdminInvoiceSubmit']);
Route::get('/ViewAdminPurchaseBill', [PurchaseBill::class, 'ViewAdminPurchaseBill']);
Route::post('/ViewAdminPurchaseBillSubmit', [PurchaseBill::class, 'ViewAdminPurchaseBillSubmit']);

Route::get('/CreateCustomerInvoice{id}', [CreateCustomerInvoice::class, 'CreateCustomerInvoices']);
Route::Post('/CreateCustomerInvoice{id}', [CreateCustomerInvoice::class, 'CreateCustomerInvoicesSubmit']);
Route::get('/AddVendors', [Vendors::class, 'AddVendors']);
Route::post('/AddVendors', [Vendors::class, 'AddVendorSubmit']);
Route::get('/ViewVendors', [Vendors::class, 'ViewVendor']);
Route::get('/ViewVendors/delete{id}', [Vendors::class, 'delete']);
Route::get('/EditVendor{id}', [Vendors::class, 'edit']);
Route::post('/EditVendor{id}', [Vendors::class, 'EditVendor']);
Route::get('/PurchaseBill', [PurchaseBill::class, 'Bill']);
Route::post('/PurchaseBill', [PurchaseBill::class, 'PurchaseBillSubmit']);
Route::get('/CreatePurchaseBill{id}', [PurchaseBill::class, 'CretePurchaseBill']);
Route::post('/CreatePurchaseBill{id}', [PurchaseBill::class, 'CreatePurchaseBillSubmit']);

Route::get('/ViewInvoice{id}', [CreateCustomerInvoice::class, 'ViewInvoice']);
Route::get('/ViewInvoice/delete{id}', [CreateCustomerInvoice::class, 'delete']);
Route::get('/ViewPurchaseBill{id}', [PurchaseBill::class, 'ViewPurchaseBill']);
Route::get('/ViewPurchaseBill/delete{id}', [PurchaseBill::class, 'delete']);
Route::get('/CustomerView{id}', [CustomerView::class, "AdminCustomerViewData"]);
Route::get('/ViewVendor{id}', [Vendors::class, "AdminViewVendor"]);
