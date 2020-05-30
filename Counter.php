<?php
  include("dblogin.php");//DB conection
$sql    = "SELECT * FROM " . $tableN;
$result =$_SESSION["mysqli"]->query($sql);
$NR = mysqli_num_rows($result);
?>
