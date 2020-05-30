<!-- This php page perper the conection to the database -->
<?php
$host     = "localhost"; // Host name
$username = "root"; // Mysql username
$pass = "usbw"; // Mysql password
$db_name  = "co1801assignment"; // Database name
$_SESSION["mysqli"]=new mysqli("$host", "$username", "$pass","$db_name") or die("cannot connect to the databaes");//Conect to the database
?>
