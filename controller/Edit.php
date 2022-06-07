<?php

//edit of records

session_start();
if (isset($_SESSION['admin'])) {

    $id = $_GET["id"];

    require("../model/curd.php");
    $obj = new Curd();

    $result = $obj->showdata($id);

    if ($result->num_rows > 0) {
        echo "in if";
        $res = $result->fetch_assoc();


        header("Location: ../views/editform.php?data=" . urlencode(serialize($res)));

        exit();
    } else {

        return False;
    }
} 
else {
    header("Location: ../views/unauth.php");
}

?>