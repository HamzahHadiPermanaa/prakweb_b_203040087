<?php
session_start();

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// jika tidak ada id di URL
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

// ambil id dari url
$id = $_GET['id'];

// query buku berdasarkan id
$b = query("SELECT * FROM buku WHERE id_buku = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script> 
            alert('data berhasil diubah!') 
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "<script> alert('data gagal diubah!') </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku</title>
</head>
<body>
    <h3>Form Ubah Data Buku</h3>
    <form action="" method="POST">
    <input type="hidden" name="id" value="<?= $b['id_buku']; ?>">
        <ul>
            <li>
                <label>
                Judul Buku :
                <input type="text" name="judul_buku" autofocus required value="<?= $b['judul_buku']; ?>">
                </label>
            </li>
            <li>
                <label>
                Penerbit Buku :
                <input type="text" name="penerbit_buku" autofocus required value="<?= $b['penerbit_buku']; ?>">
                </label>
            </li>
            <li>
                <label>
                Tahun Penerbit :
                <input type="text" name="tahun_penerbit" autofocus required value="<?= $b['tahun_penerbit']; ?>">
                </label>
            </li>
            <li>
                <label>
                Stok :
                <input type="text" name="stok" autofocus required value="<?= $b['stok']; ?>">
                </label>
            </li>
            <li>
                <label>
                Gambar :
                <input type="text" name="gambar" required value="<?= $b['gambar']; ?>">
                </label>
            </li>
            <li>
                <button type="submit" name="ubah">Ubah Buku!</button>
            </li>
            <li><a href="index.php">Kembali ke daftar buku</a></li>
        </ul>
    </form>
</body>
</html>