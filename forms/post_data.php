<?php
 
 $no = 0;
 $name = "";

 if(isset($_POST["no"], $_POST["name"])){
    $no = $_POST["no"];
   $name= $_POST["name"];
   echo $no, $name;
 }else{
   echo "Sorry! no data to proceed.";
 }
?>
