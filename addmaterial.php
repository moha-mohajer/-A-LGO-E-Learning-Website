<?php
$Subject=$_POST["Subject"];
$Title=$_POST["Title"];
$Material=$_POST["Material"];
$MoreInfo=$_POST["MoreInfo"];
$Activiti=$_POST["Activiti"];
$ActivitiSrc=$_POST["ActivitiSrc"];

include("dblogin.php");//Db conaction

$sql = "INSERT INTO material (Subject, Title, Material,MoreInfo ,Activiti,ActivitiSrc ) VALUES('$Subject', '$Title', '$Material', '$MoreInfo' ,'$Activiti','$ActivitiSrc')";
$result =$_SESSION["mysqli"]->query($sql);

// alart to show job was succesfuly done
echo "<script>
alert('New material created');
window.location.href='materialsedit.php';
</script>";
?>
