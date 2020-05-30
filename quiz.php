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
  <title>Quiz</title>
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
      <div id="justone">
        <?php
        $mid=$_SESSION["MID"];

        include("dblogin.php");
        echo '<form action="quizGrade.php" method="post" id="quiz">';
        echo '<input type="hidden" name="materialId" value="';
        echo $mid;
        echo '">';
        $sql    = "SELECT * FROM quiz WHERE MaterialID =".$mid;
        $result =$_SESSION["mysqli"]->query($sql);
        while ($row = $result->fetch_array(MYSQL_ASSOC)) {
echo '<div id="border">';
          //question
          echo '<h5>';
          echo $row["QN"];
          echo ". ";
          echo $row["Question"].'</h5>';
          if($row["QuestionType"]=="MCQ"){

            echo '<br><input type="radio" name="aq';
            echo $row["QN"];
            echo '" value="a" QN="q';
            echo $row["QN"];
            echo 'a"required><label for="q';
            echo $row["QN"];
            echo 'a"> a. '.$row["Aa"].'</label>  ';

            echo '<br><input type="radio" name="aq';
            echo $row["QN"];
            echo '" value="b" QN="q';
            echo $row["QN"];
            echo 'b"><label for="q';
            echo $row["QN"];
            echo 'b"> b. '.$row["Ab"].'</label>  ';

            echo '<br><input type="radio" name="aq';
            echo $row["QN"];
            echo '" value="c" QN="q';
            echo $row["QN"];
            echo 'c"><label for="q';
            echo $row["QN"];
            echo 'c"> c. '.$row["Ac"].'</label>  ';

            echo '<br><input type="radio" name="aq';
            echo $row["QN"];
            echo '" value="d" QN="q';
            echo $row["QN"];
            echo 'd"><label for="q';
            echo $row["QN"];
            echo 'd"> d. '.$row["Ad"].'</label>  ';
          }

           else if($row["QuestionType"]=="TF"){

            echo '<br><input type="radio" name="aq';
            echo $row["QN"];
            echo '" value="a" QN="q';
            echo $row["QN"];
            echo 'a"required><label for="q';
            echo $row["QN"];
            echo 'a"> True</label>  ';

            echo '<br><input type="radio" name="aq';
            echo $row["QN"];
            echo '" value="b" QN="q';
            echo $row["QN"];
            echo 'b"><label for="q';
            echo $row["QN"];
            echo 'b"> False</label>  ';

            }

          else{
            echo '<input type="text" name="aq';
            echo $row["QN"];
            echo '" value="" QN="q';
            echo $row["QN"];
            echo 'a"required>';
          }
          echo '</div>';
        }
        echo '<h5><label for="Strategies">Please explain your strategy of thinking:</label></h5>';
        echo '<textarea name="Strategies" id="big" rows="3" ></textarea>';

        echo '<br><br><input id="button" onclick="return checkDelete()" type="submit" value="Submit the quiz" />
        </form>';
          ?>
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
