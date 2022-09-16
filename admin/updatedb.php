<?php
    require_once("../connections/database.php");

    $db     = new Database();
    
    if(isset($_POST['update']) && $_POST['update'] == 'add') {
        $name       = $_POST['name'];
        $city       = $_POST['city'];
        $status     = $_POST['status'];
        $created    = date('Y-m-d H:i:s');
        $modified   = date('Y-m-d H:i:s');
        
        $sql        = "INSERT INTO members(name, city, status, created, modified) VALUES('".$name."', '".$city."', '".$status."', '".$created."', '".$modified."')";
        $db->update($sql);
    } else if(isset($_POST['update']) && $_POST['update'] == 'edit') {
        $id         = $_GET['id'];
        $name       = $_POST['name'];
        $city       = $_POST['city'];
        $status     = $_POST['status'];
        // $created    = $_POST['created'];
        $modified   = date('Y-m-d H:i:s');
        
        $sql        = "UPDATE members SET name = '".$name."', city = '".$city."', status = '".$status."', modified = '".$modified."' WHERE id = ".$id;
        $db->update($sql);
    } else if(isset($_POST['update']) && $_POST['update'] == 'delete') {
        $id         = $_GET['id'];
        
        $sql        = "DELETE FROM members WHERE id = ".$id;
        $db->update($sql);
    }
    header("location: index.php");
?>