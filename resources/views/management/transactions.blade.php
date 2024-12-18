<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Transaksi</title>
</head>
<body>
    <h2>Laporan Transaksi</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID Transaksi</th>
                <th>Nama Pelanggan</th>
                <th>Layanan Laundry</th>
                <th>Jumlah Bayar</th>
                <th>Tanggal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->id }}</td>
                    <td>{{ $transaction->customer->name }}</td>
                    <td>{{ $transaction->laundryRate->service_name }}</td>
                    <td>{{ $transaction->amount_paid }}</td>
                    <td>{{ $transaction->created_at }}</td>
                    <td><a href="{{ route('management.transactions.edit', $transaction->id) }}">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
