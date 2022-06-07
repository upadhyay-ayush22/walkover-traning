<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>

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

        .p {
            background-color: black;
            opacity: 0.8;
            color: white;
            text-align: center;
            font-size: 50px;
        }

        .button {
            background-color: #4CAF50;
            border: round;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 4px 2px;
            cursor: pointer;

            font-size: 20px;
        }

        .logout {
            background-color: #4CAF50;
            border: round;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 4px 2px;
            cursor: pointer;

            font-size: 20px;
        }

        .form {
            text-align: right;
        }
    </style>



    <script>
        function booklist() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("main").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "booklist.php", true);
            xmlhttp.send();
            exit();
        }

        function filter() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("filter").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "../views/filter.php", true);
            xmlhttp.send();
            exit();
        }

        function submitfilter() {
            var type = document.getElementById("type").value;
            console.log(type);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("main").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "filterlist.php?type=" + type, true);
            xmlhttp.send();

        }

        function ascname() {
            var type = "ascname";
            console.log(type);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("main").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "sort_book_list.php?type=" + type, true);
            xmlhttp.send();

        }

        function dscname() {
            var type = "dscname";
            console.log(type);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("main").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "sort_book_list.php?type=" + type, true);
            xmlhttp.send();

        }

        function asctype() {
            var type = "asctype";
            console.log(type);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("main").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "sort_book_list.php?type=" + type, true);
            xmlhttp.send();

        }

        function dsctype() {
            var type = "dsctype";
            console.log(type);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("main").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "sort_book_list.php?type=" + type, true);
            xmlhttp.send();

        }

        function ascrate() {
            var type = "ascrate";
            console.log(type);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("main").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "sort_book_list.php?type=" + type, true);
            xmlhttp.send();

        }

        function dscrate() {
            var type = "dscrate";
            console.log(type);
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("main").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "sort_book_list.php?type=" + type, true);
            xmlhttp.send();

        }
    </script>


</head>

<body>
    <?php
    if (isset($_SESSION['username'])) {
    ?>
        <form action="../controller/logout.php">
            <button class="logout"> Logout</button>
        </form>

        <div id="main">
            <p class="p"> Welcome !! <?php if (!empty($_GET['username'])) echo " " . $_SESSION['username'] ?>
                </br>
                </br>

                <button class="button" onclick="booklist()"> Click here to see Book list</button>
            </p>


        </div>
    <?php

    }


    ?>



</body>

</html>