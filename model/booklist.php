<?php

# author : Ayush
# date : 05/06/2022
# class to fetch the list of user from the database

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

    //function to filter the booklist and return the data set 
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