<?php
// destroys the session when user clicks logout and redirect it to the login page

session_start();

session_destroy();
header("Location: ../views/login.php");
?>