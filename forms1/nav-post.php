<?php
  $arr = array("Meh","Pat","Sur","Rajkot");
  $index = 0;
  $cmd = "";

  if(isset($_POST["cmd"])){
     $cmd = $_POST["cmd"];
  }
  if(isset($_POST["index"])){
    $index = 0 + $_POST["index"];
  }
  
if($cmd == "Next") {
   $index++;
   if($index>= count($arr))
       $index = count($arr)-1;
 }

 if($cmd == "Prev") {
   $index--;
   if($index<0)
      $index =0 ;
 }
?>

<p>City : <?=$arr[$index]?></p>
 

<form method="post">
  <input type="hidden" name="index" value="<?=$index?>"/>
  <input type="submit" name="cmd" value="Prev"/>
  <input type="submit" name="cmd" value="Next"/>
</form>
 