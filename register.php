<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home Page</title>
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
          <p class="nav-text">Custom menu text</p>
          <div class="top-nav s-12 l-5">
            <ul class="right top-ul chevron">
              <li><a href="index.php">Home</a>
              </li>
			   <li><a href="#">The Team</a></li>

            </ul>
          </div>
          <ul class="s-12 l-2">
            <li class="logo hide-s hide-m">
             <a href="#"><strong>{A}lgo</strong></a>
            </li>
          </ul>
          <div class="top-nav s-12 l-5">
            <ul class="top-ul chevron">

              <li>

                <li><a href="index.php#info">About Us</a>
                  <li><a href="contact.php">Contact</a>
                  </li>

                </ul>
              </div>
            </div>
          </div>
          <div class="form2">
            <div class="form3">

              <form name="signupform" method="post" action="InsertUser.php" >
                <p>
                  <input id="other"   name="FirstName" type="text" maxlength="20" placeholder="First name" required>
                </p>
                <p>
                  <input id="other"   name="SurName" type="text" maxlength="20" placeholder="Surname" required>
                </p>
                <p>
                  <select id="other"  pattern=".{0}|.{6,}" name="UserType">
                    <option value="Student">Student</option>
                    <option value="Teacher">Teacher</option>
                    <option value="Parent">Parent</option>
                  </select>
                </p>
                <p> <input id="other"   name="SchoolName" type="text" maxlength="20" placeholder="School Name" required>
                </p>
                <input id ="email" type="email" name="email" placeholder="Email" maxlength="30" value="" required>
              </p>
              <p>
              <input id="username" pattern=".{0}|.{6,}"   required title="Usename needs to be at least 6 characters long"type="text"  name="user"  maxlength="10" placeholder="Username" value="" required>
              </p>
              <p>
                <input id ="password" pattern=".{0}|.{6,}"   required title="Password needs to be at least 6 characters long" id = "password" type="password" name="password"  placeholder="Password" maxlength="15" value="" onkeyup="checkPass(); return false;" required>
              </p>
              <p>
                <input  id = "cpassword" type="password" name="cpassword"  placeholder="Confirm Password" maxlength="15" value="" onkeyup="checkPass(); return false;" required>
              </p>
              <input type='hidden' name="DateandTime" value="<?php
              date_default_timezone_set("Europe/Nicosia");
              $dateAndTime= date('l, F j Y h:i');
              echo $dateAndTime;
              ?>">
              <p>
                <input id = "button" type="submit" onclick="myFunction()" name="Submit" value=" Sign Up">
              </p>
              <h7>Already have an account?</h7><a id="reg" href="index.php?reCame=true"> Login</a>
            </form>
          </div>
        </div>
      </nav>
    </header>

    <!-- FOOTER -->

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
    <!-- moh script -->
    <script>
    function checkPass()
    {
      //Store the password field objects into variables ...
      var password = document.getElementById('password');
      var cpassword = document.getElementById('cpassword');
      //Store the Confimation Message Object ...
      var message = document.getElementById('confirmMessage');
      //Set the colors we will be using ...
      var goodColor = "#66cc66";
      var badColor = "#ff6666";
      //Compare the values in the password field
      //and the confirmation field
      if(password.value == cpassword.value){
        //The passwords match.
        //Set the color to the good color and inform
        //the user that they have entered the correct password
        cpassword.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
        document.getElementById("Submit").disabled = false;
      }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        cpassword.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
        document.getElementById("Submit").disabled = true;
      }
    }
    </script>
  </body>
  </html>
