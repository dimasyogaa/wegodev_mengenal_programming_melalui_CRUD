<?php

include_once('koneksi.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Sewa</title>
</head>

<body>
    <table border="1px">

        <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Nama Penyawa</th>
            <th>Tanggal Sewa</th>
            <th>Durasi</th>
            <th>Tanggal Selesai</th>
            <th>Action</th>
        </tr>

        <?php

        $query = mysqli_query(
            $koneksi,
            'SELECT * FROM sewa'
        );

        $no = 1;

        foreach ($query as $row) :

            $tanggal_selesai = date('Y-m-d', strtotime($row['tanggal_sewa'] . "+ $row[durasi] days"));
        ?>

            <tr>
                <td><?= $no; ?></td>
                <td><?= $row["judul"]; ?></td>
                <td><?= $row["penyewa"]; ?></td>
                <td><?= $row["tanggal_sewa"]; ?></td>
                <td><?= $row["durasi"]; ?></td>
                <td><?= $tanggal_selesai; ?></td>
                <td>&nbsp;</td>
            </tr>

        <?php
            $no++;
        endforeach;
        ?>

    </table>
</body>

</html>