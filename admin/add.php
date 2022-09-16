<?php
    require_once("../connections/database.php");

    $db     = new Database();
    $data   = $db->getData();
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
    
    <form name = "update" action="updatedb.php" method="POST">
        <table>
            <tr>
                <th align="left" width="25%">Nama Lengkap</th>
                <td>
                    <input name="update" type="hidden" value="add">
                    <input name="name" type="text" value="" style="width: 90%;">
                </td>
            </tr>
            <tr>
                <th align="left">Kota Asal</th>
                <td><input name="city" type="text" value="" style="width: 90%;"></td>
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
                    <input type="submit" value="Simpan">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>