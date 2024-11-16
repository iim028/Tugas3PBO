<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM produk WHERE id=$id";
if ($conn->query($query) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
?>
