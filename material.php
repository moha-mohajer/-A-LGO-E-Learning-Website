<?php
session_start();
if ($_SESSION["userID"] == "") {
  header('Location: index.php?reCame=index');
}
$minPLMaterialEdit=2;
$PLUserEdit=3;
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Material</title>
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
                  if($_SESSION["PL"]>=$minPLMaterialEdit){
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
      $tableN="material";
      include("Counter.php");
      $maxmaterial=$NR;
      $PLUserEdit=3;
      $minPLMaterialEdit=2;
      $minPLBlockTest=2;
      $minPLAttemt=0;
      $parentPL=1;
      echo  '<div id = "leftBox">';
      include("list.php");
      if ( ($_SESSION["userMID"]>=$maxmaterial && $_SESSION["test"]==0)||$_SESSION["PL"]>=$minPLBlockTest){
        echo '<form name="Test" method="post" action= "test.php">
        <p><h3><input  type="submit" id="button" name="Submit" value= "Final Test"></h3></p>
        </form>';
      }
      else{
        echo '<form name="Test" method="post" action= "test.php">
        <p><h3><input  type="submit" id="button" name="Submit" value= "Final Test" disabled></h3></p>
        </form>';
      }
      echo '</div>';
      echo '<div id = "rightBox"> ';
      echo '<div id = "rightBox2">';

      if($_SESSION["PL"]>=$minPLMaterialEdit){
        echo '<form name="checkattempt" method="post" action= "material.php">
        <p> <input type="number" name="userID"  placeholder="Check student attempt by user id" required>
        <input  id="button" type="submit" value= "Check"></p>
        </form>';
      }
      echo '</div>';
      echo '<div id = "rightBox3">';
      if(!$_SESSION["PL"]>$minPLAttemt){
        $userid=$_SESSION["userID"];
        include("results.php");
      }
      if($_SESSION["PL"]==$parentPL){
        $userid=$_SESSION["NO"];
        echo "result for user ID:  " .$userid;
        include("results.php");
      }

      if(($_SESSION["PL"]>=$minPLMaterialEdit) && (isset($_POST["userID"])))
      {
        $userid=$_POST["userID"];

        echo "result for user ID:  " .$userid;
        include("results.php");
      }
      else
      {

      }
      echo '</div> ';
      echo '</div> ';
      ?>

    </div>

    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
      $("#owl-demo").owlCarousel({
        slideSpeed : 300,
        autoPlay : true,
        navigation : false,
        pagination : false,
        singleItem:true
      });
      $("#owl-demo2").owlCarousel({
        slideSpeed : 300,
        autoPlay : true,
        navigation : false,
        pagination : true,
        singleItem:true
      });
    });

    </script>
  </body>
  </html>
