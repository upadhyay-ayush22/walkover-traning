<?php


$data=$_REQUEST["file_name"];

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