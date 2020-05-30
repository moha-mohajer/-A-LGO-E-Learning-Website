<?php
$MinPL=1;
include("dblogin.php");
if($_SESSION["PL"]>$MinPL){
  $sql    = "SELECT * FROM material";
  $result =$_SESSION["mysqli"]->query($sql);
  while ($row = $result->fetch_array(MYSQL_ASSOC)) {
    echo '<div id = "border">';
    echo '<p>';
    echo '<h5>';
    echo 'id: ';
    echo $row["id"];
    echo '</h5>';
    echo '<h5>';
    echo '<br> Subject: ';
    echo '</h5>';
    echo $row["Subject"];
    echo '<h5>';
    echo ' Title: ';
    echo '</h5>';
    echo $row["Title"];
    echo '<h5>';
    echo ' Material: ';
    echo '</h5>';
    echo $row["Material"];
    echo '<h5>';
    echo ' For more information source: ';
    echo '</h5>';
    echo $row["MoreInfo"];
    echo '<h5>';
    echo ' Activity: ';
    echo '</h5>';
    echo $row["Activiti"];
    echo '<h5>';
    echo ' Activity Source: ';
    echo '</h5>';
    echo $row["ActivitiSrc"];
    echo "</p>";
    echo '</div>';
  }
}
