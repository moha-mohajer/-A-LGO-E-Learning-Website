<?php
session_start();
$_SESSION["userID"] = "";
$_SESSION["mysqli"] = "";
$_SESSION["username"] = "";
$_SESSION["MaterialID"] ="";
$_SESSION["userMID"] ="";
$_SESSION["test"] ="";
$_SESSION["PL"] ="";
session_destroy();
echo "<script>
alert('Successful logout. See you soon');
window.location.href='index.php?reCame=index';
</script>";
?>
