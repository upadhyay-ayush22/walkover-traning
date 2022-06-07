<?php

class book
{   //fetch the book list from model and send it 
    function Show()
    {
        require("../model/booklist.php");

        $obj = new book1();
        $result = $obj->show();

        if ($result->num_rows > 0) {
            return $result;
        } else {
            return False;
        }
    }
}
?>