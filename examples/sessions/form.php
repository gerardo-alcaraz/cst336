<?php
$_POST["names[]"];
?>

<html>
<form action="index.php" method="POST">
    Names   <br>
    <input type="radio"  id="item1"  name="names[]"  value="High School" >
         <input name = "names"/> <br>
    <input type="radio"  id="item2"  name="names[]" value="College">
         <input name = "names"/> <br>
    <input type="radio"  id="item1"  name="names[]"  value="High School" >
         <input name = "names"/> <br>
    <input type="radio"  id="item2"  name="names[]" value="College">
         <input name = "names"/> <br>
    <input type="radio"  id="item2"  name="names[]" value="College">
         <input name = "names"/> <br>
    
    <input type="submit" value="Submit Data"/>
  </form>
</html>