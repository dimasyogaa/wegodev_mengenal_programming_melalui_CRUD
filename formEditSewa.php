<?php

include_once('koneksi.php');

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM sewa WHERE id = '$id'");
$row = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Sewa</title>
</head>

<body>

    <form action="prosesEditSewa.php?id=<?= $id; ?>" method="post">

        <label>Judul Buku</label>
        <div><input type="text" name="judul" value="<?= $row['judul']; ?>"></div>

        <label>Nama Penyewa</label>
        <div><input type="text" name="penyewa" value="<?= $row['penyewa']; ?>"></div>

        <label>Durasi Sewa</label>
        <div><input type="text" name="durasi" value="<?= $row['durasi']; ?>"></div>

        <div>
            <input type="submit" name="sewa" value="Sewa Buku">
        </div>

    </form>

</body>

</html>