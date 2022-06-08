
<body>
<link rel="stylesheet" href="../public/style.css">
<form action="../controller/logout.php">
                <button class="logout"> Logout</button>
            </form>
        </div>
        <div id="logout">
            <form action="../views/main.php" >
                <button class="logout"> Back</button>
            </form>
        </div>

<table bgcolor="#edb46d" align="center" cellspacing="20" border="0px" >
            <form action="../helper/csvupload.php" method="POST" enctype="multipart/form-data">
                <tr>
                    <td>Upload CSV File:</td>
                    <td><input type="file" name="file_name" accept=".csv"></input></td>
                </tr>
                <br>
                <br>
                <tr>
                    <td colspan="2" align="center">
                        <button type="submit" name="import" >import</button>
                    </td>
                </tr>
            </form>
        </table>
</body>
</html>
