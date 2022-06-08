<?php

# author : Ayush
# date : 05/06/2022
# class to display the user list

class user{
    // to show the user list data to the admin
    function Show()
    {
        require("../model/userlist.php");
            
            $obj=new user1();
            $result=$obj->show();

         if($result->num_rows >0)
         {
            return $result;
         }
         else{
             return False;
         }
    }
}
?>
