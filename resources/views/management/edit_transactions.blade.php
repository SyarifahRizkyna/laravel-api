<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Transaksi</title>
</head>
<body>
    <h2>Edit Transaksi</h2>
    <form action="{{ url('management/transactions/edit/' . $transaction->id) }}" method="POST">
        @csrf
        @method('POST')

        <label for="customer_id">Pelanggan:</label><br>
        <select name="customer_id" required>
            @foreach ($customers as $customer)
                <option value="{{ $customer->id }}" @if($transaction->customer_id == $customer->id) selected @endif>
                    {{ $customer->name }}
                </option>
            @endforeach
        </select><br><br>

        <label for="laundry_rate_id">Layanan Laundry:</label><br>
        <select name="laundry_rate_id" required>
            @foreach ($laundryRates as $laundryRate)
                <option value="{{ $laundryRate->id }}" @if($transaction->laundry_rate_id == $laundryRate->id) selected @endif>
                    {{ $laundryRate->service_name }}
                </option>
            @endforeach
        </select><br><br>

        <label for="amount_paid">Jumlah Bayar:</label><br>
        <input type="number" name="amount_paid" value="{{ $transaction->amount_paid }}" required><br><br>

        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>
