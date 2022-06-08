<?php
# author : Ayush
# date : 06/06/2022
# destroys the session when user clicks logout and redirect it to the login page

session_start();

session_destroy();
header("Location: ../views/login.php");
?>