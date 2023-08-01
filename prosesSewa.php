<?php

include_once('koneksi.php');

$judul = $_POST['judul'];
$penyewa = $_POST['penyewa'];
$durasi = $_POST['durasi'];

$tanggal_sewa = date('Y-m-d'); // 2023-08-01

mysqli_query(
    $koneksi,
    "INSERT INTO sewa (judul, penyewa, durasi, tanggal_sewa)
     VALUES ('$judul','$penyewa','$durasi','$tanggal_sewa')"
);

header("location: formSewa.php ");
