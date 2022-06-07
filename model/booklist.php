<?php

class book1
{
    function show()
    {

        //function to show the booklist to the user and admin

        require("../model/connectdb.php");

        $sql = "Select Names,Type,Ratings from books";
        $result = $conn->query($sql);
        return $result;
    }


    function filter($type)
    {
        require("../model/connectdb.php");
        if ($type == "All Records") {
            $sql = "Select Names,Type,Ratings from books";
            $result = $conn->query($sql);
            return $result;
        } else {
            $sql = "Select Names,Type,Ratings from books WHERE Type='$type'";
            $result = $conn->query($sql);
            return $result;
        }
    }
}
?>