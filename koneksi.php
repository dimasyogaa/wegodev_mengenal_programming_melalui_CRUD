<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "wegodev_mengenal_crud_toko_buku";

$koneksi = mysqli_connect($server, $user, $password, $database) OR DIE ("koneksi gagal");
