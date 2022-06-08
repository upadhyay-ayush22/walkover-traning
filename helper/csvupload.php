<?php
# author : Ayush
# date : 08/06/2022
# helper for csvupload


$data=$_REQUEST["file_name"];

/* takes file and pas sit to controller */

require_once("../controller/csvupload.php");
$file=$_FILES["file_name"]["tmp_name"];
$obj=new Csvupload();
$result=$obj->csv($file);
if($result)
{
    header("Location: ../views/main.php");
}
else
{
    echo "failed";
}


?>