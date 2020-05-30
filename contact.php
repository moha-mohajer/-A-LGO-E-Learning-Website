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
                  <p class="nav-text"><strong>Menu</strong></p>
                  <div class="top-nav s-12 l-5">
                     <ul class="right top-ul chevron">
                        <li><a href="index.php?reCame=index">Home</a>
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



                        <li><a href="index.php?reCame=index#info">About</a>
                        </li>
						<li><a id ="contactl" href="contact.php">Contact</a>
                        </li>
                     </ul>
                  </div>

				   </ul>
               </div>
            </div>
			 </nav>
      </header>
			<div class="form4">
  <div class="form5">
<form name="contact" method="post" action="insertscript.php" >

<p>
<input type="text" id="username" name="FirstName" placeholder="Name..." maxlength="15" value="" required>
<input type="text" id="username" name="SurName" placeholder="Last Name..." maxlength="15" value="" required>
<input id ="email" type="email" name="email" placeholder="Email..." maxlength="30" value="" required>

</p>
<textarea name="textarea" id="txtarea" placeholder="How can we help you..." rows="10" cols="50"></textarea>
<p><input id = "button" type="submit" value= "Submit" onclick="myFunction()" >
</p>
</form>
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
