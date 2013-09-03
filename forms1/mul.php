<?php
 print_r($_POST);

 if(isset($_POST["item"]))
   {
     $items = $_POST["item"];
     foreach($items as $item) {
         echo "<br/>", $item;
      }
    }
?>

<form method="post">
 <br/>Item1 <input type="text" name="item[]"/>
 <br/>Item2 <input type="text" name="item[]"/>
 <br/>Item3 <input type="text" name="item[]"/>
 <br/><input type="submit"/>
</form>