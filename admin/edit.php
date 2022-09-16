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
    <form name = "update" action="updatedb.php?id=<?=$data[0]['id'];?>" method="POST">
        <table>
            <tr>
                <th align="left" width="25%">Nama Lengkap</th>
                <td>
                    <input name="update" type="hidden" value="edit">
                    <input name="name" type="text" value="<?=$data[0]['name'];?>" style="width: 90%;">
                </td>
            </tr>
            <tr>
                <th align="left">Kota Asal</th>
                <td><input name="city" type="text" value="<?=$data[0]['city'];?>" style="width: 90%;"></td>
            </tr>
            <tr>
                <th align="left">Status Kehadiran</th>
                <td>
                    <select name="status" id="status">
                        <option value="present" <?=($data[0]['status'] == "present") ? "selected" : "";?>>Hadir</option>
                        <option value="absent" <?=($data[0]['status'] == "absent") ? "selected" : "";?>>Alpa</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="button" onclick="window.location.href='index.php';">Kembali</button>
                    <button type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>