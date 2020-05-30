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
                        <li><a href="#">The Team</a>

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

			<!-- this section wraps the team members as a container-->

<section class="cf team-container">

    <!-- member-->
    <div class="team-member">
      <img class="team-photo" src="/photo/moh.jpg">
      <h3>Moha Mohajer</h3>
      <span>Application Developer</span>

    </div>


    <!-- member-->
    <div class="team-member">
    <img class="team-photo" src="/photo/pan.png">
      <h3 id= "cntr">Panayiotou Panayiotis</h3>
      <span>Material Founder</span>

    </div>


    <!-- member-->
    <div class="team-member">
    <img class="team-photo" src="/photo/alan.jpg">
      <h3>Allan O Okiror</h3>
      <span>Pedagogy Validator</span>

    </div>



    <!-- member-->
    <div class="team-member">
    <img class="team-photo" src="/photo/ilias.jpg">
      <h3>Ilias Platis</h3>
      <span>Tester</span>

    </div>


    <!-- member-->
    <div class="team-member">
    <img class="team-photo" src="/photo/kotsios.jpg">
      <h3>Konstantinos Papa</h3>
      <span>Researcher</span>

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
