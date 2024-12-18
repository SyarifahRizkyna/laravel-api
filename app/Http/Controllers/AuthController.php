<?php

namespace App\Http\Controllers;

use App\Models\Cashier;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Verifikasi login kasir
    public function loginCashier(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Mencari kasir berdasarkan email
        $cashier = Cashier::where('email', $request->email)->first();

        if ($cashier && Hash::check($request->password, $cashier->password)) {
            // Jika kasir terverifikasi, login
            Auth::login($cashier);
            return redirect()->route('dashboard')->with('message', 'Kasir berhasil login');
        }

        // Jika login gagal
        return back()->with('error', 'Email atau password salah');
    }

    // Verifikasi login pelanggan
    public function loginCustomer(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Mencari pelanggan berdasarkan email
        $customer = Customer::where('email', $request->email)->first();

        if ($customer && Hash::check($request->password, $customer->password)) {
            // Jika pelanggan terverifikasi, login
            Auth::login($customer);
            return redirect()->route('dashboard')->with('message', 'Pelanggan berhasil login');
        }

        // Jika login gagal
        return back()->with('error', 'Email atau password salah');
    }

    // Logout kasir atau pelanggan
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.cashier');  // Ganti dengan rute login yang sesuai
    }
}
