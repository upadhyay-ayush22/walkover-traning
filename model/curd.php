<?php

# author : Ayush
# date : 05/06/2022
# class for all curd operations(i.e. update delete and make admin)

class Curd
{

    function showdata($id)
    {

        //function  to display the data of the existing user in form to admin or updation 

        require('connectdb.php');
        $sql = "SELECT ID,Names,Username,Pwd,Email,Country,DOB,College,Type_of_book FROM user where ID='$id'";

        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            return $result;
        } else {
            return FALSE;
        }
    }


    //function to edit the user details as changes made by admin


    function update($id, $fn, $username1, $pwd, $em, $co, $dob, $cn, $type)
    {
        require('connectdb.php');
        $sql = "UPDATE user SET Names = '$fn',Email='$em', Username = '$username1',Pwd='$pwd',Country='$co',DOB='$dob',College='$cn',Type_of_book='$type' WHERE ID='$id'";

        if ($conn->query($sql) === FALSE) {
            return False;
        } else {
            return True;
        }
    }


    //funtion to delete the user from the users list
    function delete($id)
    {



        require('connectdb.php');
        $sql = "DELETE FROM user where ID='$id'";

        $result = $conn->query($sql);
        if ($result) {
            return True;
        } else {
            return FALSE;
        }
    }


    //function to proomote an user to admin...

    function setadmin($id)
    {
        require('connectdb.php');
        $sql = "UPDATE user SET Admins='1' WHERE ID='$id'";

        if ($conn->query($sql) === FALSE) {
            return False;
        } else {
            return True;
        }
    }
}
?>
