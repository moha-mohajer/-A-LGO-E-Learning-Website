<?php
$mid=$_SESSION["MID"];
include("dblogin.php");
$sql    = "SELECT * FROM material WHERE iD =".$mid;//select table and sort database
$result =$_SESSION["mysqli"]->query($sql);
while ($row = $result->fetch_array(MYSQL_ASSOC)) {
  //title
  echo'<br><h3>';
  echo $row["Title"] . '</h3>';
  // material
  echo '<p>';
  echo'<h5>';
  echo $row["Material"] . '</h5>';
  echo '</p>';
  // more info
  echo '<p>';
  echo'<h5>';
  echo 'For further information:';
  echo '<p><a target="_blank" href='.$row["MoreInfo"].'>Click here!</a></p>';
  echo '</p>';

}
?>
