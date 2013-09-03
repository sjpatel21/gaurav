<?php
  $arr = array("Meh","Pat","Sur","Rajkot");
  $index = 0;
  $cmd = "";

  if(isset($_GET["cmd"])){
     $cmd = $_GET["cmd"];
  }
  if(isset($_GET["index"])){
    $index = 0 + $_GET["index"];
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
<a href="nav.php?cmd=Prev&index=<?=$index?>">Prev</a>
<a href="nav.php?cmd=Next&index=<?=$index?>">Next</a>

 