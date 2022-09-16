<?php
    require_once("../connections/database.php");

    $db     = new Database();
    $data   = $db->getData($_GET['id']);
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
    <p><a href="index.php">Kembali</a></p>

    <table>
        <tr>
            <th align="left" width="25%">Nama Lengkap</th>
            <td><?=$data[0]['name'];?></td>
        </tr>
        <tr>
            <th align="left">Kota Asal</th>
            <td><?=$data[0]['city'];?></td>
        </tr>
        <tr>
            <th align="left">Status Kehadiran</th>
            <td><?=($data[0]['status'] == "present") ? "Hadir" : "Alpa";?></td>
        </tr>
        <tr>
            <th align="left">Tanggal Hadir</th>
            <td><?=$data[0]['created'];?></td>
        </tr>
    </table>
</body>
</html>