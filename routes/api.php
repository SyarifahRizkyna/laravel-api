<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ManagementController;

// Melihat data pelanggan
Route::get('customers', [ManagementController::class, 'viewCustomers']);
// Memasukkan stok barang
Route::post('stocks', [ManagementController::class, 'addStock']);
// Memasukkan tarif laundry
Route::post('laundry-rates', [ManagementController::class, 'addLaundryRate']);
// Menerima laporan transaksi dari kasir
Route::get('transactions', [ManagementController::class, 'getTransactions']);
// Mengedit transaksi pelanggan
Route::put('transactions/{id}', [ManagementController::class, 'editTransaction']);

// Rute untuk verifikasi kasir (API)
Route::post('cashier/verify', [AuthController::class, 'verifyCashierAPI'])->name('api.auth.verify_cashier');
// Rute untuk verifikasi pelanggan (API)
Route::post('customer/verify', [AuthController::class, 'verifyCustomer'])->name('api.auth.verify_customer');
// Rute untuk logout kasir (API)
Route::post('cashier/logout', [AuthController::class, 'logoutAPI'])->name('api.auth.logout');

