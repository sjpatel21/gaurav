<?php
  $subject = "The red sun and red rose";
  $replace = "white";
  $search="red";
  $str = str_replace($search, $replace, $subject);
  echo $str;
?>