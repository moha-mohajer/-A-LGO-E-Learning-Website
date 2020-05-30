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
  <title>Test Edit</title>
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
                      echo '<li><a href="useredit.php?">Edit the Users</a>
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
   echo '<form name="edittest" method="post" action= "testedit.php">
   Enter the Question number
   <p> <input type="number" name="QID" value="1" >
   <input id="button" type="submit" value= "Submit">
   <input id="button" type="submit" name="action" value= "All">
   <input id="button" type="submit" name="Add" value= "New"></p>
   </form>';
   echo '</div> ';

   echo '<div id = "rightBox4">';

   include("testAll.php");

   echo '</div> ';
   echo '</div> ';
   echo '<div id = "leftBox"> ';
    echo '<h3>Test Questions:</h3><br>';
   if(((isset($_POST["QID"]))||(isset($_POST["action"])))&&(empty($_POST["Add"]))){
     if(isset($_POST["QID"]))
     {
       $QID=$_POST["QID"];
       $sql    = "SELECT * FROM test WHERE id=$QID";
       $result =$_SESSION["mysqli"]->query($sql);
     }
     if(isset($_POST["action"]))
     {
       $sql    = "SELECT * FROM test";
       $result =$_SESSION["mysqli"]->query($sql);
     }

     while ($row = $result->fetch_array(MYSQL_ASSOC)) {
       echo '<div id = "border">';
       echo '<form name="edittest" method="post" action= "edittest.php">';
       echo '<p>';
       echo '<input type="hidden" name="id" value='.$row["id"].'>';
       echo '<h5>';
       echo ' question id: ';
       echo '</h5>';
       echo '<input type="text" name="id" id="other" value='.$row["id"].' disabled>';
       echo '<h5>';
       echo ' Question: ';
       echo '</h5>';

       echo '<textarea name="Question" id="big"  rows="5"required>'.$row["Question"].'</textarea>';

       echo '<h5>';
       echo ' Question type: ';
       echo '</h5>';

       echo '<select id="other" name="QuestionType">
       <option value="MCQ">Multiple choice questions</option>
       <option value="SA">Short Answers</option>
       <option value="TF">True, False</option>
       <option value='.$row["QuestionType"].' selected>'.$row["QuestionType"].'</option>
       </select>';

       echo '<h5>';
       echo ' Answer a ';
       echo '</h5>';

echo '<textarea  id="big"  name="Aa"" rows="2" >'.$row["Aa"].'</textarea>';

       echo '<h5>';
       echo ' Answer b ';
       echo '</h5>';
echo '<textarea  id="big"  name="Ab"" rows="2" >'.$row["Ab"].'</textarea>';

       echo '<h5>';
       echo ' Answer c ';
       echo '</h5>';
echo '<textarea  id="big"  name="Ac"" rows="2" >'.$row["Ac"].'</textarea>';

       echo '<h5>';
       echo ' Answer d ';
       echo '</h5>';
echo '<textarea  id="big"  name="Ad"" rows="2" >'.$row["Ad"].'</textarea>';

       echo '<h5>';
       echo ' Correct answer ';
       echo '</h5>';
echo '<textarea  id="big"  name="CorrectAnswer"" rows="2" required>'.$row["CorrectAnswer"].'</textarea>';


       echo '<h5>';
       echo ' Point: ';
       echo '</h5>';

       echo '<input type="number"  name="Points" required value='.$row["Points"].'>';
       echo '</p>';
         echo '</div>';
         echo '<p><input type="submit" id="buttondelete" onclick="return checkDelete()" name="action" value= "Delete">';
         echo '<input type="submit" id="buttonupdate" onclick="return checkDelete()" name="action" value= "Update"></p></form>';

     }
   }
   if(isset($_POST["Add"]))
   {
     echo '<div id = "border">';
     echo '<form name="addtest"  method="post" action= "addtest.php">';
     echo '<p>';

     echo '<textarea name="Question" id="big" placeholder="Question..." rows="5" required></textarea>';

     echo '<h5>';
     echo ' Question type: ';
     echo '</h5>';

     echo '<select id="other" name="QuestionType">
     <option value="MCQ">Multiple choice questions</option>
     <option value="SA" selected >Short Answers</option>
     <option value="TF">True, False</option>
     </select>';
echo '<br>';
     echo '<textarea  id="big"  placeholder=" Answer of a" name="Aa"" rows="2" ></textarea>';
     echo '<br>';
     echo '<textarea  id="big"  placeholder=" Answer of b" name="Ab"" rows="2" ></textarea>';
     echo '<br>';
     echo '<textarea  id="big"  placeholder=" Answer of c" name="Ac"" rows="2" ></textarea>';
     echo '<br>';
     echo '<textarea  id="big"  placeholder=" Answer of d" name="Ad"" rows="2" ></textarea>';
     echo '<br>';

     echo '<textarea  id="big"  placeholder=" Correct answer" name="CorrectAnswer"" rows="2" required></textarea>';

     echo '<h5>';
     echo ' Point: ';
     echo '</h5>';

     echo '<input type="number" placeholder="Point ID"  name="Points" required>';
     echo '</p>';
       echo '</div>';
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
