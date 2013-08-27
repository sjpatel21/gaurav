<?php
  $no = 0 ;
  $name = "";
  $cmd = "";

   if(isset($_POST["cmd"])){
      $cmd = $_POST["cmd"];
   }
   if($cmd == "Submit"){
         $no = 0 + $_POST["no"];
         $name = $_POST["name"];
         //ToDo :: Insert data into database 
   }
?>

<form method="post">
  
<br/>No:  <input type="text" name="no"  value="<?=$no?>" />
<br/>Name:  <input type="text" name="name" value="<?=$name?>" />
<br/> <input type="submit" name="cmd" value="Submit"/>

</form>

<?php
   if($cmd=="Submit"){
     ?>
     <h2>Your Input</h2>
     <p><label>No.....</label><label><?=$no?></p>
     <p><label>Name...</label><label><?=$name?></p>
    <?php
   }
?>