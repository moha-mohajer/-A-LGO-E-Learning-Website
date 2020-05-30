<?php
include("dblogin.php");

$id=$_POST["id"];
$FirstName=$_POST["FirstName"];
$SurName=$_POST["SurName"];
$SchoolName=$_POST["SchoolName"];
$UserType=$_POST["UserType"];
$UserName=$_POST["UserName"];
$Password=$_POST["Password"];
$Email=$_POST["Email"];
$Test=$_POST["Test"];
$Mark=$_POST["Mark"];
$MaterialID=$_POST["MaterialID"];
$PermissionLevel=$_POST["PermissionLevel"];
$NO=$_POST["NO"];
$action=$_POST["action"];

if($action=="Update"){
$sql = "UPDATE user SET Email='$Email' , FirstName='$FirstName' , Mark='$Mark' , MaterialID='$MaterialID' ,
Password='$Password' , PermissionLevel='$PermissionLevel' , SchoolName='$SchoolName' , SurName='$SurName' ,
Test='$Test' , UserName='$UserName' , UserType='$UserType' , NO='$NO' WHERE id=$id";
$result =$_SESSION["mysqli"]->query($sql);
// alart to show job was succesfuly done
echo "<script>
alert('the user updated');
 window.location.href='useredit.php';
</script>";
}

if($action=="Delete"){
$sql = "DELETE FROM user WHERE id=$id";
$result =$_SESSION["mysqli"]->query($sql);
// alart to show job was succesfuly done
echo "<script>
alert('The user deleted');
 window.location.href='useredit.php';
</script>";
}
?>
