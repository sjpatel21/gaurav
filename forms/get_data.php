<?php
 
 $no = 0;
 $name = "";

 if(isset($_GET["no"], $_GET["name"])){
    $no = $_GET["no"];
   $name= $_GET["name"];
   echo $no, $name;
 }else{
   echo "Sorry! no data to proceed.";
 }
?>
