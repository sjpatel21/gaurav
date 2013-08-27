<?php

 /* create variables */ 
 $no = 0;
 $name = "";
 $cmd = "";
 $message = "";  // To display messages

 /* Examine the which button is pressed */
 
 if(isset($_POST["cmd"])){
    $cmd = $_POST["cmd"];
  }

 /* Add button specific code */ 
 if($cmd == "Add") {
   $no = 0 + $_POST["no"];
   $name = $_POST["name"];

   echo "<br/>", $no, $name;

  }
?>
<form method="post" action="same_page.php"> <!-- or set action="same-page.php" -->
 <br/>No : <input type="text" name="no"/>
 <br/>Name : <input type="text" name="name"/>
 <br/><input type="submit" name="cmd" value="Add"/>
</form>
