<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
$sql="CREATE DATABASE IF NOT EXISTS project";

if($conn->query($sql)===FALSE)
{
    echo "database not found";
}


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$db="project";
$conn = new mysqli($servername, $username, $password,$db);
$sql="CREATE TABLE IF NOT EXISTS user(
    ID int(6) AUTO_INCREMENT PRIMARY KEY ,
    Names VARCHAR(50) NOT NULL,
    Email VARCHAR(50) NOT NULL,
    Username VARCHAR(50) NOT NULL,
    Pwd VARCHAR(50) NOT NULL,
    Country VARCHAR(50) NOT NULL,
    DOB VARCHAR(10) NOT NULL,    
    College VARCHAR(80) NOT NULL,
    Type_of_book VARCHAR(50) NOT NULL,
    Admins INT(10) NOT NULL)";

if($conn->query($sql)===FALSE)
{
    echo "NOT created table ";
}
?>
