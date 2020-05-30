<?php
$FirstName = $_POST["FirstName"];
$SurName = $_POST["SurName"];
$SchoolName = $_POST["SchoolName"];
$UserType = $_POST["UserType"];
$UserName = $_POST["user"];
$Password = $_POST["password"];
$EMail =$_POST["email"];
$DateandTime = $_POST["DateandTime"];
$cheackUser=0;
include("dblogin.php");//Db conaction

$sql    = "SELECT * FROM user";
$result = $_SESSION["mysqli"]->query($sql);
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($UserName == $row["UserName"] ){
    $cheackUser=1;
    echo "<script>
    alert('User Name already exists');
    window.history.back();
    </script>";
  }
}
if ($cheackUser == 0 ){
  $sql = "INSERT INTO user (FirstName, SurName, UserType,SchoolName,UserName, Password, EMail, DateandTime )
   VALUES('$FirstName', '$SurName', '$UserType','$SchoolName','$UserName', '$Password', '$EMail', '$DateandTime')";
  $result =$_SESSION["mysqli"]->query($sql);
  // alart to show job was succesfuly done
  echo "<script>
  alert('Student accounts created');
  window.location.href='index.php?reCame=true';
  </script>";
}
?>
