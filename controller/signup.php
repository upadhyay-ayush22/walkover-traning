<?php

class Signup
{

    //function to validate singup data entered by the user

    function validate($fn, $em, $cn)
    {
        if (isset($_POST["btn"])) {
            if (preg_match("/^([a-zA-Z' ]+)*$/",$fn)) {
                
                if (filter_var($em, FILTER_VALIDATE_EMAIL)) {
                    
                    if (preg_match("/^[a-zA-Z']*$/",$cn)) {
                        
                        return True;
                    } else {
                        return False;
                    }
                } else {
                    return False;
                }
            } else {
                return False;
            }
        }
    }

    //function to enter data of the user
    function sign($fn, $username, $pwd, $em, $co, $dob, $cn, $type)
    {


        $obj1 = new Signup();

        // require("../model/signup.php");
        if ($obj1->validate($fn, $em, $cn)) {
            $obj = new Connect();
            return $obj->insertdb($fn, $username, $pwd, $em, $co, $dob, $cn, $type);
        } else {
            return False;
        }
    }
}
?>