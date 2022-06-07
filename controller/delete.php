<?php

//for deletion of records

session_start();
if (isset($_SESSION['admin'])) {
    $id = $_GET["id"];

    require("../model/curd.php");
    $obj = new Curd();

    $result = $obj->delete($id);

    if ($result) {
        header("Location: ../views/userlist.php");

        exit();
    } else {

        return False;
    }
} else {
    header("Location: ../views/unauth.php");
}
