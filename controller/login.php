<?php
session_start();

# author : Ayush
# date : 04/06/2022
# helper for Login 

//function for validation of login

$username = $_REQUEST['username'];
$pwd = $_REQUEST['pwd'];

require("../model/signup.php");

$obj1 = new Connect();
if ($obj1->login1($username, $pwd) == 'user') {
    $_SESSION['username'] = $username;
    header("Location: ../views/users.php?username=" . $username);
    exit();
} else if ($obj1->login1($username, $pwd) == 'admin') {

    $_SESSION['admin'] = "TRUE";
    header("Location: ../views/main.php");
    exit();
} else {
    header("Location: ../views/errorlogin.php");
    exit();
}
?>