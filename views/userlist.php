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
            background-color: black;
            opacity: 0.8;
            color: white;
            text-align: center;
            font-size: 30px;
        }
    </style>
    <script>
        function deleteda() {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("main").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "../controller/delete.php?id=", true);
            xmlhttp.send();
            exit();
        }
    </script>
</head>

<body>
    <?php
    if (!isset($_SESSION['username'])and !isset($_SESSION['admin'])) {
        header("Location: ../views/errorlogin.php");
    } else {

    ?>

        <table align="center" border="1px">
            <br>
            <br>
            <br>
            <br>
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
                <th>Country</th>
                <th>DOB</th>
                <th>College</th>
                <th>Users prefrence</th>
                <th colspan="3">Operations</th>

            </thead>
            <tbody>
                <?php require("../controller/userlist.php");

                $obj = new user();
                $result = $obj->show();

                if ($result->num_rows > 0) {
                    while ($res = $result->fetch_assoc()) { ?>

                        <tr>
                            <td><?php echo $res["Names"]; ?></td>
                            <td><?php echo $res["Email"]; ?></td>
                            <td><?php echo $res["Username"]; ?></td>
                            <td><?php echo $res["Pwd"]; ?></td>
                            <td><?php echo $res["Country"]; ?></td>
                            <td><?php echo $res["DOB"]; ?></td>
                            <td><?php echo $res["College"]; ?></td>
                            <td><?php echo $res["Type_of_book"]; ?></td>
                            <td><button><a href="../controller/Edit.php?id=<?php echo $res["ID"]; ?>" style="text-decoration: none; color:black;">Edit</a></button></td>
                            <td><button onclick="deleteda(<?php echo $res['ID']; ?>)" style="cursor: pointer;">Delete</button></td>
                            <?php if ($res["Admins"] == 0) { ?>
                                <td><button onclick="makeadmin(<?php echo $res['ID']; ?>)" style="cursor: pointer;">Make Admin</button></td>
                            <?php } ?>


                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    <?php
    }
    ?>
</body>

</html>