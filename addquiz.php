<?php
$MaterialID=$_POST["MaterialID"];
$MaterialTitle=$_POST["MaterialTitle"];
$Question=$_POST["Question"];
$QuestionType=$_POST["QuestionType"];
$Aa=$_POST["Aa"];
$Ab=$_POST["Ab"];
$Ac=$_POST["Ac"];
$Ad=$_POST["Ad"];
$CorrectAnswer=$_POST["CorrectAnswer"];
$MaterialSrc=$_POST["MaterialSrc"];
$Comment=$_POST["Comment"];
$point=$_POST["Points"];
$QN=$_POST["QN"];

include("dblogin.php");//Db conaction

$sql = "INSERT INTO quiz (MaterialID , MaterialTitle , Question , QuestionType , Aa , Ab , Ac , Ad , CorrectAnswer , MaterialSrc , Comment , Points , QN)
 VALUES
 ('$MaterialID', '$MaterialTitle', '$Question', '$QuestionType', '$Aa', '$Ab', '$Ac', '$Ad', '$CorrectAnswer', '$MaterialSrc', '$Comment', '$point', '$QN')";
$result =$_SESSION["mysqli"]->query($sql);

// alart to show job was succesfuly done
echo "<script>
alert('New quiz question created');
window.location.href='quizesedit.php';
</script>";
?>
