
<?php
session_start();
$password = $_POST["password"];
$user = $_POST["user"];
include("dblogin.php");//DB conection
$sql    = "SELECT * FROM user";
$result = $_SESSION["mysqli"]->query($sql);
while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($user == $row["UserName"] && $row["Password"] ==$password){
    $_SESSION["userID"] = $row["id"];
    $_SESSION["username"] = $row["UserName"];
    $_SESSION["FirstName"] = $row["FirstName"];
    $_SESSION["SurName"] = $row["SurName"];
    $_SESSION["userMID"] = $row["MaterialID"];
    $_SESSION["test"] = $row["Test"];
    $_SESSION["PL"] = $row["PermissionLevel"];
    $_SESSION["DateandTime"] = $row["DateandTime"];
    $_SESSION["NO"] = $row["NO"];
    $_SESSION["Mark"] = $row["Mark"];
    $_SESSION["Test"] = $row["Test"];
    if ($row["MaterialID"]==0) {
      echo "<script>alert('We are happy to see you " . $row["FirstName"] . "');
      window.location.href='help.php';
      </script>";
    }
    else {
      echo "<script>alert('We are happy to see you " . $row["FirstName"] . "');
      window.location.href='material.php';
      </script>";
    }
  }
}
if (!(isset($_SESSION["userID"]))) {// wrong password with alart
  echo "<script>alert('Username or Password is Wrong ');
  window.location.href='index.php?reCame=index.php';
  </script>";
}

?>
