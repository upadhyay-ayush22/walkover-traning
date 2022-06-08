<?php

# author : Ayush
# date : 04/06/2022
# dashboard of  Admin contains all ajax function of admin pannel 

session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../views/unauth.php");
}

if(isset($_POST["import"]))
{
    $file=$_FILES["csvfile"]["tmp_name"];
    require_once("./csvupload.php");
    $obj=new Csvupload();
    $obj->csv($file);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../public/style.css">

    <style>
        body,
        html {
            height: 100%;
        }

        body {
            background-image: url(../Images/allback.jfif);

            height: 100%;
            background-repeat: repeat;
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

        table {
            color: black;
            border-radius: 20px;
        }
        .button1 {
            background-color: grey;
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

        .pb {

            color: white;
            text-align: center;
            font-size: 50px;

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

        function userlist() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("main").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "userlist.php", true);
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

        function myFunction() {
            alert("User Made admin Sccuessfully");
        }

        function myFunctiond() {
            alert("User data deleted Sccuessfully");
        }

        function deleteda(id) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("main").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "../controller/delete.php?id=" + id, true);
            myFunctiond();
            xmlhttp.send();
            exit();
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

        function makeadmin(id) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("main").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "../controller/makeadmin.php?id=" + id, true);
            myFunction();
            xmlhttp.send();

            exit();
        }
        // function csvupload() {
        //     var xmlhttp = new XMLHttpRequest();
        //     xmlhttp.onreadystatechange = function() {
        //         if (this.readyState == 4 && this.status == 200) {
        //             document.getElementById("main").innerHTML = this.responseText;
        //         }
        //     };
        //     xmlhttp.open("GET", "../views/csvupload.php", true);
            
        //     xmlhttp.send();

        //     exit();
        // }
        
       


    </script>
</head>

<body>


<div id="logout">
            <form action="../controller/logout.php">
                <button class="logout"> Logout</button>
            </form>
        </div>
        <div id="logout">
            <form action="../views/main.php">
                <button class="logout"> Back</button>
            </form>
        </div>
        <div id="main">
            <p class="p"> Welcome To Admin Dashboard!!
                </br>
                </br>
            </p>
            <p class="pb">
                <buttom class="button" onclick="booklist()"> Click here to see Book list</button>
            </p>

            <p class="pb">
                <buttom class="button1" onclick="userlist()"> Click here to see Users list</button>
            </p>
            <p class="pb">
            <a href="../views/csvupload.php"><buttom class="button1" onclick="csvupload()"> Csv upload</button></a>
                
            </p>


        </div>



</body>

</html>