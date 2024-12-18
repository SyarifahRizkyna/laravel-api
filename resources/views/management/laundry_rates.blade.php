<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Tarif Laundry</title>
</head>
<body>
    <h2>Manajemen Tarif Laundry</h2>
    <form action="{{ url('laundry-rates') }}" method="POST">
        @csrf
        <label for="service_name">Nama Layanan:</label><br>
        <input type="text" name="service_name" required><br><br>

        <label for="rate">Tarif:</label><br>
        <input type="number" name="rate" required><br><br>

        <button type="submit">Tambah Tarif</button>
    </form>
</body>
</html>
