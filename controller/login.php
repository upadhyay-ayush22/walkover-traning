<?php
session_start();

//function for validation of login

$username = $_REQUEST['username'];
$pwd = $_REQUEST['pwd'];
$_SESSION['username'] = $username;


if (!isset($_SESSION['username'])) {
    header("Location: ../views/errorlogin.php");
} else {
    require("../model/signup.php");

    $obj1 = new Connect();
    if ($obj1->login1($username, $pwd) == 'admin') {

        $_SESSION['admin'] = "TRUE";
        header("Location: ../views/main.php");
        exit();
    } else if ($obj1->login1($username, $pwd) == 'user') {

        header("Location: ../views/users.php?username=" . $username);
        exit();
    } else {
        header("Location: ../views/errorlogin.php");
        exit();
    }
}
?>