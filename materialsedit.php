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
  <title>Material Edit</title>
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
      <?php
      include("dblogin.php");


      echo '<div id = "rightBox"> ';
      echo '<div id = "rightBox2">';
      echo '<form name="editmaterial" method="post" action= "materialsedit.php">
      Enter the material id
      <p> <input type="number" name="MID" value="1" >
      <input id="button" type="submit"  value= "Submit">
      <input id="button" type="submit" name="action" value= "All">
      <input id="button" type="submit" name="Add" value= "New"></p>
      </form>';

      echo '</div> ';

      echo '<div id = "rightBox4">';

      include("materialAll.php");

      echo '</div> ';
      echo '</div> ';


      echo  '<div id = "leftBox">';
       echo '<h3>Materials:</h3><br>';

      if(((isset($_POST["MID"]))||(isset($_POST["action"])))&&(empty($_POST["Add"]))){
        if(isset($_POST["MID"]))
        {
          $MID=$_POST["MID"];
          $sql    = "SELECT * FROM material WHERE id=$MID";
          $result =$_SESSION["mysqli"]->query($sql);
        }
        if(isset($_POST["action"]))
        {
          $sql    = "SELECT * FROM material";
          $result =$_SESSION["mysqli"]->query($sql);
        }

        while ($row = $result->fetch_array(MYSQL_ASSOC)) {
          echo '<div id = "border">';

          echo '<form name="editmaterial" method="post" action= "editmaterial.php">';
          echo '<p>';
          echo '<input type="hidden" name="id" value='.$row["id"].'>';
          echo '<h5>';
          echo 'id: ';
          echo '</h5>';
          echo '<input type="text" name="id" value='.$row["id"].' disabled>';
          echo '<h5>';
          echo ' Subject: ';
          echo '</h5>';

          echo '<textarea name="Subject" id="big" rows="2" required>'.$row["Subject"].'</textarea>';
          echo '<h5>';
          echo ' Title: ';
          echo '</h5>';

          echo '<textarea name="Title" id="big" rows="2" required>'.$row["Title"].'</textarea>';
          echo '<h5>';
          echo ' Material: ';
          echo '</h5>';

          echo '<textarea  name="Material" id="big" rows="10" required>'.$row["Material"].'</textarea>';

          echo '<h5>';
          echo ' For more information source: ';
          echo '</h5>';

          echo '<textarea name="MoreInfo" id="big" rows="2" >'.$row["MoreInfo"].'</textarea>';

          echo '<h5>';
          echo ' Activity: ';
          echo '</h5>';

          echo '<select name="Activiti">
          <option value="Animation">Animation</option>
          <option value="Game">Game</option>
          <option value="Puzzle">Puzzle</option>
          <option value="Video">Video</option>
          <option value='.$row["Activiti"].' selected>'.$row["Activiti"].'</option>
          </select>';

          echo '<h5>';
          echo ' Activity Source ';
          echo '</h5>';

          echo '<textarea name="ActivitiSrc" id="big" rows="2" required>'.$row["ActivitiSrc"].'</textarea>';
          echo '</p>';
          echo '</div>';
          echo '<p><input type="submit" id="buttondelete" onclick="return checkDelete()" name="action" value= "Delete">';
          echo '<input type="submit" id="buttonupdate" onclick="return checkDelete()" name="action" value= "Update"></p></form>';

        }
      }
      if(isset($_POST["Add"]))
      {
        echo '<div id = "border">';
        echo '<form name="addmaterial" method="post" action= "addmaterial.php">';
        echo '<p>';

        echo '<textarea name="Subject" placeholder="Subject..." id="big" rows="2"required></textarea>';

        echo '<textarea name="Title" id="big" placeholder="Title.." rows="2"required></textarea>';

        echo '<textarea name="Material" placeholder="Material..." id="big" rows="10"required></textarea>';

        echo '<textarea name="MoreInfo" id="big" placeholder="Website for more information..." rows="2"></textarea>';

        echo '<h5>';
        echo '  Activity type: ';
        echo '</h5>';
        echo '<select id="other" name="Activiti">
        <option value="Animation">Animation</option>
        <option value="Game">Game</option>
        <option value="Puzzle">Puzzle</option>
        <option value="Video">Video</option>
        </select>';


        echo '<textarea name="ActivitiSrc" id="big" placeholder="Activity link Source... " rows="2"required></textarea>';
        echo '</p>';
        echo '</div>';
        echo '<input id="button" type="submit" value= "Add it!"></p></form>';

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
