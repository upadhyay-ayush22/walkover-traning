<?php

//takes the data from the form and  send it to the signup function in controller for validation

$fn = $_REQUEST['fn'];
$username = $_REQUEST['username'];
$pwd = $_REQUEST['pwd'];
$em = $_REQUEST['em'];
$co = $_REQUEST['co'];
$dob = $_REQUEST['dob'];
$cn = $_REQUEST['cn'];
$type = $_REQUEST['type'];


require("../controller/signup.php");
$obj = new Signup();



if ($obj->sign($fn, $username, $pwd, $em, $co, $dob, $cn, $type)) {

    header("Location: ../views/login.php");
    exit();
} else {
    header("Location: ../views/error.php");
    exit();
}
?>
