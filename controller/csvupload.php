<?php

# author : Ayush
# date : 08/06/2022
# handels the csv file from helper and send it to the model for entry

class Csvupload{
    //function to check the lines of csv file and send it to model
    function csv($file){
        require_once("../model/csvupload.php");
          
            $obj= new Csvinsert();
            $output=$obj->insertcsv($file);
            if($output)
            {
                return true;
            }
            else{
                return False;
            }
    }
}



?>