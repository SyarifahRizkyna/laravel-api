<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Manajemen Laundry</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            padding: 15px 0;
            text-align: center;
        }
        nav {
            background-color: #444;
            padding: 15px;
            text-align: center;
        }
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
        }
        .container {
            display: flex;
            justify-content: space-around;
            padding: 20px;
        }
        .card {
            background-color: white;
            padding: 20px;
            margin: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 200px;
            text-align: center;
        }
        .card h3 {
            margin: 10px 0;
        }
        .card p {
            font-size: 18px;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

<header>
    <h1>Dashboard Manajemen Laundry</h1>
</header>

<nav>
    <a href="{{ url('dashboard') }}">Dashboard</a>
    <a href="{{ url('management/customers') }}">Data Pelanggan</a>
    <a href="{{ url('management/stocks') }}">Manajemen Stok</a>
    <a href="{{ url('management/laundry-rates') }}">Tarif Laundry</a>
    <a href="{{ url('management/transactions') }}">Laporan Transaksi</a>
    <a href="{{ url('login/cashier') }}">Login Kasir</a>
    <a href="{{ url('login/customer') }}">Login Pelanggan</a>
</nav>

<div class="container">
    <div class="card">
        <h3>Total Pelanggan</h3>
        <p>{{ $totalCustomers }}</p>
    </div>
    <div class="card">
        <h3>Total Stok</h3>
        <p>{{ $totalStocks }}</p>
    </div>
    <div class="card">
        <h3>Total Tarif Laundry</h3>
        <p>{{ $totalLaundryRates }}</p>
    </div>
    <div class="card">
        <h3>Total Transaksi</h3>
        <p>{{ $totalTransactions }}</p>
    </div>
</div>

<footer>
    <p>&copy; 2024 Manajemen Laundry</p>
</footer>

</body>
</html>
