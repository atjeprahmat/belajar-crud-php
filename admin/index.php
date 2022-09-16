<?php
    require_once("../connections/database.php");

    $db     = new Database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar RDS</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <p>
        <a href="../">Beranda</a>
        <a href="add.php">Tambah</a>
    </p>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Kota Asal</th>
                <th>Status</th>
                <th>Tanggal Hadir</th>
                <th>Tanggal Modifikasi</th>
                <th>Diapakan</th>
            </tr>
        </thead>
        <?php $no = 1; foreach($db->getData() as $data):?>
        <tbody>
            <tr>
                <td><?=$no++;?></td>
                <td><?=$data['name'];?></td>
                <td><?=$data['city'];?></td>
                <td><?=($data['status'] == "present") ? "Hadir" : "Alpa";?></td>
                <td><?=$data['created'];?></td>
                <td><?=$data['modified'];?></td>
                <td>
                    <a class="view" href="view.php?id=<?=$data['id'];?>">Lihat</a>
                    <a class="edit" href="edit.php?id=<?=$data['id'];?>">Ubah</a>
                    <a class="delete" href="delete.php?id=<?=$data['id'];?>">Hapus</a>
                </td>
            </tr>
        </tbody>
        <?php endforeach;?>
    </table>
</body>
</html>