<?php

# author : Ayush
# date : 04/06/2022
# shows error while login of the user 

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body,
        html {
            height: 100%;
        }

        body {
            background-image: url(../Images/allback.jfif);

            height: 80%;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        h1 {
            background-color: black;
            opacity: 0.8;
            color: white;

            text-align: center;
        }
    </style>
</head>

<body>


    <h1>
        Invalid username or password </br>
        <?php session_destroy(); ?>
        <a href="../views/login.php">click here</a> to login again.
    </h1>


</body>

</html>