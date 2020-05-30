<?php
include("dblogin.php");

$id=$_POST["id"];
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
$Points=$_POST["Points"];
$QN=$_POST["QN"];
$action=$_POST["action"];


if($action=="Update"){
$sql = "UPDATE quiz SET MaterialID='$MaterialID', MaterialTitle='$MaterialTitle', Question='$Question',
 QuestionType='$QuestionType', Aa='$Aa', Ab='$Ab', Ac='$Ac', Ad='$Ad', CorrectAnswer='$CorrectAnswer',
  MaterialSrc='$MaterialSrc', Comment='$Comment', Points='$Points', QN='$QN'
 WHERE id=$id";
$result =$_SESSION["mysqli"]->query($sql);
// alart to show job was succesfuly done
echo "<script>
alert('Quiz question/s updated');
 window.location.href='quizesedit.php';
</script>";
}

if($action=="Delete"){
$sql = "DELETE FROM quiz WHERE id=$id";
$result =$_SESSION["mysqli"]->query($sql);
// alart to show job was succesfuly done
echo "<script>
alert('Quiz question deleted');
 window.location.href='quizesedit.php';
</script>";
}
?>
