<?php
session_start();

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';

//ambil id dari URL
$id = $_GET['id'];

// query buku berdasarlan id
$b = query("SELECT * FROM buku WHERE id_buku = $id");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Books</title>
</head>
<body>
    <h3>Detail Books</h3>
    <ul>
        <li>Judul Buku : <?= $b['judul_buku']; ?></li>
        <li>Penerbit Buku : <?= $b['penerbit_buku']; ?></li>
        <li>Tahun Penerbit : <?= $b['tahun_penerbit']; ?></li>
        <li>Stok : <?= $b['stok']; ?></li>
        <li><img src="img/<?= $b['gambar']; ?>" width="60"></li>

        <li><a href="ubah.php?id=<?= $b['id_buku']; ?>">ubah</a> | <a href="hapus.php?id=<?= $b['id_buku']; ?>" onclick= "return confirm ('apakah anda yakin ingin menghapus data?');">hapus</a></li>
        <li><a href="index.php">Kembali ke daftar buku</a></li>
    </ul>
</body>
</html>