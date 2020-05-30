<?php
include("dblogin.php");

$id=$_POST["id"];
$Subject=$_POST["Subject"];
$Title=$_POST["Title"];
$Material=$_POST["Material"];
$MoreInfo=$_POST["MoreInfo"];
$Activiti=$_POST["Activiti"];
$ActivitiSrc=$_POST["ActivitiSrc"];
$action=$_POST["action"];

if($action=="Update"){
$sql = "UPDATE material SET Subject='$Subject', Title='$Title', Material='$Material',
 MoreInfo='$MoreInfo' , Activiti='$Activiti', ActivitiSrc='$ActivitiSrc'
 WHERE id=$id";
$result =$_SESSION["mysqli"]->query($sql);
// alart to show job was succesfuly done
echo "<script>
alert('Data update it');
window.location.href='materialsedit.php';
</script>";
}

if($action=="Delete"){
$sql = "DELETE FROM material WHERE id=$id";
$result =$_SESSION["mysqli"]->query($sql);
// alart to show job was succesfuly done
echo "<script>
alert('Data Deleted it');
 window.location.href='materialsedit.php';
</script>";
}
?>
