<?php
$FirstName = $_POST["FirstName"];
$SurName = $_POST["SurName"];
$EMail =$_POST["email"];
$txtarea= $_POST["textarea"];
include("dblogin.php");//Db conaction

  $sql = "INSERT INTO contact (FirstName, SurName, EMail, txtarea )
   VALUES('$FirstName', '$SurName', '$EMail', '$txtarea')";
  $result =$_SESSION["mysqli"]->query($sql);
  // alart to show job was succesfuly done
  echo "<script>
  alert('Your request submited');
  window.location.href='contact.php';
  </script>";

?>
