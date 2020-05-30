
<form name="checkattempt" method="get" action= "checkstudentattempt.php">
  <p> <input type="text" name="userID"  placeholder="Enter a user Id" required></p>
  <p><input type="submit" value= "Submit"></p>
</form>
<?php
include("dblogin.php");
if(isset($_GET["userID"]))
{
  $userid=$_GET["userID"];
  include("results.php");
}
 ?>
