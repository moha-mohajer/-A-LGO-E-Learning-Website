
<?php
$userMID=$_SESSION["userMID"];
$userID=$_SESSION["userID"];
$sql    = "SELECT * FROM material ORDER BY Subject ASC ";//select table and sort database
include("dblogin.php");
$result =$_SESSION["mysqli"]->query($sql);
$subject="";
while ($row = $result->fetch_array(MYSQL_ASSOC)) {

 if($row['Subject']!=$subject){
  echo'<h2>';
  echo $row["Subject"] . '<br></h2>';
}
$subject=$row["Subject"];
if($row['id']<=$userMID+1||$_SESSION["PL"]>0){

  // echo '<a href="explanation.php">'.$row['Title'].'<br></a>';
  echo'<form name="materialList" method="post" action= "explanation.php">
    <input type="hidden" name="MID" value='.$row['id'].'>
    <button id="button" type="submit">'.$row['Title'].'</button>
  </form>';
}
  else
  {
  // echo '<a href="" >'.$row['Title'].'<br></a>';
  echo'<form name="materialList" method="post" action= "explanation.php">
    <input type="hidden" name="MID" value='.$row['id'].'>
    <button type="submit" disabled>'.$row['Title'].'</button>
  </form>';
}
}
?>
