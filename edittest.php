<?php
include("dblogin.php");

$id=$_POST["id"];
$Question=$_POST["Question"];
$QuestionType=$_POST["QuestionType"];
$Aa=$_POST["Aa"];
$Ab=$_POST["Ab"];
$Ac=$_POST["Ac"];
$Ad=$_POST["Ad"];
$CorrectAnswer=$_POST["CorrectAnswer"];
$Points=$_POST["Points"];
$action=$_POST["action"];


if($action=="Update"){
$sql = "UPDATE test SET  Question='$Question', QuestionType='$QuestionType', Aa='$Aa', Ab='$Ab', Ac='$Ac', Ad='$Ad', CorrectAnswer='$CorrectAnswer',
Points='$Points'
 WHERE id=$id";
$result =$_SESSION["mysqli"]->query($sql);
// alart to show job was succesfuly done
echo "<script>
alert('Test question/s updated');
 window.location.href='testedit.php';
</script>";
}

if($action=="Delete"){
$sql = "DELETE FROM test WHERE id=$id";
$result =$_SESSION["mysqli"]->query($sql);
// alart to show job was succesfuly done
echo "<script>
alert('Test question deleted');
 window.location.href='testedit.php';
</script>";
}
?>
