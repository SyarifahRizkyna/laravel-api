<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ManagementController;

// Rute Dashboard
Route::get('dashboard', [ManagementController::class, 'dashboard'])->name('dashboard');

// Rute untuk verifikasi kasir
Route::post('cashier/verify', [AuthController::class, 'verifyCashier'])->name('auth.verify_cashier');

// Rute untuk verifikasi pelanggan
Route::post('customer/verify', [AuthController::class, 'verifyCustomer'])->name('auth.verify_customer');

// Rute untuk logout kasir
Route::post('cashier/logout', [AuthController::class, 'logout'])->name('auth.logout');

// Rute untuk login kasir
Route::get('login/cashier', function () {
    return view('auth.login_cashier');
});

// Rute untuk login pelanggan
Route::get('login/customer', function () {
    return view('auth.login_customer');
});// Rute untuk verifikasi kasir
Route::post('cashier/verify', [AuthController::class, 'verifyCashier'])->name('auth.verify_cashier');

// Rute untuk verifikasi pelanggan
Route::post('customer/verify', [AuthController::class, 'verifyCustomer'])->name('auth.verify_customer');

// Rute untuk logout kasir
Route::post('cashier/logout', [AuthController::class, 'logout'])->name('auth.logout');

// Rute untuk login kasir
Route::get('login/cashier', function () {
    return view('auth.login_cashier');
});

// Rute untuk login pelanggan
Route::get('login/customer', function () {
    return view('auth.login_customer');
});

// Halaman manajemen pelanggan
Route::get('management/customers', [ManagementController::class, 'viewCustomers'])->name('management.customers');

// Halaman manajemen stok
Route::get('management/stocks', function () {
    return view('management.stocks');
});

// Halaman manajemen tarif laundry
Route::get('management/laundry-rates', function () {
    return view('management.laundry_rates');
});

// Halaman laporan transaksi
Route::get('management/transactions', [ManagementController::class, 'getTransactions'])->name('management.transactions');

// Halaman untuk mengedit transaksi pelanggan
Route::get('management/transactions/edit/{id}', [ManagementController::class, 'editTransactionForm'])->name('management.transactions.edit');
Route::post('management/transactions/edit/{id}', [ManagementController::class, 'editTransaction']);