<?php
$MinPL=1;
include("dblogin.php");
if($_SESSION["PL"]>$MinPL){
  $sql    = "SELECT * FROM test";
  $result =$_SESSION["mysqli"]->query($sql);
  while ($row = $result->fetch_array(MYSQL_ASSOC)) {
echo '<div id = "border">';
    echo ' question id :     ';
    echo $row["id"];
    echo '<br> Question :     ';
    echo $row["Question"];
    echo '<br> Question type :     ';
    echo $row["QuestionType"];
    echo '<br> Answer a :     ';
    echo $row["Aa"];
    echo '<br> Answer b :     ';
    echo $row["Ab"];
    echo '<br> Answer c :     ';
    echo $row["Ac"];
    echo '<br> Answer d :     ';
    echo $row["Ad"];
    echo '<br> Correct answer :     ';
    echo $row["CorrectAnswer"];
    echo '<br> Point :     ';
    echo $row["Points"];
    echo '</p>';
    echo   '<br>';
    echo   '<br>';
    echo '</div>';
  }
}
