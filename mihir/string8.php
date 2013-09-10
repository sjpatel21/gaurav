<?php
 $str = "     Hello         ";
 
 echo "<br/>1." . ltrim($str) . "1";
 echo "<br/>2." . rtrim($str) . "2";
 echo "<br/>3." . trim($str) . "3";
 
 $str = "*******Hello******";
 echo "<br/>", ltrim($str,"*");
?>