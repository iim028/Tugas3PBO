<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $query = "INSERT INTO produk (nama, harga, stok) VALUES ('$nama', '$harga', '$stok')";

    if ($conn->query($query) === TRUE) {
        header('Location: index.php');
        exit();
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Produk</title>
</head>
<body>
<div>
    <h1>Tambah Produk</h1>
    <form method="POST">
    <div>
            <label for="id">ID</label>
            <input type="number" name="id" id="id" class="form-control" required>
        </div>
        <div>
            <label for="nama">Nama Produk</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <div>
            <label for="harga">Harga</label>
            <input type="number" name="harga" id="harga" class="form-control" required>
        </div>
        <div>
            <label for="stok">Stok</label>
            <input type="number" name="stok" id="stok" class="form-control" required>
        </div>
        <button type="submit">Simpan</button>
    </form>
</div>
</body>
</html>
