<?php

// making a user admin 

session_start();
if (isset($_SESSION['admin'])) {


    $id = $_GET['id'];
    require("../model/curd.php");
    $obj = new Curd();

    if ($obj->setadmin($id)) {
        header("Location: ../views/userlist.php");
        exit();
    } else {
        header("Location: ../views/error.php");
    }
} else {
    header("Location: ../views/unauth.php");
}
?>