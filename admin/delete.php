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
    <table>
        <tr>
            <th align="left" width="25%">Nama Lengkap</th>
            <td>
                <input name="update" type="hidden" value="edit">
                <?=$data[0]['name'];?>
            </td>
        </tr>
        <tr>
            <th align="left">Kota Asal</th>
            <td><?=$data[0]['city'];?></td>
        </tr>
        <tr>
            <th align="left">Status Kehadiran</th>
            <td><?=$data[0]['status'];?></td>
        </tr>
    </table>

    <form name = "update" action="updatedb.php?id=<?=$data[0]['id'];?>" method="POST" style="text-align: center;">
        <h3>Kamu yakin mau menghapus data ini ?</h3>
        <input name="update" type="hidden" value="delete">
        <input type="button" value="Kembali" onclick="window.location.href='index.php';">
        <input type="submit" value="hapus">
    </form>
</body>
</html>