<?php

class filter
{
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