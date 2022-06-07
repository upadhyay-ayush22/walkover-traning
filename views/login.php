<?php

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
        table {
            color: black;
            border-radius: 20px;
        }

        body,
        html {
            height: 85%;
        }

        body {
            background-image: url(../Images/login.jpeg);

            height: 80%;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        h1 {
            background-color: black;
            opacity: 0.8;
            color: white;
        }
    </style>
</head>

<body>
    <?php
    if (!isset($_SESSION['username'])) {


    ?>
        <span>
            <h1 align="center"> Welcome to the book world </h1>
        </span>
        <h1 align="center"> LOGIN </h1>



        <table bgcolor="#edb46d" align="center" cellspacing="20" border="0px">
            <form action="/Pro/controller/login.php" method="POST">
                <tr>
                    <td>Username :</td>
                    <td><input type="text" name="username" placeholder="Enter your Username" required></input></td>
                </tr>
                <br>
                <br>
                <br>
                <br>
                <tr>
                    <td>Password :</td>
                    <td><input type="password" name="pwd" placeholder="Enter your Password" required></input></td>
                </tr>
                <br>
                <br>
                <tr>
                    <td colspan="2" align="center">
                        <button type="Submit">Login</button>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">


                        Don't have an account <a href="../index.php" color="white">click here</a> to SignUp</td>
                </tr>
            </form>
        </table>

    <?php
    }
    if (isset($_SESSION['admin'])) {
        header("Location: ../views/main.php");
        exit();
    }
    if (isset($_SESSION['username'])) {
        header("Location: ../views/users.php");
        exit();
    }
    ?>

</body>

</html>