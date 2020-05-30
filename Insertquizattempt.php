<?php
$userMID=$_SESSION["userMID"];
date_default_timezone_set("Europe/Nicosia");
$dateAndTime= date('l, F j Y h:i');

$sql = "INSERT INTO studentattempt (UserID, MaterialID, Material,AttemptDate,Points, Correct, Strategies) VALUES('$userID', '$id', '$title','$dateAndTime','$points', '$correct', '$Strategies')";
$result =$_SESSION["mysqli"]->query($sql);


if(($points>=15) && ($userMID < $id)){
$_SESSION["userMID"]+=1;
$userMID+=1;
$sql = "UPDATE user SET MaterialID='$userMID' WHERE id=$userID";
$result =$_SESSION["mysqli"]->query($sql);
}
// alart to show job was succesfuly done
?>
