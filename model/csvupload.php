<?php

# author : Ayush
# date : 08/06/2022
# class to insert data from csv file into database


class Csvinsert{
    
    //function to generate password
    function password()
    {
        $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); 
        $combLen = strlen($comb) - 1; 
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $combLen);
            $pass[] = $comb[$n];
        }
        $pwd=implode($pass);
        return $pwd;
    }

    

    //function to insert data into database
    function insertcsv($file)
    {   require_once("connectdb.php");
        $obj1=new Csvinsert();

        $file=fopen($file,"r");
        while(($data=fgetcsv($file,"100",","))!==False)
        {   $pwd=$obj1->password();
            $sql="INSERT INTO user(Names,Username,Pwd,Email,Country,DOB,College,Type_of_book,Admins)
            values('$data[0]','$data[1]','$pwd','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','0')";
            
            if ($conn->query($sql) === FALSE) {
                return False;
                
            } 
        }
        return True;

    }


}

?>