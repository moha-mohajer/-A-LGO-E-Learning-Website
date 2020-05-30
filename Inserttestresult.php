<?php
date_default_timezone_set("Europe/Nicosia");
$dateAndTime= date('l, F j Y h:i');
$test=1;
$sql = "UPDATE user SET Test='$test', TestAttempt='$dateAndTime', Mark='$points' WHERE id=$userID";
$result =$_SESSION["mysqli"]->query($sql);
// // alart to show job was succesfuly done
// echo "<script>
// alert('Student test rsults set it');
// </script>";
?>
