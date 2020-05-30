<?php
session_start();
// allart to say wellcom to the useers
// just when for ferst time user come
if (empty($_GET['reCame'])) {
  echo '<script language="javascript">';
  echo 'alert("Welcome to the Algo E-learnig Services")';
  echo '</script>';
}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Home</title>
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

<!-- facebook --><div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=111166262762527";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


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
            <li><a id="hm"  href="index.php?reCame=index">Home</a>
            </li>
            <li><a href="team.php">The Team</a></li>

            </div>
            <ul class="s-12 l-2">
              <li class="logo hide-s hide-m">
                <a href="#"><strong>{A}lgo</strong></a>
              </li>
            </ul>
            <div class="top-nav s-12 l-5">
              <ul class="top-ul chevron">



                <li><a href="#info">About</a>
                </li>
                <li><a href="contact.php">Contact</a>
                </li>
              </ul>
            </div>

          </ul>
        </div>
      </div>
      <div class="form1">
        <div class="form">
          <p id="formLogo"> {A}</p>

          <?php


          if(isset ($_SESSION["userID"])){

            echo'<form name="materialList" method="post" action= "material.php">
            <input id="button" type="submit" name="Submit" value= "Continue &gt;&gt; ">
            </form>';
            echo '<form name="loginform" method="post" action="logoutaction.php" >
            <p>
            <lable id ="name" >  '.$_SESSION["FirstName"].'</lable>
            <lable id ="name" >  '.$_SESSION["SurName"].'</lable>
            </p>
            <p>
            <lable id ="name" >User ID:  '.$_SESSION["userID"].'</lable>
            </p>';
            if($_SESSION["Test"]==0){
            echo '<p><lable id ="name" >Test:   Unfinished</lable></p>';
            }
            else{
            echo '<p><lable id ="name" >Test:   '.$_SESSION["Mark"].' %</lable></p>';
            }
            if($_SESSION["Mark"]<=40){ echo '<img src="/img/M0.png" alt="Medal Level" />';}
            else if($_SESSION["Mark"]<=60){echo'<img src="/img/M1.png" alt="Medal Level" />';}
            else if($_SESSION["Mark"]<=80){echo'<img src="/img/M2.png" alt="Medal Level" />';}
            else if($_SESSION["Mark"]>=81){echo'<img src="/img/M3.png" alt="Medal Level" />';}

            echo' <p>
            <lable id ="famlily" >Register in:  '.$_SESSION["DateandTime"].'</lable>
            </p>
            <p><input id="button" type="submit" name="Submit" value=" Logout">
            </p>
            </form>';
          }
          else {
            echo '<form name="loginform" method="post" action="checklogin.php" >
            <p>
            <input id ="username" type="text"  name="user" size="20" maxlength="20" placeholder="Username" value="" required>
            </p>
            <p>
            <input id ="password" type="password" name="password" size="20" placeholder="Password" maxlength="15" value="" required>
            </p>
            <p><input id="button" type="submit" name="Submit" value=" Login">
            <p><div class="fb-login-button" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="false"></div>
            </p>
            </p>
            <h7>Dont have an account? </h7><a id="reg" href="register.php">Register</a>
            </form>';

          }
          ?>

        </div>
      </div>
    </nav>
  </header>
  <section>
    <!-- CAROUSEL -->

    <figure>
      <img src="first.jpg" >
      <p id="imgText">Welcome to {A}LGO E-Learning Website</p><br>
      <p id="imgText2">Our goal is to teach and prepare students that <br> are currently
        studying GCSE Computer Science, <br>on the subject  of the fundamental of algorithms.<br>  If you are one of them
        come and join our courses!</p>
      </figure>

      <div id="info">

        <h2> Learning Outcomes</h2><br>
        <div id="boa">
          <h4>Basics of Algorithms </h4>

          <p>Firstly you will learn about the basics of algorithms, how algorithms work and the step by step procedures they follow </p><br>
        </div>
        <div id="sea">
          <h4>Searching Algorithms </h4><br>

          <p> Next, you will learn about searching algorithms, some basic information about searching algorithms in general and then in
            depth explanation of two of the most known searching algorithms, linear and binary search</p><br>
          </div>
          <div id="soa">
            <h4>Sorting Algorithms</h4>

            <p>Last but not least, you will learn about sorting algorithms, their use in real life problems and the solutions they provide,
              after a simple explanation of sorting algorithms in general you will learn how bubble and merge sort algorithms work </p>
            </div>

          </div>
        </section>

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
