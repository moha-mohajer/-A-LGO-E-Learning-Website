<?php
$MinPL=2;
include("dblogin.php");
if($_SESSION["PL"]>$MinPL){
  $sql    = "SELECT * FROM user";
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
    echo '<br> School name :     ';
    echo $row["SchoolName"];
    echo '<br> user type :     ';
    echo $row["UserType"];
    echo '<br> Username :     ';
    echo $row["UserName"];
    echo '<br> Email address :     ';
    echo $row["Email"];
    echo '<br> Register Date and Time :     ';
    echo $row["DateandTime"];
    echo '<br> Test :     ';
    echo $row["Test"];
    echo '<br> Test attempt date and time :     ';
    echo $row["TestAttempt"];
    echo '<br> Test grade :     ';
    echo $row["Mark"];
    echo '<br> Current material ID :     ';
    echo $row["MaterialID"];
    echo '<br> Permission Level :     ';
    echo $row["PermissionLevel"];
    echo '</p>';
    echo '<br>';
    echo '<br>';
    echo '</div>';
  }
}
