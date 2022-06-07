<?php


class Connect
{


    //signup data entery function 

    function insertdb($fn, $username1, $pwd, $em, $co, $dob, $cn, $type)
    {
        require('connectdb.php');
        $sql = "INSERT INTO user(Names,Username,Pwd,Email,Country,DOB,College,Type_of_book,Admins)
        values('$fn','$username1','$pwd','$em','$co','$dob','$cn','$type','0')";

        if ($conn->query($sql) === FALSE) {
            return False;
        } else {
            return True;
        }
    }

    //login function 

    function login1($username1, $pwd)
    {
        require('connectdb.php');
        $sql = "SELECT Username, Pwd, Admins FROM user where Username='$username1' AND Pwd='$pwd'";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $res = $result->fetch_assoc();
            if ($res["Admins"] == '1') {

                return "admin";
            } else {
                return "user";
            }
        } else {
            return FALSE;
        }
    }
}
?>
