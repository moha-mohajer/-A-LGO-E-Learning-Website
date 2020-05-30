<?php
$mid=$_SESSION["MID"];
$sql    = "SELECT * FROM material WHERE iD =".$mid;//select table and sort database
$result =$_SESSION["mysqli"]->query($sql);
while ($row = $result->fetch_array(MYSQL_ASSOC)) {

  //activiti
  echo $row["Activiti"] . '<br>';
  //src of activiti
  if($row["Activiti"]=="Video"){
  echo '<iframe src='.$row["ActivitiSrc"].' frameborder="0" allowfullscreen></iframe>';
   }
   if($row["Activiti"]=="Animation"){

	   echo '<img src='.$row["ActivitiSrc"].'>';
   }

   if($row["Activiti"]=="Game"){

	   echo '<a target="_blank"  href='.$row["ActivitiSrc"].'>Click to play a sorting game</a>';

   }
}
?> 
