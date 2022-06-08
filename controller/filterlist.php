<?php

# author : Ayush
# date : 07/06/2022
# class for handeling filter records of book on basis  of filter choosen by user

class filter
{   

    // passes the filter applied to the model and handels the data table recived
    function showlist($type)
    {
        require("../model/booklist.php");

        $obj = new book1();
        $result = $obj->filter($type);

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return False;
        }
    }
}
?>