<?php
$id=$_POST["id"];
$FirstName=$_POST["FirstName"];
$SurName=$_POST["SurName"];
$SchoolName=$_POST["SchoolName"];
$UserType=$_POST["UserType"];
$UserName=$_POST["UserName"];
$Password=$_POST["Password"];
$Email=$_POST["Email"];
$PermissionLevel=$_POST["PermissionLevel"];
$NO=$_POST["NO"];
$cheackUser = 0;
date_default_timezone_set("Europe/Nicosia");
$DateandTime= date('l, F j Y h:i');
include("dblogin.php");//Db conaction
$sql    = "SELECT * FROM user";
$result = $_SESSION["mysqli"]->query($sql);
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($UserName == $row["UserName"] ){
    $cheackUser=1;
    echo "<script>
    alert('User Name already exists');
    window.location.href='useredit.php';
    </script>";
  }
  if ($id == $row["id"] ){
    $cheackUser=1;
    echo "<script>
    alert('User ID already exists');
    window.location.href='useredit.php';
    </script>";
  }
}
if ($cheackUser == 0 ){
$sql = "INSERT INTO user (DateandTime , Email , FirstName , id , Password , SchoolName , SurName , UserName , UserType , PermissionLevel, NO)
 VALUES
 ('$DateandTime' , '$Email' , '$FirstName' , '$id' , '$Password' , '$SchoolName' , '$SurName' , '$UserName' , '$UserType' , '$PermissionLevel', '$NO')";
$result =$_SESSION["mysqli"]->query($sql);

// alart to show job was succesfuly done
echo "<script>
alert('New user created');
window.location.href='useredit.php';
</script>";
}
?>
