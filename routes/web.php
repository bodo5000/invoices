<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Dashboard\Dashboard;
use App\Livewire\Invoices\Archive;
use App\Livewire\Invoices\InvoicesList;
use App\Livewire\Invoices\PaidInvoices;
use App\Livewire\Invoices\UnpaidInvoices;
use App\Livewire\Logout;
use App\Livewire\Products\ProductsList;
use App\Livewire\Reports\Client\ClientsData;
use App\Livewire\Reports\Invoice\InvoicesData;
use App\Livewire\Sections\SectionsList;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware(['auth'])->group(function () {
    Route::get('/', Dashboard::class)->name('dashboard');
    Route::get('/invoice-list', InvoicesList::class)->name('invoice-list');
    Route::get('/section-list', SectionsList::class)->name('section-list');
    Route::get('/product-list', ProductsList::class)->name('product-list');
    Route::get('/unpaid_invoices', UnpaidInvoices::class)->name('unpaid-invoice');
    Route::get('/paid-invoices', PaidInvoices::class)->name('paid-invoice');
    Route::get('/invoices-reports', InvoicesData::class)->name('invoices-reports');
    Route::get('/archived-invoices', Archive::class)->name('archived-invoices');
    Route::get('clients-report', ClientsData::class)->name('client-report');
});


Route::middleware(['guest'])->group(function () {
    Route::get('/register', Register::class)->name('register');
    Route::get('/login', Login::class)->name('login');
});
