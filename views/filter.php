<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <table>
        <tr>
            <td>Select Type : </td>
            <td><select name="type" id="type">
                    <option value="default" selected disabled hidden>---SELECT TYPE---</option>
                    <option value="All Records">All Records</option>
                    <option value="Suspence">Suspence</option>
                    <option value="Non-Fiction">Non-Fiction</option>
                    <option value="Fiction">Fiction</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Knowledge">Knowledge</option>
            </td>
        </tr>

        <tr>
            <td>
                <button onclick="submitfilter()">Apply Filter</button>
            </td>
        </tr>
    </table>


</body>

</html>