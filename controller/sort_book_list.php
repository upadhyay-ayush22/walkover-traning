<?php

# author : Ayush
# date : 06/06/2022
# class for  handling sorting books in asc/desc order 

class sort_books
{

    //sorting the book list according to the operation performed by the user 
    
    function sortlist($type)
    {
        require("../model/sort_book_list.php");
        $obj = new sortbook();
        if ($type == 'ascname') {
            $result = $obj->ascname();

            if ($result->num_rows > 0) {
                return $result;
            } else {
                return False;
            }
        }

        if ($type == 'dscname') {
            $result = $obj->dscname();

            if ($result->num_rows > 0) {
                return $result;
            } else {
                return False;
            }
        }
        if ($type == 'asctype') {
            $result = $obj->asctype();

            if ($result->num_rows > 0) {
                return $result;
            } else {
                return False;
            }
        }

        if ($type == 'dsctype') {
            $result = $obj->dsctype();

            if ($result->num_rows > 0) {
                return $result;
            } else {
                return False;
            }
        }
        if ($type == 'ascrate') {
            $result = $obj->ascrate();

            if ($result->num_rows > 0) {
                return $result;
            } else {
                return False;
            }
        }

        if ($type == 'dscrate') {
            $result = $obj->dscrate();

            if ($result->num_rows > 0) {
                return $result;
            } else {
                return False;
            }
        }
    }
}
?>
