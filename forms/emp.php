<?php
  $no = 0;
  $name = "";
  $cmd = "";
  $message = "";

  if(isset($_POST["cmd"])) {
     $cmd = $_POST["cmd"];

  }
  
  if($cmd == "Add") {
      $no = 0 + $_POST["no"];
      $name = $_POST["name"];

      $message = "Add button is pressed";
  }
  else
  if($cmd == "Delete") {
     $no = 0 + $_POST["no"];
     $message = "Delete button is pressed";
  }
  else
  if($cmd == "Update") {
     $message = "Update button is pressed";
  }
?>

<form method="post">
 <p>
    <label>No</label>
    <input type="text" name="no"/>
  </p>
 <p>
    <label>Name</label>
    <input type="text" name="name"/>
  </p>
  <p>
    <input type="submit" name="cmd" value="Add"/>
    <input type="submit" name="cmd" value="Delete"/>
    <input type="submit" name="cmd" value="Update"/>
  </p>
  <p><?=$message?></p>
</form>