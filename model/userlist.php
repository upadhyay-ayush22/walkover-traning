<?php

class user1
{

    //function to show user list to the admin
    function show()
    {
        require("../model/connectdb.php");

        $sql = "Select ID,Names,Email,Username,Pwd,Country,DOB,College,Type_of_book,Admins from user";
        $result = $conn->query($sql);
        return $result;
    }
}
?>
