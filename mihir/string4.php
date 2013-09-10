<?php
  $str  = str_pad("Hello",20,"*",1);  //Right padding
  echo "<br/>", $str;
  $str  = str_pad("Hello",20,"*",0); //Left padding
  echo "<br/>", $str;
  $str  = str_pad("Hello",20,"*",2); //Center padding
  echo "<br/>", $str;
?>