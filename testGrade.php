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
  <title>Test grade</title>
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
       $userID=$_SESSION["userID"];
       $points=0;
       $correct=0;
       include("dblogin.php");
       echo '<form action="testGrade.php" method="post" id="test">';

       $sql    = "SELECT * FROM test ";//select table and sort database
       $result =$_SESSION["mysqli"]->query($sql);
       while ($row = $result->fetch_array(MYSQL_ASSOC)) {
         echo '<div id="border">';
         echo '<h5>';
         echo $row["id"];
         echo ". ";
         echo $row["Question"].'</h5>';


         //answer sheet
         echo '<p class="answer">';


         $answer=$_POST["aq".$row["id"]];

         if($row["QuestionType"]=="MCQ"){

           echo '<br><input type="radio" name="aq';
           echo $row["id"];
           echo '" value="a" id="q';
           echo $row["id"];
           echo 'a"';
           if($answer=="a"){echo "checked";}
           else {echo "disabled";}
           echo '><label for="q';
           echo $row["id"];
           echo 'a">a.'.$row["Aa"].'</label>  ';

           echo '<br><input type="radio" name="aq';
           echo $row["id"];
           echo '" value="b" id="q';
           echo $row["id"];
           echo 'b"';
           if($answer=="b"){echo "checked";}
           else {echo "disabled";}
           echo '><label for="q';
           echo $row["id"];
           echo 'b">b.'.$row["Ab"].'</label>  ';

           echo '<br><input type="radio" name="aq';
           echo $row["id"];
           echo '" value="c" id="q';
           echo $row["id"];
           echo 'c"';
           if($answer=="c"){echo "checked";}
           else {echo "disabled";}
           echo '><label for="q';
           echo $row["id"];
           echo 'c">c.'.$row["Ac"].'</label>  ';

           echo '<br><input type="radio" name="aq';
           echo $row["id"];
           echo '" value="d" id="q';
           echo $row["id"];
           echo 'd"';
           if($answer=="d"){echo "checked";}
           else {echo "disabled";}
           echo '><label for="q';
           echo $row["id"];
           echo 'd">d.'.$row["Ad"].'</label>  ';

         }
         else if($row["QuestionType"]=="TF"){

           echo '<br><input type="radio" name="aq';
           echo $row["id"];
           echo '" value="a" id="q';
           echo $row["id"];
           echo 'a"';
           if($answer=="a"){echo "checked";}
           else {echo "disabled";}
           echo '><label for="q';
           echo $row["id"];
           echo 'a">True</label>  ';

           echo '<br><input type="radio" name="aq';
           echo $row["id"];
           echo '" value="b" id="q';
           echo $row["id"];
           echo 'b"';
           if($answer=="b"){echo "checked";}
           else {echo "disabled";}
           echo '><label for="q';
           echo $row["id"];
           echo 'b">False</label>  ';
}

         else{

           echo '<input type="text" name="aq';
           echo $row["id"];
           echo '" value="';
           echo $answer;
           echo '" id="q';
           echo $row["id"];
           echo 'a" disabled>';
         }

         if($answer==$row["CorrectAnswer"]){
           echo  '<font color="green">  Correct </font> ';
           $points+=$row["Points"];
           $correct+=1;

         }
         else {
           echo  '<font color="red">  Incorrect </font> ';
         }
         echo '</div>';

       }

        ?>
      </div>
      <div id = "rightBox">
        <div id = "rightBox3">
          <?php
          //result
          include("Inserttestresult.php");

          echo "Total Points: ";
          echo $points;
          echo '<br>';
          echo "Total correct answer: ";
          echo $correct;


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
