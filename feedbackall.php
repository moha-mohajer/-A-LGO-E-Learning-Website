<?php
$MinPL=2;
include("dblogin.php");
if($_SESSION["PL"]>$MinPL){
  $result =$_SESSION["mysqli"]->query($sql);
  while ($row = $result->fetch_array(MYSQL_ASSOC)) {
    echo '<div id = "border">';
    echo '<p>';
    echo '  id :     ';
    echo $row["id"];
    echo '<br> Firstname :     ';
    echo $row["FirstName"];
    echo '<br> Surname :     ';
    echo $row["SurName"];
    echo '<br> Email address :     ';
    echo $row["EMail"];
    echo '<br> Request :     ';
    echo $row["txtarea"];
    echo '</p>';
    echo '<br>';
    echo '<br>';
    echo '</div>';
  }
}
