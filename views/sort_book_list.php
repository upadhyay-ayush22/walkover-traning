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


</head>

<body>
    <?php
    if (!isset($_SESSION['username'])and !isset($_SESSION['admin'])) {
        header("Location: ../views/errorlogin.php");
    } else {

    ?>
        <div id="filter">

            <button onclick="filter()"> Filter </button>

        </div>
        <table align="center" border="1px">
            <br>
            <br>
            <br>
            <br>
            <thead>

                <th>Name Of the Book
                    <button id="ascname" onclick="ascname()">^</button><button id="dscname" onclick="dscname()">v</button>
                </th>
                <th>Type of the Book
                    <button onclick="asctype()">^</button><button onclick="dsctype()">v</button>
                </th>
                <th>Ratings (out of 5)
                    <button onclick="ascrate()">^</button><button onclick="dscrate()">v</button>
                </th>

            </thead>
            <tbody>
                <?php require("../controller/sort_book_list.php");
                $type = $_GET['type'];

                $obj = new sort_books();
                $result = $obj->sortlist($type);

                if ($result) {
                    while ($res = $result->fetch_assoc()) { ?>

                        <tr>
                            <td><?php echo $res["Names"]; ?></td>
                            <td><?php echo $res["Type"]; ?></td>
                            <td><?php echo $res["Ratings"]; ?></td>

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