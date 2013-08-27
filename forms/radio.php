<?php
 $gender = "";
 $cmd = "";

 if(isset($_POST["cmd"])){
   $cmd = $_POST["cmd"];
 }

 if($cmd == "Submit"){
   if(isset($_POST["gender"])) {
     $gender = $_POST["gender"];
     echo $gender;
   }
 }

?>

<form method="post">
 <p>Gender</p>
 <br/> <input type="radio"  
       name="gender" 
       <?= ($gender == "Male" ? "checked" : "") ?>
       value="Male"/> Male
 <br/> <input type="radio"   
              name="gender" 
              <?= ($gender == "Female" ? "checked" : "") ?> value="Female"/> Female
 <br/> <input type="submit" name="cmd" value="Submit"/>
</form>
