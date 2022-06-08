<?php

# author : Ayush
# date : 05/06/2022
# helper for Curd model makes a user admin


// making a user admin  on the basis of id 
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