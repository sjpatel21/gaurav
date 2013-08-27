<?php
  $guj = "";
  $eng = "";
  $hin = "";
  print_r($_POST);

  if(isset($_POST["guj"])){
    $guj = $_POST["guj"];
  }
 if(isset($_POST["hin"])){
    $hin = $_POST["hin"];
  }
 if(isset($_POST["eng"])){
    $eng = $_POST["eng"];
  }
?>

<form method="post">
  <br/>Language
  <br/> <input type="checkbox"
         <?= ($guj == "guj" ? "checked" : "")?>
         name="guj" value="guj"/> Gujarati
  <br/> <input type="checkbox" 
          <?= ($hin == "hin" ? "checked" : "")?>
           name="hin" value="hin"/> Hindi
  <br/> <input type="checkbox" 
         <?= ($eng == "eng" ? "checked" : "")?>
         name="eng" value="eng"/> English
  <br/> <input type="submit" name="cmd" value="Submit"/>
</form>