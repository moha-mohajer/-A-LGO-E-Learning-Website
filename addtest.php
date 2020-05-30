<?php
$Question=$_POST["Question"];
$QuestionType=$_POST["QuestionType"];
$Aa=$_POST["Aa"];
$Ab=$_POST["Ab"];
$Ac=$_POST["Ac"];
$Ad=$_POST["Ad"];
$CorrectAnswer=$_POST["CorrectAnswer"];
$Point=$_POST["Points"];

include("dblogin.php");//Db conaction

$sql = "INSERT INTO test ( Question , QuestionType , Aa , Ab , Ac , Ad , CorrectAnswer , Points )
 VALUES
 ('$Question', '$QuestionType', '$Aa', '$Ab', '$Ac', '$Ad', '$CorrectAnswer', '$Point')";
$result =$_SESSION["mysqli"]->query($sql);

// alart to show job was succesfuly done
echo "<script>
alert('New Test question created');
window.location.href='testedit.php';
</script>";
?>
