<?php
    require_once("connections/database.php");

    $db     = new Database();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar RDS</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Kota Asal</th>
                <th>Status</th>
                <th>Tanggal Hadir</th>
                <th>Tanggal Modifikasi</th>
            </tr>
        </thead>
        <?php $no = 1; foreach($db->getData() as $data):?>
        <tbody>
            <tr>
                <td><?=$no++;?></td>
                <td><?=$data['name'];?></td>
                <td><?=$data['city'];?></td>
                <td><?=($data[0]['status'] == "present") ? "Hadir" : "Alpa";?></td>
                <td><?=$data['created'];?></td>
                <td><?=$data['modified'];?></td>
            </tr>
        </tbody>
        <?php endforeach;?>
    </table>
</body>
</html>