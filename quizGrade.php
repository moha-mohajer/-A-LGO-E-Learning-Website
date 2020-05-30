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
  <title>Quiz Grade</title>

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


  <meta property="og:url"                content="/img/Star1.png" />
  <meta property="og:type"               content="website" />
  <meta property="og:title"              content="Points" />
  <meta property="og:description"        content="How much did you got?" />
  <meta property="og:image"              content="/img/Star1.png" />
</head>
<body class="size-1140">
  <div id="fb-root"></div>
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

      <div id = "leftBox">
        <?php
        $userID =$_SESSION["userID"];
        $points=0;
        $correct=0;
        $comment='';
        $id=$_POST["materialId"];
        $Strategies=$_POST["Strategies"];
        include("dblogin.php");
        $sql    = "SELECT * FROM quiz WHERE MaterialID =".$id;
        $result =$_SESSION["mysqli"]->query($sql);
        while ($row = $result->fetch_array(MYSQL_ASSOC)) {

          echo '<p class="answer">';
          echo '<h3>';
          echo $row["QN"];
          echo ". ";
          echo '<h3><h5>';
          echo $row["Question"].'</h5>';


          $answer=$_POST["aq".$row["QN"]];

          if($row["QuestionType"]=="MCQ"){

            echo '<br><input type="radio" name="aq';
            echo $row["QN"];
            echo '" value="a" QN="q';
            echo $row["QN"];
            echo 'a"';
            if($answer=="a"){echo "checked";}
            else {echo "disabled";}
            echo '><label for="q';
            echo $row["QN"];
            echo 'a">a.'.$row["Aa"].'</label>  ';

            echo '<br><input type="radio" name="aq';
            echo $row["QN"];
            echo '" value="b" QN="q';
            echo $row["QN"];
            echo 'b"';
            if($answer=="b"){echo "checked";}
            else {echo "disabled";}
            echo '><label for="q';
            echo $row["QN"];
            echo 'b">b.'.$row["Ab"].'</label>  ';

            echo '<br><input type="radio" name="aq';
            echo $row["QN"];
            echo '" value="c" QN="q';
            echo $row["QN"];
            echo 'c"';
            if($answer=="c"){echo "checked";}
            else {echo "disabled";}
            echo '><label for="q';
            echo $row["QN"];
            echo 'c">c.'.$row["Ac"].'</label>  ';

            echo '<br><input type="radio" name="aq';
            echo $row["QN"];
            echo '" value="d" QN="q';
            echo $row["QN"];
            echo 'd"';
            if($answer=="d"){echo "checked";}
            else {echo "disabled";}
            echo '><label for="q';
            echo $row["QN"];
            echo 'd">d.'.$row["Ad"].'</label>  ';
          }
          else if($row["QuestionType"]=="TF"){

            echo '<br><input type="radio" name="aq';
            echo $row["QN"];
            echo '" value="a" QN="q';
            echo $row["QN"];
            echo 'a"';
            if($answer=="a"){echo "checked";}
            else {echo "disabled";}
            echo '><label for="q';
            echo $row["QN"];
            echo 'a">True</label>  ';

            echo '<br><input type="radio" name="aq';
            echo $row["QN"];
            echo '" value="b" QN="q';
            echo $row["QN"];
            echo 'b"';
            if($answer=="b"){echo "checked";}
            else {echo "disabled";}
            echo '><label for="q';
            echo $row["QN"];
            echo 'b">False</label>  ';
}

          else{
            echo '<input type="text" name="aq';
            echo $row["QN"];
            echo '" value="';
            echo $answer;
            echo '" QN="q';
            echo $row["QN"];
            echo 'a" disabled>';
          }

          if($answer==$row["CorrectAnswer"]){
            echo  '<font color="green">  Correct </font> ';
            $points+=$row["Points"];
            $correct+=1;

          }
          else {
            echo  '<font color="red">  Incorrect </font> ';
            $comment=$comment.'<p>Q'.$row["QN"].'. ' .$row["Comment"].'<form name="materialList" method="post" action= "explanation.php">
            <input type="hidden" name="MID" value='.$row['MaterialSrc'].'>
            <button id="feedback" type="submit">Click here to go back to the "'.$row['MaterialTitle'].'" section</button>
            </form><br></p>';

          }
          $title=$row['MaterialTitle'];
        }

        ?>
      </div>

      <div id = "rightBox">
        <div id = "rightBox3">
          <?php


            include("Insertquizattempt.php");

            echo '<p><h2>';
            echo 'Feedback: ';
            echo '</h2><h5>';
            echo $comment;
            echo '</h5></p>';

            echo '<div id="border">';
            echo "<p>";
            echo "Total Points: ";
            echo $points;
            echo '<br>';
            echo "Total correct answer: ";
            echo $correct;
            echo "</p>";
            $Continue=$userMID+1;
            $tableN="material";
            include("Counter.php");
            $maxmaterial=$NR;
            if ($_SESSION["userMID"]<$maxmaterial ){
            echo'<form name="materialList" method="post" action= "explanation.php">
            <input type="hidden" name="MID" value='.$Continue.'>
            <input type="submit" id="button" name="Submit" value= "Continue &gt;&gt; ">
            </form>';
            }
            else{
              echo '<form name="Test" method="post" action= "test.php">
              <p><input  type="submit" id="button" name="Submit" value= "Final Test &gt;&gt;" ></p>
              </form>';
            }
            echo '</div>';
            if ($points>=15) {
              echo'<meta charset="utf-8" />
  <title>jQuery UI Dialog - Default functionality</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script>
  body {
    font-family: "Trebuchet MS", "Helvetica", "Arial",  "Verdana", "sans-serif";
    font-size: 62.5%;
}

  </script>
  <script>
  $(function() {
    $( "#dialog" ).dialog();
  });
  </script>
</head>
<div id="dialog" title="Well Done">
  <img src="/img/Star'.$_SESSION["userMID"].'.png" alt="Star Level" />
</div>';
            }

          ?>

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
