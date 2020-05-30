<?php
session_start();
if ($_SESSION["userID"] == "") {
  header('Location: index.php?reCame=index');
}
$minPLMaterialEdit=1;
$PLUserEdit=3;
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>User Edit</title>
  <link rel="stylesheet" href="css/components.css">
  <link rel="stylesheet" href="css/icons.css">
  <link rel="stylesheet" href="css/responsee.css">
  <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="owl-carousel/owl.theme.css">
  <!-- CUSTOM STYLE -->
  <link rel="stylesheet" href="css/template-style.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
  <script language="JavaScript" type="text/javascript">
  function checkDelete(){
    return confirm('Are you sure?');
  }
  </script>
</head>
<body class="size-1140">
  <!-- TOP NAV WITH LOGO -->
  <header>
    <nav>
      <div class="line">
        <div class="top-nav">
          <div class="logo hide-l">
            <a href="#"><strong>{A}lgo</strong></a>
          </div>
          <p class="nav-text"><strong>Menu</strong></p>
          <div class="top-nav s-12 l-5">
            <ul class="right top-ul chevron">
              <li><a href="index.php?reCame=index">Home</a>
              </li>
              <li><a href="material.php">Material</a>

              </div>
              <ul class="s-12 l-2">
                <li class="logo hide-s hide-m">
                  <a href="#"><strong>{A}lgo</strong></a>
                </li>
              </ul>
              <div class="top-nav s-12 l-5">
                <ul class="top-ul chevron">
                  <li><a href="help.php">Help</a>
                  </li>
                  <?php
                  if($_SESSION["PL"]>$minPLMaterialEdit){
                    echo '
                  <li>
                    <a>Options</a>
                    <ul>
                      <li><a href="materialsedit.php?">Edit the Materials</a>
                      </li>
                      <li><a href="quizesedit.php?">Edit the Quizzes</a>
                      </li>
                      <li><a href="testedit.php?">Edit the Test</a>
                      </li>';
                        if($_SESSION["PL"]==$PLUserEdit){
                      echo '<li><a href="useredit.php?">Edit the Users</a></li>';
echo '<li><a href="feedback.php?">feedback</a>
                      </li>';
                    }
                    echo'
                    </ul>
                  </li>';
                }
                  ?>

                  <li><a href="logoutaction.php">Logout</a>
                  </li>
                </ul>
              </div>

            </ul>
          </div>
        </div>

      </nav>
    </header>

    <div class = "wholeBox">
      <?php
      include("dblogin.php");
      echo '<div id = "rightBox"> ';
      echo '<div id = "rightBox2">';
      echo '<form name="edituser" method="post" action= "useredit.php">
      Enter the user id
      <p> <input type="number" name="UID" value="1" >
      <input id="button" type="submit" value= "Submit">
      <input id="button" type="submit" name="action" value= "All">
      <input id="button" type="submit" name="Add" value= "New"></p>
      </form>';
      echo '</div> ';

      echo '<div id = "rightBox4">';

      include("userAll.php");

      echo '</div> ';
      echo '</div> ';
      echo '<div id = "leftBox"> ';
      echo '<h3>Users:</h3><br>';

      if(((isset($_POST["UID"]))||(isset($_POST["action"])))&&(empty($_POST["Add"]))){
        if(isset($_POST["UID"]))
        {
          $UID=$_POST["UID"];
          $sql    = "SELECT * FROM user WHERE id=$UID";
          $result =$_SESSION["mysqli"]->query($sql);
        }
        if(isset($_POST["action"]))
        {
          $sql    = "SELECT * FROM user";
          $result =$_SESSION["mysqli"]->query($sql);
        }

        while ($row = $result->fetch_array(MYSQL_ASSOC)) {

          echo '<div id = "border">';
          echo '<form name="edituser" method="post" action= "edituser.php">';
          echo '<p>';
          echo '<input type="hidden" name="id" value='.$row["id"].'>';
          echo '<h5>';
          echo '  id: ';
          echo '<h5>';
          echo '<input type="text" name="id" disabled id="other" value='.$row["id"].' >';
          echo '<h5>';
          echo ' Firstname: ';
          echo '<h5>';

          echo '<input type="text" name="FirstName" required id="other" value='.$row["FirstName"].'>';
          echo '<h5>';
          echo ' Surname: ';
          echo '<h5>';

          echo '<input type="text" name="SurName" required id="other" value='.$row["SurName"].'>';
          echo '<h5>';
          echo ' School name: ';
          echo '<h5>';

          echo '<input type="text" name="SchoolName" required id="other" value='.$row["SchoolName"].'>';
          echo '<h5>';
          echo ' user type: ';
          echo '<h5>';

          echo '<select id="other"  name="UserType">
          <option value="Admin">Admin</option>
          <option value="Parent">Parent</option>
          <option value="Student">Student</option>
          <option value="Teacher">Teacher</option>
          <option value='.$row["UserType"].' selected>'.$row["UserType"].'</option>
          </select>';

          echo '<h5>';
          echo ' Username: ';
          echo '</h5>';
          echo '<input type="text" name="UserName" required id="other" value='.$row["UserName"].'>';
          echo '<h5>';
          echo ' Password: ';
          echo '</h5>';

          echo '<input type="Password" name="Password" required id="other" value='.$row["Password"].'>';
          echo '<h5>';
          echo ' Email address: ';
          echo '</h5>';

          echo '<input type="email" name="Email" required id="other" value='.$row["Email"].'>';
          echo '<h5>';
          echo ' Register Date and Time: ';
          echo '</h5>';

          echo '<textarea name="Question" cols="40"  disabled>'.$row["DateandTime"].'</textarea>';

          echo '<h5>';
          echo ' Test ';
          echo '</h5>';

          echo '<input type="number" name="Test" required  value='.$row["Test"].'>';
          echo '<h5>';
          echo ' Test attempt date and time: ';
          echo '</h5>';

          echo '<textarea name="Question" cols="40"  disabled>'.$row["TestAttempt"].'</textarea>';
          echo '<h5>';
          echo ' Test grade ';
          echo '</h5>';

          echo '<input type="number" name="Mark" required  value='.$row["Mark"].'>';
          echo '<h5>';
          echo ' Current material ID ';
          echo '</h5>';

          echo '<input type="number" name="MaterialID" required  value='.$row["MaterialID"].'>';
          echo '<h5>';
          echo ' Permission Level: ';
          echo '</h5>';

          echo '<select id="other" name="PermissionLevel">
          <option value="0">Student</option>
          <option value="1">Parent</option>
          <option value="2">Teacher</option>
          <option value="3">Admin</option>
          <option value='.$row["PermissionLevel"].' selected>'.$row["PermissionLevel"].'</option>
          </select>';

          echo '<h5>';
          echo ' Child ID: ';
          echo '</h5>';
          echo '<input type="number"   name="NO" placeholder="Child ID, Not required" value='.$row["NO"].'>';

          echo '</p>';

          echo '</div>';
          echo '<p><input type="submit" id="buttondelete" onclick="return checkDelete()" name="action" value= "Delete">';
          echo '<input type="submit" id="buttonupdate" onclick="return checkDelete()" name="action" value= "Update"></p></form>';
        }
      }
      if(isset($_POST["Add"]))
      {
        echo '<div id = "border">';
        echo '<form name="addmaterial" method="post" action= "adduser.php">';
        echo '<p>';

        echo '<input type="number"  placeholder="User ID" name="id" placeholder="Not required" >';
        echo '<br>';
        echo '<br>';
        echo '<input type="text" id="other" placeholder="First name" name="FirstName" required >';

        echo '<br>';
        echo '<input type="text" id="other" placeholder="Surname" name="SurName" required >';


        echo '<input type="text" id="other" placeholder="School name" name="SchoolName" required >';
        echo '<h5>';
        echo ' user type: ';
        echo '</h5>';

        echo '<select id="other" name="UserType">
        <option value="Admin">Admin</option>
        <option value="Parent">Parent</option>
        <option selected value="Student">Student</option>
        <option value="Teacher">Teacher</option>
        </select>';


        echo '<br>';

        echo '<input type="text" id="other" placeholder="UserName" name="UserName" required >';


        echo '<input type="Password" id="other" placeholder="Password" name="Password" id="password" minlength="8" maxlength="20" onkeyup="checkPass(); return false;" placeholder="Password.." required >';


        echo '<input type="Password" id="other" placeholder="Confirm Password" name="cPassword" id="cPassword" onkeyup="checkPass(); return false;" placeholder="Repeat the Password.." required >';


        echo '<input type="email" id="other" placeholder="Email address" name="Email" required >';
        echo '<h5>';
        echo ' Permission Level: ';
        echo '</h5>';


        echo '<select id="other" name="PermissionLevel">
        <option value="0" selected >Student</option>
        <option value="1">Parent</option>
        <option value="2">Teacher</option>
        <option value="5">Admin</option>
        </select>';
        echo '<br>';
        echo '<input type="number"  name="NO" placeholder="Child ID, Not required" >';


        echo '</p>';
        echo '</div>';
        echo '</p>';
        echo '<input type="submit" id="button" value= "Add it!"></p></form>';
      }
      echo '</div>';

      ?>
    </div>


    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
      $("#owl-demo").owlCarousel({
        slideSpeed : 500,
        autoPlay : true,
        navigation : false,
        pagination : false,
        singleItem:true
      });
      $("#owl-demo2").owlCarousel({
        slideSpeed : 500,
        autoPlay : true,
        navigation : false,
        pagination : true,
        singleItem:true
      });
    });

    </script>
  </body>
  </html>
