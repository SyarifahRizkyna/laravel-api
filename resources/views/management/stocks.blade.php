<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Stok</title>
</head>
<body>
    <h2>Manajemen Stok Barang</h2>
    <form action="{{ url('stocks') }}" method="POST">
        @csrf
        <label for="item_name">Nama Barang:</label><br>
        <input type="text" name="item_name" required><br><br>

        <label for="quantity">Jumlah:</label><br>
        <input type="number" name="quantity" required><br><br>

        <button type="submit">Tambah Stok</button>
    </form>
</body>
</html>
