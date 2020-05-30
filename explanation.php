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
  <title>Explanation</title>
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
                      echo '<li><a href="feedback.php?">feedback</a></li>';

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
        <div id = "leftBox">

          <?php
          $_SESSION["MID"]=$_POST['MID'];
          include("explanationmaterial.php");

          if ($_POST['MID']>1){
            $Previous=$_POST['MID']-1;
            echo'<form name="materialList" method="post" action= "explanation.php">
            <input type="hidden" name="MID" value='.$Previous.'>
            <input type="submit" id="previousBtn" name="Submit" value= "&lt;&lt; Previous">
            </form>';
          }
          else {
            $Previous=$_POST['MID']-1;
            echo'<form name="materialList" method="post" action= "explanation.php">
            <input type="hidden" name="MID" value='.$Previous.'>
            <input type="submit" id="previousBtn"  name="Submit" value= "&lt;&lt; Previous" disabled>
            </form>';
          }

          echo' <form name="Quiz" method="post" action= "quiz.php">
          <input id="quizBtn" type="submit" name="Submit" value= "Quiz">
          </form>';

          if($_POST['MID']<7 && $_POST['MID']<= $_SESSION["userMID"]){
            $Next=$_POST['MID']+1;
            echo'<form name="materialList" method="post" action= "explanation.php">
            <input type="hidden" name="MID" value='.$Next.'>
            <input type="submit" id="nextBtn" name="Submit" value= "Next &gt;&gt;">
            </form>';
          }
          else {
            $Next=$_POST['MID']+1;
            echo'<form name="materialList" method="post" action= "explanation.php">
            <input type="hidden" name="MID" value='.$Next.'>
            <input type="submit" id="nextBtn"  name="Submit" value= "Next &gt;&gt;" disabled>
            </form>';
          }
        ?>

      </div>
      <div id = "rightBox">
        <div id = "rightBox3">
          <?php include("activiti.php"); ?>
        </div>
      </div>
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
