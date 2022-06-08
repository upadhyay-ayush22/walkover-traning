<?php
# author : Ayush
# date : 05/06/2022
# helper for Curd model for updating the existing record 


        $id=$_REQUEST['id'];
        $fn=$_REQUEST['fn'];
        $username=$_REQUEST['username'];
        $pwd=$_REQUEST['pwd'];
        $em=$_REQUEST['em'];
        $co=$_REQUEST['co'];
        $dob=$_REQUEST['dob'];
        $cn=$_REQUEST['cn'];
        $type=$_REQUEST['type'];

    // object created of CRUD class for Updation         
        require("../model/Curd.php");
        $obj=new Curd();

        if($obj->update($id,$fn,$username,$pwd,$em,$co,$dob,$cn,$type)){
            header("Location: ../views/body.php");
            exit();

        }
        else
        {
            header("Location: ../views/error.php");
        }
?>