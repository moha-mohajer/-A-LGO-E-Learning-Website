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
  <title>Help</title>
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


	 <div id ="helpbox">
	 <h3>Here you are going to learn how to use the application</h3>
	 <br>
	 <div id ="left">
	 <div id ="border">
	 <h4>Step 1</h4>
	 <h5>In order to unlock all the materials you have to complete the quizzes.<br>
	 This is the first unlocked subject, click the button to proceed.</h5>
	 <input id="button" type="submit"  value= "Basics of Algorithms">
	 </div>
	 </div>

	  <div id ="right">
	  <div id ="border">
	  <h4>Step 2</h4>
	 <h5>As you can see the 'Next' and 'Previous' buttons are locked, in order to unlock them
	  you have to complete the quiz. After you read the explanation and watch/play the
	  activity, click  on the 'Quiz' button to start the quiz.</h5><br>
	  <input type="submit" id="previousBtn"  disabled value="&lt;&lt;Previous">
	  <input id="quizBtn" type="submit"  value= "Quiz">
	  <input type="submit" id="nextBtn"   value= "Next &gt;&gt;" disabled>
	  </div>
	  </div>

	   <div id ="left">
	   <div id ="border">
	  <h4>Step 3</h4>
	 <h5>There are three types of answers in the quizzes, true/false,<br>  multiple-choice and short answer (one word).
		In order to proceed to the next subject you have to correctly answer all three questions of the quiz. When you finish
		answering click 'Submit the quiz' button to see your score.
	 </h5><br>
	<input id="button" type="submit" value="Submit the quiz" />
	  </div>
	  </div>

	   <div id ="right">
	    <div id ="border">
	  <h4>Step 4</h4>
	 <h5>When you successfully finish all the quizzes the final test will be unlocked.
	 The final test contains 20 questions  from all the <br> material you have covered before.
	 Click on the 'Final Test' button to begin the test. Be careful with your answers becuase
	 the test can be only completed once. Finish the test and become an algorith expert!
	 </h5>
	 <h3><input  type="submit" id="button" name="Submit" value= "Final Test"/></h3>
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
