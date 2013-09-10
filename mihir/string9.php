<?php
  $str = "no|name|age";
  $arr = str_getcsv($str,"|");
  foreach ($arr as $a) {
      echo "<br/>". $a;
  }
?>